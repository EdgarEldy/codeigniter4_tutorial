<?php


namespace App\Controllers;


use App\Models\Customer;
use App\Models\Order;
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

    public function index()
    {
        $builder = $this->db->table('customers');
        $builder->join('orders','orders.customer_id = customers.id');
        $builder->join('products','orders.product_id = products.id');
        $orders = $builder->get();

        return view('orders/index',[
           'orders' => $orders
        ]);
    }
}