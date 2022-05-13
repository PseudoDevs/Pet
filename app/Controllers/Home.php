<?php

namespace App\Controllers;

use App\Models\AddToCart;
use App\Models\User;
use App\Models\Products;
use App\Models\Adoption;
use App\Models\OrderProducts;

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

    public function profile() {
        $orderProducts = new OrderProducts();
        $user = new User();
        $data['user_infos'] = $user->where('id',session()->get('id'))->first();
        // SELECT * FROM `order_products` INNER JOIN products ON order_products.p_id = products.id WHERE order_products.u_id = '6'
        $data['order_lists'] = $orderProducts->select('*')->join('products','order_products.p_id = products.id')->where('order_products.u_id',session()->get('id'))->findAll();
       
        return view('profile',$data);
    }

    public function cart() {
        $addtoCart = new AddToCart();
        $data['addToCart_lists'] = $addtoCart->select('*')->join('products','o_add_to_cart.p_id = products.id')->where('o_add_to_cart.u_id',session()->get('id'))->findAll();
        return view('cart',$data);
    }

     // Start for Product Home Page 

    public function products() {
            $product = new Products();
            $pager = \Config\Services::pager();

            $products['home_products'] = $product->paginate(9);
            $products['pager'] = $product->pager;

            return view('products', $products);
    }

    // End for Product Home Page

    
    public function productDetails($id) {

        $product = new Products();

        $products = $product->find($id);


        echo json_encode($products);
    }

    public function services() {
        return view('services');
    }

    // Start for Adoption Home Page 

    public function adoption() {

        $adoptions = new Adoption();

        $pager = \Config\Services::pager();

        $adoption['home_adoptions'] = $adoptions->paginate(9);
        $adoption['pager'] = $adoptions->pager;

        return view('adoption', $adoption);
    }

    // End for Adoption Home Page 

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