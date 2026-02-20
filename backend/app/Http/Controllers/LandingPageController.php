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
                    'pre_title' => 'Éducation de Demain',
                    'title' => 'Propulsez votre <span class="featured-text">Établissement</span>',
                    'subtitle' => 'Centralisez votre gestion académique, administrative et financière avec EdKey.',
                    'ctas' => [
                        ['class' => 'btn-solid cta-link cta-link-primary', 'url' => '#0', 'text' => 'Commencer maintenant'],
                    ],
                    'video_url' => 'https://www.youtube.com/watch?v=QI4_dGvZ5yE'
                ],
                [
                    'bg_img' => 'assets/images/hero/hero-bg-1.png',
                    'pre_title' => 'Innovation',
                    'title' => 'Innovez avec <span class="featured-text">EdKey</span>',
                    'subtitle' => 'Une plateforme moderne et intuitive pour simplifier le quotidien de vos équipes.',
                    'ctas' => [
                        ['class' => 'btn-solid cta-link cta-link-primary', 'url' => '#0', 'text' => 'Commencer maintenant'],
                        ['class' => 'btn-outline cta-link', 'url' => '/contact-us', 'text' => 'Contactez-nous'],
                    ]
                ],
                [
                    'bg_img' => 'assets/images/hero/hero-bg-3.jpg',
                    'pre_title' => 'Performance',
                    'title' => 'Maîtrisez vos <span class="featured-text">Données</span>',
                    'subtitle' => 'Optimisez votre gestion grâce à nos tableaux de bord analytiques en temps réel.',
                    'ctas' => [
                        ['class' => 'btn-solid cta-link cta-link-primary', 'url' => '#0', 'text' => 'Voir la démo'],
                        ['class' => 'btn-outline cta-link', 'url' => '/contact-us', 'text' => 'Nous contacter'],
                    ]
                ],
                [
                    'bg_img' => 'assets/images/hero/hero-bg-4.png',
                    'pre_title' => 'Efficacité',
                    'title' => 'Simplifiez votre <span class="featured-text">Quotidien</span>',
                    'subtitle' => 'Des outils intuitifs pour libérer du temps et se concentrer sur l\'essentiel : l\'enseignement.',
                    'ctas' => [
                        ['class' => 'btn-solid cta-link cta-link-primary', 'url' => '#0', 'text' => 'Commencer gratuitement'],
                        ['class' => 'btn-outline cta-link', 'url' => '/contact-us', 'text' => 'Nous contacter'],
                    ]
                ],
            ],
            'services' => [
                ['icon' => 'bi bi-person-check', 'title' => 'Inscriptions scolaires et universitaires', 'text' => 'Digitalisation complète des formalités d\'inscription et de réinscription.', 'url' => '#'],
                ['icon' => 'bi bi-graph-up-arrow', 'title' => 'Performance de gestion des établissements', 'text' => 'Outils de pilotage avancés pour optimiser la performance opérationnelle et stratégique.', 'url' => '#'],
                ['icon' => 'bi bi-calendar3', 'title' => 'Emplois du temps et ressources', 'text' => 'Gestion intelligente des plannings, des salles et des ressources matérielles.', 'url' => '#'],
                ['icon' => 'bi bi-map', 'title' => 'Administration de la carte scolaire & universitaire', 'text' => 'Gestion géographique optimisée pour tous les ordres d\'enseignement.', 'url' => '#'],
                ['icon' => 'bi bi-bell', 'title' => 'Correspondances & Notifications', 'text' => 'Communication instantanée avec les parents et étudiants via alertes et messages.', 'url' => '#'],
                ['icon' => 'bi bi-person-plus', 'title' => 'Gestion des admissions universitaires', 'text' => 'Processus numérique de sélection et d\'admission des nouveaux étudiants.', 'url' => '#'],
                ['icon' => 'bi bi-laptop', 'title' => 'eLearning / eClassroom', 'text' => 'Enseignement à distance et classes virtuelles pour une éducation moderne.', 'url' => '#'],
                ['icon' => 'bi bi-pie-chart', 'title' => 'Élaboration de Statistiques', 'text' => 'Analyse détaillée des flux et des performances pour une gestion éclairée.', 'url' => '#'],
                ['icon' => 'bi bi-box-seam', 'title' => 'Comptabilité matérielle', 'text' => 'Inventaire et suivi rigoureux du patrimoine mobilier et immobilier.', 'url' => '#'],
                ['icon' => 'bi bi-clipboard-check', 'title' => 'Acquisition des compétences et évaluations', 'text' => 'Suivi précis des acquis pour tous les niveaux, du primaire au supérieur.', 'url' => '#'],
                ['icon' => 'bi bi-people', 'title' => 'Gestion de la vie Scolaire & Universitaire', 'text' => 'Suivi de l\'assiduité, de la discipline et de l\'ambiance au sein des campus.', 'url' => '#'],
                ['icon' => 'bi bi-house-door', 'title' => 'Gestion des Établissements Privés', 'text' => 'Suivi et régulation des Établissements Privés d’Enseignement Supérieur.', 'url' => '#'],
                ['icon' => 'bi bi-person-workspace', 'title' => 'Portail des enseignants', 'text' => 'Espace collaboratif pour la saisie des notes et le suivi pédagogique.', 'url' => '#'],
                ['icon' => 'bi bi-mortarboard', 'title' => 'Portail des apprenants', 'text' => 'Accès centralisé aux cours, résultats et ressources pour tous les élèves et étudiants.', 'url' => '#'],
                ['icon' => 'bi bi-card-heading', 'title' => 'Carte Universitaire', 'text' => 'Émission et gestion des cartes d\'étudiants et d\'enseignants multi-services.', 'url' => '#'],
                ['icon' => 'bi bi-house-door', 'title' => 'Résidences Universitaires', 'text' => 'Attribution et gestion optimisée de l\'hébergement en résidences universitaires.', 'url' => '#'],
                ['icon' => 'bi bi-journal-bookmark', 'title' => 'Gestion des Curricula', 'text' => 'Planification et structuration complète des programmes d\'enseignement.', 'url' => '#'],
                ['icon' => 'bi bi-journal-check', 'title' => 'Délivrance des actes scolaires', 'text' => 'Automatisation de l\'édition et de la délivrance des bulletins et diplômes scolaires.', 'url' => '#'],
                ['icon' => 'bi bi-file-earmark-check', 'title' => 'Actes Universitaires', 'text' => 'Délivrance, équivalence et authentification sécurisée des actes académiques.', 'url' => '#'],
                ['icon' => 'bi bi-robot', 'title' => 'Intégration de l\'IA', 'text' => 'Automatisation intelligente et analyses prédictives pour assister la prise de décision.', 'url' => '#'],
                ['icon' => 'bi bi-hdd-network', 'title' => 'Intégration aux systèmes', 'text' => 'Connectivité fluide avec des outils tiers et APIs externes pour un écosystème unifié.', 'url' => '#'],
                ['icon' => 'bi bi-shield-lock', 'title' => 'Gestion de la Sécurité et de l\'Audit', 'text' => 'Couches de sécurité robustes complète des activités pour une traçabilité totale.', 'url' => '#'],
                ['icon' => 'bi bi-paperclip', 'title' => 'Gestion des documents & pièces jointes', 'text' => 'Système de gestion documentaire avancé pour le stockage et le partage sécurisé.', 'url' => '#'],
                ['icon' => 'bi bi-cpu', 'title' => 'Administration de la  plateforme', 'text' => 'Pilotage centralisé et configuration avancée pour une gestion totale de l\'écosystème.', 'url' => '#'],

            ],
            'stats' => [
                ['icon' => 'bi bi-clipboard-check', 'number' => 750, 'label' => 'Projets terminés'],
                ['icon' => 'bi bi-briefcase', 'number' => 23, 'label' => 'Emplois créés'],
                ['icon' => 'bi bi-people-fill', 'number' => 200, 'label' => 'Clients satisfaits'],
                ['icon' => 'bi bi-calendar3', 'number' => 28, 'label' => 'Années d\'expérience'],
            ],
            'portfolioCategories' => [
                ['name' => 'Guides & Manuels', 'slug' => 'guides'],
                ['name' => 'Tutoriels Vidéo', 'slug' => 'tutorials'],
                ['name' => 'FAQ', 'slug' => 'support'],
            ],
            'portfolioItems' => [
                [
                    'title' => 'Guide de l\'administrateur',
                    'description' => 'Apprenez à configurer votre établissement et à gérer les accès utilisateurs.',
                    'icon' => 'bi bi-gear',
                    'category_slug' => 'guides',
                    'url' => '#',
                ],
                [
                    'title' => 'Manuel de l\'enseignant',
                    'description' => 'Gérez vos notes, vos cours et vos appels depuis votre espace dédié.',
                    'icon' => 'bi bi-journal-text',
                    'category_slug' => 'guides',
                    'url' => '#',
                ],
                [
                    'title' => 'Guide du parent',
                    'description' => 'Suivez la progression et les bulletins de vos enfants en temps réel.',
                    'icon' => 'bi bi-people',
                    'category_slug' => 'guides',
                    'url' => '#',
                ],
                [
                    'title' => 'Vidéo : Inscriptions',
                    'description' => 'Une démonstration pas-à-pas pour réussir vos inscriptions numériques.',
                    'icon' => 'bi bi-play-circle',
                    'category_slug' => 'tutorials',
                    'url' => '#',
                ],
                [
                    'title' => 'Documentation API',
                    'description' => 'Accédez aux ressources techniques pour intégrer vos solutions avec EdKey.',
                    'icon' => 'bi bi-code-slash',
                    'category_slug' => 'guides',
                    'url' => '#',
                ],
                [
                    'title' => 'FAQ',
                    'description' => 'Trouvez les réponses aux questions fréquentes et contactez l\'assistance.',
                    'icon' => 'bi bi-question-circle',
                    'category_slug' => 'support',
                    'url' => '/faq',
                ],
            ],
            'testimonials' => [
                ['name' => 'Yusuf Amin', 'role' => 'Fondateur', 'image' => 'assets/images/testimonials/1.png', 'text' => 'EdKey a transformé notre gestion quotidienne. La simplicité d\'utilisation et la réactivité du support sont exceptionnelles.'],
                ['name' => 'Fouad Osman', 'role' => 'Directeur d\'Établissement', 'image' => 'assets/images/testimonials/2.png', 'text' => 'Une plateforme intuitive qui répond exactement aux besoins des écoles modernes. Le passage au numérique n\'a jamais été aussi simple.'],
                ['name' => 'Fairouz Mohammed', 'role' => 'Responsable Académique', 'image' => 'assets/images/testimonials/3.png', 'text' => 'La centralisation des données et les outils de pilotage nous permettent de gagner un temps précieux chaque jour.'],
            ],
            'pricingPlans' => [
                [
                    'name' => 'Basique',
                    'price' => '0',
                    'per' => 'par mois',
                    'icon' => 'bi bi-star',
                    'featured' => false,
                    'features' => [
                        'Utilisateurs : Jusqu\'à 50',
                        'Stockage : 5 Go',
                        'Inscriptions scolaires & universitaires',
                        'Portail des apprenants',
                        'Portail des enseignants',
                        'Administration de la plateforme'
                    ]
                ],
                [
                    'name' => 'Standard',
                    'price' => '25.000',
                    'per' => 'par mois',
                    'icon' => 'bi bi-shield-shaded',
                    'featured' => false,
                    'features' => [
                        'Utilisateurs : Jusqu\'à 500',
                        'Stockage : 50 Go',
                        'Inscriptions scolaires & universitaires',
                        'Portail des apprenants',
                        'Portail des enseignants',
                        'Administration de la plateforme',
                        'Emplois du temps & Ressources',
                        'Gestion de la vie Scolaire & Universitaire',
                        'Acquisition des compétences & évaluations',
                        'Délivrance des actes scolaires '
                    ]
                ],
                [
                    'name' => 'Premium',
                    'price' => '75.000',
                    'per' => 'par mois',
                    'icon' => 'bi bi-gem',
                    'featured' => true,
                    'features' => [
                        'Utilisateurs : Jusqu\'à 2000',
                        'Stockage : 200 Go',
                        'Inscriptions scolaires & universitaires',
                        'Portail des apprenants',
                        'Portail des enseignants',
                        'Administration de la plateforme',
                        'Emplois du temps & Ressources',
                        'Gestion de la vie Scolaire & Universitaire',
                        'Acquisition des compétences & évaluations',
                        'Délivrance des actes scolaires',
                        'Correspondances & Notifications',
                        'eLearning / eClassroom',
                        'Comptabilité matérielle & Inventaire',
                        'Gestion documentaire (GED)',
                        'Statistiques de performance'
                    ]
                ],
                [
                    'name' => 'Élite',
                    'price' => '150.000',
                    'per' => 'par mois',
                    'icon' => 'bi bi-trophy-fill',
                    'featured' => false,
                    'features' => [
                        'Utilisateurs : Illimité',
                        'Stockage : 1 To (1000 Go)',
                        'Inscriptions scolaires & universitaires',
                        'Portail des apprenants',
                        'Portail des enseignants',
                        'Administration de la plateforme',
                        'Emplois du temps & Ressources',
                        'Gestion de la vie Scolaire & Universitaire',
                        'Acquisition des compétences & évaluations',
                        'Délivrance des actes scolaires',
                        'Correspondances & Notifications',
                        'eLearning / eClassroom',
                        'Comptabilité matérielle & Inventaire',
                        'Gestion documentaire (GED)',
                        'Statistiques de performance',
                        'Intégration de l\'IA',
                        'Connectivité API (Systèmes tiers)',
                        'Sécurité avancée & Audit complet',
                        'Résidences & cartes universitaires',
                        'Support VIP 24/7'
                    ]
                ],
            ],
            'blogPosts' => [
                ['title' => 'Comment la technologie EdKey booste la réussite scolaire', 'category' => 'Éducation', 'author' => 'Allan Moore', 'day' => '05', 'month_year' => 'oct 2024', 'image' => 'assets/images/blog/post-images/1.jpg', 'excerpt' => 'Découvrez comment nos outils innovants aident les élèves à mieux s\'organiser et à réussir.'],
                ['title' => 'Transformation digitale : par où commencer ?', 'category' => 'Gestion', 'author' => 'Mhmd Amin', 'day' => '15', 'month_year' => 'sep 2024', 'image' => 'assets/images/blog/post-images/2.jpg', 'excerpt' => 'Un guide complet pour accompagner votre établissement vers le tout-numérique.'],
                ['title' => 'Le rôle de l\'IA dans l\'éducation de demain', 'category' => 'Technologie', 'author' => 'Yusuf Amin', 'day' => '27', 'month_year' => 'août 2024', 'image' => 'assets/images/blog/post-images/3.jpg', 'excerpt' => 'Comment l\'intelligence artificielle peut aider les enseignants à personnaliser l\'apprentissage.'],
            ],
            'about' => [
                'vision' => [
                    'pre_title' => 'À propos d\'EdKey',
                    'title' => 'Votre partenaire <span class="hollow-text">de confiance</span> pour l\'excellence <span class="featured-text">éducative</span>',
                    'text' => 'EdKey est né de la volonté de moderniser l\'éducation en offrant des outils de gestion intelligents, sécurisés et intuitifs pour chaque acteur de l\'écosystème scolaire.',
                    'image' => 'assets/images/about/1.png',
                    'features' => [
                        ['icon' => 'bi bi-award-fill', 'title' => 'Expertise Éducative', 'text' => 'Une solution conçue par et pour des professionnels du secteur.'],
                        ['icon' => 'bi bi-stars', 'title' => 'Simple & Intuitive', 'text' => 'Une prise en main rapide pour les parents, enseignants et élèves.'],
                        ['icon' => 'bi bi-shield-check', 'title' => 'Sécurité Maximale', 'text' => 'Vos données sont protégées par les standards de sécurité les plus élevés.'],
                        ['icon' => 'bi bi-headset', 'title' => 'Support Dédié', 'text' => 'Une équipe à votre écoute pour vous accompagner au quotidien.'],
                    ],
                    'cta_text' => 'En savoir plus',
                    'cta_url' => '#',
                ],
                'why_choose_us' => [
                    'pre_title' => 'Pourquoi EdKey ?',
                    'title' => 'Pourquoi les <span class="hollow-text">établissements</span> nous <span class="featured-text">choisissent</span>',
                    'text' => 'Nous ne vendons pas qu\'un logiciel, nous bâtissons l\'avenir numérique de votre établissement avec des stratégies éprouvées.',
                    'image' => 'assets/images/about/2.png',
                    'items' => [
                        ['number' => '01.', 'title' => 'Technologies de Pointe', 'text' => 'Utilisation de l\'IA et du cloud pour une gestion agile et performante.'],
                        ['name' => '02.', 'title' => 'Solutions Uniques', 'text' => 'Des modules personnalisables qui s\'adaptent à vos besoins spécifiques.'],
                        ['number' => '03.', 'title' => 'Vision Stratégique', 'text' => 'Un accompagnement global pour optimiser vos performances académiques.'],
                    ],
                    'cta_text' => 'Contactez-nous',
                    'cta_url' => '/contact-us',
                ]
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
                    'city' => 'CANADA',
                    'address' => '13 rue des rosier; Il Perrot, Québec J7VS7, Canada',
                    'email' => 'akasi-group@akasigroup.com',
                    'phone' => '+1 6038527935',
                    'delay' => '.2s'
                ],
                [
                    'city' => 'KENYA',
                    'address' => 'Riverside Square, Suite B0714 Nairobi, Kenya',
                    'email' => 'akasi-group@akasigroup.com',
                    'phone' => '+254 725542872',
                    'delay' => '.4s'
                ],
                [
                    'city' => 'BÉNIN',
                    'address' => 'Agla Cotonou, 4ème bâtiment derrière le commissariat Agla',
                    'email' => 'akasi-group@akasigroup.com',
                    'phone' => '+229 0195621919',
                    'delay' => '.6s'
                ],
                [
                    'city' => 'CÔTE D\'IVOIRE',
                    'address' => 'Abidjan Cocody Rivera, Bonoumin, Face SGBC Bureau B4',
                    'email' => 'akasi-group@akasigroup.com',
                    'phone' => '+225 0767257112',
                    'delay' => '.8s'
                ],
                [
                    'city' => 'USA',
                    'address' => '1, Tara boulevard #101, Nashua NH 03062 États-Unis',
                    'email' => 'akasi-group@akasigroup.com',
                    'phone' => '+1 603 852 79 35',
                    'delay' => '1s'
                ],
            ],
            'faqs' => [
                [
                    'question' => 'Vos services sont-ils faciles à utiliser ?',
                    'answer' => 'Oui, EdKey est conçu avec une interface intuitive pour que les parents, enseignants et administrateurs puissent l\'utiliser sans formation technique complexe.'
                ],
                [
                    'question' => 'Recevrai-je des mises à jour futures ?',
                    'answer' => 'Absolument. Nous mettons régulièrement à jour la plateforme avec de nouvelles fonctionnalités et des correctifs de sécurité pour garantir la meilleure expérience possible.'
                ],
                [
                    'question' => 'Le service fonctionne-t-il dans mon pays ?',
                    'answer' => 'EdKey est une solution cloud accessible partout dans le monde. Nous avons des bureaux au Canada, au Kenya, au Bénin, en Côte d\'Ivoire et aux USA pour un support local.'
                ],
                [
                    'question' => 'Combien vais-je payer ?',
                    'answer' => 'Nous proposons plusieurs tarifs adaptés à la taille de votre établissement, allant de l\'offre Basique gratuite à l\'offre Élite personnalisée.'
                ],
                [
                    'question' => 'Y a-t-il d\'autres frais ?',
                    'answer' => 'Nos tarifs sont transparents. Il n\'y a pas de frais cachés. Les coûts dépendent du plan choisi et du nombre d\'utilisateurs.'
                ],
                [
                    'question' => 'Comment puis-je m\'inscrire ?',
                    'answer' => 'Vous pouvez nous contacter directement via notre formulaire de contact ou demander une démo pour commencer votre transformation digitale.'
                ],
            ],
        ];
    }
}
