<?php

use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;


class TechnicianTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('technician')->insert([
            [
                'id' => Uuid::uuid4()->getHex(),
                'province_id' => 31,
                'regency_id' => 3174,
                'district_id' => 3174070,
                'lead_technician_id' => '89e83ed55cf24a999f5c5bbf13bf656f',
                'full_name' => 'Arlando Diwalsa',
                'email' => 'arlando@gmail.com',
                'password' => password_hash('arlando2019', PASSWORD_DEFAULT),
                'handphone' => '082248080810',
                'date_of_birth' => '1996-01-01',
                'full_address' => 'Jl. H junib Duri Kosambi Jakarta Barat',
            ],
            [
                'id' => Uuid::uuid4()->getHex(),
                'province_id' => 31,
                'regency_id' => 3174,
                'district_id' => 3174070,
                'lead_technician_id' => '89e83ed55cf24a999f5c5bbf13bf656f',
                'full_name' => 'Bayu Wicaksono',
                'email' => 'bayuw@gmail.com',
                'password' => password_hash('bayu2019', PASSWORD_DEFAULT),
                'handphone' => '082258080810',
                'date_of_birth' => '1996-02-11',
                'full_address' => 'Jl. H Selong Duri Kosambi Jakarta Barat',
            ],
            [
                'id' => Uuid::uuid4()->getHex(),
                'province_id' => 31,
                'regency_id' => 3174,
                'district_id' => 3174070,
                'lead_technician_id' => '89e83ed55cf24a999f5c5bbf13bf656f',
                'full_name' => 'Bagus Septian',
                'email' => 'bagusseptian@gmail.com',
                'password' => password_hash('bagus2019', PASSWORD_DEFAULT),
                'handphone' => '082268080810',
                'date_of_birth' => '1996-12-11',
                'full_address' => 'Jl. H Mali Duri Kosambi Jakarta Barat',
            ],
            [
                'id' => Uuid::uuid4()->getHex(),
                'province_id' => 31,
                'regency_id' => 3175,
                'district_id' => 3175010,
                'lead_technician_id' => 'd3b05ef49143476288396e0efd9fc545',
                'full_name' => 'Alwi Hasan',
                'email' => 'alwihasan@gmail.com',
                'password' => password_hash('alwi2019', PASSWORD_DEFAULT),
                'handphone' => '085268080810',
                'date_of_birth' => '1996-03-11',
                'full_address' => 'Jl. Udang Penjaringan Jakarta Utara',
            ],
            [
                'id' => Uuid::uuid4()->getHex(),
                'province_id' => 31,
                'regency_id' => 3172,
                'district_id' => 3172020,
                'lead_technician_id' => '1116f522fef044168066412ee7590942',
                'full_name' => 'Rangga Putra',
                'email' => 'ranggaputra@gmail.com',
                'password' => password_hash('rangga2019', PASSWORD_DEFAULT),
                'handphone' => '085200800810',
                'date_of_birth' => '1996-03-19',
                'full_address' => 'Jl. Sungai Besar Ciracas Jakarta Timur',
            ],
            [
                'id' => Uuid::uuid4()->getHex(),
                'province_id' => 31,
                'regency_id' => 3172,
                'district_id' => 3172020,
                'lead_technician_id' => '1116f522fef044168066412ee7590942',
                'full_name' => 'Budi Agung Santoso',
                'email' => 'budiagung@gmail.com',
                'password' => password_hash('budi2019', PASSWORD_DEFAULT),
                'handphone' => '085299800810',
                'date_of_birth' => '1996-07-19',
                'full_address' => 'Jl. Komodo Ciracas Jakarta Timur',
            ],
        ]);
    }
}
