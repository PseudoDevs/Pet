<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('index');
    }

    public function about() {
        return view('about');
    }

    public function products() {
        return view('products');
    }
    
    public function productDetails() {
        return view('product-details');
    }

    public function services() {
        return view('services');
    }

    public function adoption() {
        return view('adoption');
    }

    public function register() {
        return view('register');
    }

    public function login() {
        return view('login');
    }

}
