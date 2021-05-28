<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UsersModel;

class Register extends Controller
{
    protected $helpers = ['url'];
    public function index()
    {
        if(!isset($_SESSION)) 
        { 
            session_start(); 
        } 
        if(isset($_SESSION['email'])){
            return redirect()->to('/dashboard');
        }
        else{
            echo view('templates/header');
            echo view('pages/signup');
        }
        
    }
    public function signup($email, $pwd, $btcAddr, $btcPri, $btcPub, $ethAddr, $ethPri, $ethPub)
    {
        // parent::__construct();
        $model = new UsersModel();
        $hashedpass= md5($pwd);
        $model->save([
            'email' => $email,
            'password'  => $hashedpass,
            'btc_address'  => $btcAddr,
            'btc_public' => $btcPub,
            'btc_private' => $btcPri,
            'eth_address' => $ethAddr,
            'eth_public' => $ethPub,
            'eth_private' => $ethPri,
            'status' => 1
        ]);
        if(!isset($_SESSION)) 
        { 
            session_start(); 
        } 
        $_SESSION["email"] = $email;
        $_SESSION["btcAddr"] = $btcAddr;
        $_SESSION["ethAddr"] = $ethAddr;
        // redirect('/dashboard');
        return redirect()->to('/dashboard');
        // echo $this->request->input('email');
    }
    public function logout()
    {
        if(!isset($_SESSION)) 
        { 
            session_start(); 
        } 
        session_destroy();
        return redirect()->to('/');
    }
}