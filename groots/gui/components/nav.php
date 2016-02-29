<header class="header">
    <div class="container">
        <a class="header__brand" href="/gui">
            <?php readfile('../dist/images/svg/logo_st_henri Groupe.svg'); ?>
        </a>
        <div class="mobile-icon" data-label-active="close" data-js-hamburger="">
            <div class="hamburger hamburger--cross"><span></span></div>
        </div>
        <nav class="menu" data-js-menu="">

            <ul class="menu__main">
                <li class="has-dropdown js-menu-dropdown menu__item">
                    <a href="#" class="dropdown-toggle js-dropdown-toggle">Remorques <span class="fa fa-angle-down"></span></a>
                    <ul class="dropdown-menu">
                        <li><a  href="#">Remorques neuves</a></li>
                        <li><a href="#">Remorques usagés</a></li>
                    </ul>
                </li>
                <li class="menu__item">
                    <a  href="#">Financement</a>
                </li>
                <li class="menu__item active">
                    <a  href="#">Pièces</a>
                </li>
                <li class="has-dropdown js-menu-dropdown menu__item">
                    <a href="service.php" class="dropdown-toggle js-dropdown-toggle">Services <span class="fa fa-angle-down"></span></a>
                    <ul class="dropdown-menu">
                        <li><a  href="#">Service routier</a></li>
                        <li><a href="#">Atelier mécanique</a></li>
                        <li><a href="#">Saaq</a></li>
                        <li><a href="#">Service de livraison</a></li>
                    </ul>
                </li>
                <li class="menu__item">
                    <a  href="#">Entreprise</a>
                </li>
                <li class="menu__item">
                    <a  href="#">Contact</a>
                </li>
            </ul>
            <ul class="menu__secondary">
                <li class="menu__item">
                    <a href="tel:5143630000">514 363-0000</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
