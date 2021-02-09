<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

//Stolice:16
Product::create([
    'name'=> 'Stolica 1',
    'price'=> rand(1200, 6800),
    'category'=> 'stolice',
    'description'=> 'Praktična stolica koje ce ukrasiti vas enterijer.',
    'galery'=> "../public/slike/stolice/1.png",
])->categories()->attach(1);

Product::create([
    'name'=> 'Stolica 2',
    'price'=> rand(1200, 6800),
    'category'=> 'stolice',
    'description'=> 'Praktična stolica koje ce ukrasiti vas enterijer.',
    'galery'=> "../public/slike/stolice/2.png",
])->categories()->attach(1);

Product::create([
    'name'=> 'Stolica 3',
    'price'=> rand(1200, 6800),
    'category'=> 'stolice',
    'description'=> 'Praktična stolica koje ce ukrasiti vas enterijer.',
    'galery'=> "../public/slike/stolice/3.png",
])->categories()->attach(1);

Product::create([
    'name'=> 'Stolica 4',
    'price'=> rand(1200, 6800),
    'category'=> 'stolice',
    'description'=> 'Praktična stolica koje ce ukrasiti vas enterijer.',
    'galery'=> "../public/slike/stolice/4.jpg",
])->categories()->attach(1);

Product::create([
    'name'=> 'Stolica 5',
    'price'=> rand(1200, 6800),
    'category'=> 'stolice',
    'description'=> 'Praktična stolica koje ce ukrasiti vas enterijer.',
    'galery'=> "../public/slike/stolice/5.jpg",
])->categories()->attach(1);

Product::create([
    'name'=> 'Stolica 6',
    'price'=> rand(1200, 6800),
    'category'=> 'stolice',
    'description'=> 'Praktična stolica koje ce ukrasiti vas enterijer.',
    'galery'=> "../public/slike/stolice/6.jpg",
])->categories()->attach(1);

Product::create([
    'name'=> 'Stolica 7',
    'price'=> rand(1200, 6800),
    'category'=> 'stolice',
    'description'=> 'Praktična stolica koje ce ukrasiti vas enterijer.',
    'galery'=> "../public/slike/stolice/7.jpg",
])->categories()->attach(1);

Product::create([
    'name'=> 'Stolica 8',
    'price'=> rand(1200, 6800),
    'category'=> 'stolice',
    'description'=> 'Praktična stolica koje ce ukrasiti vas enterijer.',
    'galery'=> "../public/slike/stolice/8.jpg",
])->categories()->attach(1);

Product::create([
    'name'=> 'Stolica 9',
    'price'=> rand(1200, 6800),
    'category'=> 'stolice',
    'description'=> 'Praktična stolica koje ce ukrasiti vas enterijer.',
    'galery'=> "../public/slike/stolice/9.jpg",
])->categories()->attach(1);

Product::create([
    'name'=> 'Stolica 10',
    'price'=> rand(1200, 6800),
    'category'=> 'stolice',
    'description'=> 'Praktična stolica koje ce ukrasiti vas enterijer.',
    'galery'=> "../public/slike/stolice/10.jpg",
])->categories()->attach(1);

Product::create([
    'name'=> 'Stolica 11',
    'price'=> rand(1200, 6800),
    'category'=> 'stolice',
    'description'=> 'Praktična stolica koje ce ukrasiti vas enterijer.',
    'galery'=> "../public/slike/stolice/11.jpg",
])->categories()->attach(1);

Product::create([
    'name'=> 'Stolica 12',
    'price'=> rand(1200, 6800),
    'category'=> 'stolice',
    'description'=> 'Praktična stolica koje ce ukrasiti vas enterijer.',
    'galery'=> "../public/slike/stolice/12.jpg",
])->categories()->attach(1);

Product::create([
    'name'=> 'Stolica 13',
    'price'=> rand(1200, 6800),
    'category'=> 'stolice',
    'description'=> 'Praktična stolica koje ce ukrasiti vas enterijer.',
    'galery'=> "../public/slike/stolice/13.jpg",
])->categories()->attach(1);

Product::create([
    'name'=> 'Stolica 14',
    'price'=> rand(1200, 6800),
    'category'=> 'stolice',
    'description'=> 'Praktična stolica koje ce ukrasiti vas enterijer.',
    'galery'=> "../public/slike/stolice/14.jpg",
])->categories()->attach(1);

Product::create([
    'name'=> 'Stolica 15',
    'price'=> rand(1200, 6800),
    'category'=> 'stolice',
    'description'=> 'Praktična stolica koje ce ukrasiti vas enterijer.',
    'galery'=> "../public/slike/stolice/15.jpg",
])->categories()->attach(1);

Product::create([
    'name'=> 'Stolica 16',
    'price'=> rand(1200, 6800),
    'category'=> 'stolice',
    'description'=> 'Praktična stolica koje ce ukrasiti vas enterijer.',
    'galery'=> "../public/slike/stolice/16.png",
])->categories()->attach(1);



//Stolovi:18
Product::create([
    'name'=> 'Sto 1',
    'price'=> rand(1200, 6800),
    'category'=> 'stolovi',
    'description'=> 'Elegantan stocic za vas lepsi dnevni boravak.',
    'galery'=> "../public/slike/stolovi/1.jpg",
])->categories()->attach(2);

Product::create([
    'name'=> 'Sto 2',
    'price'=> rand(1200, 6800),
    'category'=> 'stolovi',
    'description'=> 'Elegantan stocic za vas lepsi dnevni boravak.',
    'galery'=> "../public/slike/stolovi/2.jpg",
])->categories()->attach(2);

Product::create([
    'name'=> 'Sto 3',
    'price'=> rand(1200, 6800),
    'category'=> 'stolovi',
    'description'=> 'Elegantan stocic za vas lepsi dnevni boravak.',
    'galery'=> "../public/slike/stolovi/3.jpg",
])->categories()->attach(2);

Product::create([
    'name'=> 'Sto 4',
    'price'=> rand(1200, 6800),
    'category'=> 'stolovi',
    'description'=> 'Elegantan stocic za vas lepsi dnevni boravak.',
    'galery'=> "../public/slike/stolovi/4.jpg",
])->categories()->attach(2);

Product::create([
    'name'=> 'Sto 5',
    'price'=> rand(1200, 6800),
    'category'=> 'stolovi',
    'description'=> 'Elegantan stocic za vas lepsi dnevni boravak.',
    'galery'=> "../public/slike/stolovi/5.jpg",
])->categories()->attach(2);

Product::create([
    'name'=> 'Sto 6',
    'price'=> rand(1200, 6800),
    'category'=> 'stolovi',
    'description'=> 'Elegantan stocic za vas lepsi dnevni boravak.',
    'galery'=> "../public/slike/stolovi/6.jpg",
])->categories()->attach(2);

Product::create([
    'name'=> 'Sto 7',
    'price'=> rand(1200, 6800),
    'category'=> 'stolovi',
    'description'=> 'Elegantan stocic za vas lepsi dnevni boravak.',
    'galery'=> "../public/slike/stolovi/7.jpg",
])->categories()->attach(2);

Product::create([
    'name'=> 'Sto 8',
    'price'=> rand(1200, 6800),
    'category'=> 'stolovi',
    'description'=> 'Elegantan stocic za vas lepsi dnevni boravak.',
    'galery'=> "../public/slike/stolovi/8.jpg",
])->categories()->attach(2);

Product::create([
    'name'=> 'Sto 9',
    'price'=> rand(1200, 6800),
    'category'=> 'stolovi',
    'description'=> 'Elegantan stocic za vas lepsi dnevni boravak.',
    'galery'=> "../public/slike/stolovi/9.jpg",
])->categories()->attach(2);

Product::create([
    'name'=> 'Sto 10',
    'price'=> rand(1200, 6800),
    'category'=> 'stolovi',
    'description'=> 'Elegantan stocic za vas lepsi dnevni boravak.',
    'galery'=> "../public/slike/stolovi/10.jpg",
])->categories()->attach(2);

Product::create([
    'name'=> 'Sto 11',
    'price'=> rand(1200, 6800),
    'category'=> 'stolovi',
    'description'=> 'Elegantan stocic za vas lepsi dnevni boravak.',
    'galery'=> "../public/slike/stolovi/11.jpg",
])->categories()->attach(2);

Product::create([
    'name'=> 'Sto 12',
    'price'=> rand(1200, 6800),
    'category'=> 'stolovi',
    'description'=> 'Elegantan stocic za vas lepsi dnevni boravak.',
    'galery'=> "../public/slike/stolovi/12.jpg",
])->categories()->attach(2);

Product::create([
    'name'=> 'Sto 13',
    'price'=> rand(1200, 6800),
    'category'=> 'stolovi',
    'description'=> 'Elegantan stocic za vas lepsi dnevni boravak.',
    'galery'=> "../public/slike/stolovi/13.png",
])->categories()->attach(2);

Product::create([
    'name'=> 'Sto 14',
    'price'=> rand(1200, 6800),
    'category'=> 'stolovi',
    'description'=> 'Elegantan stocic za vas lepsi dnevni boravak.',
    'galery'=> "../public/slike/stolovi/14.png",
])->categories()->attach(2);

Product::create([
    'name'=> 'Sto 15',
    'price'=> rand(1200, 6800),
    'category'=> 'stolovi',
    'description'=> 'Elegantan stocic za vas lepsi dnevni boravak.',
    'galery'=> "../public/slike/stolovi/15.png",
])->categories()->attach(2);

Product::create([
    'name'=> 'Sto 16',
    'price'=> rand(1200, 6800),
    'category'=> 'stolovi',
    'description'=> 'Elegantan stocic za vas lepsi dnevni boravak.',
    'galery'=> "../public/slike/stolovi/16.png",
])->categories()->attach(2);

Product::create([
    'name'=> 'Sto 17',
    'price'=> rand(1200, 6800),
    'category'=> 'stolovi',
    'description'=> 'Elegantan stocic za vas lepsi dnevni boravak.',
    'galery'=> "../public/slike/stolovi/17.png",
])->categories()->attach(2);

Product::create([
    'name'=> 'Sto 18',
    'price'=> rand(1200, 6800),
    'category'=> 'stolovi',
    'description'=> 'Elegantan stocic za vas lepsi dnevni boravak.',
    'galery'=> "../public/slike/stolovi/18.png",
])->categories()->attach(2);




//Police:18
Product::create([
    'name'=> 'Polica 1',
    'price'=> rand(1200, 6800),
    'category'=> 'police',
    'description'=> 'Polica na kojoj ce vasi ukrasni predmeti dobiti lepsi sjaj.',
    'galery'=> "../public/slike/police/1.jpg",
])->categories()->attach(3);

Product::create([
    'name'=> 'Polica 2',
    'price'=> rand(1200, 6800),
    'category'=> 'police',
    'description'=> 'Polica na kojoj ce vasi ukrasni predmeti dobiti lepsi sjaj.',
    'galery'=> "../public/slike/police/2.jpg",
])->categories()->attach(3);

Product::create([
    'name'=> 'Polica 3',
    'price'=> rand(1200, 6800),
    'category'=> 'police',
    'description'=> 'Polica na kojoj ce vasi ukrasni predmeti dobiti lepsi sjaj.',
    'galery'=> "../public/slike/police/3.jpg",
])->categories()->attach(3);

Product::create([
    'name'=> 'Polica 4',
    'price'=> rand(1200, 6800),
    'category'=> 'police',
    'description'=> 'Polica na kojoj ce vasi ukrasni predmeti dobiti lepsi sjaj.',
    'galery'=> "../public/slike/police/4.jpg",
])->categories()->attach(3);

Product::create([
    'name'=> 'Polica 5',
    'price'=> rand(1200, 6800),
    'category'=> 'police',
    'description'=> 'Polica na kojoj ce vasi ukrasni predmeti dobiti lepsi sjaj.',
    'galery'=> "../public/slike/police/5.jpg",
])->categories()->attach(3);

Product::create([
    'name'=> 'Polica 6',
    'price'=> rand(1200, 6800),
    'category'=> 'police',
    'description'=> 'Polica na kojoj ce vasi ukrasni predmeti dobiti lepsi sjaj.',
    'galery'=> "../public/slike/police/6.jpg",
])->categories()->attach(3);

Product::create([
    'name'=> 'Polica 7',
    'price'=> rand(1200, 6800),
    'category'=> 'police',
    'description'=> 'Polica na kojoj ce vasi ukrasni predmeti dobiti lepsi sjaj.',
    'galery'=> "../public/slike/police/7.jpg",
])->categories()->attach(3);

Product::create([
    'name'=> 'Polica 8',
    'price'=> rand(1200, 6800),
    'category'=> 'police',
    'description'=> 'Polica na kojoj ce vasi ukrasni predmeti dobiti lepsi sjaj.',
    'galery'=> "../public/slike/police/8.jpg",
])->categories()->attach(3);

Product::create([
    'name'=> 'Polica 9',
    'price'=> rand(1200, 6800),
    'category'=> 'police',
    'description'=> 'Polica na kojoj ce vasi ukrasni predmeti dobiti lepsi sjaj.',
    'galery'=> "../public/slike/police/9.jpg",
])->categories()->attach(3);

Product::create([
    'name'=> 'Polica 10',
    'price'=> rand(1200, 6800),
    'category'=> 'police',
    'description'=> 'Polica na kojoj ce vasi ukrasni predmeti dobiti lepsi sjaj.',
    'galery'=> "../public/slike/police/10.jpg",
])->categories()->attach(3);

Product::create([
    'name'=> 'Polica 11',
    'price'=> rand(1200, 6800),
    'category'=> 'police',
    'description'=> 'Polica na kojoj ce vasi ukrasni predmeti dobiti lepsi sjaj.',
    'galery'=> "../public/slike/police/11.jpg",
])->categories()->attach(3);

Product::create([
    'name'=> 'Polica 12',
    'price'=> rand(1200, 6800),
    'category'=> 'police',
    'description'=> 'Polica na kojoj ce vasi ukrasni predmeti dobiti lepsi sjaj.',
    'galery'=> "../public/slike/police/12.jpg",
])->categories()->attach(3);

Product::create([
    'name'=> 'Polica 13',
    'price'=> rand(1200, 6800),
    'category'=> 'police',
    'description'=> 'Polica na kojoj ce vasi ukrasni predmeti dobiti lepsi sjaj.',
    'galery'=> "../public/slike/police/13.jpg",
])->categories()->attach(3);

Product::create([
    'name'=> 'Polica 14',
    'price'=> rand(1200, 6800),
    'category'=> 'police',
    'description'=> 'Polica na kojoj ce vasi ukrasni predmeti dobiti lepsi sjaj.',
    'galery'=> "../public/slike/police/14.jpg",
])->categories()->attach(3);

Product::create([
    'name'=> 'Polica 15',
    'price'=> rand(1200, 6800),
    'category'=> 'police',
    'description'=> 'Polica na kojoj ce vasi ukrasni predmeti dobiti lepsi sjaj.',
    'galery'=> "../public/slike/police/15.png",
])->categories()->attach(3);

Product::create([
    'name'=> 'Polica 16',
    'price'=> rand(1200, 6800),
    'category'=> 'police',
    'description'=> 'Polica na kojoj ce vasi ukrasni predmeti dobiti lepsi sjaj.',
    'galery'=> "../public/slike/police/16.png",
])->categories()->attach(3);

Product::create([
    'name'=> 'Polica 17',
    'price'=> rand(1200, 6800),
    'category'=> 'police',
    'description'=> 'Polica na kojoj ce vasi ukrasni predmeti dobiti lepsi sjaj.',
    'galery'=> "../public/slike/police/17.png",
])->categories()->attach(3);

Product::create([
    'name'=> 'Polica 18',
    'price'=> rand(1200, 6800),
    'category'=> 'police',
    'description'=> 'Polica na kojoj ce vasi ukrasni predmeti dobiti lepsi sjaj.',
    'galery'=> "../public/slike/police/18.png",
])->categories()->attach(3);



//Lampe:18
Product::create([
    'name'=> 'Lampa 1',
    'price'=> rand(1200, 6800),
    'category'=> 'lampe',
    'description'=> 'Moderna lampa koja ce ukrasiti i osvetliti vas dom.',
    'galery'=> "../public/slike/lampe/1.jpg",
])->categories()->attach(4);

Product::create([
    'name'=> 'Lampa 2',
    'price'=> rand(1200, 6800),
    'category'=> 'lampe',
    'description'=> 'Moderna lampa koja ce ukrasiti i osvetliti vas dom.',
    'galery'=> "../public/slike/lampe/2.jpg",
])->categories()->attach(4);

Product::create([
    'name'=> 'Lampa 3',
    'price'=> rand(1200, 6800),
    'category'=> 'lampe',
    'description'=> 'Moderna lampa koja ce ukrasiti i osvetliti vas dom.',
    'galery'=> "../public/slike/lampe/3.jpg",
])->categories()->attach(4);

Product::create([
    'name'=> 'Lampa 4',
    'price'=> rand(1200, 6800),
    'category'=> 'lampe',
    'description'=> 'Moderna lampa koja ce ukrasiti i osvetliti vas dom.',
    'galery'=> "../public/slike/lampe/4.jpg",
])->categories()->attach(4);

Product::create([
    'name'=> 'Lampa 5',
    'price'=> rand(1200, 6800),
    'category'=> 'lampe',
    'description'=> 'Moderna lampa koja ce ukrasiti i osvetliti vas dom.',
    'galery'=> "../public/slike/lampe/5.jpg",
])->categories()->attach(4);

Product::create([
    'name'=> 'Lampa 6',
    'price'=> rand(1200, 6800),
    'category'=> 'lampe',
    'description'=> 'Moderna lampa koja ce ukrasiti i osvetliti vas dom.',
    'galery'=> "../public/slike/lampe/6.jpg",
])->categories()->attach(4);

Product::create([
    'name'=> 'Lampa 7',
    'price'=> rand(1200, 6800),
    'category'=> 'lampe',
    'description'=> 'Moderna lampa koja ce ukrasiti i osvetliti vas dom.',
    'galery'=> "../public/slike/lampe/7.jpg",
])->categories()->attach(4);

Product::create([
    'name'=> 'Lampa 8',
    'price'=> rand(1200, 6800),
    'category'=> 'lampe',
    'description'=> 'Moderna lampa koja ce ukrasiti i osvetliti vas dom.',
    'galery'=> "../public/slike/lampe/8.jpg",
])->categories()->attach(4);

Product::create([
    'name'=> 'Lampa 9',
    'price'=> rand(1200, 6800),
    'category'=> 'lampe',
    'description'=> 'Moderna lampa koja ce ukrasiti i osvetliti vas dom.',
    'galery'=> "../public/slike/lampe/9.jpg",
])->categories()->attach(4);

Product::create([
    'name'=> 'Lampa 10',
    'price'=> rand(1200, 6800),
    'category'=> 'lampe',
    'description'=> 'Moderna lampa koja ce ukrasiti i osvetliti vas dom.',
    'galery'=> "../public/slike/lampe/10.jpg",
])->categories()->attach(4);

Product::create([
    'name'=> 'Lampa 11',
    'price'=> rand(1200, 6800),
    'category'=> 'lampe',
    'description'=> 'Moderna lampa koja ce ukrasiti i osvetliti vas dom.',
    'galery'=> "../public/slike/lampe/11.jpg",
])->categories()->attach(4);

Product::create([
    'name'=> 'Lampa 12',
    'price'=> rand(1200, 6800),
    'category'=> 'lampe',
    'description'=> 'Moderna lampa koja ce ukrasiti i osvetliti vas dom.',
    'galery'=> "../public/slike/lampe/12.jpg",
])->categories()->attach(4);

Product::create([
    'name'=> 'Lampa 13',
    'price'=> rand(1200, 6800),
    'category'=> 'lampe',
    'description'=> 'Moderna lampa koja ce ukrasiti i osvetliti vas dom.',
    'galery'=> "../public/slike/lampe/13.jpg",
])->categories()->attach(4);

Product::create([
    'name'=> 'Lampa 14',
    'price'=> rand(1200, 6800),
    'category'=> 'lampe',
    'description'=> 'Moderna lampa koja ce ukrasiti i osvetliti vas dom.',
    'galery'=> "../public/slike/lampe/14.jpg",
])->categories()->attach(4);

Product::create([
    'name'=> 'Lampa 15',
    'price'=> rand(1200, 6800),
    'category'=> 'lampe',
    'description'=> 'Moderna lampa koja ce ukrasiti i osvetliti vas dom.',
    'galery'=> "../public/slike/lampe/15.jpg",
])->categories()->attach(4);

Product::create([
    'name'=> 'Lampa 16',
    'price'=> rand(1200, 6800),
    'category'=> 'lampe',
    'description'=> 'Moderna lampa koja ce ukrasiti i osvetliti vas dom.',
    'galery'=> "../public/slike/lampe/16.png",
])->categories()->attach(4);

Product::create([
    'name'=> 'Lampa 17',
    'price'=> rand(1200, 6800),
    'category'=> 'lampe',
    'description'=> 'Moderna lampa koja ce ukrasiti i osvetliti vas dom.',
    'galery'=> "../public/slike/lampe/17.png",
])->categories()->attach(4);

Product::create([
    'name'=> 'Lampa 18',
    'price'=> rand(1200, 6800),
    'category'=> 'lampe',
    'description'=> 'Moderna lampa koja ce ukrasiti i osvetliti vas dom.',
    'galery'=> "../public/slike/lampe/18.png",
])->categories()->attach(4);



//Ljuljaske:11
Product::create([
    'name'=> 'Ljuljaska 1',
    'price'=> rand(1200, 6800),
    'category'=> 'ljuljaske',
    'description'=> 'Ljuljaska za vase dvoriste.',
    'galery'=> "../public/slike/ljuljaske/1.jpg",
])->categories()->attach(5);

Product::create([
    'name'=> 'Ljuljaska 2',
    'price'=> rand(1200, 6800),
    'category'=> 'ljuljaske',
    'description'=> 'Ljuljaska za vase dvoriste.',
    'galery'=> "../public/slike/ljuljaske/2.jpg",
])->categories()->attach(5);

Product::create([
    'name'=> 'Ljuljaska 3',
    'price'=> rand(1200, 6800),
    'category'=> 'ljuljaske',
    'description'=> 'Ljuljaska za vase dvoriste.',
    'galery'=> "../public/slike/ljuljaske/3.jpg",
])->categories()->attach(5);

Product::create([
    'name'=> 'Ljuljaska 4',
    'price'=> rand(1200, 6800),
    'category'=> 'ljuljaske',
    'description'=> 'Ljuljaska za vase dvoriste.',
    'galery'=> "../public/slike/ljuljaske/4.jpg",
])->categories()->attach(5);

Product::create([
    'name'=> 'Ljuljaska 5',
    'price'=> rand(1200, 6800),
    'category'=> 'ljuljaske',
    'description'=> 'Ljuljaska za vase dvoriste.',
    'galery'=> "../public/slike/ljuljaske/5.jpg",
])->categories()->attach(5);

Product::create([
    'name'=> 'Ljuljaska 6',
    'price'=> rand(1200, 6800),
    'category'=> 'ljuljaske',
    'description'=> 'Ljuljaska za vase dvoriste.',
    'galery'=> "../public/slike/ljuljaske/6.jpg",
])->categories()->attach(5);

Product::create([
    'name'=> 'Ljuljaska 7',
    'price'=> rand(1200, 6800),
    'category'=> 'ljuljaske',
    'description'=> 'Ljuljaska za vase dvoriste.',
    'galery'=> "../public/slike/ljuljaske/7.jpg",
])->categories()->attach(5);

Product::create([
    'name'=> 'Ljuljaska 8',
    'price'=> rand(1200, 6800),
    'category'=> 'ljuljaske',
    'description'=> 'Ljuljaska za vase dvoriste.',
    'galery'=> "../public/slike/ljuljaske/8.jpg",
])->categories()->attach(5);

Product::create([
    'name'=> 'Ljuljaska 9',
    'price'=> rand(1200, 6800),
    'category'=> 'ljuljaske',
    'description'=> 'Ljuljaska za vase dvoriste.',
    'galery'=> "../public/slike/ljuljaske/9.jpg",
])->categories()->attach(5);

Product::create([
    'name'=> 'Ljuljaska 10',
    'price'=> rand(1200, 6800),
    'category'=> 'ljuljaske',
    'description'=> 'Ljuljaska za vase dvoriste.',
    'galery'=> "../public/slike/ljuljaske/10.png",
])->categories()->attach(5);

Product::create([
    'name'=> 'Ljuljaska 11',
    'price'=> rand(1200, 6800),
    'category'=> 'ljuljaske',
    'description'=> 'Ljuljaska za vase dvoriste.',
    'galery'=> "../public/slike/ljuljaske/11.png",
])->categories()->attach(5);


    }
}
