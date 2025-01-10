<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $movies = [
            [
                'title'=> 'Doraemon',
                'photo'=> 'doraemon.jpg',
                'description'=>'Some quick example text to build on the card title and make up the bulk of the card content.',
                'genre_id'=>3,
                'publish_date'=>date('Y-m-d')
               
            ],
            [
                'title'=> 'Bluey',
                'photo'=> 'bluey.jpg',
                'description'=>'Some quick example text to build on the card title and make up the bulk of the card content.',
                'genre_id'=>3,
                'publish_date'=>date('Y-m-d')
                
            ],
            [
                'title'=> 'Elemental',
                'photo'=> 'elemental.png',
                'description'=>'Some quick example text to build on the card title and make up the bulk of the card content.',
                'genre_id'=>3,
                'publish_date'=>date('Y-m-d')
            ],
            [
                'title'=> 'Spiderman',
                'photo'=> 'spiderman.jpg',
                'description'=>'Some quick example text to build on the card title and make up the bulk of the card content.',
                'genre_id'=>2,
                'publish_date'=>date('Y-m-d')
                
            ],
            [
                'title'=> 'Avatar',
                'photo'=> 'avatar.jpg',
                'description'=>'Some quick example text to build on the card title and make up the bulk of the card content.',
                'genre_id'=>2,
                'publish_date'=>date('Y-m-d')
            ],
            [
                'title'=> 'Tetanic',
                'photo'=> 'tetanic.jpg',
                'description'=>'Some quick example text to build on the card title and make up the bulk of the card content.',
                'genre_id'=>1,
                'publish_date'=>date('Y-m-d')
                
            ],
        ];
        //
        DB::table('movies')->insert($movies);
    }
}
