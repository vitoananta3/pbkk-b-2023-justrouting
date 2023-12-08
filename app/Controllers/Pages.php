<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | JustRouting',
            'page' => 'home',
        ];

        return view('pages\home', $data);
    }
    
    public function about()
    {
        $data = [
            'title' => 'About | JustRouting',
            'page' => 'about',
        ];

        return view('pages\about', $data);
    }
    
    public function services()
    {
        $data = [
            'title' => 'Services | JustRouting',
            'page' => 'services',
        ];

        return view('pages\services', $data);
    }

    public function pricing()
    {
        $data = [
            'title' => 'Pricing | JustRouting',
            'page' => 'pricing',
        ];

        return view('pages\pricing', $data);
    }
    
    public function contact()
    {
        $data = [
            'title' => 'Contact | JustRouting',
            'page' => 'contact',
        ];

        return view('pages\contact', $data);
    }
}
