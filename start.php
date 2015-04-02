<?php
$pagename = 'Get Started';
include("template-top.php");
?>
<div id="content" class="row">
    <div class="columns">
        <h1><?php echo $pagename; ?></h1>

        <div class="row panel">
            <div class="column">
                <p>Your doctor or health care provider can refer you to our Center. If you don’t have a referral, you can call 901.297.0929
                </p>

                <p>To schedule an appointment, call 901-516-9000</p>
            </div>
        </div>
        <div class="row panel">
            <div class="column">
                <h2>What to Expect</h2>

                <p>Within 24 hours of being referred to our Center, the nurse will introduce herself to you and explain the purpose, goals, and expectations.</p>

                <p>Within 72 hours of leaving the hospital, you will receive a follow-up phone call.</p>

                <p>A follow-up appointment will be scheduled for you within 3-5 days after leaving the hospital.</p>

                <p>Our care team will then make follow-up calls once a week.</p>
            </div>
        </div>
        <div class="row panel">
            <div class="column">
                <h2>Directions</h2>

                <div>
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
                </div>
                <h3>From I-240 W:</h3>
                <ol>
                    <li>Merge onto I-240 W toward Memphis.</li>
                    <li>Merge onto I-240 W via EXIT 10A towards Jackson, Miss.</li>
                    <li>Turn slight left onto Millbranch Rd.</li>
                    <li>Take the 2nd right onto East Brooks Rd.</li>
                    <li>Turn left onto Elvis Presley Blvd/US-51 S/TN-3.</li>
                    <li>Turn left onto Wesley Drive.</li>
                    <li>1300 Wesley Dr. is on the left.</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<?php include("template-bottom.php"); ?>
