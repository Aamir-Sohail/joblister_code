<?php

namespace App\Models;


use CodeIgniter\Model;

class JobsModel extends Model
{
    protected $primaryKey = "id";
    protected $table = "jobs";
    protected $DBGroup = "default";
    protected $allowedFields = [
        'category_id', 'companyname', 'job_title', 'description',
        'salary', 'location', 'contact_user', 'contact_email', 'created_at'
    ];
    protected $useTimestamps = false;
    // protected $validationRules = [
    //     'category_id',
    //     'companyname',
    //     'job_title',
    //     'description',
    //     'salary',
    //     'location',
    //     'contact_user',
    //     'contact_email',
    // ];
}
