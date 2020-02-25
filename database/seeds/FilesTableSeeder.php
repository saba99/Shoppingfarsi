<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('files')->insert([
            'id' => 1,
            'filename' => '2009.2 1280x1024 (19).jpg',
           
        ]);
        DB::table('files')->insert([
            'id' => 2,
            'filename' => '2009.2 1280x1024 (18).jpg',

        ]);
        DB::table('files')->insert([
            'id' => 3,
            'filename' => '2009.2 1280x1024 (34).jpg',

        ]);
        DB::table('files')->insert([
            'id' => 4,
            'filename' => '2009.2 1280x1024 (1).jpg',

        ]);
        DB::table('files')->insert([
            'id' => 5,
            'filename' => '2009.2 1280x1024 (25).jpg',

        ]);
    }
}
