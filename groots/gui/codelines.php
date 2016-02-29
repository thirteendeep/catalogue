<?php include 'includes/gui-header.php' ?>

<main class="gui-main">
    <header class="gui-header">
        <div class="container">
            <svg class="gui-header__svg" js-gr-menu height="48" width="48" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"></path><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path></svg>
            <h1 class="gui-header__title">Codelines</h1>
        </div>
    </header>
    <aside class="gui-aside" js-gr-aside>
        <ul class="gui-aside__header">
            <li><a class="gui-aside__brand" href="index.php"><img src="<?= $path_public ?>/images/logo.png" alt="GRoot"></a></li>
            <li><a class="gui-aside__link" href="docs.php">Documentation</a></li>
            <li><a class="gui-aside__link is-active" href="codelines.php"><i class="fa fa-code"></i> Codelines</a></li>
            <li><a class="gui-aside__link" href="styleguide.php"><i class="fa fa-cubes"></i>Styleguide</a></li>
            <li><a class="gui-aside__link" href="components.php"><i class="fa fa-gears"></i>Components</a></li>
            <li><a class="gui-aside__link" href="layout.php"><i class="fa fa-th-large"></i>Layout</a></li>
        </ul>
        <div class="gui-aside__body">
            <ul class="gui-aside__menu">
                <li class="gui-aside__item has-dropdown">
                    <a class="gui-aside__link" href="#css" js-scroll-to>CSS</a>
                    <ul class="gui-aside__subnav">
                        <li class="gui-aside__item">
                            <a class="gui-aside__link" href="#terms" js-scroll-to>Terms</a>
                        </li>
                        <li class="gui-aside__item">
                            <a class="gui-aside__link" href="#formating" js-scroll-to>Formating</a>
                        </li>
                        <li class="gui-aside__item">
                            <a class="gui-aside__link" href="#idSelectors" js-scroll-to>ID Selectors</a>
                        </li>
                        <li class="gui-aside__item">
                            <a class="gui-aside__link" href="#shorthandProp" js-scroll-to>Shorthand properties</a>
                        </li>
                        <li class="gui-aside__item">
                            <a class="gui-aside__link" href="#actionClasses" js-scroll-to>Action classes</a>
                        </li>
                        <li class="gui-aside__item">
                            <a class="gui-aside__link" href="#comments" js-scroll-to>Comments</a>
                        </li>
                    </ul>
                </li>
                <li class="gui-aside__item has-dropdown">
                    <a class="gui-aside__link" href="#scss" js-scroll-to>SCSS</a>
                    <ul class="gui-aside__subnav">
                        <li class="gui-aside__item">
                            <a href="#nestedSelectors" class="gui-aside__link" js-scroll-to>Nested Selectors</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </aside>

    <div class="gui-content">
        <div class="gui-info">
            <div class="gui-info__inner">
                <p>A codeline is a *path* *of* *evolution/development* of the canonical set of source files that is required to produce a given software (sub)system.</p>
            </div>
        </div><!-- @end gui-info -->

<?php /*
        <div class="gui-section-title">
            <h2>HTML</h2>
        </div>

        <section class="gui-section">
            <div class="col">
                [...]
            </div>
            <div class="col">
                <div class="highlight">

<pre>
<code class="lang-html">
<span class="cp">&lt;!DOCTYPE html&gt;</span>
<span class="nt">&lt;html&gt;</span>
  <span class="nt">&lt;body&gt;</span>
    <span class="nt">&lt;h1&gt;</span>Hello world!<span class="nt">/&lt;h1&gt;</span>
    <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"images/groots.svg"</span> <span class="na">alt=</span><span class="s">"GRoots logo"</span></span><span class="nt">&gt;</span>
  <span class="nt">&lt;/body&gt;</span>
<span class="nt">&lt;/html&gt;</span><span class="c">&lt;!-- @end html --&gt;</span>
</code>
</pre>

                </div><!-- @end highlight -->
            </div><!-- @end col -->
        </section><!-- @end section -->
*/ ?>

        <div class="gui-section-title" id="css" name="css">
            <h2>CSS</h2>
        </div>

        <section class="gui-section" id="terms" name="terms">
            <div class="col">
                <h3 class="h3">Terms</h3>
                <ul>
                    <li><strong>Rule declaration</strong> is a group of one or more selector with a group of properties.</span></li>
                  <li><strong>Selectors</strong> are patterns used to select the element(s) you want to style.</span></li>
                   <li><strong>Properties</strong> are defined within a selector by defining a property and a value.</span></li>
                </ul>
            </div>
            <div class="col">
                <div class="highlight">

<pre>
<code class="lang-css">
<span class="nc">.selector</span> <span class="p">{</span>
    <span class="c">/* ... */</span>
<span class="p">}</span>
</code>
<code class="lang-css">
<span class="nc">.selector</span> <span class="p">{</span>
    <span class="k">position</span><span class="o">:</span> <span class="k">absolute</span><span class="p">;</span><span class="c"> /* properties */</span>
<span class="p">}</span>
</code>
</pre>

                </div><!-- @end highlight -->
            </div><!-- @end col -->
        </section><!-- @end terms -->

        <section class="gui-section" id="formating" name="formating">
            <div class="col">
                <h3 class="h3">Formating</h3>
                <ul>
                    <li>4 spaces for indentation</li>
                    <li>Prefer dashes over camel casing in class names. We encourage using BEM</li>
                    <li>Do not use ID selectors</li>
                    <li>When using multiple selectors in a rule declaration, give each selector its own line</li>
                    <li>Include a single space before the opening brace of a ruleset</li>
                    <li>Put a space after the : character for properties</li>
                    <li>Put closing braces } of rule declarations on a new line</li>
                    <li>Put blank lines between rule declarations</li>
                </ul>
            </div>
            <div class="col">
                <div class="highlight">

<pre>
<code class="lang-html">
<span class="c">/* Bad CSS */</span>
<span class="nc">#selector</span><span class="o">,</span> <span class="nc">.selector2</span><span class="p">{</span>
  <span class="k">position</span><span class="o">:</span><span class="k">absolute</span><span class="p">;</span>
  <span class="k">top</span><span class="o">:</span><span class="k">0</span><span class="p">;</span> <span class="k">left</span><span class="o">: </span><span class="k">0</span><span class="p">;</span> <span class="p">}</span>

<span class="c">/* Good CSS */</span>
<span class="nc">.selector</span><span class="o">,</span>
<span class="nc">.selector2</span> <span class="p">{</span>
    <span class="k">position</span><span class="o">:</span> <span class="k">absolute</span><span class="p">;</span>
    <span class="k">top</span><span class="o">:</span> <span class="k">0</span><span class="p">;</span>
    <span class="k">left</span><span class="o">:</span> <span class="k">0</span><span class="p">;</span>
<span class="p">}</span>
</code>
</pre>

                </div><!-- @end highlight -->
            </div><!-- @end col -->
        </section><!-- @end formating -->

        <section class="gui-section" id="idSelectors" name="idSelectors">
            <div class="col">
                <h3 class="h3">ID Selectors</h3>
                <ul>
                    <li>Never use them.</li>
                </ul>
            </div>
            <div class="col">
                <div class="highlight">

<pre>
<code class="lang-css">
<span class="c">/* Bad CSS */</span>
<span class="nc">#selector</span> <span class="p">{</span>

<span class="p">}</span>
</code>
</code>
</pre>

                </div><!-- @end highlight -->
            </div><!-- @end col -->
        </section><!-- @end id selectors -->

        <section class="gui-section" id="shorthandProp" name="shorthandProp">
            <div class="col">
                <h3 class="h3">Shorthand Properties</h3>
                <ul>
                    <li>We prefer individual properties over shorthand because it's easier to override and easier to read</li>
                </ul>
            </div>
            <div class="col">
                <div class="highlight">

<pre>
<code class="lang-css">
<span class="c">/* Not Recommended */</span>
<span class="nc">.selector</span> <span class="p">{</span>
    <span class="nc">font</span><span class="o">:</span> <span class="k">italic</span> <span class="k">20px</span> <span class="k">Serif</span><span class="o">;</span>
<span class="p">}</span>
</code>
<code class="lang-css">
<span class="c">/* Recommended */</span>
<span class="nc">.selector</span> <span class="p">{</span>
    <span class="nc">font-family</span><span class="o">:</span> <span class="k">Serif</span><span class="o">;</span>
    <span class="nc">font-style</span><span class="o">:</span> <span class="k">italic</span><span class="o">;</span>
    <span class="nc">font-size</span><span class="o">:</span> <span class="k">20px</span><span class="o">;</span>
<span class="p">}</span>
</code>
</pre>

                </div><!-- @end highlight -->
            </div><!-- @end col -->
        </section><!-- @end shorthandProp -->

        <section class="gui-section" id="actionClasses" name="actionClasses">
            <div class="col">
                <h3 class="h3">Action classes</h3>
                <ul>
                    <li>Use is-, has-, js- prefix for action classes</li>
                </ul>
            </div>
            <div class="col">
                <div class="highlight">

<pre>
<code class="lang-css">
<span class="nc">.is-active</span> <span class="p">{</span>
    <span class="nc">background-color</span><span class="o">:</span> <span class="k">#383838</span><span class="o">;</span>
    <span class="nc">color</span><span class="o">:</span> <span class="k">#005BAA</span><span class="o">;</span>
<span class="p">}</span>

<span class="nc">.has-dropdown</span> <span class="p">{</span>
    <span class="nc">background-color</span><span class="o">:</span> <span class="k">#383838</span><span class="o">;</span>
    <span class="nc">color</span><span class="o">:</span> <span class="k">#005BAA</span><span class="o">;</span>
<span class="p">}</span>
</code>
</pre>

                </div><!-- @end highlight -->
            </div><!-- @end col -->
        </section><!-- @end action classes -->

        <section class="gui-section" id="comments" name="comments">
            <div class="col">
                <h3 class="h3">Comments</h3>
                <p>Well commented code is key especially when multiple developers work on the same project.</p>
                <ul>
                    <li>Line comments(//) for small explanations (for SCSS)</li>
                    <li>Block comments(/**/) for large documentations (Mixins, functions)</li>
                    <li>Write detailed for code that isn’t self-documenting</li>
                    <li>Place comments on a new line above their subject</li>
                    <li>Keep line-length around 90 characters</li>
                </ul>
            </div>
            <div class="col">
                <div class="highlight">

<pre>
<code class="lang-html">
<span class="c">
/* =========================================================
   Section comment block
   ========================================================= */

/* Sub-section comment block
   ========================================================= */

/**
 * Short description using Doxygen-style comment format
 *
 * The first sentence of the long description starts here and continues
 * on this line for a while finally concluding
 * here at the end of this paragraph.
 *
 * The long description is ideal for more detailed explanations and
 * documentation. It can include example HTML, URLs,
 * or any other information that is deemed necessary or useful.
 *
 * @tag This is a tag named 'tag'
 *
 * TODO: This is a todo statement that describes an
 *   atomic task to be completed at a later date.
 *   It wraps after 80 characters and following lines are
 *   indented by 2 spaces.
 */

/* Basic comment */
</span>
</code>
</pre>
                </div><!-- @end highlight -->
            </div><!-- @end col -->
        </section><!-- @end comments -->

        <div class="gui-section-title" id="scss" name="scss">
            <h2>SCSS</h2>
        </div>

        <section class="gui-section" id="nestedSelectors" name="nestedSelectors">
            <div class="col">
                <h3 class="h3">Nested Selectors</h3>
                <p>
                    Do not nest selectors over three levels deep <br>
                    It help writing css that is not fragile, overly specify or not reusable.
                </p>
            </div>
            <div class="col">
                <div class="highlight">
<pre>
<code class="lang-css">
<span class="nc">.card</span> <span class="p">{</span>
    <span class="nc">background-color</span><span class="o">:</span> <span class="k">#383838</span><span class="o">;</span>
    <span class="nc">color</span><span class="o">:</span> <span class="k">#005BAA</span><span class="o">;</span>
    <span class="c">// Level 01</span>

    <span class="nc">.card__header</span> <span class="p">{</span>
        <span class="nc">background-color</span><span class="o">:</span> <span class="k">#383838</span><span class="o">;</span>
        <span class="nc">color</span><span class="o">:</span> <span class="k">#005BAA</span><span class="o">;</span>
        <span class="c">// Level 02</span>

         <span class="nc">.card__title</span> <span class="p">{</span>
            <span class="nc">background-color</span><span class="o">:</span> <span class="k">#383838</span><span class="o">;</span>
            <span class="nc">color</span><span class="o">:</span> <span class="k">#005BAA</span><span class="o">;</span>
            <span class="c">// Stop</span>
         <span class="p">}</span>
    <span class="p">}</span>
<span class="p">}</span>
</code>
</pre>
                </div><!-- @end highlight -->
            </div><!-- @end col -->
        </section><!-- @end nested selectors -->

<?php /* Template */ /*
        <div class="gui-section-title">
            <h2>[...]</h2>
        </div>

        <section class="gui-section">
            <div class="col">
                [...]
            </div>
            <div class="col">
                <div class="highlight">
                    [...]
                </div><!-- @end highlight -->
            </div><!-- @end col -->
        </section><!-- @end section -->
*/ ?>
    </div>
    <div class="gui-overlay" js-gr-overlay></div>
    <?php include 'includes/gui-footer.php' ?>
</main>
