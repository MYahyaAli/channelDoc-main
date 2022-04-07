<?php
    namespace App\Models;

    class patient_model extends \CodeIgniter\Model
    
    {
        public function __construct()
        {
            parent::__construct();
        }
        protected $table = 'Patient'; // Give the table name

        protected $allowedFields=['id', 'firstname', 'lastname', 'phone', 'email', 'password', 'nic', 'address'];

        protected $returnType = 'App\Entities\Patient';

    }
?>