<?php

use App\Page;
use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::insert([
            [
                'title' => 'Clean Blog',
                'identifier' => 'home',
                'short_desc' => 'A Blog Theme by Start Bootstrap',
                'body' => '',
                'cover_img' => 'img/home-bg.jpg',
            ],
            [
                'title' => 'About Me',
                'identifier' => 'about',
                'short_desc' => 'This is what I do.',
                'body' => '',
                'cover_img' => 'img/home-bg.jpg',
            ],
            [
                'title' => 'Contact Me',
                'identifier' => 'contact',
                'short_desc' => 'I can answer your questions (maybe).',
                'body' => '',
                'cover_img' => 'img/home-bg.jpg',
            ],
        ]);
    }
}
