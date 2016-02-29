<?php include 'includes/gui-header.php' ?>
<main class="gui-main">
    <header class="gui-header">
        <div class="container">
            <svg class="gui-header__svg" js-gr-menu height="48" width="48" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"></path><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path></svg>
            <h1 class="gui-header__title">Styleguide</h1>
        </div>
    </header>

    <aside class="gui-aside" js-gr-aside>
        <ul class="gui-aside__header">
            <li><a class="gui-aside__brand" href="index.php"><img src="<?= $path_public ?>/images/logo.png" alt="GRoot"></a></li>
            <li><a class="gui-aside__link" href="docs.php">Documentation</a></li>
            <li><a class="gui-aside__link" href="codelines.php"><i class="fa fa-code"></i> Codelines</a></li>
            <li><a class="gui-aside__link is-active" href="styleguide.php"><i class="fa fa-cubes"></i>Styleguide</a></li>
            <li><a class="gui-aside__link" href="components.php"><i class="fa fa-gears"></i>Components</a></li>
            <li><a class="gui-aside__link" href="layout.php"><i class="fa fa-th-large"></i>Layout</a></li>
        </ul>
    </aside>

    <div class="gui-content">
        <div class="gui-info">
            <div class="gui-info__inner">
                <p>A style guide (or manual of style) is a set of standards for the writing and design of documents, either for general use or for a specific publication, organization, or field. (It is often called a style sheet, though that term has other meanings.)</p>
            </div>
        </div><!-- @end gui-info -->

        <div class="gui__main">
            <section grid-gui>
                <div block-grid-gui="sm-2">
                    <div block-grid-gui="block">
                        <div class="gui__card">
                            <!--Fonts-->
                            <div class="gui__card__header">Fonts</div>
                            <?php include 'styleguide/fonts.php' ?>
                        </div>
                        <div class="gui__card typography">
                            <!--Content-->
                            <div class="gui__card__header">Content</div>
                            <?php include 'styleguide/content.php' ?>
                        </div>
                        <!--Buttons-->
                        <div class="gui__card">
                            <div class="gui__card__header">Buttons</div>
                            <?php include 'styleguide/buttons.php' ?>
                        </div>
                        <!--Breadcrumb-->
                        <div class="gui__card">
                            <div class="gui__card__header">Breadcrumb</div>
                            <?php include 'styleguide/breadcrumb.php' ?>
                        </div>
                        <!--Breadcrumb-->
                        <div class="gui__card">
                            <div class="gui__card__header">Pagination</div>
                            <?php include 'styleguide/pagination.php' ?>
                        </div>
                        <!--Table-->
                        <div class="gui__card">
                            <div class="gui__card__header">Table</div>
                            <?php include 'styleguide/table.php' ?>
                        </div>

                    </div>
                    <div block-grid-gui="block">
                        <!--Colors-->
                        <div class="gui__card">
                            <div class="gui__card__header">Colors</div>
                            <?php include 'styleguide/colors.php' ?>
                        </div>
                        <!--Forms-->
                        <div class="gui__card">
                            <div class="gui__card__header">Forms</div>
                            <?php include 'styleguide/forms.php' ?>
                        </div>
                        <!--Logos-->
                        <div class="gui__card ">
                            <div class="gui__card__header">Logos - marques</div>
                            <?php include 'styleguide/logos.php' ?>
                        </div>
                        <!--Îcones-->
                        <div class="gui__card ">
                            <div class="gui__card__header">Îcones</div>
                            <?php include 'styleguide/icones.php' ?>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div><!-- @end gui__main -->
    <div class="gui-overlay" js-gr-overlay></div>
</main>



<?php include 'includes/gui-footer.php' ?>
