<?php


namespace App\Controllers;


use App\Models\Category;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Product;
use CodeIgniter\Controller;
use Config\Database;

class OrdersController extends Controller
{
    protected $customer;
    protected $category;
    protected $product;
    protected $order;
    protected $db;

    public function __construct()
    {
    	$this->customer = new Customer();
    	$this->category = new Category();
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

    public function add()
    {
        $customers = $this->customer->findAll();
        $categories = $this->category->findAll();
        return view('orders/add',[
            'customers' => $customers,
            'categories' => $categories,
        ]);
    }

    //Get products by category id
    public function getProducts()
    {
        $id = $this->request->getGet('cat_id');
        $builder = $this->db->table('categories');
        $builder->select('*');
        $builder->join('products', 'categories.id = products.category_id');
        $builder->where('categories.id', $id);
        $products = $builder->get();

        return view('orders/getProducts',[
            'products' => $products
        ]);
    }

    //Get unit price by product id
    public function getUnitPrice()
    {
        $id = $this->request->getGet('product_id');
        $builder = $this->db->table('categories');
        $builder->select('*');
        $builder->join('products', 'categories.id = products.category_id');
        $builder->where('products.id', $id);
        $query = $builder->get();

        $product = $query->getRowArray();

        return view('orders/getUnitPrice', [
            'product' => $product
        ]);
    }
}