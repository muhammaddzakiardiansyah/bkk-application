<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Alumni;
use App\Models\Loker;
use App\Models\Perusahaan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'username' => 'budi',
            'email' => 'budi@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Alumni::create([
            'nama_alumni' => 'paijo',
            'jurusan' => 'rpl',
            'thn_lulus' => '2024',
            'status' => 'bekerja'
        ]);
        Alumni::create([
            'nama_alumni' => 'sukron',
            'jurusan' => 'rpl',
            'thn_lulus' => '2024',
            'status' => 'bekerja'
        ]);
        Alumni::create([
            'nama_alumni' => 'arba',
            'jurusan' => 'tsm',
            'thn_lulus' => '2024',
            'status' => 'bekerja'
        ]);
        Alumni::create([
            'nama_alumni' => 'ara',
            'jurusan' => 'tb',
            'thn_lulus' => '2024',
            'status' => 'bekerja'
        ]);
        Alumni::create([
            'nama_alumni' => 'zulfa',
            'jurusan' => 'tsm',
            'thn_lulus' => '2024',
            'status' => 'bekerja'
        ]);
        Alumni::create([
            'nama_alumni' => 'arif',
            'jurusan' => 'tkr',
            'thn_lulus' => '2024',
            'status' => 'bekerja'
        ]);
        Alumni::create([
            'nama_alumni' => 'fika',
            'jurusan' => 'tkj',
            'thn_lulus' => '2024',
            'status' => 'bekerja'
        ]);
        Alumni::create([
            'nama_alumni' => 'tika',
            'jurusan' => 'tb',
            'thn_lulus' => '2024',
            'status' => 'bekerja'
        ]);

        Perusahaan::create([
            'perusahaan' => 'Microsoft',
            'file_logo' => 'microsoft.jpg'
        ]);
        Perusahaan::create([
            'perusahaan' => 'Google',
            'file_logo' => 'google.jpg'
        ]);
        Perusahaan::create([
            'perusahaan' => 'PT Astra Motor',
            'file_logo' => 'astra.jpg'
        ]);

        Loker::create([
            'perusahaan_id' => '1',
            'judul_loker' => 'Backend Developer',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo quo, eligendi modi doloremque aperiam aliquid hic dolores blanditiis.'
        ]);
        Loker::create([
            'perusahaan_id' => '3',
            'judul_loker' => 'Montir',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo quo, eligendi modi doloremque aperiam aliquid hic dolores blanditiis.'
        ]);
        Loker::create([
            'perusahaan_id' => '2',
            'judul_loker' => 'Frontend Developer',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo quo, eligendi modi doloremque aperiam aliquid hic dolores blanditiis.'
        ]);
    }
}


