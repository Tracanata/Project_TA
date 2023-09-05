<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Mahasiswa;
use App\Models\Prodi;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'username' => '1111',
            'name' => 'Admin',
            'roles' => 'admin',
            'password' => bcrypt('12345'),
            'email' => 'fatracandraardiwinata@gmail.com'
        ]);

        User::create([
            'username' => '2121',
            'name' => 'K.Prodi IF',
            'roles' => 'KProdiIF',
            'password' => bcrypt('12345'),
        ]);

        User::create([
            'username' => '2222',
            'name' => 'K.Prodi SP',
            'roles' => 'KProdiSP',
            'password' => bcrypt('12345'),
        ]);

        User::create([
            'username' => '2323',
            'name' => 'K.Prodi IS',
            'roles' => 'KProdiIS',
            'password' => bcrypt('12345'),
        ]);

        User::create([
            'username' => '1212',
            'name' => 'Wakil Dekan 1',
            'roles' => 'WDekan1',
            'password' => bcrypt('12345'),
        ]);

        User::create([
            'username' => '12345',
            'name' => 'Fulan',
            'roles' => 'staff',
            'password' => bcrypt('12345'),
        ]);

        User::create([
            'username' => '5520119067',
            'name' => 'Fatra Candra Ardiwinata',
            'roles' => 'mahasiswa',
            'password' => bcrypt('12345')
        ]);

        Mahasiswa::create([
            'prodi_id' => '1',
            'user_id' => '7',
            'npm' => '5520119067',
            'nama' => 'Fatra Candra Ardiwinata',
            'angkatan' => '2019',
            'kelas' => 'Reguler',
            'jk' => 'Laki-Laki',
            'status_aktif' => 'Lulus',
            'no_ijazah' => '2112/2023',
            'status_pengajuan' => 'ada'
        ]);

        User::create([
            'username' => '1221344356',
            'name' => 'Rayhan Nur Muhammad',
            'roles' => 'mahasiswa',
            'password' => bcrypt('12345')
        ]);

        Mahasiswa::create([
            'prodi_id' => '1',
            'user_id' => '8',
            'npm' => '1221344356',
            'nama' => 'Rayhan Nur Muhammad',
            'angkatan' => '2019',
            'kelas' => 'Reguler',
            'jk' => 'Laki-Laki',
            'status_aktif' => 'Lulus',
            'no_ijazah' => '1221/2023',
            'status_pengajuan' => 'ada'
        ]);

        Prodi::create([
            'N_prodi' => 'Teknik Informatika',
        ]);

        Prodi::create([
            'N_prodi' => 'Teknik Sipil',
        ]);

        Prodi::create([
            'N_prodi' => 'Teknik Industri',
        ]);
    }
}
