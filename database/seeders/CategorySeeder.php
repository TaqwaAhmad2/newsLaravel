<?php

namespace Database\Seeders;

use App\Models\category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        for($i=0; $i<5;$i++){
//            DB::table('categories')->insert([
//                'title'=>'title'.$i,
//                'code'=> 'co'.$i
//            ]);
//        }
        category::factory()->count(10)->create();

    }
}
