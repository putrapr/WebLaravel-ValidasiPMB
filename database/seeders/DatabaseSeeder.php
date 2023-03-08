<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MabaDataDiri;
use App\Models\MabaNilai;
use App\Models\MabaNonAkademik;
use App\Models\Pengguna;

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

        MabaNilai::factory(10)->create();
        MabaNonAkademik::factory(10)->create();
        MabaDataDiri::factory(10)->create();

        // MabaDataDiri::create([
        //     'nama' => 'Putra',
        //     'nik' => '331221230111110',
        //     'id_user' => '1',
        //     'id_nilai' => '1',
        //     'id_non_akademik' => '1',
        //     'status' => 'diajukan'
        // ]);
          
        //   MabaNilai::create([
        //     'mtk' => '80',
        //     'bi' => '90',
        //     'bing' => '80',
        //     'peminatan' => '85'
        //   ]);
          
        //   MabaNonAkademik::create([
        //     'mapel_peminatan' => '-',
        //     'organisasi' => '-',
        //     'jabatan' => '-',
        //     'penghargaan' => '-',
        //     'cita_cita' => '-',
        //     'asal_sekolah' => '-'
        //   ]);
    }
}
