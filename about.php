<?php
$pagename = 'About Us';
include("template-top.php");
?>
    <div class="row">
        <div class="columns panel">
            <p>If you have diabetes, Methodist South's Diabetes Prevention &amp; Wellness Center can help you understand it and show you how easy it can be to manage it. Our Center has a highly skilled care team that specializes in caring for people with diabetes and other chronic illnesses, like High Blood Pressure, Heart Disease, Heart Failure (CHF) and Asthma.</p>
            <div class="columns medium-4 large-3">
                <figure class="staff">
                    <img src="images/sihoutte-man.jpg" alt="xxx" />
                    <figcaption><h3>John Q. Public, PhD</h3><br />
                        Interim Dean College of University, Department Division &amp; Institution
                        <a href="#" data-reveal-id="staff1"><address class="button tiny expand text-left"><i class="fa fa-map-marker fa-2x dropcap"></i>900 Street, #1045<br />
                                    Memphis, TN 38104</address>
                            <div id="staff1" class="reveal-modal" data-reveal="data-reveal">
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
                        <i class="fa fa-phone"></i> 901-555-6135<br />
                        <i class="fa fa-envelope-o"></i> <a href="mailto:email@address.edu">email@address.edu</a>
                    </figcaption>
                </figure>



            </div>
        </div>
    </div>
<?php include("template-bottom.php"); ?>
