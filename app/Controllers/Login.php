<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UsersModel;

class Login extends Controller
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
            echo view('pages/login');
        }
        
    }
    public function login()
    {
        if(!isset($_SESSION)) 
        { 
            session_start(); 
        } 
        // $session = session();
        $model = new UsersModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('pwd');
        $data = $model->where('email', $email)->first();
        if($data){
            
            $pass = $data['password'];
            if($pass== md5($password)){
                $_SESSION["email"] = $email;
                $_SESSION["btcAddr"] = $data['btc_address'];
                $_SESSION["ethAddr"] = $data['eth_address'];
                return redirect()->to('/dashboard');
            }
            else{
                // $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/login');
            }
        }
        else
        {
            // $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to('/login');
        }
    }

}