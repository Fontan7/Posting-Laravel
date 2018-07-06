<?php

use Illuminate\Database\Seeder;

class NetworksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('networks')->insert([
        ['description' => 'Facebook' ],
        ['description' => 'Instagram'],
        ['description' => 'Twitter'],
      ]);
    }
}
