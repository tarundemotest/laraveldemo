<?php

use Illuminate\Database\Seeder;

class Films extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('films')->insert([
            [
                'name' => 'Titanic',
                'slug' => 'titanic',
                'description' => 'Titanic test',
                'realease_date' => '2018-09-02',
                'rating' => '3',
                'ticket_Price' => '10',
                'country' => 'USA',
                'genre' => 'USA',
                'photo' => 'Titanic_poster.jpg',
                'created_at' => '2018-09-19 00:00:00',
                'updated_at' => '2018-09-19 00:00:00',
            ],

            [
                'name' => 'Spider Man',
                'slug' => 'spider-man',
                'description' => 'Spider-Man test test',
                'realease_date' => '2002-09-02',
                'rating' => '3',
                'ticket_Price' => '10',
                'country' => 'USA',
                'genre' => 'USA',
                'photo' => '220px-Spider-Man2002Poster.jpg',
                'created_at' => '2018-09-19 00:00:00',
                'updated_at' => '2018-09-19 00:00:00',
            ],
            [
                'name' => 'Avatar',
                'slug' => 'avatar',
                'description' => 'Avatar test test',
                'realease_date' => '2005-05-04',
                'rating' => '3',
                'ticket_Price' => '14',
                'country' => 'USA',
                'genre' => 'USA',
                'photo' => 'Avatar-Teaser-Poster.jpg',
                'created_at' => '2018-09-19 00:00:00',
                'updated_at' => '2018-09-19 00:00:00',
            ],
            [
                'name' => 'Avengers Infinity War',
                'slug' => 'avengers-infinity-war',
                'description' => 'Avengers test test',
                'realease_date' => '2005-05-04',
                'rating' => '3',
                'ticket_Price' => '20',
                'country' => 'USA',
                'genre' => 'USA',
                'photo' => 'Avengers_Infinity_War_poster.jpg',
                'created_at' => '2018-09-19 00:00:00',
                'updated_at' => '2018-09-19 00:00:00',
            ],
            [
                'name' => 'The Avengers',
                'slug' => 'the-avengers',
                'description' => 'Avengers First test test',
                'realease_date' => '2005-05-04',
                'rating' => '3',
                'ticket_Price' => '20',
                'country' => 'USA',
                'genre' => 'USA',
                'photo' => 'TheAvengers2012Poster.jpg',
                'created_at' => '2018-09-19 00:00:00',
                'updated_at' => '2018-09-19 00:00:00',
            ],

        ]);
    }
}
