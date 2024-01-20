<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PaquestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('paquestions')->insert([
                'user_id' => '1',
                'question' => '質問？',
                'answer' => '回答',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}
