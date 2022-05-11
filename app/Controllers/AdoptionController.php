<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

use App\Models\Adoption;
use App\Models\User;

class AdoptionController extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $adoption = new Adoption();

        $data['adoption_list'] = $adoption->findAll();

        return view('admin_adoptions/index', $data);
    }

    public function approvedAdoption()
    {
        $adoption = new Adoption();

        $data['adoption_list'] = $adoption->findAll();

        return view('admin_adoptions/approved', $data);
    }

    public function acceptAdoption($id = null) {
        $adoption = new Adoption();

        $db = db_connect();

        $status = $db->query("UPDATE `adoption` SET `status` = 'Approved' WHERE `id` = $id");

        if (!$status) {
            return redirect()->to('/approved-adoptions')->with('success', 'Adoption has been Approved');
        } else {
            return redirect()->to('/approved-adoptions')->with('error', 'Adoption could not be Accepted');
        }
    }

    public function declineAdoption($id = null) {
        $adoption = new Adoption();

        $db = db_connect();

        $status = $db->query("UPDATE `adoption` SET `status` = 'Declined' WHERE `id` = $id");

        if (!$status) {
            return redirect()->to('/approved-adoptions')->with('success', 'Adoption has been Declined');
        } else {
            return redirect()->to('/approved-adoptions')->with('error', 'Adoption could not be Declined');
        }
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        //
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        //
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        //
    }
}
