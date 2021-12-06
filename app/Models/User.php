<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $useSoftDeletes = false;

    // Add validations
    protected $validationRules = [
        'profile_id' => 'required',
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required',
        'password' => 'required'
    ];
    protected $validationMessages = [
        'profile_id' => [
            'required' => 'The profile name is required'
        ],
        'first_name' => [
            'required' => 'The first name is required'
        ],
        'last_name' => [
            'required' => 'The last name is required'
        ],
        'email' => [
            'required' => 'The email is required',
            'is_unique' => 'This email already exists. Please add another'
        ],
        'password' => [
            'required' => 'The password is required'
        ]
    ];
    protected $skipValidation = false;
}
