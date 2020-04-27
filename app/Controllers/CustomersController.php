<?php


namespace App\Controllers;


use App\Models\Customer;
use CodeIgniter\Controller;

class CustomersController extends Controller
{
    protected $customer;

    /**
     * CustomersController constructor.
     */
    public function __construct()
    {
        $this->customer = new Customer();
    }

    public function index()
    {
        $customers = $this->customer->findAll();
        return view('customers/index',[
            'customers' => $customers
        ]);
    }

    public function add()
    {
        # code...
        return view('customers/add');
    }

    public function save()
    {
        # code...
        $first_name = $this->request->getPost('first_name');
        $last_name = $this->request->getPost('last_name');
        $email = $this->request->getPost('email');
        $tel = $this->request->getPost('tel');
        $address = $this->request->getPost('address');

        $data = [
            'first_name' => $first_name,
            'last_name' => $last_name,
            'email' => $email,
            'tel' => $tel,
            'address' => $address,
        ];
        $this->customer->save($data);
        return redirect('customers');
    }

    public function edit($id)
    {
        # code...
        $customer = $this->customer->find($id);
        return view('customers/edit',[
            'customer' => $customer
        ]);
    }

    public function update()
    {
        # code...
        $id = $this->request->getPost('id');
        $first_name = $this->request->getPost('first_name');
        $last_name = $this->request->getPost('last_name');
        $email = $this->request->getPost('email');
        $tel = $this->request->getPost('tel');
        $address = $this->request->getPost('address');

        $data = [
            'first_name' => $first_name,
            'last_name' => $last_name,
            'email' => $email,
            'tel' => $tel,
            'address' => $address,
        ];
        $this->customer->update($id,$data);
        return redirect('customers');
    }

    public function delete($id)
    {
        # code...
        $this->customer->delete($id);
        return redirect('customers');
    }

}