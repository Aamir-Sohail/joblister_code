<?php

namespace App\Models;


use CodeIgniter\Model;
use Prophecy\Doubler\Generator\Node\ReturnTypeNode;

class JobsModel extends Model
{
    protected $primaryKey = "id";
    protected $table = "jobs";
    protected $DBGroup = "default";
    protected $allowedFields = [
        'category_id', 'companyname', 'job_title','image', 'description',
        'salary', 'location', 'contact_user', 'contact_email', 'created_at'
    ];
    protected $useTimestamps = false;
    protected $validationRules = [
        'category_id' =>'required',
        'companyname' => 'required',
        'job_title' => 'required',
        
        'description' => 'required|min_length[3]',
        'salary' => 'required',
        'location' => 'required',
        'contact_user' => 'required',
        'contact_email' => 'required',
    ];
    protected $validationMessages = [];

    public function transBegin()
    {

        return $this->db->transBegin();
    } 


    public function transRollBack()
    {
        return $this->db->transRollback();
    }

    public function transCommit()
    {
        return $this->db->transCommit();
    }
}
