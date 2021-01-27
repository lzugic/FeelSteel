<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
        [
            'name'=> 'Barska stolica',
            'price'=> '50e',
            'category'=> 'stolice',
            'description'=> 'Praktične barske stolice koje ce ukrasiti vas enterijer.',
            'galery'=> "../public/slike/stolice/1.png",    
        ],
        [
            'name'=> 'Stolica 2',
            'price'=> '50e',
            'category'=> 'stolice',
            'description'=> 'Praktična stolica koje ce ukrasiti vas enterijer.',
            'galery'=> "../public/slike/stolice/2.png",    
        ],
        [
            'name'=> 'Stolica 3',
            'price'=> '50e',
            'category'=> 'stolice',
            'description'=> 'Praktična stolica koje ce ukrasiti vas enterijer.',
            'galery'=> "../public/slike/stolice/3.png",    
        ],
        [
            'name'=> 'Stolica 4',
            'price'=> '50e',
            'category'=> 'stolice',
            'description'=> 'Praktična stolica koje ce ukrasiti vas enterijer.',
            'galery'=> "../public/slike/stolice/4.jpg",    
        ],
        [
            'name'=> 'Stolica 5',
            'price'=> '50e',
            'category'=> 'stolice',
            'description'=> 'Praktična stolica koje ce ukrasiti vas enterijer.',
            'galery'=> "../public/slike/stolice/5.jpg",    
        ],
        ]);
    }
}
