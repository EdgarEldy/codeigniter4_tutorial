<?php


namespace App\Controllers;


use App\Models\CategoryModel;
use CodeIgniter\Controller;

class CategoriesController extends Controller
{
    protected $categoryModel;

    /**
     * CategoriesController constructor.
     */
    public function __construct()
    {
    $this->categoryModel = new CategoryModel();
    }

    public function index()
    {
    $categories = $this->categoryModel->findAll();
    return view('categories/index', ['categories' => $categories]);
    }

    public function add()
    {

        return view('categories/add');
    }

    public function save()
    {
    $cat_name = $this->request->getPost('cat_name');
    $data = [
      'cat_name' => $cat_name
    ];
    $result = $this->categoryModel->save($data);
    return view('categories/index');
    }

    public function edit()
    {

    }

    public function delete()
    {

    }

}