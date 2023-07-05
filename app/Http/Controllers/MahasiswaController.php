<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Student::all();
        return view(
            'mahasiswa.index',
            [
                'nomor' => 1,
                'students' => $mahasiswa
            ]
        );
    }
}
