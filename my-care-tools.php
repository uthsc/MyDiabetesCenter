<?php
$pagename = 'Self Care Tools';
include("template-top.php");
?>
<style>
    header.hero {
        background-image: url(../images/steps.jpg);
        background-position: 0 48%;
        background-size: cover;
        height: 14vw;
        max-height: 400px;
        min-height: 140px;
    }
</style>
<div id="content" class="row">
    <div class="columns">
        <h1><?php echo $pagename; ?></h1>

        <div class="row">
            <div class="columns">
                <ul class="small-block-grid-2 medium-block-grid-3">
                    <li><a href="#" class="button expand"><span class="fa fa-medkit fa-lg"></span> Pellentesque</a><br />
                        <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Sed porttitor lectus nibh. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.<a data-dropdown="drop" aria-controls="drop" aria-expanded="false" class="secondary round label tiny dropdown right">
                                <span class="fa fa-info-circle"></span> More Info
                            </a></p>
                        <ul id="drop" data-dropdown-content class="f-dropdown" role="menu" aria-hidden="false" tabindex="-1">
                            <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.</p>
                        </ul>
                    </li>
                    <li><a href="#" class="button large expand"><span class="fa fa-bicycle fa-lg"></span> Ipsum</a><br />
                        <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Sed porttitor lectus nibh.<a data-dropdown="drop" aria-controls="drop" aria-expanded="false" class="secondary round label tiny dropdown right">
                                <span class="fa fa-info-circle"></span> More Info
                            </a></p>
                        <ul id="drop" data-dropdown-content class="f-dropdown" role="menu" aria-hidden="false" tabindex="-1">
                            <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.</p>
                        </ul>
                    </li>
                    <li><a href="#" class="button large expand"><span class="fa fa-car fa-lg"></span> Orci</a><br />
                        <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Donec rutrum congue leo eget malesuada. Pellentesque in ipsum id orci porta dapibus.<a data-dropdown="drop" aria-controls="drop" aria-expanded="false" class="secondary round label tiny dropdown right">
                                <span class="fa fa-info-circle"></span> More Info
                            </a></p>
                        <ul id="drop" data-dropdown-content class="f-dropdown" role="menu" aria-hidden="false" tabindex="-1">
                            <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.</p>
                        </ul>
                    </li>
                    <li><a href="#" class="button large expand"><span class="fa fa-home fa-lg"></span> Porta</a><br />
                        <p>Nulla quis lorem ut libero malesuada feugiat. Donec sollicitudin molestie malesuada. Nulla porttitor accumsan tincidunt.<a data-dropdown="drop" aria-controls="drop" aria-expanded="false" class="secondary round label tiny dropdown right">
                                <span class="fa fa-info-circle"></span> More Info
                            </a></p>
                        <ul id="drop" data-dropdown-content class="f-dropdown" role="menu" aria-hidden="false" tabindex="-1">
                            <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.</p>
                        </ul>
                    </li>
                    <li><a href="#" class="button large expand"><span class="fa fa-envelope fa-lg"></span> Dapibus</a><br />
                        <p>Pellentesque in ipsum id orci porta dapibus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Quisque velit nisi, pretium ut lacinia in, elementum id enim.<a data-dropdown="drop" aria-controls="drop" aria-expanded="false" class="secondary round label tiny dropdown right">
                                <span class="fa fa-info-circle"></span> More Info
                            </a></p>
                        <ul id="drop" data-dropdown-content class="f-dropdown" role="menu" aria-hidden="false" tabindex="-1">
                            <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.</p>
                        </ul>
                    </li>
                    <li><a href="#" class="button large expand"><span class="fa fa-check-circle fa-lg"></span> Curabitur</a><br />
                        <p>Quisque velit nisi, pretium ut lacinia in, elementum id enim. Proin eget tortor risus. Proin eget tortor risus.<a data-dropdown="drop" aria-controls="drop" aria-expanded="false" class="secondary round label tiny dropdown right">
                                <span class="fa fa-info-circle"></span> More Info
                            </a></p>
                        <ul id="drop" data-dropdown-content class="f-dropdown" role="menu" aria-hidden="false" tabindex="-1">
                            <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.</p>
                        </ul>
                    </li>
                </ul>
            </div>
<!--            <div class="columns">-->
<!--                <h2 id="diabetes-education">Diabetes Education</h2>-->
<!---->
<!--                <p>Methodist helps you to take control of your diabetes through classes led by nurse practitioners, pharmacists and dietitians at several locations.</p>-->
<!---->
<!--                <h3 id="programs-at-methodist-south">Programs at Methodist South</h3>-->
<!---->
<!--                <div class="columns">-->
<!--                    <h4 id="diabetes-education-program">Diabetes Education Program</h4>-->
<!---->
<!--                    <p>Fridays at Noon - 1:00 pm for 5 weeks<br/> Methodist South Hospital<br/> Free of Charge; registration required<br/> Contact Annette Caple at 901.516.3774 or 901.418.0278-->
<!--                    </p>-->
<!---->
<!--                    <p>As a part of this free, five-week clinic, our specialized team of nurse practitioners, pharmacists ad dietitians will proves blood pressure checks, weight monitoring, nutrition counseling, education, resource referrals, support, and consultations.</p>-->
<!--                </div>-->
<!---->
<!--                <h3 id="programs-at-methodist-germantown">Programs at Methodist Germantown</h3>-->
<!---->
<!--                <div class="columns medium-4">-->
<!--                    <h4 id="diabetes-classes">Diabetes Classes</h4>-->
<!---->
<!--                    <p>If you've been diagnosed with diabetes, classes may be covered by your insurance. Methodist Germantown's diabetes services have received national recognition from the American Diabetes Association. Our diabetes coordinators can also meet with you one-on-one to discuss your diet and insulin medication.</p>-->
<!--                </div>-->
<!--                <div class="columns medium-4">-->
<!--                    <h4 id="gestational-diabetes-class">Gestational Diabetes Class</h4>-->
<!---->
<!--                    <p>Tuesdays |&nbsp;1:00 - 4:00 p.m.<br/> Methodist Le Bonheur Germantown Annex<br/> (Across Poplar Ave. from the hospital)<br/> Registration and payment required. Call 901.516.9000-->
<!--                    </p>-->
<!---->
<!--                    <p>Expectant mothers receive glucose-meter training, meal planning and a gestational diabetes management plan in this three-hour class.</p>-->
<!---->
<!--                </div>-->
<!--                <div class="columns medium-4">-->
<!--                    <h4 id="one-on-one-diabetes-education-insulin-training">One-on-One Diabetes Education - Insulin Training</h4>-->
<!---->
<!--                    <p>Individual appointments available. Payment required.<br/> Call Kristy Merritt at 901.516.6616</p>-->
<!---->
<!--                    <p>This is a one-on-one educational session for insulin administration only. The training session lasts between 30 minutes and an hour.</p>-->
<!---->
<!--                </div>-->
<!--                <div class="columns">-->
<!--                    <h4 id="diabetes-education-class">Diabetes Education Class</h4>-->
<!---->
<!--                    <p>Thursdays |&nbsp;9:30 a.m. - 12:30 p.m. or 2:00 p.m. - 5:00 p.m. (Two sessions available)<br/> Methodist Le Bonheur Germantown Annex<br/> (Across Poplar Ave. from the hospital)<br/> Registration and payment required. Call 901-516-9000-->
<!--                    </p>-->
<!---->
<!--                    <p>Following recommendations from the American Diabetes Association, this customized teaching plan covers meal planning, monitoring, medication and exercise. Patients meet individually with our staff to determine educational goals and the teaching plan. After attending classes, patients again meet individually with a diabetes coordinator for follow-up. The program may be completed in 1-12 months.</p>-->
<!---->
<!--                </div>-->
<!---->
<!--                <div class="columns">-->
<!--                    <h3 id="insurance-coverage-for-classes">Insurance Coverage for Classes</h3>-->
<!---->
<!--                    <p>For classes that require payment, most insurance plans cover the cost of diabetes education at the request of your physician. Check with your insurance company to find out if your plan covers classes.</p>-->
<!---->
<!--                    <p>If yes, ask your doctor to complete the diabetes class referral form (PDF) and fax it to 901.516.4900.</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="columns right text-right">-->
<!--                <p>Go to: <a href="#physical-activity">Physical&nbsp;Activity |&nbsp;<a href="#healthy-eating">Healthy&nbsp;Eating</a> |&nbsp;<a href="#caring-for-diabetes">Caring&nbsp;for&nbsp;Diabetes</a></p>-->
<!--            </div>-->
        </div>
<!--        <div class="row panel">-->
<!--            <div class="columns">-->
<!--                <h2 id="physical-activity">Physical Activity</h2>-->
<!---->
<!--                <p>Physical activity is another important part of your diabetes management plan. When you exercise, your muscles use sugar (glucose) for energy. Regular physical activity also helps your body use insulin more efficiently.</p>-->
<!---->
<!--                <p>These factors work together to lower your blood sugar level. The more strenuous your workout, the longer the effect lasts. But even light activities--such as housework, gardening or being on your feet for extended periods--can improve your blood sugar level.</p>-->
<!---->
<!--                <p>What to do:</p>-->
<!--                <ul>-->
<!--                    <li>Talk to your doctor about exercise plan.</li>-->
<!--                    <li>Keep an exercise schedule.</li>-->
<!--                    <li>Stay hydrated.</li>-->
<!--                </ul>-->
<!--                <h3>Gym Memberships and Classes</h3>-->
<!--                <ul>-->
<!--                    <li><a href="http://www.ymcamemphis.org/">YMCA</a></li>-->
<!--                    <li><a href="http://www.krocmemphis.org/programs/fitness/">Group Fitness</a></li>-->
<!--                    <li>-->
<!--                        <a href="http://www.diabetes.org/in-my-community/local-offices/memphis-tennessee/">Local Events</a>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </div>-->
<!--            <div class="columns right text-right">-->
<!--                <p>Go to: <a href="#diabetes-education">Diabetes&nbsp;Education</a> |&nbsp;<a href="#healthy-eating">Healthy&nbsp;Eating</a> |&nbsp;<a href="#caring-for-diabetes">Caring&nbsp;for&nbsp;Diabetes</a></p>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="row panel">-->
<!--            <div class="columns">-->
<!--                <h2 id="healthy-eating">Healthy Eating</h2>-->
<!---->
<!--                <p>Healthy eating is a cornerstone of health living--with or without diabetes. But if you diabetes, you need to know how foods affect your blood sugar levels. It’s not only the type of food you eat but also how you eat and the combinations of food types you eat.</p>-->
<!---->
<!--                <p>What to do:</p>-->
<!--                <ul>-->
<!--                    <li>Learn about carbohydrate counting and portion sizes.</li>-->
<!--                    <li>Make every meal well-balanced.</li>-->
<!--                    <li>Coordinate meals with medications.</li>-->
<!--                    <li>Avoid sugar-sweetened beverages.</li>-->
<!--                </ul>-->
<!--                <h3>Nutrition Classes, Farmer’s Market, Healthy Recipes</h3>-->
<!--                <ul>-->
<!--                    <li><a href="http://www.churchhealthcenter.org/wellness">Church Health Center</a></li>-->
<!--                    <li><a href="http://growmemphis.org/">Community Gardens</a></li>-->
<!--                </ul>-->
<!--            </div>-->
<!--            <div class="columns right text-right">-->
<!--                <p>Go to: <a href="#diabetes-education">Diabetes&nbsp;Education</a> |&nbsp;<a href="#physical-activity">Physical&nbsp;Activity |&nbsp;<a href="#caring-for-diabetes">Caring&nbsp;for&nbsp;Diabetes</a></p>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="row panel">-->
<!--            <div class="columns">-->
<!--                <h2 id="caring-for-diabetes">Caring for Diabetes</h2>-->
<!--                <ul>-->
<!--                    <li><a href="http://www.heart.org/HEARTORG/Conditions/Diabetes/DiabetesToolsResources/My-Diabetes-Health-Assessment_UCM_313901_Article.jsp">My Diabetes Health Assessment</a></li>-->
<!--                </ul>-->
<!--            </div>-->
<!--            <div class="columns right text-right">-->
<!--                <p>Go to: <a href="#diabetes-education">Diabetes&nbsp;Education</a> |&nbsp;<a href="#physical-activity">Physical&nbsp;Activity |&nbsp;<a href="#healthy-eating">Healthy&nbsp;Eating</a></p>-->
<!--            </div>-->
<!--        </div>-->
    </div>
</div>
<?php include("template-bottom.php"); ?>
