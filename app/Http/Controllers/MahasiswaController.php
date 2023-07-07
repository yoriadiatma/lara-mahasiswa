<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Department;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        //versi kirim variabel secara biasa
        // $mahasiswa = Student::paginate(10);
        // return view(
        //     'mahasiswa.index',
        //     [
        //         'students' => $mahasiswa
        //     ]
        // );
        //versi dg compact
        $students = Student::paginate(10);
        return view('mahasiswa.index', compact('students'));
    }

    public function studentDepartment(Department $department)
    {
        $students = $department->student()->paginate(10);
        $students->withPath('/mahasiswa/' . $department->kode_jurusan);
        return view('mahasiswa.index', [
            'students' => $students
        ]);
    }
}
