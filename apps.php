<?php
$pagename = 'My Diabetes Apps';
include("template-top.php");
?>
<style>
    iframe {
        border-radius: 10px;
        overflow: hidden;
        text-align: center;
        display: inline-block;
        height: 230px;
        width: 100%;

    }

    .iphones {
        background-position: 12px 0;
        background-repeat: no-repeat;
        background-size: 70% auto;
    }

    .iphone-spacer {
        height: 230px;
    }

    .android img {
        width: 50%;
    }

</style>
<div id="content" class="row collapse">
    <div class="columns">
        <h1><?php echo $pagename; ?></h1>

        <div class="panel">
            <!--<iframe src="https://widgets.itunes.apple.com/widget.html?c=us&brc=FFFFFF&blc=FFFFFF&trc=FFFFFF&tlc=FFFFFF&d=Mouvelean's Favorite Apps &t=  The Best Diabetes Apps&m=software&e=software,iPadSoftware&w=250&h=370&ids=398436747,471942748,418076239,533299240&wt=playlist&partnerId=&affiliate_id=&at=&ct=" frameborder=0 style="overflow:visible;width:250px;height: 500px;border:0px"></iframe>

            <iframe src="https://widgets.itunes.apple.com/widget.html?c=us&brc=FFFFFF&blc=FFFFFF&trc=FFFFFF&tlc=FFFFFF&d=&t=&m=software&e=software,iPadSoftware&w=250&h=160&ids=294754639&wt=discovery&partnerId=&affiliate_id=&at=&ct=" frameborder=0 style="overflow-x:hidden;overflow-y:hidden;width:250px;height: 160px;border:0px"></iframe>-->
            <h2>Apple iOS Apps</h2>
            <ul class="small-block-grid-3 show-for-small">
                <li>
                    <a href="https://itunes.apple.com/us/app/glooko/id471942748?mt=8&l=fr&ign-mpt=uo%3D4"><img src="https://lh4.ggpht.com/jbpP7Ze65-KqilhP_G7vGAvnMyI92NpJCJBajjNbYLpThtUjOlX4TPhT0J0JYgvxNw">
                        <p>Glooko</p>
                    </a>
                </li>
                <li>
                    <a href="https://itunes.apple.com/us/app/diabetic-connect/id418076239?mt=8&l=fr&ign-mpt=uo%3D4"><img src="https://lh3.ggpht.com/R9heCRZB0iel8KDwB5pOB_3itsXc5tIjZ3xN4NpGJme9zmg-rcp4RuzzUtTdaQL8qg">
                        <p>Diabetic Connect</p>
                    </a>
                </li>
                <li>
                    <a href="https://itunes.apple.com/us/app/glucose-buddy-diabetes-logbook/id294754639?mt=8&l=fr&ign-mpt=uo%3D4"><img src="https://lh3.ggpht.com/Gyni_TeiWrKJo8nphE_I4dFSWI-835sTfuWQ4Mm8ozAwfFUBSd2eb480WuubVCA2ug">
                        <p>Glucose Buddy</p>
                    </a>
                </li>
                <li>
                    <a href="https://itunes.apple.com/us/app/fooducate-healthy-weight-loss/id398436747?mt=8&l=fr&ign-mpt=uo%3D4"><img src="https://lh3.ggpht.com/ziS5bAnxT6H0iza2z8zSge_t9nx6zQ7Uddu3l_xfE5ju1jNTaPA6dYKQpKCIBNYbnA">
                        <p>Fooducate</p>
                    </a>
                </li>
            </ul>

            <ul class="medium-block-grid-3 large-block-grid-4 hide-for-small">
                <li class="iphones" style="background-image: url('https://lh4.ggpht.com/jbpP7Ze65-KqilhP_G7vGAvnMyI92NpJCJBajjNbYLpThtUjOlX4TPhT0J0JYgvxNw');">
                    <iframe src="https://widgets.itunes.apple.com/widget.html?c=us&brc=FFFFFF&blc=FFFFFF&trc=FFFFFF&tlc=FFFFFF&d=&t=&m=software&e=software,iPadSoftware&w=230&h=230&ids=471942748&wt=discovery&partnerId=&affiliate_id=&at=&ct=" frameborder=0></iframe>
                    <p><a href="https://itunes.apple.com/us/app/glooko/id471942748?mt=8&l=fr&ign-mpt=uo%3D4">Glooko</a>
                    </p></li>
                <li class="iphones" style="background-image: url('https://lh3.ggpht.com/R9heCRZB0iel8KDwB5pOB_3itsXc5tIjZ3xN4NpGJme9zmg-rcp4RuzzUtTdaQL8qg');">
                    <iframe src="https://widgets.itunes.apple.com/widget.html?c=us&brc=FFFFFF&blc=FFFFFF&trc=FFFFFF&tlc=FFFFFF&d=&t=&m=software&e=software,iPadSoftware&w=230&h=230&ids=418076239&wt=discovery&partnerId=&affiliate_id=&at=&ct=" frameborder=0></iframe>
                    <p>
                        <a href="https://itunes.apple.com/us/app/diabetic-connect/id418076239?mt=8&l=fr&ign-mpt=uo%3D4">Diabetic Connect</a>
                    </p></li>
                <li class="iphones" style="background-image: url('https://lh3.ggpht.com/Gyni_TeiWrKJo8nphE_I4dFSWI-835sTfuWQ4Mm8ozAwfFUBSd2eb480WuubVCA2ug');">
                    <iframe src="https://widgets.itunes.apple.com/widget.html?c=us&brc=FFFFFF&blc=FFFFFF&trc=FFFFFF&tlc=FFFFFF&d=&t=&m=software&e=software,iPadSoftware&w=230&h=230&ids=294754639&wt=discovery&partnerId=&affiliate_id=&at=&ct=" frameborder=0></iframe>
                    <p>
                        <a href="https://itunes.apple.com/us/app/glucose-buddy-diabetes-logbook/id294754639?mt=8&l=fr&ign-mpt=uo%3D4">Glucose Buddy</a>
                    </p></li>
                <li class="iphones" style="background-image: url('https://lh3.ggpht.com/ziS5bAnxT6H0iza2z8zSge_t9nx6zQ7Uddu3l_xfE5ju1jNTaPA6dYKQpKCIBNYbnA');">
                    <iframe src="https://widgets.itunes.apple.com/widget.html?c=us&brc=FFFFFF&blc=FFFFFF&trc=FFFFFF&tlc=FFFFFF&d=&t=&m=software&e=software,iPadSoftware&w=230&h=230&ids=398436747&wt=discovery&partnerId=&affiliate_id=&at=&ct=" frameborder=0></iframe>
                    <p>
                        <a href="https://itunes.apple.com/us/app/fooducate-healthy-weight-loss/id398436747?mt=8&l=fr&ign-mpt=uo%3D4">Fooducate</a>
                    </p></li>
            </ul>
        </div>
        <div class="panel">
            <h2>Android Apps</h2>

            <ul class="small-block-grid-3 medium-block-grid-3 large-block-grid-4">
                <li>
                    <img src="https://lh4.ggpht.com/jbpP7Ze65-KqilhP_G7vGAvnMyI92NpJCJBajjNbYLpThtUjOlX4TPhT0J0JYgvxNw" alt="pic of Glooko app"/>

                    <p>Glooko</p>
                    <a href="https://play.google.com/store/apps/details?id=com.glooko.logbook">
                        <img alt="Get it on Google Play"
                             src="https://developer.android.com/images/brand/en_generic_rgb_wo_60.png"/></a>
                </li>
                <li>
                    <img src="https://lh3.ggpht.com/R9heCRZB0iel8KDwB5pOB_3itsXc5tIjZ3xN4NpGJme9zmg-rcp4RuzzUtTdaQL8qg" alt="pic of Diabetic Connect app"/>

                    <p>Diabetic Connect</p>

                    <a href="https://play.google.com/store/apps/details?id=com.alliancehealthconnect.diabetic">
                        <img alt="Get it on Google Play"
                             src="https://developer.android.com/images/brand/en_generic_rgb_wo_60.png"/></a>
                </li>
                <li>
                    <img src="https://lh3.ggpht.com/Gyni_TeiWrKJo8nphE_I4dFSWI-835sTfuWQ4Mm8ozAwfFUBSd2eb480WuubVCA2ug" alt="pic of Glucose Buddy app"/>

                    <p>Glucose Buddy</p>

                    <a href="https://play.google.com/store/apps/details?id=com.skyhealth.glucosebuddyfree">
                        <img alt="Get it on Google Play"
                             src="https://developer.android.com/images/brand/en_generic_rgb_wo_60.png"/></a>
                </li>
                <li>
                    <img src="https://lh3.ggpht.com/ziS5bAnxT6H0iza2z8zSge_t9nx6zQ7Uddu3l_xfE5ju1jNTaPA6dYKQpKCIBNYbnA" alt="pic of Fooducate app"/>

                    <p>Fooducate</p>

                    <a href="https://play.google.com/store/apps/details?id=com.fooducate.nutritionapp">
                        <img alt="Get it on Google Play"
                             src="https://developer.android.com/images/brand/en_generic_rgb_wo_60.png"/></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php include("template-bottom.php"); ?>
