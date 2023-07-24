<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class AlbumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 1; $i <= 100; $i++) {
            $artist_id = rand(1, 100); // Chọn ngẫu nhiên category_id từ 1 đến 100
            DB::table('albums')->insert([
                'album_name' => $faker->sentence($nbWords = 3, $variableNbWords = true),
                'artist_id' => $artist_id,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
