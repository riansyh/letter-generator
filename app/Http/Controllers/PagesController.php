<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('home', [
            'title' => 'Home',
        ]);
    }

    public function generate()
    {
        return view('generate', [
            'title' => 'Generate Surat',
        ]);
    }

    public function manage()
    {
        return view('manage', [
            'title' => 'Kelola Template Surat',
        ]);
    }

    public function edit()
    {
        return view('edit', [
            'title' => 'Edit Template',
        ]);
    }

    public function add()
    {
        return view('add', [
            'title' => 'Tambahkan Template',
        ]);
    }
}
