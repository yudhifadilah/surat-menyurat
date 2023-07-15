<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Auth extends Controller
{
    public function register()
    {
        helper(['form']);
        $data = [];
        if ($this->request->getMethod() == 'post') {
            // Validasi data input
            $rules = [
                'nama' => 'required',
                'email' => 'required|valid_email|is_unique[users.email]',
                'kata_sandi' => 'required|min_length[6]',
                'konfirmasi_kata_sandi' => 'required|matches[kata_sandi]'
            ];
            if ($this->validate($rules)) {
                $userModel = new UserModel();
                // Simpan data pengguna ke database
                $userModel->save([
                    'nama' => $this->request->getPost('nama'),
                    'email' => $this->request->getPost('email'),
                    'kata_sandi' => password_hash($this->request->getPost('kata_sandi'), PASSWORD_DEFAULT)
                ]);
                return redirect()->to('/login')->with('success', 'Registrasi berhasil, silakan login.');
            } else {
                $data['validation'] = $this->validator;
            }
        }
        echo view('register', $data);
    }

    public function login()
    {
        helper(['form']);
        $data = [];
        if ($this->request->getMethod() == 'post') {
            // Validasi data input
            $rules = [
                'email' => 'required|valid_email',
                'kata_sandi' => 'required|min_length[6]'
            ];
            if ($this->validate($rules)) {
                $userModel = new UserModel();
                $user = $userModel->where('email', $this->request->getPost('email'))->first();
                if ($user && password_verify($this->request->getPost('kata_sandi'), $user['kata_sandi'])) {
                    // Login berhasil, simpan data pengguna ke sesi
                    $sessionData = [
                        'user_id' => $user['id'],
                        'nama' => $user['nama'],
                        'email' => $user['email'],
                        'logged_in' => true
                    ];
                    session()->set($sessionData);
                    return redirect()->to('/dashboard');
                } else {
                    $data['error'] = 'Email atau kata sandi salah.';
                }
            } else {
                $data['validation'] = $this->validator;
            }
        }
        echo view('login', $data);
    }

    public function logout()
    {
        // Hapus data pengguna dari sesi
        session()->destroy();
        return redirect()->to('/login');
    }
}
