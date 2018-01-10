<?php
$pagename = 'Physical Activity';
include("template-top.php");
?>
<!--<style>-->
<!--    * {-->
<!--        border: 1px solid #ddd;-->
<!--    }-->
<!--</style>-->
<div id="content" class="row">
    <div class="columns" data-equalizer="test">
        <h1><?php echo $pagename; ?></h1>
        <p>Physical activity is another important part of your diabetes management plan. When you exercise, your muscles use sugar (glucose) for energy. Regular physical activity also helps your body use insulin more efficiently.</p>
            <p>These factors work together to lower your blood sugar level. The more strenuous your workout, the longer the effect lasts. But even light activities--such as housework, gardening or being on your feet for extended periods--can improve your blood sugar level.</p>
        <div class="row panel text-center">
            <h2 class="text-left">Tools to Help Increase Physical Activity</h2>
            <ul class="small-block-grid-2 medium-block-grid-3" data-equalizer="physical-activity">
                <li>
                    <figure class="apps">
                        <img src="images/walking-works.jpg" class="" alt="Picture of Ruthie Tate">
                        <figcaption href="#"
                                    data-dropdown="walking-works"
                                    aria-controls="walking-works"
                                    aria-expanded="false"
                                    class="button secondary dropdown tiny expand text-right" data-equalizer-watch="physical-activity">
                            Walking Works
                        </figcaption>
                    </figure>
                </li>
                <div id="walking-works" data-dropdown-content class="f-dropdown mdc-dropdown panel" aria-hidden="true">
                    <h3>Walking Works</h3>
                    <p>
                        Being active is one of the best way to help control your blood sugar if you have diabetes. One of the easiest and safest ways to be active is to walk whenever you can.
                        <a href="/documents/walking-works.pdf" class="button">
                            Learn More
                        </a>
                    </p>
                </div>
                <li>
                    <figure class="apps">
                        <img src="images/lets-get-moving.jpg" class="" alt="Picture of Ruthie Tate">
                        <figcaption href="#"
                                    data-dropdown="lets-get-moving"
                                    aria-controls="lets-get-moving"
                                    aria-expanded="false"
                                    class="button secondary dropdown tiny expand text-right" data-equalizer-watch="physical-activity">
                            Let’s Get Moving
                        </figcaption>
                    </figure>
                </li>
                <div id="lets-get-moving" data-dropdown-content class="f-dropdown mdc-dropdown panel" aria-hidden="true">
                    <h3>Let’s Get Moving</h3>
                    <p>
                        Being active is good for almost everyone ― including people with diabetes. Active people often: have more energy, have less stress, have better blood sugar control, look and feel better.
                        <a href="/documents/lets-get-moving.pdf" class="button">
                            Learn More
                        </a>
                    </p>
                </div>
                <li>
                    <figure class="apps">
                        <img src="images/my-weekly-exercise-plan.jpg" class="" alt="Picture of Ruthie Tate">
                        <figcaption href="#"
                                    data-dropdown="my-weekly-exercise-plan"
                                    aria-controls="my-weekly-exercise-plan"
                                    aria-expanded="false"
                                    class="button secondary dropdown tiny expand text-right" data-equalizer-watch="physical-activity">
                            My Weekly Exercise Plan
                        </figcaption>
                    </figure>
                </li>
                <div id="my-weekly-exercise-plan" data-dropdown-content class="f-dropdown mdc-dropdown panel" aria-hidden="true">
                    <h3>My Weekly Exercise Plan</h3>
                    <p>Creating an exercise plan and setting goals is a great way to encourage physical activity.
                        <a href="/documents/my-weekly-exercise-plan.pdf" class="button">
                            Learn More
                        </a>
                    </p>
                </div>
            </ul>
        </div>
    </div>
    <div class="columns">
        <h2>Gym Memberships and Classes</h2>
        <ul>
            <li>YMCA</li>
            <li>Group Fitness</li>
            <li>Local Events</li>
        </ul>
    </div>
</div>
<?php include("template-bottom.php"); ?>
