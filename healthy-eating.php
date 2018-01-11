<?php
$pagename = 'Healthy Eating';
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
        <div class="row">
            <div class="columns medium-6">
                <p>
                    Healthy eating is a cornerstone of health living--with or without diabetes. But if you have diabetes, you need to know how foods affect your blood sugar levels. It’s not only the type of food you eat but also how you eat and the combinations of food types you eat.
                </p>
            </div>
            <div class="columns medium-6">
                <p>
                    Here’s what you can do to promote healthy eating:
                </p>
                <ul>
                    <li>Learn about carbohydrate counting and portion sizes</li>
                    <li>Make every meal well-balanced</li>
                    <li>Coordinate meals with medications</li>
                    <li>Avoid sugar-sweetened beverages</li>
                </ul>
            </div>
        </div>

        <div class="row panel text-center">
            <h2 class="text-left">Tools for Healthy Eating</h2>
            <ul class="small-block-grid-2 medium-block-grid-4" data-equalizer="healthy-eating">
                <li>
                    <figure class="apps">
                        <img src="images/program/the-plate-method.jpg" class="" alt="Picture of Ruthie Tate">
                        <figcaption href="#"
                                    data-dropdown="the-plate-method"
                                    aria-controls="the-plate-method"
                                    aria-expanded="false"
                                    class="button secondary dropdown tiny expand text-right" data-equalizer-watch="healthy-eating">
                            The Plate Method
                        </figcaption>
                    </figure>
                </li>
                <div id="the-plate-method" data-dropdown-content class="f-dropdown mdc-dropdown panel" aria-hidden="true">
                    <h3>The Plate Method</h3>
                    <p>
                        The Plate Method is a simple way to plan meals. You don’t have to count anything or read a long list of foods.
                        <a href="/documents/the-plate-method-of-eating.pdf" class="button">
                            Learn More
                        </a>
                    </p>
                </div>
                <li>
                    <figure class="apps">
                        <img src="images/program/healthy-cooking-tips.jpg" class="" alt="Picture of Ruthie Tate">
                        <figcaption href="#"
                                    data-dropdown="healthy-cooking-tips"
                                    aria-controls="healthy-cooking-tips"
                                    aria-expanded="false"
                                    class="button secondary dropdown tiny expand text-right" data-equalizer-watch="healthy-eating">
                            Healthy Cooking Tips
                        </figcaption>
                    </figure>
                </li>
                <div id="healthy-cooking-tips" data-dropdown-content class="f-dropdown mdc-dropdown panel" aria-hidden="true">
                    <h3>Healthy Cooking Tips</h3>
                    <p>
                        How food is prepared can be just as important in controlling diabetes as the food you eat.
                        <a href="/documents/healthy-cooking-tips.pdf" class="button">
                            Learn More
                        </a>
                    </p>
                </div>
                <li>
                    <figure class="apps">
                        <img src="images/program/the-plant-foods-plate.jpg" class="" alt="Picture of Ruthie Tate">
                        <figcaption href="#"
                                    data-dropdown="the-plant-foods-plate"
                                    aria-controls="the-plant-foods-plate"
                                    aria-expanded="false"
                                    class="button secondary dropdown tiny expand text-right" data-equalizer-watch="healthy-eating">
                            The Plant-Foods Plate
                        </figcaption>
                    </figure>
                </li>
                <div id="the-plant-foods-plate" data-dropdown-content class="f-dropdown mdc-dropdown panel" aria-hidden="true">
                    <h3>The Plant-Foods Plate</h3>
                    <p>
                        Diet changes are one of the cornerstones to treating diabetes.
                        <a href="/documents/the-plant-foods-plate.pdf" class="button">
                            Learn More
                        </a>
                    </p>
                </div>
                <li>
                    <figure class="apps">
                        <img src="images/program/the-diabetes-portion-plate.jpg" class="" alt="Picture of Ruthie Tate">
                        <figcaption href="#"
                                    data-dropdown="the-diabetes-portion-plate"
                                    aria-controls="the-diabetes-portion-plate"
                                    aria-expanded="false"
                                    class="button secondary dropdown tiny expand text-right" data-equalizer-watch="healthy-eating">
                            The Diabetes Portion Plate
                        </figcaption>
                    </figure>
                </li>
                <div id="the-diabetes-portion-plate" data-dropdown-content class="f-dropdown mdc-dropdown panel" aria-hidden="true">
                    <h3>The Diabetes Portion Plate</h3>
                    <p>
                        The diabetes portion plate is an easy to use tool that can help you visualize your portion sizes and make smart, healthy choices about what you eat.
                        <a href="/documents/diabetes-portion-plate-for-a-southern-meal.pdf" class="button">
                            Learn More
                        </a>
                    </p>
                </div>
            </ul>
        </div>
    </div>
    <div class="columns">
        <h2>Nutrition Classes, Farmer’s Market, Healthy Recipes</h2>
        <ul>
            <li>Church Health Center</li>
            <li>Community Gardens</li>
        </ul>
    </div>
</div>
<?php include("template-bottom.php"); ?>
