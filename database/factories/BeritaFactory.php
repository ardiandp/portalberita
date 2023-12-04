<?php

namespace Database\Factories;
use \App\Models\Berita;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Berita>
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
        return [
            'judul' => $this->faker->sentence(),
            'isi' => $this->faker->paragraph(),
            'penulis' => $this->faker->name(),
            'tanggal' => $this->faker->date(),
        ];
    }
}
