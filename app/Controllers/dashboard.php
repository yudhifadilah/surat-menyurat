<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Dashboard extends Controller
{
    public function index()
    {
        // Cek apakah pengguna sudah login
        if (!session('logged_in')) {
            return redirect()->to('/login');
        }

        echo view('dashboard');
    }
}
