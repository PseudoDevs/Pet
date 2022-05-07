<?php

namespace App\Controllers;

use App\Models\User;

class Home extends BaseController
{

    protected $helpers = ['form', 'url', 'text', 'date'];

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

        $email = $this->request->getVar('user-email');
        $password = $this->request->getVar('user-pass');

        $adminAuth = $user->where('username', $email)->orWhere('email', $email)->first();

        if (!$adminAuth) {
            return redirect()->to('/login')->with('error', 'Username / Email was not Found');
        } else {
            if ($adminAuth['password'] == md5($password)) {
                if ($adminAuth['role'] == 'Admin' && $adminAuth['status'] == 'Active') {
                    $adminSession = array(
                        'id' => $adminAuth['id'],
                        'fullname' => $adminAuth['fullname'],
                        'username' => $adminAuth['username'],
                        'email' => $adminAuth['email'],
                        'role' => $adminAuth['role'],
                        'status' => $adminAuth['status'],
                        'isLoggedIn' => true
                    );
                    session()->set($adminSession);
                    return redirect()->to('/admin');
                } else if ($adminAuth['role'] == 'User' && $adminAuth['status'] == 'Active') {
                    $adminSession = array(
                        'id' => $adminAuth['id'],
                        'fullname' => $adminAuth['fullname'],
                        'username' => $adminAuth['username'],
                        'email' => $adminAuth['email'],
                        'role' => $adminAuth['role'],
                        'status' => $adminAuth['status'],
                        'isLoggedIn' => true
                    );
                    session()->set($adminSession);
                    return redirect()->to('/user-dashboard');
                } else if($adminAuth['status'] == 'Inactive') {
                    return redirect()->to('/login')->with('error', '<center>Your Account is Inactive Please Contact the Administrator<center>');
                }
            } else {
                return redirect()->to('/login')->with('error', 'Username / Email / Password is Incorrect');
            }
        }
    }

    public function authRegister() {
        $user = new User();

        $fullname = $this->request->getVar('user-fullname');
        $username = $this->request->getVar('user-name');
        $email = $this->request->getVar('user-email');
        $password = $this->request->getVar('user-pass');
        $confirmPassword = $this->request->getVar('user-confirm-pass');

        $adminAuth = $user->where('username', $username)->orWhere('email', $email)->first();

        if (!$adminAuth) {
            if ($password == $confirmPassword) {
                $adminSession = array(
                    'fullname' => $fullname,
                    'username' => $username,
                    'password' => md5($confirmPassword),
                    'email' => $email,
                    'role' => 'User',
                    'status' => 'Active',
                );
                $user->save($adminSession);
                return redirect()->to('/login')->with('success', '<center>Registration Successful<center>');
            } else {
                return redirect()->to('/register')->with('error', '<center>Password and Confirm Password does not match<center>');
            }
        } else {
            return redirect()->to('/register')->with('error', '<center>Username or Email already exists<center>');
        }
    }

    public function authLogout() {
        session()->destroy();
        session()->setFlashdata('success', 'You have been logged out');
        return redirect()->to('/login')->with('success', 'Logout Successfully!');
    }

}
