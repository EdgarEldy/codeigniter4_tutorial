<?php


namespace App\Models;


use CodeIgniter\Model;

class Order extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'orders';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['customer_id', 'product_id', 'qty', 'total'];

    protected $useTimestamps = true;

    protected $createdField = '';
    protected $updatedField = '';
    protected $deletedField = '';
}