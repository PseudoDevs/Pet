<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AddToCart;
use App\Models\OrderProducts;
use App\Models\Products;
use App\Models\User;

class AdditionalController extends BaseController
{
    public function index()
    {
        //
    }
    public function addToCart()
    {
        $addTocart = new AddToCart();
        // $products = new Products();
        // $infoProducts = $products->where('id', $_POST['p_id'])->first();

        $data = array(
            'p_id' => $_POST['p_id'],
            'atc_quantity' => $_POST['o_quantity'],
            'u_id' => session()->get('id'),
            'atc_status' => 1
        );
        $addTocart->insert($data);
        return redirect()->to('/home-cart');
    }
    public function updateProfile()
    {

        $user = new User();
        $userInfo = $user->where('id', session()->get('id'))->first();

        $user->set('email', $_POST['email']);
        $user->set('fullname', $_POST['fullname']);
        $user->where('id', session()->get('id'));
        $user->update();

        if ($_POST['new-pwd'] != null && $_POST['confirm-pwd'] != null) {
            if ($_POST['new-pwd'] == $_POST['confirm-pwd']) {
                // Success
                $user->set('password', md5($_POST['new-pwd']));
                $user->where('id', session()->get('id'));
                $user->update();
            } else {
                // Wrong new-pwd and confirm-pwd
                return redirect()->to('/home-profile')->with('error', '<center>Error! New password and confirm<center>');
            }
        }
        $adminSession = array(
            'id' => $userInfo['id'],
            'fullname' => $userInfo['fullname'],
            'username' => $userInfo['username'],
            'email' => $userInfo['email'],
            'role' => $userInfo['role'],
            'status' => $userInfo['status']
        );
        session()->set($adminSession);
        return redirect()->to('/home-profile')->with('success', '<center>Successfull<center>');
    }
    public function updateCart()
    {
        $addToCart = new AddToCart();


        if ($addToCart->updateBatch($_POST['data'], 'atc_id')) {
            echo 'success';
        } else {
            echo 'wrong';
        }
    }
}
