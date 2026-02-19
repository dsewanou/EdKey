<header class=" page-header   content-always-light header-basic" id="page-header">
        <div class="header-search-box">
                <div class="close-search"></div>
                <form class="nav-search search-form" role="search" method="get" action="#">
                        <div class="search-wrapper">
                                <label class="search-lbl">Search for:</label>
                                <input class="search-input" type="search" placeholder="Search..." name="searchInput"
                                        autofocus="autofocus" />
                                <button class="search-btn" type="submit"><i class="bi bi-search icon"></i></button>
                        </div>
                </form>
        </div>
        <div class="container">
                <nav class="menu-navbar">
                        <div class="header-logo"><a class="logo-link" href="{{ url('/') }}"><img
                                                class="logo-img light-logo" loading="lazy"
                                                src="{{ asset('assets/images/logo/logo-light.png') }}" alt="logo" /><img
                                                class="logo-img  dark-logo" loading="lazy"
                                                src="{{ asset('assets/images/logo/logo-dark.png') }}" alt="logo" /></a>
                        </div>
                        <div class="links menu-wrapper ">
                                <ul class="list-js links-list">
                                        <li class="menu-item"><a
                                                        class="menu-link {{ Request::is('/') ? 'active' : '' }}"
                                                        href="{{ url('/') }}">Présentation</a>
                                        </li>
                                        <li class="menu-item has-sub-menu"><a class="menu-link"
                                                        href="{{ url('/') }}#services">Fonctionnalités</a>

                                        </li>
                                        <li class="menu-item"><a
                                                        class="menu-link {{ Request::is('pricing') ? 'active' : '' }}"
                                                        href="{{ url('/pricing') }}">Tarifs</a>
                                        </li>
                                        <li class="menu-item has-sub-menu"><a class="menu-link"
                                                        href="{{ url('/') }}#portfolio">Ressources</a>
                                                <ul class="sub-menu ">
                                                        <li class="menu-item sub-menu-item"><a
                                                                        class="menu-link sub-menu-link  "
                                                                        href="#">Documentation API</a></li>
                                                        <li class="menu-item sub-menu-item"><a
                                                                        class="menu-link sub-menu-link  "
                                                                        href="#">FAQ</a></li>
                                                </ul>
                                        </li>
                                        <li class="menu-item has-sub-menu"><a class="menu-link"
                                                        href="{{ url('/') }}#blog">Support</a>
                                        </li>

                                        <li class="menu-item"><a
                                                        class="menu-link {{ Request::is('contact-us') ? 'active' : '' }}"
                                                        href="{{ url('/contact-us') }}">Contactez-nous</a></li>
                                        <li class="menu-item"><a
                                                        class="btn-solid btn-small w-100 w-lg-auto mb-3 mb-lg-0"
                                                        href="#">Accedez gratuitement</a>
                                        </li>
                                        <li class="menu-item"><a class="btn-outline btn-small w-100 w-lg-auto"
                                                        href="#">Connexion</a>
                                        </li>
                                </ul>
                        </div>
                        <div class="controls-box">
                                <!--Menu Toggler button-->
                                <div class="control  menu-toggler"><span></span><span></span><span></span></div>
                                <!--search Icon button-->
                                <div class="control header-search-btn"><i class="bi bi-search icon"></i></div>
                                <!--Dark/Light mode button-->
                                <div class="mode-switcher ">
                                        <div class="switch-inner go-light " title="Switch To Light Mode "><i
                                                        class="bi bi-sun icon "></i>
                                        </div>
                                        <div class="switch-inner go-dark" title="Switch To Dark Mode "><i
                                                        class="bi bi-moon icon "></i>
                                        </div>
                                </div>
                                <!--mini shoping cart-->
                        </div>
                </nav>
        </div>
</header>