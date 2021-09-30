<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;

class HandsetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('handsets')->insert([
            [
                'type'=>'Mobile Phone'
            ],
            [
                'type'=>'Desk Phone'
            ],
            [
                'type'=>'Software Phone'
            ]
        ]);
    }
}
