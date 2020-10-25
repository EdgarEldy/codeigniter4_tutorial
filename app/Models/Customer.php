<?php

namespace App\Models;

use CodeIgniter\Model;

class Customer extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'customers';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['first_name', 'last_name', 'email', 'tel', 'address'];

    protected $useTimestamps = false;

    protected $createdField = '';
    protected $updatedField = '';
    protected $deletedField = '';

    protected $validationRules = [
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required|is_unique[customers.email]',
        'tel' => 'required',
        'address' => 'required'
    ];

    protected $validationMessages = [
        'first_name' => [
            'required' => 'The first name field is required'
        ],
        'last_name' => [
            'required' => 'The last name is required'
        ],
        'email' => [
            'required' => 'The email is required',
            'is_unique' => 'This email exists. Choose another'
        ],
        'tel' => [
            'required' => 'The tel number is required'
        ],
        'address' => [
            'required' => 'The address is required'
        ],
    ];
    protected $skipValidation = false;
}