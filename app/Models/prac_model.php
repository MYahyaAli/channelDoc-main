<?php

    namespace App\Models;

    class prac_model extends \CodeIgniter\Model

    {
        public function __construct()

        {

            parent::__construct();

        }
        protected $table = 'Practitioner'; // Give the table name



        protected $allowedFields=['id', 'firstname', 'lastname', 'phone', 'email', 'password', 'nic', 'doctorid', 'specialization', 'address', 'myfile'];

        protected $returnType = 'App\Entities\Practitioner';

    }



?>