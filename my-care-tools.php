<?php
$pagename = 'Self Care Tools';
include("template-top.php");
?>
<style>
    header.hero {
        background-position: 0 60%;
        height: 0vw;
        min-height: 150px;
    }
</style>
<div id="content" class="row">
    <div class="columns">
        <h1><?php echo $pagename; ?></h1>

        <div class="row">
            <div class="columns mdc-my-care-tools">
                <ul class="small-block-grid-2 medium-block-grid-4" data-equalizer>
                    <li><a href="top-rated-care-tools.php" class="button expand" data-equalizer-watch><span class="fa fa-wrench fa-lg fa-3x"></span><br />Top-Rated Care Tools</a><br />
                        <p>
                            Great materials selected by diabetes experts and patients living with diabetes.
                        </p>
                    </li>
                    <li><a href="diabetes-education-classes.php" class="button expand" data-equalizer-watch><span class="fa fa-graduation-cap fa-lg fa-3x"></span><br />Diabetes Education Classes</a><br />
                        <p>
                            Methodist helps you to take control of your diabetes through classes led by nurse practitioners, pharmacists and dietitians.
                        </p>
                    </li>
                    <li><a href="physical-activity.php" class="button expand" data-equalizer-watch><span class="fa fa-bicycle fa-lg fa-3x"></span><br />Physical Activity</a><br />
                        <p>
                            Physical activity is another important part of your diabetes management plan. When you exercise, your muscles use sugar (glucose) for energy. Regular physical activity also helps your body use insulin more efficiently.
                        </p>
                    </li>
                    <li><a href="healthy-eating.php" class="button expand" data-equalizer-watch><span class="fa fa-cutlery fa-lg fa-3x"></span><br />Healthy Eating</a><br />
                        <p>
                            Healthy eating is a cornerstone of health living--with or without diabetes. But if you have diabetes, you need to know how foods affect your blood sugar levels. It’s not only the type of food you eat but also how you eat and the combinations of food types you eat.
                        </p>
                    </li>
                </ul>
                <ul class="small-block-grid-2 medium-block-grid-3">
                <li><a href="caring-for-diabetes.php" class="button expand"><span class="fa fa-stethoscope fa-lg fa-3x"></span><br />Caring for Diabetes</a><br />
                        <p>
                            Caring for diabetes is a lifelong responsibility and it’s important you learn all you can about diabetes. You are the most important member of your health care team; taking care of yourself and your diabetes can help you feel good today and in the future.
                        </p>
                    </li>
                    <li><a href="apps.php" class="button expand"><span class="fa fa-mobile fa-lg fa-3x"></span><br />My Diabetes Apps</a><br />
                        <p>
                            Download Some of our patients’ favorite smart phone applications to help you manage your diabetes.
                        </p>
                    </li>
                    <li><a href="https://www.patientslikeme.com/" class="button expand"><span class="fa fa-user-circle fa-lg fa-3x"></span><br />Patients Like Me</a><br />
                        <p>
                            Our digital health learning system uses the most advanced technologies to help you better understand wellness, aging, and disease. As new understanding emerges, you will gain access to tools, information and connections—to people like you—to find a clearer path forward to your own future health.
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php include("template-bottom.php"); ?>
