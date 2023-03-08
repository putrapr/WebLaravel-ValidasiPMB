<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MabaNonAkademik>
 */
class MabaNonAkademikFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(){
        return [
            'mapel_peminatan'=> fake()->sentence(mt_rand(1,2)),
            'organisasi'=> fake()->sentence(mt_rand(0,3)),
            'jabatan'=> fake()->sentence(mt_rand(0,3)),
            'penghargaan'=> fake()->sentence(mt_rand(0,3)),
            'cita_cita'=> fake()->sentence(mt_rand(1,3)),
            'asal_sekolah'=> fake()->sentence(mt_rand(3,5))
        ];
    }
}
