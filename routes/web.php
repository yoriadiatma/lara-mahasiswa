<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\MahasiswaController;
use App\Models\Department;
use App\Models\Student;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/jurusan', [DepartmentController::class, 'index']);

//versi dengan closure
// Route::get('/mahasiswa/{department:kode_jurusan}', function (Department $department) {
//     $students = $department->student()->paginate(10);
//     // Menentukan base URL pagination
//     $students->withPath('/mahasiswa/' . $department->kode_jurusan);
//     return view('mahasiswa.index', [
//         'students' => $students
//     ]);
// });

//versi dengan controller
Route::get('/mahasiswa/{department:kode_jurusan}', [MahasiswaController::class, 'studentDepartment']);
