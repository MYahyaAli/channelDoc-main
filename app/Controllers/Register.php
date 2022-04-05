<?php

namespace App\Controllers;

class Register extends BaseController
{

    public function pracIndex()
    {
        return view('Practitoner/register.php');  
    }

    public function patIndex()
    {
        return view('Patient/register.php');  
    }
  
    public function PracCreate()
    {
        
    }

    public function PatCreate()
    {
        
    }
}