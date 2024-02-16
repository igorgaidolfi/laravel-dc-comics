<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DcComic;

class DcComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $DcComics = config('dccomics');

        foreach($DcComics as $DcComic){
            $new_comic = new DcComic();
            $new_comic->title = $DcComic['title'];
            $new_comic->description = $DcComic['description'];
            $new_comic->thumb = $DcComic['thumb'];
            $new_comic->price = $DcComic['price'];
            $new_comic->series = $DcComic['series'];
            $new_comic->sale_date = $DcComic['sale_date'];
            $new_comic->type = $DcComic['type'];
            $new_comic->artists = implode(",", $DcComic['artists']);
            $new_comic->writers = implode(",", $DcComic['writers']);
            $new_comic->save();
        }
    }
}
