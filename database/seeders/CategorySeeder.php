<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories=[
            [
             'name' => 'အချစ်',

            ],
            [
             'name' => 'စွန့်စားခန်း',

            ],
            [
             'name' =>'အောင်မြင်ရေး',

            ],
            [
                'name'=>'စုံထောက်',
            ],
     ];

     Category::insert($categories);
    }
}
