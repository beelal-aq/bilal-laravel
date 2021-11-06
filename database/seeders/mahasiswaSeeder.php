<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class mahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        
        for($i = 1; $i <= 5; $i++){
            DB::table('mahasiswa2')->insert
            ([
                'nama' => $faker->name,
                'nim' => $faker->randomNumber(5, true),
                'ttl' => $faker->dateTime,
                'alamat' => $faker->address,
                'thn_masuk' => $faker->dateTime,
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime
            ]);
    }   
}
}
