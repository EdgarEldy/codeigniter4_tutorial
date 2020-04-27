<?php
namespace App\Models;

use CodeIgniter\Model;

class Customer extends Model{
    protected $DBGroup = 'default';
    protected $table      = 'customers';
        protected $primaryKey = 'id';
        protected $returnType = 'array';
        protected $useSoftDeletes = false;

        protected $allowedFields = ['first_name','last_name','email', 'tel','address'];

        protected $useTimestamps = false;

        protected $createdField  = '';
        protected $updatedField  = '';
        protected $deletedField  = '';

        protected $validationRules    = [];
        protected $validationMessages = [];
        protected $skipValidation     = false;
}