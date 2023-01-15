<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use App\Models\Room;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Rizky Cavendio',
            'username' => 'rizkycavendio',
            'email' => 'mrc.dio@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Raisyal Fatihah',
            'username' => 'raisyalfatihah',
            'email' => 'halhal2000@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Muiz Rabbani',
            'username' => 'muizrabbani',
            'email' => 'muizkun@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name' => 'Jakarta',
            'slug' => 'lokasi-jakarta'
        ]);

        Category::create([
            'name' => 'Bandung',
            'slug' => 'lokasi-bandung'
        ]);

        Category::create([
            'name' => 'Yogyakarta',
            'slug' => 'lokasi-yogyakarta'
        ]);

        Category::create([
            'name' => 'Semarang',
            'slug' => 'lokasi-semarang'
        ]);

        Category::create([
            'name' => 'Surabaya',
            'slug' => 'lokasi-surabaya'
        ]);

        Category::create([
            'name' => 'Malang',
            'slug' => 'lokasi-malang'
        ]);

        Room::create([
            'name' => 'Deluxe',
            'slug' => 'deluxe'
        ]);

        Room::create([
            'name' => 'Premium',
            'slug' => 'premium'
        ]);

        Room::create([
            'name' => 'Standard',
            'slug' => 'standard'
        ]);


        Post::create([
            'category_id' => 1,
            'user_id' => 1,
            'room_id' => 1,
            'slug' => 'homestay-pak-sholeh',
            'title' => 'Homestay Pak Sholeh',
            'price' => '250.000',
            'ukuranKamar' => '4x4',
            'jumlahKasur' => '2 Kasur',
            'kamarMandi' => '2 Kamar mandi',
            'wifi' => 'Tersedia',
            'ac' => 'Tersedia',
            'hiburan' => 'Tersedia',
            'body' => 'As I also live in the compound, I am available for any help or advice about your travels in Bali. I can also help to arrange tours and activities such as cooking class, Batur hike, traditional jamu and spa products class, Balinese dancing, making offerings, and any other aspect of traditional Balinese life that you might like to try!',

        ]);

        Post::create([
            'category_id' => 1,
            'user_id' => 1,
            'room_id' => 2,
            'slug' => 'homestay-pak-dio',
            'title' => 'Homestay Pak Dio',
            'price' => '250.000',
            'ukuranKamar' => '4x4',
            'jumlahKasur' => '2 Kasur',
            'kamarMandi' => '2 Kamar mandi',
            'wifi' => 'Tersedia',
            'ac' => 'Tersedia',
            'hiburan' => 'Tersedia',
            'body' => 'As I also live in the compound, I am available for any help or advice about your travels in Bali. I can also help to arrange tours and activities such as cooking class, Batur hike, traditional jamu and spa products class, Balinese dancing, making offerings, and any other aspect of traditional Balinese life that you might like to try!',

        ]);
    }
}
