<?php
/**
*U slucaju da product treba da ima vise kategorija u product seeder dodati sl kod
 */
$product = Product::find(1);//1 je id
$product->categories()->attach(2);// stavljamo mu kategoriju sa id 2


/**
 * Kada oces da stavljas active klasu koristi ovo u li tagu 
 *  {{'dashboard' == request()->path() ? 'active' : ''}}
 * 'dashboard' je link koji se nalazi u <a> tagu ispod
 */