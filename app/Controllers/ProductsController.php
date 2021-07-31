<?php


namespace App\Controllers;


use App\Models\Category;
use App\Models\Product;
use CodeIgniter\Controller;
use Config\Database;

class ProductsController extends Controller
{
    protected $category;
    protected $product;
    protected $db;

    /**
     * ProductsController constructor.
     */
    public function __construct()
    {
        $this->category = new Category();
        $this->product = new Product();
        $this->db = Database::connect();
    }

    public function index()
    {
        $builder = $this->db->table('categories');
        $builder->select('*');
        $builder->join('products','products.category_id = categories.id');
        $products = $builder->get();
        return view('products/index',[
            'products' => $products
        ]);

    }

    public function add()
    {
        $categories = $this->category->findAll();
        return view('products/add',[
           'categories' => $categories
        ]);
    }

    public function save()
    {
        $category_id = $this->request->getPost('category_id');
        $product_name = $this->request->getPost('product_name');
        $unit_price = $this->request->getPost('unit_price');

        $data = [
          'category_id' => $category_id,
          'product_name' => $product_name,
          'unit_price' => $unit_price
        ];

        //Add flash message after saving product
        session()->setFlashdata('product_saved', 'Product has been saved successfully !');
        $this->product->save($data);

        return redirect('products');
    }

    public function edit($id)
    {
        $categories = $this->category->findAll();
        $product = $this->product->find($id);
        return view('products/edit',[
            'categories' => $categories,
            'product' => $product
        ]);
    }

    public function update()
    {
        $id = $this->request->getPost('id');
        $category_id = $this->request->getPost('category_id');
        $product_name = $this->request->getPost('product_name');
        $unit_price = $this->request->getPost('unit_price');

        $data = [
            'category_id' => $category_id,
            'product_name' => $product_name,
            'unit_price' => $unit_price
        ];

        $this->product->update($id, $data);

        //Add flash message after updating product
        session()->setFlashdata('product_updated', 'Product has been updated successfully !');
        return redirect('products');
    }

    public function delete($id)
    {
        $this->product->delete($id);
        return redirect('products');
    }
}