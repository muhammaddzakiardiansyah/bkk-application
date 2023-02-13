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
            'username' => 'budiyanto2',
            'email' => 'budiyanto@gmail.com',
            'password' => bcrypt('password')
        ]);

        Alumni::create([
            'nama_alumni' => 'paijo',
            'images' => 'photo1.jpg',
            'jurusan' => 'rpl',
            'thn_lulus' => '2024',
            'status' => 'bekerja'
        ]);
        Alumni::create([
            'nama_alumni' => 'sukron',
            'images' => 'photo1.jpg',
            'jurusan' => 'rpl',
            'thn_lulus' => '2024',
            'status' => 'bekerja'
        ]);
        Alumni::create([
            'nama_alumni' => 'arba',
            'images' => 'photo1.jpg',
            'jurusan' => 'tsm',
            'thn_lulus' => '2024',
            'status' => 'bekerja'
        ]);
        Alumni::create([
            'nama_alumni' => 'ara',
            'images' => 'photo1.jpg',
            'jurusan' => 'tb',
            'thn_lulus' => '2024',
            'status' => 'bekerja'
        ]);
        Alumni::create([
            'nama_alumni' => 'zulfa',
            'images' => 'photo1.jpg',
            'jurusan' => 'tsm',
            'thn_lulus' => '2024',
            'status' => 'bekerja'
        ]);
        Alumni::create([
            'nama_alumni' => 'arif',
            'images' => 'photo1.jpg',
            'jurusan' => 'tkr',
            'thn_lulus' => '2024',
            'status' => 'bekerja'
        ]);
        Alumni::create([
            'nama_alumni' => 'fika',
            'images' => 'photo1.jpg',
            'jurusan' => 'tkj',
            'thn_lulus' => '2024',
            'status' => 'bekerja'
        ]);
        Alumni::create([
            'nama_alumni' => 'tika',
            'images' => 'photo1.jpg',
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
            'image' => 'image.jpg',
            'judul_loker' => 'Backend Developer',
            'slug' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Non recusandae assumenda nam facere, molestias doloremque soluta ex minima esse.',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo quo, eligendi modi doloremque aperiam aliquid hic dolores blanditiis. Consequuntur reiciendis ducimus magni illo quo. Architecto nobis voluptas molestias eos?'
        ]);
        Loker::create([
            'perusahaan_id' => '3',
            'image' => 'image.jpg',
            'judul_loker' => 'Montir',
            'slug' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Non recusandae assumenda nam facere, molestias doloremque soluta ex minima esse.',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo quo, eligendi modi doloremque aperiam aliquid hic dolores blanditiis. Consequuntur reiciendis ducimus magni illo quo. Architecto nobis voluptas molestias eos?'
        ]);
        Loker::create([
            'perusahaan_id' => '2',
            'image' => 'image.jpg',
            'judul_loker' => 'Frontend Developer',
            'slug' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Non recusandae assumenda nam facere, molestias doloremque soluta ex minima esse.',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo quo, eligendi modi doloremque aperiam aliquid hic dolores blanditiis. Consequuntur reiciendis ducimus magni illo quo. Architecto nobis voluptas molestias eos?'
        ]);
    }
}
