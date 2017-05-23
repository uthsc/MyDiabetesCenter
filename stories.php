<?php
$pagename = 'Our Stories';
include("template-top.php");
?>
<div id="content" class="row">
    <div class="columns">
        <h1><?php echo $pagename; ?></h1>
        <p><a id="showall">Show All Transcripts</a> | <a id="hideall">Hide All Transcripts</a></p>
        <div id="ruthie-tate" class="row stories collapse" data-equalizer="true">
            <div class="column small-12 medium-9 media" data-equalizer-watch="true" style="background-color: #EEEEEE;">
                <div class="flex-video">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/CgiJl_RzuCg?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>                </div>
                </div>
            <div class="columns small-12 medium-3 title-pic-read" data-equalizer-watch="true" style="background-color: #EEEEEE;">
                <div class="row collapse"></div>
                <h2 class="text-center">Ruthie Tate</h2>
                <figure class="bio">
                    <img src="images/ruthie-tate-square.jpg" alt="Picture of Ruthie Tate"/>
                </figure>
                <button href="#ruthie-tate" class="read-transcript rt001 expand" aria-label="Read transcript"><i class="fa fa-book"></i> Read</button>
            </div>
            <div class="columns transcript" id="rt001">
                <p>Hi, my name is Ruthie Tate. I live with diabetes. Since I became a diabetic my lifestyle changed drastically. At first, I was in denial about the thought of just being a diabetic and all of the different barriers that come with being there. I was going to see my physician but I wasn’t doing all of the things that I needed to do to just keep myself healthy and living a good life. I wasn’t taking my medication like I should. My doctor always told me to take my prescriptions and I thought yes I’m going to take it but in the end I didn’t take it like I should. I went to the doctor and my doctor told me, “I can help you now, but once your body parts begin to fail I won’t be able to help you then.” It was then that I made a commitment to myself that I would do all that I could for myself to live a healthy lifestyle. I started taking my medications daily, I started counting my total carbohydrates at each meal so that my A1C levels wouldn’t go all out of whack. Overall, after I made that commitment to myself, I am improving daily. My A1C level was where it was supposed to be at my last doctor’s visit. So, I’m trying to take control of my life. And I would just like to tell others, if you are a diabetic person, try to become educated about the disease. Do your part to help yourself. You are going to have other people there to support you, but the number one thing is you have to support yourself.</p>
            </div>
        </div>
        <div id="pastor-william-burks" class="row stories collapse" data-equalizer="true">
            <div class="column small-12 medium-9 media" data-equalizer-watch="true" style="background-color: #EEEEEE;">
                <div class="flex-video">
                    <iframe width="100%" height="120" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/214156871&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
                </div>
            </div>
            <div class="columns small-12 medium-3 title-pic-read" data-equalizer-watch="true" style="background-color: #EEEEEE;">
                <div class="row collapse"></div>
                <h2 class="text-center">Pastor William Burks</h2>
                <figure class="bio">
                    <img src="images/" alt="Picture of xxxx"/>
                </figure>
                <button href="#pastor-william-burks" class="read-transcript rt002 expand" aria-label="Read transcript"><i class="fa fa-book"></i> Read</button>
            </div>
            <div class="columns transcript" id="rt002">
                <p>I was diagnosed with diabetes approximately 3 years ago, and to say the least it was devastating to get that information. But I decided to not let diabetes rule my life, but for me to take control of the situation.</p>

                <p>Diabetes, to me, is a journey, where in you control how far you go. You control what you do on the journey. So I have been very, very blessed in that I do check my glucose, on a daily basis, I check it periodically after I've eaten certain foods. Because I do not, I don't eat a lot of things that the average person eats. I do consume a lot of vegetables. I eat a lot of green vegetables. I eat a lot of fruit. I am specific about which fruits I eat and what time I eat them. I drink at least 96 ounces of water on a daily basis. I want you to know that this not a death sentence. Being diabetic is not a death sentence. You can do something about your condition. Make up your mind, get you a partner, someone who can work with you. Someone who will help keep you encouraged on your journey. And then what you can do is take charge of the situation. Eat right, get plenty rest, plenty of exercise, and enjoy your life—those things really make the differences in how you do as a diabetic.
                </p>
            </div>
        </div>
        <div id="douglass-hall" class="row stories collapse" data-equalizer="true">
            <div class="column small-12 medium-9 media" data-equalizer-watch="true" style="background-color: #EEEEEE;">
                <div class="flex-video">
                    <iframe width="100%" height="120" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/230312669&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
                </div>
            </div>
            <div class="columns small-12 medium-3 title-pic-read" data-equalizer-watch="true" style="background-color: #EEEEEE;">
                <div class="row collapse"></div>
                <h2 class="text-center">Douglass Hall</h2>
                <figure class="bio">
                    <img src="images/douglass-hall-square.jpg" alt="Picture of Douglass Hall"/>
                </figure>
                <button href="#douglass-hall" class="read-transcript rt003 expand" aria-label="Read transcript"><i class="fa fa-book"></i> Read</button>
            </div>
            <div class="columns transcript" id="rt003">
                <p>The doctor did initially tell me that blindness could very well end up being one of the drawbacks if I didn’t get it under control…the biggest challenge was taking the diagnosis a little bit more seriously…when you don’t have something beating you over the head, like an open sore that might be getting worse that you can physically see, the tendency is to be a little bit dismissive…while it has been challenging, I have been able to manage this thing a whole lot better.</p>
            </div>
        </div>

    </div>
</div>
<?php include("template-bottom.php"); ?>
<script type="text/javascript">
    /*-- SHOW/HIDE FAQs transcriptS --*/
    $(document).ready(function() {
        $("div.transcript").css({display:"none"});

        $("#showall").click(function () {
            $("div.transcript").fadeIn("slow");
        });

        $("#hideall").click(function () {
            $("div.transcript").fadeOut("slow");
        });

        $(".read-transcript").click(function () {
            //split allows for more classes than just two, put read-transcript first then id
            var myclass = $(this).attr("class").split(' ');
            if ($("#"+myclass[1]).is(":hidden")) {
                $("#"+myclass[1]).fadeIn("slow");
            } else {
                $("#"+myclass[1]).fadeOut("slow");
            }
        });
    });
</script>

<style type="text/css" media="print">
    div.transcript {display:block !important;}
</style>