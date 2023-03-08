<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MabaNilai>
 */
class MabaNilaiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'mtk'=> mt_rand(75,100),
            'bi'=> mt_rand(75,100),
            'bing'=> mt_rand(75,100),
            'peminatan'=> mt_rand(75,100),
            'non_akademik'=> 0
        ];
    }
}
