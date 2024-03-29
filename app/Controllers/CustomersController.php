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
        return view('customers/index', [
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
        if ($this->customer->save($data) == false) {
            return view('customers/add', [
                'errors' => $this->customer->errors()
            ]);
        } else {

            //Add flash message after saving customer
            session()->setFlashdata('customer_saved', 'Customer has been saved successfully !');
            return redirect('customers');
        }
    }

    public function edit($id)
    {
        # code...
        $customer = $this->customer->find($id);
        return view('customers/edit', [
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
        $this->customer->update($id, $data);

        //Add flash message after updating customer
        session()->setFlashdata('customer_updated', 'Customer has been updated successfully !');
        return redirect('customers');
    }

    public function delete($id)
    {
        # code...
        $this->customer->delete($id);

        //Add flash message after removing customer
        session()->setFlashdata('customer_deleted', 'Customer has been deleted successfully !');
        return redirect('customers');
    }

}