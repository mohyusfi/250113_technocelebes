<?php

namespace App\Http\Controllers;

use App\Model\Portofolio;
use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    public function index() {
        return view('admin.view-porto', ['title' => "list porto"]);
    }

    public function create() {
        return view('admin.add-porto', ['title' => "halaman add"]);
    }

    public function edit($id) {
        $porto = Portofolio::findOrFail($id);

        return view('admin.edit-porto', [
            'porto' => $porto,
            'title' => 'halaman edit'
        ]);
    }
}
