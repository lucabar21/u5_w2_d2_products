<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products()
    {
        return view('products');
    }

    public function details($id)
    {
        return view('details', ['id' => $id]);
    }

    public function edit($id)
    {
        return view('edit', ['id' => $id]);
    }

    public function add()
    {
        return view('add');
    }
}
