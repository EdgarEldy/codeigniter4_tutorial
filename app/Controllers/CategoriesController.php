<?php


namespace App\Controllers;


use App\Models\Category;
use CodeIgniter\Controller;

class CategoriesController extends Controller
{
    protected $category;

    /**
     * CategoriesController constructor.
     */
    public function __construct()
    {
        $this->category = new Category();
    }

    public function index()
    {
        $categories = $this->category->findAll();
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

        if ($this->category->save($data) == false) {
            return view('categories/add', [
                'errors' => $this->category->errors()
            ]);
        } else {
            return redirect('categories');
        }

    }

    public function edit($id)
    {
        $category = $this->category->find($id);
        return view('categories/edit', [
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
        $this->category->update($id, $data);
        return redirect('categories');
    }

    public function delete($id)
    {
        $this->category->delete($id);
        return redirect('categories');
    }

}
