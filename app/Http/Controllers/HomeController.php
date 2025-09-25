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
            'logo' => 'logo-jin',
            'description' => 'Gadgets made simple.',
            'links' => [
                [
                    'title' => 'Company',
                    'items' => [
                        ['text' => 'About Us', 'url' => '/about-us'],
                        ['text' => 'Careers', 'url' => '/careers'],
                        ['text' => 'Press', 'url' => '/press-media'],
                        ['text' => 'Contact', 'url' => '/contact-us'],
                    ]
                ],
                [
                    'title' => 'Store',
                    'items' => [
                        ['text' => 'Tracking an Order', 'url' => '/track-order'],
                        ['text' => 'Shipping Options', 'url' => '/shipping-options'],
                        ['text' => 'Returns', 'url' => '/returns'],
                        ['text' => 'Store Locations', 'url' => '/store-locations'],
                    ]
                ],
                [
                    'title' => 'Support',
                    'items' => [
                        ['text' => 'Get Help', 'url' => '/get-help'],
                        ['text' => 'Repairs', 'url' => '/repair'],
                        ['text' => 'Installations', 'url' => '/installations'],
                        ['text' => 'Fax', 'url' => '/fax'],
                    ]
                ],
            ],
            'socialTitle' => 'Follow Us',
            'socialLinks' => [
                ['url' => 'https://meta.com', 'icon' => 'meta'],
                ['url' => 'https://youtube.com', 'icon' => 'youtube'],
                ['url' => 'https://telegram.com', 'icon' => 'telegram'],
                ['url' => 'https://whatsapp.com', 'icon' => 'whatsapp'],
                ['url' => 'https://tiktok.com', 'icon' => 'tiktok'],
            ],
            'copyright' => 'Copyright © ' . date('Y') . ' <a class="hover:text-white" href="https://endbrackets.com/" target="_blank">End Brackets</a>. All rights reserved.',
        ];


        $testimonials = [
            [
                'name' => 'Aisha Rahman',
                'role' => 'Stay-at-home mom',
                'avatar' => 'https://i.pravatar.cc/100?img=1',
                'text' => 'The design feels premium and blends right into my space. I’ve had guests ask about it because it looks more like decor than a gadget.',
                'verified' => true,
            ],
            [
                'name' => 'Mina Daily',
                'role' => '20k followers',
                'avatar' => 'https://i.pravatar.cc/100?img=2',
                'video' => 'videos/testimonial-1.mp4',
                'verified' => true,
            ],
            [
                'name' => 'Daniel Kim',
                'role' => 'University student',
                'avatar' => 'https://i.pravatar.cc/100?img=3',
                'text' => 'Setup was quick and easy. Within minutes everything was connected and running smoothly. No complicated steps, no frustration.',
                'verified' => true,
            ],
            [
                'name' => 'Rahul Rob',
                'role' => '200k followers',
                'avatar' => 'https://i.pravatar.cc/100?img=4',
                'image' => 'https://picsum.photos/id/1012/600/400',
                'verified' => true,
            ],
            [
                'name' => 'Nabila Hasan',
                'role' => 'Small business owner',
                'avatar' => 'https://i.pravatar.cc/100?img=7',
                'text' => 'The app feels light and easy to use. I can adjust things in seconds and check in on my home from anywhere. It’s become part of my daily routine.',
                'verified' => true,
            ],
            [
                'name' => 'Sofia Creates',
                'role' => '3k followers',
                'avatar' => 'https://i.pravatar.cc/100?img=5',
                'video' => 'videos/testimonial-2.mp4',
                'verified' => true,
            ],
            [
                'name' => 'Nahid Ireen',
                'role' => 'Tech enthusiast',
                'avatar' => 'https://i.pravatar.cc/100?img=8',
                'text' => 'I feel safer and more in control of my home. With the camera and lock always on, I finally have peace of mind knowing everything is protected.',
                'verified' => true,
            ],
            [
                'name' => 'Piku The Great',
                'role' => '11k followers',
                'avatar' => 'https://i.pravatar.cc/100?img=6',
                'image' => 'https://picsum.photos/id/1014/600/400',
                'verified' => true,
            ],
            [
                'name' => 'Aisha Rahman',
                'role' => 'Stay-at-home mom',
                'avatar' => 'https://i.pravatar.cc/100?img=1',
                'text' => 'The design feels premium and blends right into my space. I’ve had guests ask about it because it looks more like decor than a gadget.',
                'verified' => true,
            ],
            [
                'name' => 'Mina Daily',
                'role' => '20k followers',
                'avatar' => 'https://i.pravatar.cc/100?img=2',
                'video' => 'videos/testimonial-3.mp4',
                'verified' => true,
            ],
            [
                'name' => 'Daniel Kim',
                'role' => 'University student',
                'avatar' => 'https://i.pravatar.cc/100?img=3',
                'text' => 'Setup was quick and easy. Within minutes everything was connected and running smoothly. No complicated steps, no frustration.',
                'verified' => true,
            ],
            [
                'name' => 'Rahul Rob',
                'role' => '200k followers',
                'avatar' => 'https://i.pravatar.cc/100?img=4',
                'image' => 'https://picsum.photos/id/1012/600/400',
                'verified' => true,
            ],
            [
                'name' => 'Nabila Hasan',
                'role' => 'Small business owner',
                'avatar' => 'https://i.pravatar.cc/100?img=7',
                'text' => 'The app feels light and easy to use. I can adjust things in seconds and check in on my home from anywhere. It’s become part of my daily routine.',
                'verified' => true,
            ],
            [
                'name' => 'Sofia Creates',
                'role' => '3k followers',
                'avatar' => 'https://i.pravatar.cc/100?img=5',
                'video' => 'videos/testimonial-4.mp4',
                'verified' => true,
            ],
            [
                'name' => 'Nahid Ireen',
                'role' => 'Tech enthusiast',
                'avatar' => 'https://i.pravatar.cc/100?img=8',
                'text' => 'I feel safer and more in control of my home. With the camera and lock always on, I finally have peace of mind knowing everything is protected.',
                'verified' => true,
            ],
            [
                'name' => 'Piku The Great',
                'role' => '11k followers',
                'avatar' => 'https://i.pravatar.cc/100?img=6',
                'image' => 'https://picsum.photos/id/1014/600/400',
                'verified' => true,
            ],
        ];

        $blogs = [
            [
                'title' => '5 Easy Ways to Make Your Home Smarter',
                'category' => 'Quick Guides',
                'image' => 'images/blog/blog-1.png',
            ],
            [
                'title' => 'How Smart Cameras Keep Your Home Safer',
                'category' => 'Camera',
                'image' => 'images/blog/blog-2.png',
            ],
            [
                'title' => 'Robot Vacuums: Do They Really Work?',
                'category' => 'Vacuum',
                'image' => 'images/blog/blog-3.png',
            ],
        ];

        $faqs = [
            [
                'question' => 'How do I set up my Orbix devices?',
                'answer' => 'Setup is fast and straightforward. Just plug in your device, open the Jinihome app, and follow the easy step-by-step instructions. Most devices will be ready to use in just a few minutes.'
            ],
            [
                'question' => 'Can I control my devices from anywhere?',
                'answer' => 'Yes, once connected to Wi-Fi, you can control your Orbix devices from anywhere using the Jinihome app.'
            ],
            [
                'question' => 'Are Lumio products compatible with voice assistants?',
                'answer' => 'Yes, Lumio products work seamlessly with popular voice assistants like Alexa and Google Assistant.'
            ],
            [
                'question' => 'What is the warranty period for Orbix products?',
                'answer' => 'All Orbix products come with a 1-year limited warranty covering manufacturing defects.'
            ],
            [
                'question' => 'How do I update the firmware on my devices?',
                'answer' => 'Firmware updates are managed directly in the Jinihome app. Simply check for updates under device settings.'
            ],
        ];

        return view('home', compact('menus', 'categories', 'smartSections', 'footerData', 'testimonials', 'blogs', 'faqs'));
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
