<?php

namespace App\Models;

use CodeIgniter\Model;

class CrudModel extends Model
{
    // Table
    protected $table = 'contact_details';
    // allowed fields to manage
    protected $allowedFields = ['firstname', 'middlename','lastname', 'gender', 'contact', 'email', 'address'];
}