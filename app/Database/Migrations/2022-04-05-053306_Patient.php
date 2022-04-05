<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Patient extends Migration
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
            'address'=>[
                'type'=>'VARCHAR',
                'constraint'=>255
            ]
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('Patient');
    }

    public function down()
    {
        $this->forge->dropTable('Patient');
    }
}