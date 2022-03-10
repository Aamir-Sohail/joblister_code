<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Jobs extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'         => ['type' =>  'INT', 'constraint' =>11 ,'auto_increment'=> true, 'unsinged'=>true,], 
            'category_id'       => ['type' => 'varchar', 'constraint' => 31],     
            'companyname'      => ['type' => 'varchar', 'constraint' => 63],
            'job_title'   => ['type' => 'varchar', 'constraint' => 255],
            'description'   => ['type' => 'varchar', 'constraint' => 255],
            'salary'   => ['type' => 'INT', 'constraint' => 255],
            'location'   => ['type' => 'varchar', 'constraint' => 255],
            'contact_user'   => ['type' => 'varchar', 'constraint' => 255],
            'conatact_email'   => ['type' => 'varchar', 'constraint' => 255],
            'created_at' => ['type' => 'datetime', 'NULL' => false],
        
        ]);
        $this->forge->addPrimaryKey('id',true);
      
        $this->forge->createTable('jobs',true);
    }

    public function down()
    {
      $this->forge->dropTable('jobs');
    }
}
