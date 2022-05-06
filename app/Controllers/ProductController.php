<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\Products;

class ProductController extends ResourceController
{
    protected $helpers = ['text', 'url', 'form'];
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {

        $products = new Products();

        $data['products'] = $products->findAll();


        return view('admin_products/index', $data);
    }


    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        $product = new Products();
        $data = $product->where('id', $id)->first();
        echo json_encode($data);
    }


    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        $products = new Products();

        $product_thumbnail = $this->request->getFile('p_thumbnail');

        if ($product_thumbnail->isValid() && !$product_thumbnail->hasMoved()) {
            $product_thumbnail_image = $product_thumbnail->getRandomName();
            $product_thumbnail->move('uploads/', $product_thumbnail_image);
        }
        $data = array(
            'p_name' => $_POST['p_name'],
            'p_description' => $_POST['p_desc'],
            'p_price' => $_POST['p_price'],
            'p_stocks' => $_POST['p_stocks'],
            'p_thumbnail' => $product_thumbnail_image
        );




        if ($products->insert($data)) {
            return redirect()->to('/add-product')->with('success', 'Product Added Successfully');
        }
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        return view('admin_products/add');
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $products = new Products();

        // $data_id = $products->where('id', $id)->first();

        $file =  $this->request->getFile('p_thumbnail');

        $data = array(
            'p_name' => $this->request->getPost('p_name'),
            'p_description' => $this->request->getPost('p_desc'),
            'p_price' => $this->request->getPost('p_price'),
            'p_stocks' => $this->request->getPost('p_stocks'),
        );

        if (is_uploaded_file($_FILES['p_thumbnail']['tmp_name'])) {
            if ($file->isValid() && !$file->hasMoved()) {
                $imageName = $file->getRandomName();
                $file->move('uploads/', $imageName);
            }
            $data['p_thumbnail'] = $imageName;
        }

        $products->update($_POST['p_idEdit'], $data);
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $product = new Products();

        $product->where('id', $id)->delete();
        if ($this->request->isAJAX()) {
            return json_encode(['success' => '<div class="alert alert-success alert-style-light alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close mt-2" data-bs-dismiss="alert"
                aria-label="Close"></button>
            <div class="alert-content">
                <span class="alert-text">Product deleted successfully</span>
            </div>
        </div>',]);
        }
    }
}
