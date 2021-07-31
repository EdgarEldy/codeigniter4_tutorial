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
        $category_name = $this->request->getPost('category_name');
        $data = [
            'category_name' => $category_name
        ];

        if ($this->category->save($data) == false) {
            return view('categories/add', [
                'errors' => $this->category->errors()
            ]);
        } else {
            //Add flash message after saving product category
            session()->setFlashdata('category_saved', 'Product category has been saved successfully !');
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
        $category_name = $this->request->getPost('category_name');
        $data = [
            'category_name' => $category_name
        ];
        $this->category->update($id, $data);

        //Add flash message after updating product category
        session()->setFlashdata('category_updated', 'Product category has been updated successfully !');
        return redirect('categories');
    }

    public function delete($id)
    {
        $this->category->delete($id);

        //Add flash message after removing product category
        session()->setFlashdata('category_deleted', 'Product category has been removed successfully !');
        return redirect('categories');
    }

}
