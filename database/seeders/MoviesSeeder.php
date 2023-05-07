<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert(
            [
            'id'                     => '1',
            'title'                  => 'I Dream in Another Language',
            'description'            => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like',
            'genre'                  => 'Action, Triller',
            'quality'                => 'HD',
            'country'                => 'USA',
            'running_time'           => '120 minutes',
            'image'                  => 'import/img/covers/cover.jpg',
            'release_year'           => '2017',
            'season'                 => '1',
            'rating'                 => '8.4',
            ]
            );
        DB::table('movies')->insert(
            [
            'id'                     => '2',
            'title'                  => 'Whitney',
            'description'            => 'It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like',
            'genre'                  => 'Romance, Drama, Music',
            'quality'                => 'Full HD',
            'country'                => 'Spain',
            'running_time'           => '130 minutes',
            'image'                  => 'import/img/covers/cover2.jpg',
            'release_year'           => '2018',
            'season'                 => '2',
            'rating'                 => '6.3',
            ]
            );
        DB::table('movies')->insert(
            [
            'id'                     => '3',
            'title'                  => 'I Dream in Another Languages',
            'description'            => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt',
            'genre'                  => 'Romance',
            'quality'                => 'Ultra HD',
            'country'                => 'Philippines',
            'running_time'           => '120 minutes',
            'image'                  => 'import/img/covers/cover3.jpg',
            'release_year'           => '2016',
            'season'                 => '2',
            'rating'                 => '8.4',
            ]
            );
        DB::table('movies')->insert(
            [
            'id'                     => '4',
            'title'                  => 'Benched',
            'description'            => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'genre'                  => 'Comedy',
            'quality'                => 'HD',
            'country'                => 'Hongkong',
            'running_time'           => '110 minutes',
            'image'                  => 'import/img/covers/cover4.jpg',
            'release_year'           => '2010',
            'season'                 => '1',
            'rating'                 => '7.1',
            ]
            );
        DB::table('movies')->insert(
            [
            'id'                     => '5',
            'title'                  => 'Blindspotting',
            'description'            => 'Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose',
            'genre'                  => 'Comedy, Drama',
            'quality'                => 'HD',
            'country'                => 'USA',
            'running_time'           => '120 minutes',
            'image'                  => 'import/img/covers/cover5.jpg',
            'release_year'           => '2019',
            'season'                 => '1',
            'rating'                 => '7.9',
            ]
            );
        DB::table('movies')->insert(
            [
            'id'                     => '6',
            'title'                  => 'Benched',
            'description'            => 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum',
            'genre'                  => 'Comedy',
            'quality'                => 'Ultr HD',
            'country'                => 'China',
            'running_time'           => '115 minutes',
            'image'                  => 'import/img/covers/cover6.jpg',
            'release_year'           => '2017',
            'season'                 => '2',
            'rating'                 => '7.1',
            ]
            );
    }
}
