<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'nama'  => 'Ferlian Satria',
                'email'  => 'pimpinan@gmail.com',
                'password'  => bcrypt('123456789'),
                'jeniskelamin'  => 'Laki-Laki',
                'akses'  => 'pimpinan',
                'alamat'  => 'Test Alamat',
                'tgllahir'  => '2000/06/21',
                'angkatan_id'  => '0',
            ],
            [
                'nama'  => 'Meita',
                'email'  => 'admin@gmail.com',
                'password'  => bcrypt('123456789'),
                'jeniskelamin'  => 'Laki-Laki',
                'akses'  => 'admin',
                'alamat'  => 'Test Alamat',
                'tgllahir'  => '2000/06/21',
                'angkatan_id'  => '0',
            ],
            [
                'nama'  => 'Rudi Hartono, S.Kom',
                'email'  => 'instruktur@gmail.com',
                'password'  => bcrypt('123456789'),
                'jeniskelamin'  => 'Laki-Laki',
                'akses'  => 'instruktur',
                'alamat'  => 'Test Alamat',
                'tgllahir'  => '2000/06/21',
                'angkatan_id'  => '0',
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
