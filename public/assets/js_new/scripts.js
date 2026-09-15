document.addEventListener("DOMContentLoaded", function () {
    const mobileDropdowns =
        document.querySelectorAll(".mobile-dropdown > a");
    mobileDropdowns.forEach(function (dropdown) {
        dropdown.addEventListener("click", function () {
            const parent =
                this.closest(".mobile-dropdown");
            document
                .querySelectorAll(".mobile-dropdown")
                .forEach(function (item) {
                    if (item !== parent) {
                        item.classList.remove("active");
                    }
                });
            parent.classList.toggle("active");
        });
    });
    const mobileLinks =
        document.querySelectorAll(
            ".mobile-menu li a:not(.mobile-dropdown > a)"
        );
    mobileLinks.forEach(function (link) {
        link.addEventListener("click", function () {
            const offcanvasElement =
                document.getElementById("mobileMenu");
            const offcanvas =
                bootstrap.Offcanvas.getInstance(
                    offcanvasElement
                );
            if (offcanvas) {
                offcanvas.hide();
            }
        });
    });
});


// counter 

const counterSection = document.querySelector("#counterSection");
const counters = document.querySelectorAll(".counter");
let counterStarted = false;

function startCounters() {
    if (counterStarted) {
        return;
    }
    counterStarted = true;
    counters.forEach(counter => {
        const target = parseFloat(counter.dataset.target);
        const isDecimal = counter.dataset.decimal === "true";
        let current = 0;

        const duration = 1800;
        const startTime = performance.now();

        function updateCounter(currentTime) {
            const elapsed = currentTime - startTime;
            const progress = Math.min(elapsed / duration, 1);

            const easeOut = 1 - Math.pow(1 - progress, 3);
            current = target * easeOut;
            if (isDecimal) {
                counter.textContent = current.toFixed(1);
            } else {
                counter.textContent = Math.floor(current);
            }
            if (progress < 1) {
                requestAnimationFrame(updateCounter);
            } else {
                counter.textContent = isDecimal ?
                    target.toFixed(1) :
                    target;
            }
        }
        requestAnimationFrame(updateCounter);
    });
}
const observer = new IntersectionObserver(
    function (entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                startCounters();
                observer.unobserve(counterSection);
            }
        });
    }, {
    threshold: 0.3
}
);
observer.observe(counterSection);


$(document).ready(function () {

    $('.store-slider').owlCarousel({
        loop: true,
        margin: 20,
        nav: true,
        dots: false,
        autoplay: true,
        autoplayTimeout: 2500,
        autoplayHoverPause: true,
        smartSpeed: 700,
        navText: [
            '<i class="fa-solid fa-arrow-left"></i>',
            '<i class="fa-solid fa-arrow-right"></i>'
        ],
        responsive: {
            0: {
                items: 2
            },
            576: {
                items: 3
            },
            768: {
                items: 4
            },
            992: {
                items: 5   
            },
            1200: {
                items: 6
            }
        }
    });
  
  
    $('.featured-authors-slider').owlCarousel({
        loop: true,
        margin: 30,
        nav: true,
        dots: false,
        autoplay: true,
        autoplayTimeout: 2500,
        autoplayHoverPause: true,
        smartSpeed: 700,
        navText: [
            '<i class="fa-solid fa-arrow-left"></i>',
            '<i class="fa-solid fa-arrow-right"></i>'
        ],
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 2
            },
            768: {
                items: 2
            },
            900:{
                items:3
            },
            1200: {
                items: 4
            }
        }
    });


    $('.authors-journey-stories').owlCarousel({
        loop: true,
        margin: 30,
        nav: false,
        dots: true,
        autoplay: true,
        autoplayTimeout: 2500,
        autoplayHoverPause: true,
        smartSpeed: 700,
        navText: [
            '<i class="fa-solid fa-arrow-left"></i>',
            '<i class="fa-solid fa-arrow-right"></i>'
        ],
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 1
            },
            768: {
                items: 1
            },
            900:{
                items: 1
            },
            1200: {
                items: 1
            }
        }
    });
});


// Package script

const bookTabs = document.querySelectorAll(".format-btn");
const tabPanels = document.querySelectorAll(".tab-panel");

bookTabs.forEach(tab => {

    tab.addEventListener("click", function () {
        const target = this.getAttribute("data-tab");
        bookTabs.forEach(item => {
            item.classList.remove("active");
        });
        tabPanels.forEach(panel => {
            panel.classList.remove("active");
        });
        this.classList.add("active");
        document
            .getElementById(target)
            .classList.add("active");
    });

});


const API_URL ="https://admin.bookstore.bfcpublications.com/api/get_products_home_page";
async function loadMostPopularBooks() {
    try {
        const response = await fetch(API_URL);
        if (!response.ok) {
            throw new Error("API request failed");
        }
        const result = await response.json();
        console.log(result);
        const books = result.data.most_popular;
        let html = "";
        books.forEach(book => {
            html += `
                <div class="item featurebook-card bg-none shadow-none p-0">
                        <a href="https://store.bfcpublications.com/${book.category}/${book.product_slug}">
                            <img class="w-100 featurebook-img" src="https://bookstoreassets.s3.ap-southeast-1.amazonaws.com/products/${book.image}" alt="Feature Book">
                            <div class="d-none">
                                <h3>${book.book_title}</h3>
                                <div class="d-flex justify-content-between">
                                    <div class="price">₹${book.mrp}</div>
                                    <div class="writer-name">By : ${book.author_name}</div>
                                </div>
                                <div class="feature-review d-flex">
                                <div> <i class="fa-solid fa-star"></i></div>
                                    <div> ${book.show_rating}</div>
                                </div>
                            </div>
                        </a>
                </div>
            `;
        });
        $("#mostPopularSlider").html(html);
        $("#mostPopularSlider").owlCarousel({
            loop: true,
            margin: 20,
            nav: true,
            dots: false,
            autoplay: false,
            autoplayTimeout: 2500,
            autoplayHoverPause: true,
            smartSpeed: 700,
            navText: [
                '<i class="fa-solid fa-arrow-left"></i>',
                '<i class="fa-solid fa-arrow-right"></i>'
            ],
            responsive: {
                0: {
                    items: 2
                },
                576: {
                    items: 3
                },
                768: {
                    items: 4
                },
                900: {
                    items: 4
                },
                1200: {
                    items: 5
                }
            }
        });
    } catch (error) {
        console.error(
            "Most Popular Books Error:",
            error
        );
    }
}
$(document).ready(function () {
    loadMostPopularBooks();
});  


AOS.init();