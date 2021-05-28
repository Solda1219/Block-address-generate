<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Pages extends Controller
{
    public function index()
    {
        return view('welcome_message');
        // echo view('templates/header');
        // echo view('pages/dashboard', $data);
    }


    public function view($page = 'dashboard')
    {
        $email= '';
        $pwd= '';
        $btcAddr= '';
        $ethAddr= '';
        $data['title'] = ucfirst($page); // Capitalize the first letter
        echo view('templates/header');
        echo view('pages/'.$page, $data);
    }
}