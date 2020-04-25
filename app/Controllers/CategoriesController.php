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
    return view('categories/index', [
      'categories' => $categories
    ]);
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
    return redirect('categories');
    }

    public function edit($id)
    {
      $category = $this->categoryModel->find($id);
      return view('categories/edit',[
        'category' => $category
      ]);
    }

    public function update()
    {
      // code...
      $id = $this->request->getPost('id');
      $cat_name = $this->request->getPost('cat_name');
      $data = [
        'cat_name' => $cat_name
      ];
      $this->categoryModel->update($id, $data);
      return redirect('categories');
    }

    public function delete($id)
    {
      $this->categoryModel->delete($id);
      return redirect('categories');
    }

}
