<?php

namespace App\Models;

use CodeIgniter\Model;

class Product extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['category_id', 'product_name', 'unit_price'];

    protected $useTimestamps = false;

    protected $createdField = '';
    protected $updatedField = '';
    protected $deletedField = '';

    protected $validationRules = [
        'category_id' => 'required',
        'product_name' => 'required',
        'unit_price' => 'required',
    ];
    protected $validationMessages = [
        'category_id' => [
            'required' => 'The category name is required'
        ],
        'product_name' => [
            'required' => 'The product name is required',
            'is_unique' => 'This product name already exists. Please choose another',
        ],
        'unit_price' => [
            'required' => 'The unit price is required'
        ],
    ];
    protected $skipValidation = false;

}