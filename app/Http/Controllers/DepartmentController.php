<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        $jurusan = Department::all();
        return view('jurusan.index', ['jurusan' => $jurusan]);
    }
}
