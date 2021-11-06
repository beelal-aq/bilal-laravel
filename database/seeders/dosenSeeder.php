<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class dosenSeeder extends Seeder
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
            DB::table('dosen')->insert
            ([
                'nama_D' => $faker->name,
                'nidn' => $faker->randomNumber(5, true),
                'alamat_D' => $faker->address,
                'kontak' => $faker->phoneNumber,
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime
            ]);
    }
}
}