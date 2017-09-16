<?php

use App\Menu;
use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::insert([
            [
                'title' => 'Home',
                'desc' => 'Home page',
                'url' => '/',
                'menu_order' => 1,
            ],
            [
                'title' => 'About',
                'desc' => 'About page',
                'url' => '/about',
                'menu_order' => 2,
            ],
            [
                'title' => 'Posts',
                'desc' => 'Posts page',
                'url' => '/posts',
                'menu_order' => 3,
            ],
            [
                'title' => 'Contact',
                'desc' => 'Contact page',
                'url' => '/contact',
                'menu_order' => 4,
            ],
        ]);
    }
}
