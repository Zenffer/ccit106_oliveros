<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\User as UserModel;
class User extends BaseController
{
    public function create()
    {
        return view('createUser');
    }

    public function store()
    {
        $userModel = new UserModel();

        $data = [
            'firstName' => $this->request->getPost('firstName'),
            'middleName' => $this->request->getPost('middleName'),
            'lastName' => $this->request->getPost('lastName'),
        ];

        $userModel->insert($data);

        return redirect()->to('/')->with('success', 'User created successfully');
    }
}
