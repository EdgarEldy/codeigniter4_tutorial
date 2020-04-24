<?php


namespace App\Models;


use CodeIgniter\Model;

class CategoryModel extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'categories';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['cat_name'];

    protected $useTimestamps = false;

    protected $createdField = '';
    protected $updatedField = '';
    protected $deletedField = '';

    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;

}