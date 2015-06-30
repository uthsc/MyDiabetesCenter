<div class="sub-tagline-box contain-to-grid">
<div class="row">
    <div class="columns text-center">
        <p class="sub-tagline">A service of the Diabetes Wellness &amp;&nbsp;Prevention Center</p>
    </div>
</div>
</div>
<div class="row full connect-boxes">
    <div class="columns medium-7 small-text-center medium-text-right connect-box">
        <h2>Call <i class="fa fa-phone"></i></h2>

        <p>Care Coordination Services: <span class="pnone-number">(901) 758-7888</span><br />

        Schedule a Diabetes Education Appointment: <span class="pnone-number">(901) 516-9000</span><br />
        Request more information: <a href="mailto:info@mydiabetescenter.com?subject=More info please">info@mydiabetescenter.com</a></p>

        <p><strong>3 Diabetes Peer Support Groups:</strong></p>
        <ul style="list-style: none;">
            <li>&#10102; Methodist South -
                <span class="handwriting">Blanch&nbsp;Thomas:</span>&nbsp;<span class="pnone-number">(901) 516-3597</span>
            </li>
            <li>&#10103; Methodist University -
                <span class="handwriting">Jean&nbsp;Evans:</span>&nbsp;<span class="pnone-number">(901) 516-8443</span>
            </li>
            <li>&#10104; Methodist North -
                <span class="handwriting">Sheilah&nbsp;Easterling:</span>&nbsp;<span class="pnone-number">(901) 516-5617</span>
            </li>
        </ul>
        <p><em>All part of the
                <a href="http://www.methodisthealth.org/about-us/faith-and-health/community/">Congregational Health Network</a></em>
        </p>
    </div>
    <div class="columns medium-5 small-only-text-center right connect-box">
        <hr style="margin: 0 15%;" class="show-for-small"/>

        <h2><i class="fa fa-map-marker"></i> Visit</h2>

        <p>Methodist South Medical Office Complex<br/> <a href="#" data-reveal-id="mapModal">1251 Wesley Drive, Ste. 151<br/> Memphis, TN 38118</a>
        </p>

        <div id="mapModal" class="reveal-modal" data-reveal="data-reveal">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3266.9736137919863!2d-90.020438!3d35.03238999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x7551e3d9ffcbd63a!2sMethodist+South+Hospital!5e0!3m2!1sen!2sus!4v1422892277160" width="100%" height="300" frameborder="0" style="border:0"></iframe>

            <?php
            if (strpos($_SERVER['HTTP_USER_AGENT'], 'Windows') !== false) {
                ?>
                <a href="bingmaps:?cp=35.03239~-90.020438" class="button show-for-large-up">Open in Desktop App</a>
            <?php
            }
            if (strpos($_SERVER['HTTP_USER_AGENT'], 'Mac') !== false) {
                ?>
                <a href="http://maps.apple.com/?q=35.03239,-90.020438" class="button show-for-large-up">Open in App</a>
            <?php
            }
            ?>
            <a href="http://maps.apple.com/?q=35.03239,-90.020438" class="button hide-for-large-up">Open in App</a>

            <a class="close-reveal-modal">&#215;</a>
        </div>
    </div>
    <div class="columns medium-5 small-only-text-center right connect-box">
        <hr style="margin: 0 15%;" class="show-for-small"/>
        <h2><i class="fa fa-clock-o"></i> Hours</h2>

        <p>MON, TUE, &amp; THUR: 1pm-5pm<br/> FRI: 8am-5pm</p>
    </div>
</div>

<!-- Footer -->
<div class="footer contain-to-grid">
    <footer class="row text-center">
        <div class="large-12 columns large-centered">
            <div class="row" data-equalizer="data-equalizer">
                <div class="columns large-2 panel radius methodist-panel logo-panel show-for-large-up" data-equalizer-watch="data-equalizer-watch">
                </div>
                <div class="columns large-8 small-centered medium-uncentered large-uncentered" data-equalizer-watch="data-equalizer-watch">
                    <div class="social-icon">
                        <a href="http://facebook.com/#"><i class="fa fa-facebook fa-2x fa-inverse"></i></a>
                        <a href="http://twitter.com/#"><i class="fa fa-twitter fa-2x fa-inverse"></i></a>
                        <a href="http://instagram.com/#"><i class="fa fa-instagram fa-2x fa-inverse"></i></a>
                        <a href="http://linkedin.com/company/#"><i
                                class="fa fa-linkedin fa-2x fa-inverse"></i></a>&nbsp;
                        <a href="http://pinterest.com/#/"><i class="fa fa-youtube fa-2x fa-inverse"></i></a>
                        <a href="http://youtube.com/user/#"><i class="fa fa-pinterest fa-2x fa-inverse"></i></a>

                        <p>&copy; <?php echo date("Y") ?> Diabetes Wellness &amp; Prevention Center<br/> Methodist Le Bonheur Healthcare<br/> The University of Tennessee Health Science Center
                        </p>
                    </div>
                </div>
                <div class="columns large-2 panel radius uthsc-panel logo-panel show-for-large-up" data-equalizer-watch="data-equalizer-watch">
                </div>
            </div>
        </div>
        <div class="columns logo-panel-group">
            <div class="row hide-for-large-up collapse" data-equalizer="data-equalizer">
                <div class="columns small-12 small-centered medium-uncentered medium-6 panel radius methodist-panel logo-panel" data-equalizer-watch="data-equalizer-watch">
                </div>
                <div class="columns small-12 small-centered medium-uncentered medium-6 panel radius uthsc-panel logo-panel" data-equalizer-watch="data-equalizer-watch">
                </div>
            </div>
        </div>
    </footer>
</div>

<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/foundation/js/foundation.min.js"></script>
<script src="js/app.js"></script>
</body>
</html>
