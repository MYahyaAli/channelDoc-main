<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Practitioner extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=>[
                'type'=>'INT',
                'constraint'=>5,
                'unsigned'=>true,
                'auto_increment'=>true
            ],
            'firstname'=>[
                'type'=>'VARCHAR',
                'constraint'=>255
            ],
            'lastname'=>[
                'type'=>'VARCHAR',
                'constraint'=>255
            ],
            'email'=>[
                'type'=>'VARCHAR',
                'constraint'=>255,
                'unique'=>true
            ],
            'password'=>[
                'type'=>'VARCHAR',
                'constraint'=>60
            ],
            'phone'=>[
                'type'=>'INT',
                'constraint'=>10
            ],
            'nic'=>[
                'type'=>'VARCHAR',
                'constraint'=>20,
                'unique'=>true                
            ],
            'doctorid'=>[
                'type'=>'VARCHAR',
                'constraint'=>20,
                'unique'=>true                
            ],
            'specialization'=>[
                'type'=>'VARCHAR',
                'constraint'=>255
            ],
            'address'=>[
                'type'=>'VARCHAR',
                'constraint'=>255
            ]
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('Practitioner');
    }

    public function down()
    {
        $this->forge->dropTable('Practitioner');
    }
}
