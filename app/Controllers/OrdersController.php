<?php


namespace App\Controllers;


use App\Models\Customer;
use app\Models\Order;
use App\Models\Product;
use CodeIgniter\Controller;
use Config\Database;

class OrdersController extends Controller
{
    protected $customer;
    protected $product;
    protected $order;
    protected $db;

    public function __construct()
    {
    	$this->customer = new Customer();
    	$this->product = new Product();
    	$this->order =  new Order();
    	$this->db = Database::connect();
    }
}