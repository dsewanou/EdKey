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
                ['icon' => 'bi bi-clipboard-check', 'title' => 'Acquisition des compétences et évaluations', 'text' => 'Suivi précis des acquis pour tous les niveaux, du primaire au supérieur.', 'url' => '#'],
                ['icon' => 'bi bi-graph-up-arrow', 'title' => 'Performance de gestion des établissements', 'text' => 'Outils de pilotage avancés pour optimiser la performance opérationnelle.', 'url' => '#'],
                ['icon' => 'bi bi-calendar3', 'title' => 'Emplois du temps et ressources', 'text' => 'Gestion intelligente des plannings, des salles et des ressources matérielles.', 'url' => '#'],
                ['icon' => 'bi bi-map', 'title' => 'Administration de la carte scolaire', 'text' => 'Gestion géographique et sectorisation optimisée pour chaque région.', 'url' => '#'],
                ['icon' => 'bi bi-bell', 'title' => 'Correspondances & Notifications', 'text' => 'Communication instantanée avec les parents via alertes et messages.', 'url' => '#'],
                ['icon' => 'bi bi-person-plus', 'title' => 'Inscriptions scolaires et universitaires', 'text' => 'Digitalisation complète des processus d\'inscription multi-niveaux.', 'url' => '#'],
                ['icon' => 'bi bi-journal-bookmark', 'title' => 'Gestion des Curricula', 'text' => 'Planification et structuration complète des programmes d\'enseignement.', 'url' => '#'],
                ['icon' => 'bi bi-laptop', 'title' => 'eLearning / eClassroom', 'text' => 'Enseignement à distance et classes virtuelles pour une éducation moderne.', 'url' => '#'],
                ['icon' => 'bi bi-pie-chart', 'title' => 'Élaboration de Statistiques', 'text' => 'Analyse détaillée des flux et des performances pour une gestion éclairée.', 'url' => '#'],
                ['icon' => 'bi bi-people', 'title' => 'Gestion de la vie Scolaire', 'text' => 'Suivi de l\'assiduité, de la discipline et de l\'ambiance au sein de l\'école.', 'url' => '#'],
                ['icon' => 'bi bi-box-seam', 'title' => 'Comptabilité matérielle', 'text' => 'Inventaire et suivi rigoureux du patrimoine mobilier et immobilier.', 'url' => '#'],
                ['icon' => 'bi bi-person-workspace', 'title' => 'Portail des enseignants', 'text' => 'Espace collaboratif pour la saisie des notes et le suivi pédagogique.', 'url' => '#'],
                ['icon' => 'bi bi-mortarboard', 'title' => 'Portail des apprenants', 'text' => 'Accès centralisé aux cours, résultats et ressources pour tous les élèves.', 'url' => '#'],
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
