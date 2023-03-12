<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Pengguna;
use App\Models\MabaNilai;
use App\Models\InfoTambahan;
use App\Models\MabaDataDiri;
use App\Models\MabaNonAkademik;
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

        Pengguna::create([
          'nama' => 'tu',
          'sandi' => 'tu',
          'jabatan' => 'tu',
        ]);

        Pengguna::create([
          'nama' => 'baak',
          'sandi' => 'baak',
          'jabatan' => 'baak',
        ]);

        Pengguna::create([
          'nama' => 'warek',
          'sandi' => 'warek',
          'jabatan' => 'warek',
        ]);

        Pengguna::create([
          'nama' => 'Anton',
          'sandi' => 'ant1',
          'jabatan' => 'tu',
        ]);

        Pengguna::create([
          'nama' => 'Tono',
          'sandi' => 'tonton1',
          'jabatan' => 'baak',
        ]);

        Pengguna::create([
          'nama' => 'Tini',
          'sandi' => 'tintin0',
          'jabatan' => 'warek',
        ]);

        InfoTambahan::create([
          'jml_pengajuan_baak' => '30'
        ]);

        MabaNilai::factory(50)->create();
        MabaNonAkademik::factory(50)->create();
        MabaDataDiri::factory(50)->create();
    }
}
