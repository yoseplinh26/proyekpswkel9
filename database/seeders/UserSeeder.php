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
        $data = array(
            [
                'username' => 'admin',
                'email' => 'admin@mail.com',
                'no_hp' => '085267816542',
                'alamat' => 'Jln Kampung Kubur',
                'password' => Hash::make('password'),
                'role' => 'admin'

            ]
        );
        foreach($data AS $d){
            User::create([
                'username' => $d['username'],
                'email' => $d['email'],
                'no_hp' => $d['no_hp'],
                'alamat' => $d['alamat'],
                'password' => $d['password'],
                'role' => $d['role']
            ]);
        }
    }
}
