<br>
<br>
<br>
<br>

<footer class="footer" grid grid--collapse>
    <div grid="row">
        <div grid="sm-6">
            © 2015 Groupe St-Henri. Tous droits réservés
        </div>
        <div class="footer__company" grid="sm-6">
            <span>
                <a href="http://www.globalia.ca" target="_blank">
                    Solution web&nbsp;:
                    <?php readfile('../dist/images/svg/globalia-logo.svg'); ?>
                </a>
            </span>
        </div>
    </div>
</footer>


<script src="<?= $path_public ?>/js/vendor.js"></script>
<script src="<?= $path_public ?>/js/<?= $project_name ?>.js"></script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
    e.src='https://www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X','auto');ga('send','pageview');
    </script>
</body>
</html>
