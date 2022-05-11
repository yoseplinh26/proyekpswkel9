<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'nama_lengkap' => 'Fransiska Simanungkalit',
            'role' => 'mahasiswa',
            'email' => 'fransiska24@gmail.com',
            'prodi' => 'D3TI',
            'nim' => '11321005',
            'jenis_kelamin' => 'perempuan',
            'username' => 'fransiska',
            'password' => bcrypt('admin'),
            'konfirmasi_password' => bcrypt('admin')

        ]);
    }
}
