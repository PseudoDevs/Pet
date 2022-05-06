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

   
    public function authLogin() {
        $user = new User();
        $userAuth = $user->where('username', $this->request->getVar('signInEmail'))->first();

        if(!$userAuth) {
            return redirect()->to('/')->with('error', 'Account not Found!');
        } else {
            $userAuthPass = md5($this->request->getVar('signInPassword'));
            if($userAuthPass != $userAuth['password'] || $userAuth['username'] != $this->request->getVar('signInEmail')) {
                return redirect()->to('/')->with('error', 'Incorrect Username or Password!');
            } else {
                $userSessionAuth = array(
                    'id' => $userAuth['id'],
                    'name' => $userAuth['name'],
                    'username' => $userAuth['username'],
                    'role' => $userAuth['role'],
                    'status' => $userAuth['status'],
                    'logged_in' => true
                );
                session()->set($userSessionAuth);
                return redirect()->to('/dashboard');
            }
        }
    }

    public function authLogout() {
        session()->destroy();
        return redirect()->to('/')->with('success', 'Logout Successfully!');
    }

}
