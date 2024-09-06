<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }
    
    public function about() {
        return 'Agta Fadjrin Aminullah 2241760072';
    }

    public function article($id) {
        return 'Halaman artikel dengan ID '.$id;
    }
}
