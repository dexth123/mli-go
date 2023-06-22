<?php

namespace App\Controllers;

use App\Models\UserModel;

class ProfileController extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();
        $noHp = '08123456789';  
        $user = $userModel->find($noHp);
        return view('profile', ['user' => $user]);
    }

    public function save()
    {
        $userModel = new UserModel();
        
        // Ambil data dari form
        $data = [
            'NoHp' => $this->request->getPost('NoHp'),
            'NamaLengkap' => $this->request->getPost('NamaLengkap'),
            'Alamat' => $this->request->getPost('Alamat'),
            'Username' => $this->request->getPost('Username'),
            'Password' => $this->request->getPost('Password')
        ];

        // Simpan data ke dalam tabel User
        $userModel->insert($data);

        return redirect()->to('/profile');
    }

    public function update()
    {
        $userModel = new UserModel();

        // Ambil data dari form
        $noHp = $this->request->getPost('NoHp');
        $data = [
            'NamaLengkap' => $this->request->getPost('NamaLengkap'),
            'Alamat' => $this->request->getPost('Alamat'),
            'Username' => $this->request->getPost('Username'),
            'Password' => $this->request->getPost('Password')
        ];

        // Update data pada tabel User berdasarkan NoHp
        $userModel->update($noHp, $data);

        return redirect()->to('/profile');
    }
}

