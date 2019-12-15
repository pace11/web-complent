<?php

use Illuminate\Database\Seeder;

class ComplentIssueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('complent_issue')->insert([
            [
                'user_id' => '194866d668b84edca657b90aca116685',
                'lead_technician_id' => '89e83ed55cf24a999f5c5bbf13bf656f',
                'technician_id' => 'a76e84ace91e4bbf85aff33586021152',
                'description' => 'Mengalami Permasalah pada AC, tidak mengeluarkan Udara dingin dan cukup mengeluarkan bunyi yang besar',
                'status' => 'inprogress',
            ],
            [
                'user_id' => 'd984cba0ac524430bc98d5bc6f2efe17',
                'lead_technician_id' => '1116f522fef044168066412ee7590942',
                'technician_id' => 'f44838e45fa042ec809bab84507c73a7',
                'description' => 'TV mengalami ledakan dan menimbulkan asap yang cukup banyak',
                'status' => 'done',
            ],
            [
                'user_id' => '06414ac8d82144dfaf383cc0b8f0b12a',
                'lead_technician_id' => 'd3b05ef49143476288396e0efd9fc545',
                'technician_id' => 'b28094292e554637a9595fc2ff5e73d4',
                'description' => 'TV mengalami ledakan dan menimbulkan asap yang cukup banyak',
                'status' => 'done',
            ],
        ]);
    }
}
