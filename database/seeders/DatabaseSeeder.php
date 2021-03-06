<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('handsets')->insert([
            [
                'type'=> 'Mobile Phone'
            ],
            [
                'type'=> 'Desk Phone'
            ],
            [
                'type'=> 'Software Phone'
            ]
        ]);

        DB::table('users')->insert([
            [
                'name'=> 'John Doe',
                'phone_number'=> '03314963306',
                'handset_id'=> '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name'=> 'Sarah Smith',
                'phone_number'=> '011156666806',
                'handset_id'=> '3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name'=> 'Michael Rodriguez',
                'phone_number'=> '01114990856',
                'handset_id'=> '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name'=> 'Robert Smith',
                'phone_number'=> '03214960806',
                'handset_id'=> '3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name'=> 'Maria Garcia',
                'phone_number'=> '01114960854',
                'handset_id'=> '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name'=> 'David Jones',
                'phone_number'=> '01114960806',
                'handset_id'=> '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name'=> 'Maria Hernandez',
                'phone_number'=> '08700900654',
                'handset_id'=> '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
