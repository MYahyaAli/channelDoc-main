<?php

namespace App\Controllers;

class Login extends BaseController
{

    public function index()
    {
        return view('login');  
    }
  
    public function create()
    {
        //create the login Logic similar to old code 
    }
}