<?php
$pagename = 'Diabetes Education Classes';
include("template-top.php");
?>
<!--<style>-->
<!--    * {-->
<!--        border: 1px solid #ddd;-->
<!--    }-->
<!--</style>-->
<div id="content" class="row">
    <div class="columns">
        <h1><?php echo $pagename; ?></h1>
        <p>Methodist helps you to take control of your diabetes through classes led by nurse practitioners, pharmacists
            and dietitians at the following locations:</p>
        <dl class="accordion panel callout" data-accordion>
            <h2>Locations</h2>
            <dd class="accordion-navigation">
                <a href="#panel1b"><span class="fa fa-map-marker"></span> Methodist South</a>
                <div id="panel1b" class="content active">
                    <h3>Diabetes Education Program</h3>
                    <p>Fridays at Noon - 1:00 pm for 5 weeks<br>
                        Methodist South Hospital<br>
                        Free of Charge; registration required<br>
                        Contact Annette Caple at (901) 516-3774 or (901)418-0278<br />
                        &mdash; As a part of this free, five-week clinic, our specialized team of nurse practitioners, pharmacists ad
                        dietitians will proves blood pressure checks, weight monitoring, nutrition counseling, education, resource
                        referrals, support, and consultations.
                    </p>
                </div>
            </dd>
            <dd class="accordion-navigation">
                <a href="#panel2b"><span class="fa fa-map-marker"></span> Methodist Germantown</a>
                <div id="panel2b" class="content">
                    <div class="columns">
                        <h3 id="diabetes-classes">Diabetes Classes</h3>
                        <p>
                            If you've been diagnosed with diabetes, classes may be covered by your insurance. Methodist Germantown's diabetes services have received national recognition from the American Diabetes Association. Our diabetes coordinators can also meet with you one-on-one to discuss your diet and insulin medication.                        </p>
                    </div>
                    <div class="columns medium-6">
                        <h3 id="gestational-diabetes-class">Gestational Diabetes Class <a href="#insurance-coverage-for-classes" >*</a></h3>
                        <p>
                            Tuesdays |&nbsp;1:00 - 4:00 p.m.<br> Methodist Le Bonheur Germantown Annex<br> (Across Poplar Ave. from the hospital)<br> Registration and payment required.<br />
                            Call (901) 516-9000.<br />
                            &mdash; Expectant mothers receive glucose-meter training, meal planning and a gestational diabetes management plan in this three-hour class.
                        </p>
                    </div>
                    <div class="columns medium-6">
                        <h3 id="one-on-one-diabetes-education-insulin-training">One-on-One Diabetes Education<br />- Insulin Training <a href="#insurance-coverage-for-classes" >*</a></h3>
                        <p>
                            Individual appointments available. Payment required. Call Kristy Merritt at (901) 516-6616<br />
                            &mdash; This is a one-on-one educational session for insulin administration only. The training session lasts between 30 minutes and an hour.
                        </p>
                    </div>
                    <div class="columns">
                        <h3 id="diabetes-education-class">Diabetes Education Class <a href="#insurance-coverage-for-classes" >*</a></h3>
                        <p>
                            Thursdays |&nbsp;9:30 a.m. - 12:30 p.m. or 2:00 p.m. - 5:00 p.m. (Two sessions available)<br>
                            Methodist Le
                            Bonheur Germantown Annex<br>
                            (Across Poplar Ave. from the hospital)<br>
                            Registration and payment required.
                            Call 901-516-9000 <br />
                            &mdash; Following recommendations from the American Diabetes Association, this customized teaching plan covers meal
                            planning, monitoring, medication and exercise. Patients meet individually with our staff to determine
                            educational goals and the teaching plan. After attending classes, patients again meet individually with a
                            diabetes coordinator for follow-up. The program may be completed in 1-12 months.
                        </p>
                    </div>
                    <br style="clear: both;" />
                </div>
            </dd>
        </dl>
    </div>
    <div class="columns">
        <p><strong id="insurance-coverage-for-classes">Insurance Coverage for Classes:</strong> For classes that require payment, most insurance plans cover the cost of diabetes education at the request of
            your physician. Check with your insurance company to find out if your plan covers classes.<br />
            If yes, ask your doctor to complete the diabetes class referral form (PDF) and fax it to (901) 516-4900.</p>
    </div>
</div>
<?php include("template-bottom.php"); ?>
