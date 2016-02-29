<?php include 'includes/gui-header.php' ?>

<main class="gui-main">
    <header class="gui-header">
        <div class="container" grid>
            <svg class="gui-header__svg" js-gr-menu height="48" width="48" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"></path><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path></svg>
            <h1 class="gui-header__title">Components</h1>
        </div>
    </header>

    <aside class="gui-aside" js-gr-aside>
        <ul class="gui-aside__header">
            <li><a class="gui-aside__brand" href="index.php"><img src="<?= $path_public ?>/images/logo.png" alt="GRoot"></a></li>
            <li><a class="gui-aside__link" href="docs.php">Documentation</a></li>
            <li><a class="gui-aside__link" href="codelines.php"><i class="fa fa-code"></i> Codelines</a></li>
            <li><a class="gui-aside__link" href="styleguide.php"><i class="fa fa-cubes"></i>Styleguide</a></li>
            <li><a class="gui-aside__link is-active" href="components.php"><i class="fa fa-gears"></i>Components</a></li>
            <li><a class="gui-aside__link" href="layout.php"><i class="fa fa-th-large"></i>Layout</a></li>
        </ul>
    </aside>

    <div class="gui-content">
        <div class="gui-info">
            <div class="gui-info__inner">
                <p>Web Components are a set of standards currently being produced by Google engineers as a W3C specification that allow for the creation of reusable widgets or components in web documents and web applications. The intention behind them is to bring component-based software engineering to the World Wide Web. The components model allows for encapsulation and interoperability of individual HTML elements.</p>
            </div>
        </div><!-- @end gui-info -->

        <div class="gui__main">
            <section grid-gui>
                <div grid-gui="row">
                    <div grid-gui="md-12">
                        <!--Navigation-->
                        <div class="gui__card">
                            <div class="gui__card__header">Main Navigation</div>
                            <div class="gui__card__frame nav-handler">
                                <?php include 'components/nav.php' ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div grid-gui="row">
                    <div grid-gui="md-9">
                        <!--Cards-->
                        <div class="gui__card">
                            <div class="gui__card__header">cards</div>
                            <section class="grid">
                                <section class="content">
                                    <?php include 'components/cards.php' ?>
                                </section>
                                <aside class="sidebar"></aside>
                            </section>

                        </div>
                    </div>
                    <div grid-gui="md-9">
                        <!--Filters-->
                        <div class="gui__card">
                            <div class="gui__card__header">Filters</div>
                            <section class="grid">
                                <section class="content">
                                    <?php include 'components/filters.php' ?>
                                </section>
                                <aside class="sidebar"></aside>
                            </section>

                        </div>
                    </div>
                </div>


                <div grid-gui="row">
                    <div grid-gui="md-12">
                        <!--Footer-->
                        <div class="gui__card">
                            <div class="gui__card__header">Footer</div>
                            <?php include 'components/footer.php' ?>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </div>
    <div class="gui-overlay" js-gr-overlay></div>
</main>

<?php include 'includes/gui-footer.php' ?>
