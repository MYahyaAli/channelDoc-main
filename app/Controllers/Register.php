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
        $formdata = $this->request->getPost(); // Gets data from the registration form's post method
        // $validation =  \Config\Services::validation(); // Validation library is loaded
            
            // get the data from the form
            $email = $this->request->getPost('email');
            $model = new \App\Models\prac_model;

            // If the validations are successful
            $users = new \App\Entities\Practitioner($this -> request ->getPost());
            $users -> password = password_hash($users->password, PASSWORD_DEFAULT); // Hashes the password

            // Inserts account registration information into the database
            $model->insert($users);
            
            $file =$this->request->getFile('myfile');
            if ($file->isValid()&& !$file->hasMoved()) {
                $file->move('./uploads/DoctorCertification',$file->getClientName());
            }

            return view('login');
    }

    public function PatCreate() 
    {
        $formdata = $this->request->getPost(); // Gets data from the registration form's post method
        // $validation =  \Config\Services::validation(); // Validation library is loaded
            
            // get the data from the form
            $email = $this->request->getPost('email');
            $model = new \App\Models\patient_model;

            // If the validations are successful
            $users = new \App\Entities\Patient($this -> request ->getPost());
            $users -> password = password_hash($users->password, PASSWORD_DEFAULT); // Hashes the password

            // Inserts account registration information into the database
            $model->insert($users);
            return view('Home');
    }
}