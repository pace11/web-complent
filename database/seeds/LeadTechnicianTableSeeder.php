<?php

use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class LeadTechnicianTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lead_technician')->insert([
            [
                'id' => Uuid::uuid4()->getHex(),
                'province_id' => 31,
                'regency_id' => 3174,
                'district_id' => 3174070,
                'full_name' => 'Muhammad Ibnu Mustafa',
                'email' => 'ibnumustafa@gmail.com',
                'password' => password_hash('ibnu2019', PASSWORD_DEFAULT),
                'handphone' => '081100002222',
                'date_of_birth' => '1996-05-05',
                'full_address' => 'Jl. Cempaka Hijau Duri Kosambi Jakarta Barat',
            ],
            [
                'id' => Uuid::uuid4()->getHex(),
                'province_id' => 31,
                'regency_id' => 3175,
                'district_id' => 3175010,
                'full_name' => 'Ahmad Sadam',
                'email' => 'ahmadsadam@gmail.com',
                'password' => password_hash('ahmad2019', PASSWORD_DEFAULT),
                'handphone' => '081200002222',
                'date_of_birth' => '1994-05-05',
                'full_address' => 'Jl. Kelapa Sawit Penjaringan Jakarta Utara',
            ],
            [
                'id' => Uuid::uuid4()->getHex(),
                'province_id' => 31,
                'regency_id' => 3172,
                'district_id' => 3172020,
                'full_name' => 'Evan Razak',
                'email' => 'evanrazak@gmail.com',
                'password' => password_hash('razak2019', PASSWORD_DEFAULT),
                'handphone' => '082200002222',
                'date_of_birth' => '1993-05-05',
                'full_address' => 'Jl. Pembangunan Ciracas Jakarta Timur',
            ],
        ]);
    }
}
