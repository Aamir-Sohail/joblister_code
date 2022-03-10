<?php

namespace App\Models;


use CodeIgniter\Model;

class GalleryModel extends Model
{
    protected $primaryKey = "id";
    protected $table = "caetgory";
    protected $DBGroup = "default";
    protected $allowedFields = ['jobsname'];
    protected $useTimestamps = false;
    protected $validationRules = [
        'jobsname'     => 'required',

    ];
}
