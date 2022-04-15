<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PractitionerProfile extends Migration
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
        'specification'=>[
            'type'=>'VARCHAR',
            'constraint'=>255
        ],
        'qualification'=>[
            'type'=>'VARCHAR',
            'constraint'=>255,
        ],
        'practitionerid'=>[
            'type'=>'VARCHAR',
            'constraint'=>5,
            'unique'=>true
        ],
        'fullname'=>[
            'type'=>'VARCHAR',
            'constraint'=>255,  
        ],
       
    ]);

    $this->forge->addPrimaryKey('id');
    $this->forge->createTable('PractitionerProfile');
}
    public function down()
    {
        $this->forge->dropTable('PractitionerProfile');
    }
}