<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Department::create([
            'kode_jurusan' => '001',
            'nama_jurusan' => 'Teknologi Informasi'
        ]);
        Department::create([
            'kode_jurusan' => '002',
            'nama_jurusan' => 'Teknik Mesin'
        ]);
    }
}
