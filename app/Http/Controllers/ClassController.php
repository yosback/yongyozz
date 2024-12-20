<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index()
    {
        return view('classes.index');
    }

    public function create()
    {
        return view('classes.create');
    }

    public function store(Request $request)
    {
        // Logika untuk menyimpan kelas baru
    }

    public function show($id)
    {
        return view('classes.show');
    }

    public function edit($id)
    {
        return view('classes.edit');
    }

    public function update(Request $request, $id)
    {
        // Logika untuk mengupdate kelas
    }

    public function destroy($id)
    {
        // Logika untuk menghapus kelas
    }
} 