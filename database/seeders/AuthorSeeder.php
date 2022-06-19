<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
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
        Author::factory()->count(10)->create();

    }
}
