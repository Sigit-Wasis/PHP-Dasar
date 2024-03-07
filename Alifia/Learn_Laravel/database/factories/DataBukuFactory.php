<?php

namespace Database\Factories;

use App\Models\databuku;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DataBuku>
 */
class DataBukuFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = databuku::class;

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
            'penerbit' => $faker->name,
            'penulis' => $faker->company,
        ];
    }
}
