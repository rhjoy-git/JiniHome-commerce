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
                'image' => 'images/products/camera.png',
                'another_image' => 'images/products/cc-camera.png',
            ],
            [
                'name' => 'Air Purifier',
                'slug' => 'air-purifiers',
                'image' => 'images/products/air-pure.png',
                'another_image' => 'images/products/air-pure.png',
            ],
            [
                'name' => 'Speaker',
                'slug' => 'speakers',
                'image' => 'images/products/speaker.png',
                'another_image' => 'images/products/speaker.png',
            ],
            [
                'name' => 'Vacuum Cleaner',
                'slug' => 'vacuum-cleaners',
                'image' => 'images/products/vaccum.png',
                'another_image' => 'images/products/vaccum.png',
            ],
            [
                'name' => 'Smart Lock',
                'slug' => 'smart-lock',
                'image' => 'images/products/smart-lock.png',
                'another_image' => 'images/products/smart-lock-black.png',
            ],
            [
                'name' => 'Smart TV',
                'slug' => 'smart-tv',
                'image' => 'images/products/smart_tv.png',
                'another_image' => 'images/products/smart_tv_boro.png',
            ],
            [
                'name' => 'Smoke Detector',
                'slug' => 'smoke-detector',
                'image' => 'images/products/smoke-detector.png',
                'another_image' => 'images/products/smoke-detector.png',
            ],
            [
                'name' => 'Thermostats',
                'slug' => 'thermostats',
                'image' => 'images/products/thermostates.png',
                'another_image' => 'images/products/thermostats-black.png',
            ],
        ];

        $smartSections = [
            [
                'title' => 'Your Home, Always Secured',
                'description' => 'Smart cameras and locks work together to keep your home secure. Clear views, instant alerts, and keyless entry – all in one app.',
                'button' => 'Get Security Camera',
                'image' => 'images/banner/security-camera.png',
                'reverse' => false,
                'special' => false
            ],
            [
                'title' => 'Air You’ll Love to Breathe.',
                'description' => 'Our air purifiers quietly remove dust, allergens, and odors — so every breath feels fresh.',
                'button' => 'Shop Air Purifiers',
                'image' => 'images/banner/air-purifier.png',
                'reverse' => true,
                'special' => false
            ],
            [
                'title' => 'Your Home, Your Stage.',
                'description' => 'Stunning visuals, rich sound, and hands-free control.',
                'button' => 'Discover Comfort',
                'image' => 'images/banner/tv.png',
                'reverse' => false,
                'special' => true
            ],
            [
                'title' => 'Comfort Made Simple',
                'description' => 'From thermostats that learn your routine to plugs that make any device smart – Lumio keeps you in control.',
                'button' => 'Discover Comfort',
                'image' => 'images/banner/thermostat.png',
                'reverse' => true,
                'special' => false
            ],
            [
                'title' => 'Cleaning Made Effortless',
                'description' => 'Our robot vacuum quietly takes care of floors so you can spend more time living, not cleaning.',
                'button' => 'Shop Cleaning',
                'image' => 'images/banner/robot-vacuum.png',
                'reverse' => false,
                'special' => false
            ],
        ];

$footerData = [
    'logo' => 'images/logo.png',
    'description' => 'Your trusted partner in smart home solutions, delivering innovation and comfort since 2020.',
    'quickLinksTitle' => 'Quick Links',
    'quickLinks' => [
        ['text' => 'Home', 'url' => '/'],
        ['text' => 'Shop', 'url' => '/shop'],
        ['text' => 'About Us', 'url' => '/about-us'],
        ['text' => 'Blog', 'url' => '/blog'],
    ],
    'supportTitle' => 'Support',
    'supportLinks' => [
        ['text' => 'Contact Us', 'url' => '/contact'],
        ['text' => 'FAQs', 'url' => '/faqs'],
        ['text' => 'Returns', 'url' => '/returns'],
        ['text' => 'Guides', 'url' => '/guides'],
    ],
    'socialTitle' => 'Follow Us',
    'socialLinks' => [
        ['url' => 'https://facebook.com'],
        ['url' => 'https://twitter.com'],
        ['url' => 'https://instagram.com'],
        ['url' => 'https://linkedin.com'],
    ],
    'copyright' => '© 2025 Jini’s Home. All rights reserved.',
];

        return view('home', compact('menus', 'categories', 'smartSections', 'footerData'));
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
