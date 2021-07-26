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
        $builder->select('*');
        $builder->join('orders','orders.customer_id = customers.id');
        $builder->join('products','orders.product_id = products.id');
        $builder->select('orders.*, orders.id as order_id');
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

    //Save order
    public function save()
    {
        $customer_id = $this->request->getPost('customer_id');
        $product_id = $this->request->getPost('product_id');
        $qty = $this->request->getPost('qty');
        $total = $this->request->getPost('total');

        $data = [
            'customer_id' => $customer_id,
            'product_id' => $product_id,
            'qty' => $qty,
            'total' => $total
        ];

        $this->order->save($data);

        return redirect('orders');
    }

    //Get orders/edit view with data
    public function edit($id)
    {
        //Get customers
        $customers = $this->customer->findAll();

        //Get categories
        $categories = $this->category->findAll();

        //Get customer by order id
        $builder = $this->db->table('customers');
        $builder->select('*');
        $builder->join('orders', 'customers.id = orders.customer_id');
        $builder->where('orders.id', $id);
        $query = $builder->get();

        $customer = $query->getRowArray(); 

        //Get category name by order id
        $builder = $this->db->table('categories');
        $builder->select('*');
        $builder->join('products', 'categories.id = products.category_id');
        $builder->join('orders', 'products.id = orders.product_id');
        $builder->where('orders.id', $id);
        $query = $builder->get();

        $category = $query->getRowArray();

        //Get product name by order id
        $builder = $this->db->table('products');
        $builder->select('*');
        $builder->join('orders', 'products.id = orders.product_id');
        $builder->where('orders.id', $id);
        $query = $builder->get();

        $product = $query->getRowArray(); 

        //Get order
        $order = $this->order->find($id);

        $product = $this->product->find($id);
        return view('orders/edit', [
            'customer' => $customer,
            'category' => $category,
            'customers' => $customers,
            'categories' => $categories,
            'product' => $product,
            'order' => $order,
        ]);
    }

    //Update order
    public function update()
    {
        $id = $this->request->getPost('id');

        $customer_id = $this->request->getPost('customer_id');
        $product_id = $this->request->getPost('product_id');
        $qty = $this->request->getPost('qty');
        $total = $this->request->getPost('total');

        $data = [
            'customer_id' => $customer_id,
            'product_id' => $product_id,
            'qty' => $qty,
            'total' => $total
        ];

        $this->order->update($id, $data);

        return redirect('orders');
    }

    //Remove an order
    public function delete($id)
    {
        $this->order->delete($id);
        return redirect('orders');
    }
}