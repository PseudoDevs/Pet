<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Adoption;

class AdoptionUserController extends BaseController
{
    protected $helpers = ['form', 'url'];

    public function index()
    {

        $adoption = new Adoption();
        $data['adoptions'] = $adoption->findAll();


        return view('user/user_pending_request', $data);
    }

    public function createViewAdoption()
    {
        return view('user/add');
    }

    public function addAdoption() {
        $adoption = new Adoption();

        // image
        if($file = $this->request->getFile('pet_thumbnail')) {
            if($file->isValid() && !$file->hasMoved()) {
                $petThumbnail = $file->getRandomName();
                $file->move('uploads/', $petThumbnail);
            }
        }

        $adoption_data = array(
            'user_id' => session()->get('id'), 
            'pet_name' => $this->request->getPost('pet_name'), 
            'pet_age' => $this->request->getPost('pet_age'), 
            'pet_description' => $this->request->getPost('pet_desc'),
            'pet_thumbnail' => $petThumbnail,
            'pet_price' => $this->request->getPost('pet_price'), 
            'pet_breed' => $this->request->getPost('pet_breed'),
            'pet_owner' => $this->request->getPost('pet_owner'), 
            'pet_location' => $this->request->getPost('pet_location'),
            'pet_owner_url' => $this->request->getPost('pet_owner_url'),
            'status' => 'Pending'
        );

        if($adoption->insert($adoption_data)) {
            return redirect()->to('/user-adoptions')->with('success', 'Adoption added successfully');
        } else {
            return redirect()->to('/user-adoptions')->with('error', 'Adoption failed to add');
        }
    }
}