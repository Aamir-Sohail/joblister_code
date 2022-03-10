<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Category extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'         => ['type' =>  'INT', 'constraint' =>11 ,'auto_increment'=> true, 'unsinged'=>true,], 
            'jobname'       => ['type' => 'varchar', 'constraint' => 31],     
            
            'created_at' => ['type' => 'timedata', 'null' => true],
        
        ]);
        $this->forge->addPrimaryKey('id',true);
      
        $this->forge->createTable('category',true);
    }

    public function down()
    {
        $this->forge->dropTable('category');
    }
}
