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
        // $model = new \App\Models\prac_model; // Gets the database for practitioners
        // $model = new \App\Models\patient_model; // Gets the database for patients

        // // Gets the email and password values from the form
		// $email = $this->request->getPost('email'); 
		// $password = $this->request->getPost('password');

        // $user = $model->where('email', $email) -> first();

        // // Checks if the user exists and if the relevant password matches with the specific user
		// if($user !== null && password_verify($password, $user->password)) 
		// {
        //      // If login was successful
	
		// 	// CREATING THE SESSION AND SAVING USER INFO INTO IT
		// 	$session = session(); // initialize the session

		// 	$session->set('UserID', $user -> id); 
		// 	$session->set('First Name', $user -> firstname); 
		// 	$session->set('Last Name', $user -> lastname); 
		// 	$session->set('Email', $user -> email); 
		// 	$session->set('Phone', $user -> phone); // sets the user type
		// 	$session->set('DoctorID', $user -> doctorid); 
		// 	$session->set('Specialization', $user -> specialization);
            
        //     return view('Home');
			
        // }
        // else {

		// 	// Display error if login failed
		// 	echo '<div class="alert2">
		// 	<strong> ERROR! </strong> Login was not successful! Please double check your entries, or User does not exist!
		// 	</div>';
			
		// 	return view("login");

		// }

		$modelPrac = new \App\Models\prac_model; // Gets the database for practitioners
		$modelPat = new \App\Models\patient_model; // Gets the database for patients

		 // Gets the email and password values from the form
		$email = $this->request->getPost('email'); 
		$password = $this->request->getPost('password');

        $user = $modelPrac->where('email', $email) -> first();
        $users = $modelPat->where('email', $email) -> first();
		//checcks if user exists and  if relavant password matches 
		if ($user !== null && password_verify($password, $user->password)) {
			// If login was successful
	
			// // CREATING THE SESSION AND SAVING USER INFO INTO IT
			$session = session(); // initialize the session

			$session->set('UserID', $user -> id); 
			$session->set('First Name', $user -> firstname); 
			$session->set('Last Name', $user -> lastname); 
			$session->set('Email', $user -> email); 
			$session->set('Phone', $user -> phone);
			$session->set('NIC', $user -> nic);
			$session->set('DoctorID', $user -> doctorid); 
			$session->set('Specialization', $user -> specialization);
            
            return view('Practitoner/prac_dashboard');
		}
		else if ($users !== null && password_verify($password, $user->password)) {
			// If login was successful
	
		// 	// CREATING THE SESSION AND SAVING USER INFO INTO IT
			$session = session(); // initialize the session
			
			$session->set('UserID', $users-> id); 
			$session->set('First Name', $users -> firstname); 
			$session->set('Last Name', $users -> lastname); 
			$session->set('Email', $users -> email); 
			$session->set('Phone', $users -> phone);
			$session->set('NIC', $users -> nic);
			$session->set('Address', $users -> address);
            
            return view('Home');
		}
		else {

			// 	// Display error if login failed
				echo '<div class="alert2">
				<strong> ERROR! </strong> Login was not successful! Please double check your entries, or User does not exist!
				</div>';
				
				return view("login");
	
			}


    }
}