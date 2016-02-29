
<?php include 'includes/gui-header.php' ?>

<main class="gui-main">
    <header class="gui-header">
        <div class="container">
            <svg class="gui-header__svg" js-gr-menu height="48" width="48" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"></path><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path></svg>
            <h1 class="gui-header__title">Documentation</h1>
        </div>
    </header>

    <aside class="gui-aside" js-gr-aside>
        <ul class="gui-aside__header">
            <li><a class="gui-aside__brand" href="index.php"><img src="<?= $path_public ?>/images/logo.png" alt="GRoot"></a></li>
            <li><a class="gui-aside__link is-active" href="docs.php">Documentation</a></li>
            <li><a class="gui-aside__link" href="codelines.php"><i class="fa fa-code"></i> Codelines</a></li>
            <li><a class="gui-aside__link" href="styleguide.php"><i class="fa fa-cubes"></i>Styleguide</a></li>
            <li><a class="gui-aside__link" href="components.php"><i class="fa fa-gears"></i>Components</a></li>
            <li><a class="gui-aside__link" href="layout.php"><i class="fa fa-th-large"></i>Layout</a></li>
        </ul>
    </aside>

    <div class="gui-content">
        <div class="gui-info">
            <div class="gui-info__inner">
                <p>[docs intro]</p>
            </div>
        </div><!-- @end gui-info -->

        <div class="gui__main">
            <div class="gui-section-title">
                <h2>Buttons</h2>
            </div>

            <section class="gui-section">
                <div class="col">
                    <h3 class="h3">Buttons</h3>
                    <p>Groots includes two set of button styles that can be used for many purposes. Make sure to use the right markup.</p>
                    <ul>
                        <li>Use <code>&lt;a&gt;</code> elements for page link or anchor within a page.</li>
                        <li><code>&lt;button&gt;</code> elements are generaly used to perform an action in a page. Use the attribute <code>[role="button"]</code> when using <code>&lt;a&gt;</code> for action like collapsing content.</li>
                    </ul>
                    <div class="gui-section__showcase">
                        <p class="gui-section__showcase-title">Basic</p>
                        <p>
                            <a class="b-btn b-btn--primary b-btn--small" href="#">Primary</a>
                            <a class="b-btn b-btn--secondary b-btn--small" href="#">Secondary</a>
                            <a class="b-btn b-btn--info b-btn--small" href="#">Info</a>
                            <a class="b-btn b-btn--sucess b-btn--small" href="#">Sucess</a>
                            <a class="b-btn b-btn--warning b-btn--small" href="#">Warning</a>
                        </p>
                    </div>
                    <div class="gui-section__showcase">
                        <p class="gui-section__showcase-title">Flatt effect</p>
                        <p>
                            <a class="b-btn-flatt b-btn-flatt--primary" href="#">Flatt effect</a>
                            <a class="b-btn-flatt b-btn-flatt--secondary" href="#">Flatt effect</a>
                        </p>
                    </div>
                </div>
                <div class="col">
                    <div class="highlight">
<pre>
<code class="lang-html">
<span class="c">&lt;!-- Anchors --&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"b-btn b-btn--primary"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Get Groots<span class="nt">&lt;/a&gt;</span>

<span class="c">&lt;!-- Actions --&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"b-btn b-btn--primary"</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">role=</span><span class="s">"button"</span></span><span class="nt">&gt;</span>Get Groots<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"b-btn b-btn--primary"</span> <span class="na">type=</span><span class="s">"button"</span></span><span class="nt">&gt;</span>Get Groots<span class="nt">&lt;/button&gt;</span>
</code>
</pre>

<pre>
<code class="lang-html">
<span class="c">&lt;!-- Basic --&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"b-btn b-btn--primary"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Primary<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"b-btn b-btn--secondary"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Secondary<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"b-btn b-btn--info"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Info<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"b-btn b-btn--sucess"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Sucess<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"b-btn b-btn--warning"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Warning<span class="nt">&lt;/a&gt;</span>
</code>
</pre>

<pre>
<code class="lang-html">
<span class="c">&lt;!-- Flatt effect --&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"b-btn-flatt b-btn-flatt--primary"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Flatt effect primary<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"b-btn-flatt b-btn-flatt--secondary"</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Flatt effect secondary<span class="nt">&lt;/a&gt;</span>

</code>
</pre>
                    </div><!-- @end highlight -->
                </div><!-- @end col -->
            </section><!-- @end section -->
        </div><!-- @end gui__main -->

    </div><!-- @end gr-content -->
    <div class="gui-overlay" js-gr-overlay></div>
</main>

<?php include 'includes/gui-footer.php' ?>
