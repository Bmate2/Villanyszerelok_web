<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::truncate();

        Product::create([
            'name' => 'Lego Star Wars X-Wing Fighter',
            'description' => 'A galaktikus csata új dimenziója. Az X-Wing Fighter szett a Star Wars világából.',
            'stock' => 25,
            'price' => 7999.99,
            'image_url' => 'https://example.com/lego-starwars-xwing.jpg',
            'sales_count' => 100
        ]);

        Product::create([
            'name' => 'Lego Star Wars Millennium Falcon',
            'description' => 'A Millennium Falcon a galaxis leghíresebb űrhajója.',
            'stock' => 15,
            'price' => 14999.99,
            'image_url' => 'https://example.com/lego-millennium-falcon.jpg',
            'sales_count' => 80
        ]);

        Product::create([
            'name' => 'Lego Technic Bugatti Chiron',
            'description' => 'A Lego Technic sorozat csúcsmodellje a Bugatti Chiron sportautó.',
            'stock' => 30,
            'price' => 10999.99,
            'image_url' => 'https://example.com/lego-bugatti-chiron.jpg',
            'sales_count' => 120
        ]);

        Product::create([
            'name' => 'Lego Creator 3-in-1 Pirate Ship',
            'description' => 'A Creator sorozatból egy három az egyben kalózhajó.',
            'stock' => 50,
            'price' => 4999.99,
            'image_url' => 'https://example.com/lego-pirate-ship.jpg',
            'sales_count' => 150
        ]);

        Product::create([
            'name' => 'Lego Friends Heartlake City Resort',
            'description' => 'A Lego Friends szett segítségével építsd meg a Heartlake város üdülőhelyét.',
            'stock' => 20,
            'price' => 6999.99,
            'image_url' => 'https://example.com/lego-heartlake-resort.jpg',
            'sales_count' => 200
        ]);

        Product::create([
            'name' => 'Lego Ninjago Temple of Light',
            'description' => 'A Ninjago templom, amely a fény erejét szimbolizálja.',
            'stock' => 18,
            'price' => 8499.99,
            'image_url' => 'https://example.com/lego-ninjago-temple.jpg',
            'sales_count' => 90
        ]);

        Product::create([
            'name' => 'Lego City Fire Station',
            'description' => 'A Lego City tűzoltóállomás szett, a tűzoltás hőseivel.',
            'stock' => 40,
            'price' => 3999.99,
            'image_url' => 'https://example.com/lego-city-fire-station.jpg',
            'sales_count' => 220
        ]);

        Product::create([
            'name' => 'Lego Super Heroes Batcave',
            'description' => 'A Lego Super Heroes szett a híres Batcave-t, Batman otthonát tartalmazza.',
            'stock' => 12,
            'price' => 9999.99,
            'image_url' => 'https://example.com/lego-batcave.jpg',
            'sales_count' => 60
        ]);

        Product::create([
            'name' => 'Lego Architecture Eiffel Tower',
            'description' => 'A híres Eiffel torony Lego változata a Lego Architecture sorozatból.',
            'stock' => 30,
            'price' => 5999.99,
            'image_url' => 'https://example.com/lego-eiffel-tower.jpg',
            'sales_count' => 110
        ]);

        Product::create([
            'name' => 'Lego Minecraft The Cave',
            'description' => 'Építsd meg a Minecraft világát a Lego Minecraft The Cave szettel.',
            'stock' => 25,
            'price' => 3499.99,
            'image_url' => 'https://example.com/lego-minecraft-cave.jpg',
            'sales_count' => 160
        ]);

        Product::create([
            'name' => 'Lego Creator 3-in-1 Safari Jungle',
            'description' => 'Készítsd el a dzsungelt és az ottani állatokat a Creator szettel.',
            'stock' => 50,
            'price' => 4999.99,
            'image_url' => 'https://example.com/lego-safari-jungle.jpg',
            'sales_count' => 140
        ]);

        Product::create([
            'name' => 'Lego Star Wars Death Star',
            'description' => 'A Star Wars világában a legikonikusabb űrállomás, a Halálcsillag Lego változata.',
            'stock' => 10,
            'price' => 24999.99,
            'image_url' => 'https://example.com/lego-death-star.jpg',
            'sales_count' => 50
        ]);

        Product::create([
            'name' => 'Lego Technic Lamborghini Sián',
            'description' => 'A Lego Technic sorozat egyik legexkluzívabb autója, a Lamborghini Sián.',
            'stock' => 20,
            'price' => 14999.99,
            'image_url' => 'https://example.com/lego-lamborghini-sian.jpg',
            'sales_count' => 80
        ]);

        Product::create([
            'name' => 'Lego Ninjago Zane’s Titan Mech',
            'description' => 'Zane és a Titan Mech harcol a Ninjago világában.',
            'stock' => 35,
            'price' => 5999.99,
            'image_url' => 'https://example.com/lego-zane-titan-mech.jpg',
            'sales_count' => 200
        ]);

        Product::create([
            'name' => 'Lego Friends Amusement Park Roller Coaster',
            'description' => 'A Lego Friends szett egy vidámpark hullámvasúttal.',
            'stock' => 15,
            'price' => 8999.99,
            'image_url' => 'https://example.com/lego-amusement-park.jpg',
            'sales_count' => 70
        ]);

        Product::create([
            'name' => 'Lego City Police Station',
            'description' => 'A Lego City rendőrség szett segít a rendfenntartásban.',
            'stock' => 25,
            'price' => 4499.99,
            'image_url' => 'https://example.com/lego-police-station.jpg',
            'sales_count' => 100
        ]);

        Product::create([
            'name' => 'Lego Disney Castle',
            'description' => 'A Disney hercegnők kastélya Lego formájában.',
            'stock' => 40,
            'price' => 12999.99,
            'image_url' => 'https://example.com/lego-disney-castle.jpg',
            'sales_count' => 120
        ]);

        Product::create([
            'name' => 'Lego Ideas NASA Apollo Saturn V',
            'description' => 'A Lego Ideas szett, ami a híres NASA Apollo Saturn V rakétát örökíti meg.',
            'stock' => 30,
            'price' => 7999.99,
            'image_url' => 'https://example.com/lego-nasa-apollo-saturn.jpg',
            'sales_count' => 150
        ]);

        Product::create([
            'name' => 'Lego Super Heroes Avengers Tower',
            'description' => 'A Marvel szuperhősök központja a Lego Avengers Tower-ben.',
            'stock' => 50,
            'price' => 10999.99,
            'image_url' => 'https://example.com/lego-avengers-tower.jpg',
            'sales_count' => 180
        ]);

        Product::create([
            'name' => 'Lego Harry Potter Hogwarts Castle',
            'description' => 'A varázslatos Hogwarts kastély Lego változata a Harry Potter világából.',
            'stock' => 12,
            'price' => 14999.99,
            'sales_count' => 100
        ]);

    }
}
