<?php

namespace App\Controllers;

use App\Models\UserModel;

class Home extends BaseController
{
    public function index()
    {
        $model = new UserModel();
        if ($this->request->is('post')) {
            $user = $this->request->getPost();
            $model->save($user);
        }
        $allUsers = $model->findAll();
        $data['rows'] = $allUsers;

        return view('home_view', $data);
    }

    public function updateUser($id){
        $model = new UserModel();
        $user = $model->find($id);
        $allUsers = $model->findAll();
        $data = [
            'id' => $user['id'],
            'fname' => $user['first_name'],
            'lname' => $user['last_name'],
            'rows' => $allUsers,
        ];

        return view('home_view', $data);
    }

    public function deleteUser($id){
        $model = new UserModel();
        $model->delete($id);

        return redirect()->to(base_url('/'));
    }
}
