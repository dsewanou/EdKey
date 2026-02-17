<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        return response()->json($this->getLandingPageData());
    }

    private function getLandingPageData()
    {
        return [
            'heroSlides' => [
                [
                    'bg_img' => 'assets/images/hero/hero-bg-2.jpg',
                    'pre_title' => 'Digital Marketing',
                    'title' => 'Digital Marketing For Your growing <span class="featured-text">business</span>',
                    'subtitle' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore sint explicabo necessitatibus voluptates labore, dolorum dolorem laboriosam debitis ea delectus.',
                    'ctas' => [
                        ['class' => 'btn-solid cta-link cta-link-primary', 'url' => '#0', 'text' => 'start now'],
                    ],
                    'video_url' => 'https://www.youtube.com/watch?v=QI4_dGvZ5yE'
                ],
                [
                    'bg_img' => 'assets/images/hero/hero-bg-1.jpg',
                    'pre_title' => 'IT solutions',
                    'title' => 'providing best services & IT <span class="featured-text">solutions</span>',
                    'subtitle' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore sint explicabo necessitatibus voluptates labore, dolorum dolorem laboriosam debitis ea delectus.',
                    'ctas' => [
                        ['class' => 'btn-solid cta-link cta-link-primary', 'url' => '#0', 'text' => 'start now'],
                        ['class' => 'btn-outline cta-link', 'url' => '#0', 'text' => 'Contact us'],
                    ]
                ],
            ],
            'services' => [
                ['icon' => 'flaticon-web-development', 'title' => 'web development', 'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque repellendus minima reiciendis nobis dolore obcaecati.', 'url' => '#'],
                ['icon' => 'flaticon-nanotechnology', 'title' => 'Digital Marketing', 'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque repellendus minima reiciendis nobis dolore obcaecati.', 'url' => '#'],
                ['icon' => 'flaticon-web-domain', 'title' => 'SaaS products', 'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque repellendus minima reiciendis nobis dolore obcaecati.', 'url' => '#'],
                ['icon' => 'flaticon-profile', 'title' => 'Apps development', 'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque repellendus minima reiciendis nobis dolore obcaecati.', 'url' => '#'],
                ['icon' => 'flaticon-search', 'title' => 'SEO services', 'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque repellendus minima reiciendis nobis dolore obcaecati.', 'url' => '#'],
                ['icon' => 'flaticon-strategy', 'title' => 'data analysis', 'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque repellendus minima reiciendis nobis dolore obcaecati.', 'url' => '#'],
            ],
            'stats' => [
                ['icon' => 'flaticon-project-management', 'number' => 750, 'label' => 'finished projects'],
                ['icon' => 'flaticon-content-management', 'number' => 23, 'label' => 'Created jobs'],
                ['icon' => 'flaticon-user', 'number' => 200, 'label' => 'happy customers'],
                ['icon' => 'flaticon-aim', 'number' => 28, 'label' => 'years Of experience'],
            ],
            'portfolioCategories' => [
                ['name' => 'mobile apps', 'slug' => 'mobile'],
                ['name' => 'cloud', 'slug' => 'web'],
                ['name' => 'data analysis', 'slug' => 'data'],
                ['name' => 'hosting', 'slug' => 'hosting'],
            ],
            'portfolioItems' => [
                ['title' => 'mobile apps', 'category_slug' => 'mobile', 'image' => 'assets/images/portfolio/1.jpg'],
                ['title' => 'cloud', 'category_slug' => 'web', 'image' => 'assets/images/portfolio/2.jpg'],
                ['title' => 'data analysis', 'category_slug' => 'data', 'image' => 'assets/images/portfolio/3.jpg'],
            ],
            'testimonials' => [
                ['name' => 'Yusuf amin', 'role' => 'founder', 'image' => 'assets/images/testimonials/1.png', 'text' => 'ipsum dolor sit amet consectetur adipisicing elit. Quod, id sequi aut qui est ab, corporis quis maiores reiciendis explicabo odio tenetur nulla sint vel.'],
                ['name' => 'fouad osman', 'role' => 'officer', 'image' => 'assets/images/testimonials/2.png', 'text' => 'ipsum dolor sit amet consectetur adipisicing elit. Quod, id sequi aut qui est ab, corporis quis maiores reiciendis explicabo odio tenetur nulla sint vel.'],
                ['name' => 'fairouz mhmd', 'role' => 'manager', 'image' => 'assets/images/testimonials/3.png', 'text' => 'ipsum dolor sit amet consectetur adipisicing elit. Quod, id sequi aut qui est ab, corporis quis maiores reiciendis explicabo odio tenetur nulla sint vel.'],
            ],
            'pricingPlans' => [
                [
                    'name' => 'free plan',
                    'price' => '00',
                    'per' => 'per project',
                    'icon' => 'flaticon-nft-1',
                    'featured' => false,
                    'features' => [
                        '150 Lorem, ipsum dolor.',
                        '20 Lorem ipsum dolor sit .',
                        'Lorem ipsum dolor sit.',
                        'free Lorem ipsum dolor .',
                        'added Lorem ipsum dolor.'
                    ]
                ],
                [
                    'name' => 'standerd plan',
                    'price' => '85',
                    'per' => 'per project',
                    'icon' => 'flaticon-virtual-reality',
                    'featured' => false,
                    'features' => [
                        '150 Lorem, ipsum dolor.',
                        '20 Lorem ipsum dolor sit .',
                        'Lorem ipsum dolor sit.',
                        'free Lorem ipsum dolor .',
                        'added Lorem ipsum dolor.'
                    ]
                ],
                [
                    'name' => 'pro plan',
                    'price' => '150',
                    'per' => 'per project',
                    'icon' => 'flaticon-box',
                    'featured' => true,
                    'features' => [
                        '150 Lorem, ipsum dolor.',
                        '20 Lorem ipsum dolor sit .',
                        'Lorem ipsum dolor sit.',
                        'free Lorem ipsum dolor .',
                        'added Lorem ipsum dolor.'
                    ]
                ],
                [
                    'name' => 'ultimate plan',
                    'price' => '210',
                    'per' => 'per project',
                    'icon' => 'flaticon-basic-shapes',
                    'featured' => false,
                    'features' => [
                        '150 Lorem, ipsum dolor.',
                        '20 Lorem ipsum dolor sit .',
                        'Lorem ipsum dolor sit.',
                        'free Lorem ipsum dolor .',
                        'added Lorem ipsum dolor.'
                    ]
                ],
            ],
            'blogPosts' => [
                ['title' => 'How litespeed technology works to speed up your site', 'category' => 'hosting', 'author' => 'Allan Moore', 'day' => '05', 'month_year' => 'oct 2022', 'image' => 'assets/images/blog/post-images/1.jpg', 'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.Iure nulla dolorem, voluptates molestiae'],
                ['title' => 'give your website a new look and feel with themes', 'category' => 'web dev', 'author' => 'mhmd amin', 'day' => '15', 'month_year' => 'sep 2022', 'image' => 'assets/images/blog/post-images/2.jpg', 'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.Iure nulla dolorem, voluptates molestiae'],
            ],
            'clients' => [
                ['name' => 'Client 1', 'logo' => 'assets/images/clients-logos/1-white.png'],
                ['name' => 'Client 2', 'logo' => 'assets/images/clients-logos/2-white.png'],
                ['name' => 'Client 3', 'logo' => 'assets/images/clients-logos/3-white.png'],
                ['name' => 'Client 4', 'logo' => 'assets/images/clients-logos/4-white.png'],
                ['name' => 'Client 5', 'logo' => 'assets/images/clients-logos/5-white.png'],
                ['name' => 'Client 6', 'logo' => 'assets/images/clients-logos/6-white.png'],
                ['name' => 'Client 7', 'logo' => 'assets/images/clients-logos/7-white.png'],
            ],
            'offices' => [
                [
                    'city' => 'New york',
                    'address' => 'United States, 307 Wilshire, 2nd av. new york 3516.',
                    'email' => 'info@example.com',
                    'phone' => '+29876543210',
                    'delay' => '.4s'
                ],
                [
                    'city' => 'London',
                    'address' => 'United kingdom, 12 smith town, 2nd av. London 2159.',
                    'email' => 'info@example.com',
                    'phone' => '+969876543210',
                    'delay' => '.6s'
                ],
                [
                    'city' => 'tokio',
                    'address' => 'Japan, 307 chinzo appy road, portsika way. tokio 3516.',
                    'email' => 'info@example.com',
                    'phone' => '+459876543210',
                    'delay' => '.8s'
                ],
            ],
        ];
    }
}
