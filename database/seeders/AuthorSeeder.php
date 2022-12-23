<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $authors=[
           [
            'name' => 'ချစ်သူ',
            'biography' => 'I am sad I am happy I am foolish',
            'photo' => 'null',
           ],
           [
            'name' => 'မမ',
            'biography' => 'I am sad I am happy I am foolish',
            'photo' => 'null',
           ],
           [
            'name' =>'ကိုကို',
            'biography' => 'I am sad I am happy I am foolish',
            'photo' => 'null',

           ],
    ];
    foreach($authors as $author){
        DB::table('authors')->insert($author);
    }


    }
}
