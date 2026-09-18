<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;
class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function about()
    {
        return view('about');
    }
    public function faq()
    {
        return view('faq');
    }
    public function contact_us()
    {
        return view('contact-us');
    }
    public function packages()
    {
        return view('packages');
    }
    public function ebook_publishing_packages()
    {
        return view('ebook-publishing-packages');
    }
    public function paperback_publishing_packages()
    {
        return view('paperback-publishing-packages');
    }
    public function services()
    {
        return view('services');
    }
    public function book_publisher_in_india()
    {
        return view('book-publisher-in-india');
    }
    public function ebook_publisher_in_india()
    {
        return view('ebook-publisher-in-india');
    }
    public function career()
    {
        return view('career');
    }
    public function book_editorial_services()
    {
        return view('book-editorial-services');
    }
    public function book_designing_services()
    {
        return view('book-designing-services');
    }
    public function book_marketing_services()
    {
        return view('book-marketing-services');
    }
    public function book_distribution_services()
    {
        return view('book-distribution-services');
    }
    public function author_support()
    {
        return view('author-support');
    }
    public function royalty_calculator()
    {
        return view('royalty-calculator');
    }
    // public function customize_package()
    // {
    //     return view('customize-package');
    // }
    public function terms_and_condition()
    {
        return view('terms-and-condition');
    }
    public function privacy_policy()
    {
        return view('privacy-policy');
    }
    public function legal_disclaimer()
    {
        return view('legal-disclaimer');
    }
    public function refund_and_cancellation_policy()
    {
        return view('refund-and-cancellation-policy');
    }
    public function print_on_demand_book_publishing()
    {
        return view('print-on-demand-book-publishing');
    }
    public function klf()
    {
        return view('klf');
    }
    public function book_stall()
    {
        return view('book-stall');
    }
    public function gallery()
    {
        return view('gallery');
    }
    public function sessions_klf()
    {
        return view('sessions-klf');
    }
    public function bfc_lounge()
    {
        return view('bfc-lounge');
    }
}
