<?php include 'includes/gui-header.php' ?>

<header class="gui__home">
    <div class="gui__home__inner">
        <a class="logo">
            <img src="<?= $path_public ?>/images/svg/logo.svg" alt="">
        </a>
        <h1>Flexible, robust and homogeneous framework</h1>
        <p>
            <i>GROOTS</i> is <a href="http://www.globalia.ca/" target="_blank">Globalia's</a> HTML, CSS, and JS framework for developing responsive, mobile first projects on the web.
        </p>
    </div>
    <a href="#gui-start" class="gui__home__arrow" js-scroll-to>
        <span>Learn more</span>
        <i class="fa fa-arrow-circle-down"></i>
    </a>
    <ul class="gui__home__cta">
        <li><a href="docs.php">Documentation</a></li>
        <li><a href="http://codepen.io/Globalia/" target="_blank"><i class="fa fa-codepen"></i> Codepen</a></li>
    </ul>
</header>

<main class="gui__main" id="gui-start">
    <?php include 'includes/gui-nav.php' ?>
    <section class="gui__section">
        <div grid-gui>
            <div grid-gui="row">
                <div grid-gui="col-12">
                    <h2>Repeat less, <span>Create more</span></h2>
                    <p>GROOTS makes front-end web development faster and easier.</p>
                    <p>It combines best practices for today's responsive web with the core components we use on every project.</p>
                    <p>It is the front-end starter files for any new web project. It sets up your Sass architecture and normalizes your CSS and native HTML elements. It provides the structural groundwork for your application.</p>
                    <a href="" class="gui__btn b-btn b-btn--primary">Get GROOTS</a>
                </div>
            </div>
        </div>
    </section>
    <section class="gui__section gui__feat">
        <div grid-gui>
            <div grid-gui="row">
                <div grid-gui="sm-4">
                    <h2 class="gui__h2">Mobile-<strong>First</strong></h2>
                    <p>Today, the web landscape becomes increasingly complex but two main factors still drives your web experience: screen size and data usage.</p>
                    <p>In order to offer the best context to your visitor, GROOTS is built following the Mobile-First Approach to offer Progressive Enhancement and Touch-Friendly interactions.</p>
                </div>
                <div grid-gui="sm-4">
                    <img class="schema" style="max-width:100%;" src="http://johnpolacek.github.io/scrolldeck.js/decks/responsive/img/responsive_web_design.png" alt="">
                </div>
                <div grid-gui="sm-4">
                    <h2 class="gui__h2">Fully responsive <strong>components</strong></h2>
                    <p>All GROOTS components are built using relative units (em/rem/percent) to be fully responsive.</p>
                    <p>A custom flex-based grid-gui allows designers and developpers to explore new layouts magic.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="gui__section" grid-gui>
        <div grid-gui="row">
            <div grid-gui="sm-12">
                <h2><span>Modular</span> structure</h2>
            </div>
            <div class="color-swatches--small" grid-gui="sm-3">
                <a href="codelines.php" class="gui__features">
                    <div class="color-swatch cs-gui">
                        <i class="fa fa-code"></i>
                    </div>
                    <h3 class="gui__h2">Codelines</h2>
                        <p>Code-writing rules / good practices shared by any developers who's been working on your project in order to keep the code clean, maintainable and readable.</p>
                    </a>
                </div>
                <div class="color-swatches--small" grid-gui="sm-3">
                    <a href="styleguide.php" class="gui__features">
                        <div class="color-swatch cs-gui">
                            <i class="fa fa-cubes"></i>
                        </div>
                        <h3 class="gui__h2">Styleguide</h3>
                        <p>A Styleguide is the primary visual DNA of your company’s branding.</p>
                        <p>It is used to create a cohesive look across all web-based channels.</p>
                    </a>
                </div>
                <div class="color-swatches--small" grid-gui="sm-3">
                    <a href="components.php" class="gui__features">
                        <div class="color-swatch cs-gui">
                            <i class="fa fa-gears"></i>
                        </div>
                        <h3 class="gui__h2">Components</h3>
                        <p>GROOTS provides a library of production-ready web components to help developpers to build custom interfaces for your product.</p>
                    </a>
                </div>
                <div class="color-swatches--small" grid-gui="sm-3">
                    <a href="layout.php" class="gui__features">
                        <div class="color-swatch cs-gui">
                            <i class="fa fa-th-large"></i>
                        </div>
                        <h3 class="gui__h2">Layout</h3>
                        <p>A built-on-the-fly fluid layout to showcase your website components in real context.</p>
                    </a>
                </div>
            </div>
        </section>

        <section class="gui__section gui__feat">
            <h2>Follow us on <strong>codepen</strong> !</h2>
            <img src="/dist/images/svg/technologies/codepen-logo.svg" alt="Codepen" width="160" class="codepen" />
            <p>Our frontend and design teams are proud of their work.</p>
            <p>That's we decided to put up all of our latest components collections on codepen so you can go and check them out.</p>
            <a href="http://codepen.io/Globalia/" class="gui__btn" target="_blank">See our showcase</a>
        </section>

        <section class="gui__section" grid-gui>
            <h2>Groots uses the following <span>technologies</span></h2>
            <ul class="inline-list">
                <li>
                    <a href="http://bower.io/" target="_blank"><img src="/dist/images/svg/technologies/bower-logo.svg" alt="Bower" width="100"></a>
                </li>
                <li>
                    <a href="https://www.php.net/" target="_blank"><img src="/dist/images/svg/technologies/php-logo.svg" alt="Php" width="130"></a>
                </li>
                <li>
                    <a href="https://www.npmjs.com/" target="_blank"><img src="/dist/images/svg/technologies/npm-logo.svg" alt="NPM" width="130"></a>
                </li>
                <li>
                    <a href="https://nodejs.org/" target="_blank"><img src="/dist/images/svg/technologies/node-js-logo.svg" alt="Nodejs" width="160"></a>
                </li>
                <li>
                    <a href="http://gulpjs.com/" target="_blank"><img src="/dist/images/svg/technologies/gulp-logo.svg" alt="Gulp" width="60"></a>
                </li>
                <li>
                    <a href="http://sass-lang.com/" target="_blank"><img src="/dist/images/svg/technologies/sass-logo.svg" alt="Sass" width="130"></a>
                </li>
                <li>
                    <img src="/dist/images/svg/technologies/css3-logo.svg" alt="CSS3" width="70">
                </li>
                <li>
                    <img src="/dist/images/svg/technologies/javascript-logo.svg" alt="Javascript" width="90">
                </li>
                <li>
                    <img src="/dist/images/svg/technologies/json-logo.svg" alt="Javascript" width="90">
                </li>
                <li>
                    <a href="https://jquery.com/" target="_blank"><img src="/dist/images/svg/technologies/jquery-logo.svg" alt="JQuery" width="210"></a>
                </li>
            </ul>
        </section>


    </main>

    <?php include 'includes/gui-footer.php' ?>
