<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        Category::insert([
            ['name'=>'Stolice', 'slug'=> 'stolice', 'image'=>'../public/slike/stolica.png', 'created_at'=> $now, 'updated_at'=> $now],
            ['name'=>'Stolovi', 'slug'=> 'stolovi', 'image'=>'../public/slike/sto.png', 'created_at'=> $now, 'updated_at'=> $now],
            ['name'=>'Police', 'slug'=> 'police', 'image'=>'../public/slike/polica.png', 'created_at'=> $now, 'updated_at'=> $now],
            ['name'=>'Lampe', 'slug'=> 'lampe', 'image'=>'../public/slike/lampa.jpg', 'created_at'=> $now, 'updated_at'=> $now],
            ['name'=>'Ljuljaske', 'slug'=> 'ljuljaske', 'image'=>'../public/slike/ljuljaska.jpg','created_at'=> $now, 'updated_at'=> $now]

        ]);
    }
}
