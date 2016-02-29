
<?php include 'includes/gui-header.php' ?>

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
        <div class="gui__main">
            <?php include 'components/nav.php' ?>
        </div><!-- @end gui__main -->

    <div class="gui-overlay" js-gr-overlay></div>

<?php include 'includes/gui-footer.php' ?>
