<?php

namespace Database\Factories;

use App\Models\Berita;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Berita>
 */
class BeritaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $fakerID = \Faker\Factory::create('id_ID');
        $fakerUS = \Faker\Factory::create('en_US');

       $title = $fakerID->sentence(mt_rand(5,12));

        return [
            'judul' => $title,
            'slug' => Str::slug($title),
            'penulis' => $fakerID->name(),
            'konten'=> $fakerUS->paragraph(mt_rand(8,15)),
            
        ];
    }
}
