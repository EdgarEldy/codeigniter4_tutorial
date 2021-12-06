<?php


namespace App\Models;


use CodeIgniter\Model;

class Profile extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'profiles';
    protected $primaryKey = 'Id';
    protected $returnType = 'array';

    // Set use soft delete to false
    protected $useSoftDeletes = false;

    protected $useTimestamps = false;

    protected $createdField = '';
    protected $updatedField = '';
    protected $deletedField = '';

    // Add validations
    protected $validationRules = [
        'profile_name' => 'required|is_unique[profiles.profile_name]',
    ];
    protected $validationMessages = [
        'profile_name' => [
            'required' => 'The profile name is required !',
            'is_unique' => 'This profile name exists. Please choose another',
        ]
    ];
    protected $skipValidation = false;
}
