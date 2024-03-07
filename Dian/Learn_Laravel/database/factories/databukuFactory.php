<?php

namespace Database\Factories;

use App\Models\Databuku;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

class DatabukuFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Databuku::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = Faker::create();

        return [
            'judul_buku' => $faker->sentence(3),
            'tahun_terbit' => $faker->numberBetween(2000, 2024),
            'penulis' => $faker->name,
            'penerbit' => $faker->company,
        ];
    }
}
