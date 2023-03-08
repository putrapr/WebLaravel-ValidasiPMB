<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MabaDataDiri>
 */
class MabaDataDiriFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    private static $no = 1; 
    private static $nmr = 1;

    public function definition() {
        return [
            'nama'=> fake()->name(),
            'nik'=> fake()->nik(),
            'id_user'=> mt_rand(1,2),
            'id_nilai'=> self::$no++,
            'id_non_akademik'=> self::$nmr++,
            'status'=> 'diajukan'
        ];
    }
}
