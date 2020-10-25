<?php


namespace App\Models;


use CodeIgniter\Model;

class Category extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'categories';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['category_name'];

    protected $useTimestamps = false;

    protected $createdField = '';
    protected $updatedField = '';
    protected $deletedField = '';

    protected $validationRules      = [
        'category_name' => 'required|is_unique[categories.category_name]',
    ];
    protected $validationMessages   = [
        'category_name' => [
            'required' => 'The category name is required !',
            'is_unique' => 'This category name exists. Please choose another',
        ]
    ];
    protected $skipValidation       = false;

}