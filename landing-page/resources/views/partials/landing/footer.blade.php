<footer class="page-footer dark-color-footer" id="page-footer">
    <div class="overlay-photo-image-bg" data-bg-img="{{ asset('assets/images/sections-bg-images/footer-bg-1.jpg') }}"
        data-bg-opacity=".25"></div>
    <div class="container">
        <div class="row footer-cols">
            <div class="col-12 col-md-8 col-lg-4  footer-col "><img class="img-fluid footer-logo mb-1" loading="lazy"
                    src="{{ asset('assets/images/logo/logo-colored.png') }}" alt="logo" />
                <div class="footer-col-content-wrapper">
                    <p class="footer-text-about-us ">
                        EdKey est votre partenaire de confiance pour la transformation digitale de votre établissement
                        d'enseignement.
                    </p>
                </div>
                <!-- <div class="form-area ">
                    <div class="mailchimp-form ">
                        <form class="one-field-form" method="post" action="#0">
                            <div class="field-group ">
                                <label class="email-label" for="email-input"> S'inscrire à notre newsletter</label>
                                <input class="email-input " type="email" value="" name="EMAIL" id="email-input"
                                    placeholder="Adresse E-mail" autocomplete="off" />
                                <div class="cta-area">
                                    <input class="btn-solid subscribe-btn" type="submit" value="S'abonner"
                                        name="subscribe" />
                                </div>
                            </div><span class="email-notice">*Nous ne partageons pas vos informations
                                personnelles</span>
                        </form>
                    </div>
                </div> -->
            </div>
            <div class="col-6 col-lg-2  footer-col ">
                <h2 class=" footer-col-title    ">Liens utiles</h2>
                <div class="footer-col-content-wrapper">
                    <ul class="footer-menu ">
                        <li class="footer-menu-item"><i class="bi bi-arrow-right icon "></i><a class="footer-menu-link"
                                href="{{ url('/') }}">Présentation</a></li>
                        <li class="footer-menu-item"><i class="bi bi-arrow-right icon "></i><a class="footer-menu-link"
                                href="{{ url('/') }}#about">À propos</a></li>
                        <li class="footer-menu-item"><i class="bi bi-arrow-right icon "></i><a class="footer-menu-link"
                                href="{{ url('/') }}#services">Fonctionnalités</a></li>
                        <li class="footer-menu-item"><i class="bi bi-arrow-right icon "></i><a class="footer-menu-link"
                                href="{{ url('/pricing') }}">Tarifs</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-6 col-lg-2 footer-col ">
                <h2 class=" footer-col-title    ">Ressources</h2>
                <div class="footer-col-content-wrapper">
                    <ul class="footer-menu">
                        <li class="footer-menu-item"><i class="bi bi-arrow-right icon "></i><a class="footer-menu-link"
                                href="{{ url('/support') }}">Support</a></li>
                        <li class="footer-menu-item"><i class="bi bi-arrow-right icon "></i><a class="footer-menu-link"
                                href="{{ url('/') }}#portfolio">Ressources</a></li>
                        <li class="footer-menu-item"><i class="bi bi-arrow-right icon "></i><a class="footer-menu-link"
                                href="{{ url('/faq') }}">FAQ</a></li>
                        <li class="footer-menu-item"><i class="bi bi-arrow-right icon "></i><a class="footer-menu-link"
                                href="{{ url('/contact-us') }}">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-12     col-lg-4 footer-col ">
                <h2 class=" footer-col-title    ">Informations de contact</h2>
                <div class="footer-col-content-wrapper">
                    <div class="contact-info-card"><i class="bi bi-envelope icon"></i><a class="text-lowercase  info"
                            href="mailto:akasi-group@akasigroup.com">akasi-group@akasigroup.com</a></div>
                    <div class="contact-info-card"><i class="bi bi-geo-alt icon"></i><span
                            class="text-lowercase  info">Agla Cotonou, 4ème bâtiment derrière le commissariat,
                            Bénin.</span></div>
                    <div class="contact-info-card"><i class="bi bi-phone icon"></i><a class="info"
                            href="tel:+2290195621919">+229 01 95 62 19 19 </a></div>
                    <!-- <div class="social-icons mt-3">
                        <div class="sc-wrapper dir-row sc-size-32">
                            <ul class="sc-list">
                                <li class="sc-item " title="Facebook"><a class="sc-link" href="#0"
                                        title="social media icon"><i class="bi bi-facebook sc-icon"></i></a></li>
                                <li class="sc-item " title="youtube"><a class="sc-link" href="#0"
                                        title="social media icon"><i class="bi bi-youtube sc-icon"></i></a></li>
                                <li class="sc-item " title="instagram"><a class="sc-link" href="#0"
                                        title="social media icon"><i class="bi bi-instagram sc-icon"></i></a></li>
                                <li class="sc-item " title="X"><a class="sc-link" href="#0" title="social media icon"><i
                                            class="bi bi-twitter-x sc-icon"></i></a></li>
                            </ul>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <div class="copyrights ">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 d-flex justify-content-start">
                    <p class="creadits">&copy; 2026 AKASI GROUP. Tous droits réservés.</p>
                </div>
                <div class="col-12 col-md-6 d-flex justify-content-end">
                    <div class="terms-links">
                        <a href="{{ url('/mentions-legales') }}">Mentions légales</a> |
                        <a href="{{ url('/conditions-utilisation') }}">Conditions d'utilisation</a> |
                        <a href="{{ url('/politique-confidentialite') }}">Politique de confidentialité</a> |
                        <a href="{{ url('/politique-cookies') }}">Cookies</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>