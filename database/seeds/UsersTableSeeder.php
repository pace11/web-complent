<?php

use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => Uuid::uuid4()->getHex(),
                'province_id' => 31,
                'regency_id' => 3174,
                'district_id' => 3174070,
                'full_name' => 'Winona Belva',
                'email' => 'winona@gmail.com',
                'password' => password_hash('winona2019', PASSWORD_DEFAULT),
                'handphone' => '081208120822',
                'date_of_birth' => '1997-10-10',
                'full_address' => 'Jl. H Junib Duri Kosambi Jakarta Barat',
            ],
            [
                'id' => Uuid::uuid4()->getHex(),
                'province_id' => 31,
                'regency_id' => 3175,
                'district_id' => 3175010,
                'full_name' => 'Eqhi Seftiyan',
                'email' => 'eqhi@gmail.com',
                'password' => password_hash('eqhi2019', PASSWORD_DEFAULT),
                'handphone' => '081208120842',
                'date_of_birth' => '1997-11-10',
                'full_address' => 'Jl. Kepulangan Penjaringan Jakarta Utara',
            ],
            [
                'id' => Uuid::uuid4()->getHex(),
                'province_id' => 31,
                'regency_id' => 3172,
                'district_id' => 3172020,
                'full_name' => 'Firman Apriansyah',
                'email' => 'firmanapriansyah@gmail.com',
                'password' => password_hash('firman2019', PASSWORD_DEFAULT),
                'handphone' => '081208121842',
                'date_of_birth' => '1996-06-10',
                'full_address' => 'Jl. Kali Becek Ciracas Jakarta Timur',
            ],
        ]);
    }
}
