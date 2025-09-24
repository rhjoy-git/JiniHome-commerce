<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $menus = [
            ['name' => 'Products', 'url' => '/products', 'page' => 'home'],
            ['name' => 'About Us', 'url' => '/about-us', 'page' => 'about-us'],
            ['name' => 'Blog', 'url' => '/blog', 'page' => 'blog'],
            ['name' => 'Contact Us', 'url' => '/contact', 'page' => 'contact-us'],
        ];

        $categories = [
            [
                'name' => 'Cameras',
                'slug' => 'cameras',
                'image' => 'https://placehold.co/292x300/EAEAEA/000000?text=Cameras',
            ],
            [
                'name' => 'Air Purifier',
                'slug' => 'air-purifiers',
                'image' => 'https://placehold.co/292x300/EAEAEA/000000?text=Air+Purifier',
            ],
            [
                'name' => 'Speaker',
                'slug' => 'speakers',
                'image' => 'https://placehold.co/292x300/EAEAEA/000000?text=Speaker',
            ],
            [
                'name' => 'Vacuum Cleaner',
                'slug' => 'vacuum-cleaners',
                'image' => 'https://placehold.co/292x300/EAEAEA/000000?text=Vacuum+Cleaner',
            ],
            [
                'name' => 'Cameras',
                'slug' => 'cameras',
                'image' => 'https://placehold.co/292x300/EAEAEA/000000?text=Cameras',
            ],
            [
                'name' => 'Air Purifier',
                'slug' => 'air-purifiers',
                'image' => 'https://placehold.co/292x300/EAEAEA/000000?text=Air+Purifier',
            ],
            [
                'name' => 'Speaker',
                'slug' => 'speakers',
                'image' => 'https://placehold.co/292x300/EAEAEA/000000?text=Speaker',
            ],
            [
                'name' => 'Vacuum Cleaner',
                'slug' => 'vacuum-cleaners',
                'image' => 'https://placehold.co/292x300/EAEAEA/000000?text=Vacuum+Cleaner',
            ],
        ];

        return view('home', compact('menus', 'categories'));
    }

    public function aboutUs()
    {
        return view('about-us');
    }

    public function products()
    {
        return view('products');
    }
}
