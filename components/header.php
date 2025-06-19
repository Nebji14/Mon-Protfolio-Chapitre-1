
<!-- CREATION DE LA NAVBAR -->
    <aside class=" nav_pages d-flex flex-column align-items-start pt-4 ps-3 nav_bar fade-in-left">

        <!-- Logo en haut -->
        <div>
            <a href="index.php" title="Lien vers la page accueil">
                <img src="media/logo_fond.png" alt="Logo B/D" title="Logo B/D">
            </a>
        </div>

        <!-- Icônes Réseaux -->
        <div class="d-flex flex-column mt-3 gap-1">
            <a href="https://www.linkedin.com/in/benjamin-david-dev/" target="_blank" title="Lien vers mon linkedIn"><i class="fa-brands fa-linkedin fa-3x"
                    style="color: #000000;"></i></a>
            <a href="https://github.com/Nebji14" target="_blank" title="Lien vers mon GitHub"><i class="fa-brands fa-square-git fa-3x"
                    style="color: #000000;"></i></a>
        </div>

        <!-- Bouton burger -->
        <button class="burger-btn d-md-none" id="burger-btn" aria-label="Menu">
            <i class="fas fa-bars fa-2x"></i>
        </button>

        <!-- Nav de la sidebar visible uniquement en grand écran -->
        <nav class="w-100 nav_mod">
            <ul class="list-unstyled d-flex flex-column gap-5 ">
                <li><a href="index.php" title="Lien vers la page accueil"
                        class="text-decoration-none hover-underline">Accueil</a></li>
                <li><a href="about.php" title="Lien vers la page a propos"
                        class="text-decoration-none hover-underline">À propos</a></li>
                <li><a href="portfolio.php" title="Lien vers la page portfolio"
                        class="text-decoration-none hover-underline">Portfolio</a></li>
                <li><a href="contact.php" title="Lien vers la page contact"
                        class="text-decoration-none hover-underline">Contact</a></li>
            </ul>
        </nav>

    </aside>

    <nav class="mobile-nav" id="nav-menu">
        <!-- Bouton fermer -->
        <button class="close-btn" id="close-btn" aria-label="Fermer le menu">
            <i class="fas fa-times fa-2x"></i>
        </button>

        <ul class="list-unstyled">
            <li><a href="index.php" class="nav-link hover-underline">Accueil</a></li>
            <li><a href="about.php" class="nav-link hover-underline">À propos</a></li>
            <li><a href="portfolio.php" class="nav-link hover-underline">Portfolio</a></li>
            <li><a href="contact.php" class="nav-link hover-underline">Contact</a></li>
        </ul>
    </nav>
    <!-- FIN DE LA NAVBAR -->