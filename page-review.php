
<?php

/* Template Name: review */

get_header(); ?>

<div class="trendingpart">
<?php get_template_part('trending'); ?>
</div>

<!--<div id="primary" class="review-content">
  <div id="content" role="main"> -->

        <div class="testimonials-section">
            <input type="radio" name="slider" title="slide1" checked="checked" class="slider__nav"/>
            <input type="radio" name="slider" title="slide2" class="slider__nav"/>
            <input type="radio" name="slider" title="slide3" class="slider__nav"/>
            <input type="radio" name="slider" title="slide4" class="slider__nav"/>
            <input type="radio" name="slider" title="slide5" class="slider__nav"/>
            
            <div class="slider__inner">
                <div class="slider__contents">
                    <quote>&rdquo;</quote>
                        <p class="slider__txt"> Greetings friends!! I just want to let everyone know about IGayChat and their fabulous models. Men from all walks of life. 
                        Men from every race, religion, height and body type you can possibly imagine.</p></br>
                        <p class="slider__txt"> If you have the money, pay for private shows with your favorite models. Personally, I like to jerk off and watch the model jerk off. 
                        And if things go right, we both shoot our loads at the same time!! There’s nothing like it on the web.</p> 
                    <h2 class="slider__caption">George | 51 | Queens</h2>
                </div>
                <div class="slider__contents">
                    <quote>&rdquo;</quote>
                        <p class="slider__txt"> It’s nice to see more and more gay cam porn websites. Some of them are pretty good! Others are okay. Then you have IGAYCHAT! 
                        All I can say is…WOW!</p>
                        <p class="slider__txt">It’s by far the best gay cam I’ve seen so far. Actually some of my favorite mal models are on IGayChat.</p> 
                        <p class="slider__txt">It really just works perfectly. I don’t think I’ve ever chatted with so many studs in my life I can’t wait to come back for more!
                        </p>
                    <h2 class="slider__caption">Will | 30 | Francisco</h2>
                </div>
                <div class="slider__contents">
                    <quote>&rdquo;</quote>
                        <p class="slider__txt">How can I put this - If I have to choose one cam site to use for the rest of my life it would be igaychat.</p></br>
                        <p class="slider__txt">I’ve tried just about every other cam site created and none of them come close.</p></br> 
                        <p class="slider__txt">For some reason the cutest and friendliest cam boys are all here. Don’t ask me why! I’m just happy I found the site.</p>
                    <h2 class="slider__caption">Gerardo | 39 | San Antonio</h2>
                </div>
                <div class="slider__contents">
                    <quote>&rdquo;</quote>
                        <p class="slider__txt">Camming with cute guys is fun. Igaychat has models from all over the world – guys with big cocks, flat stomachs and perfect butts. Basically, there is something for everyone. 
                        Whatever type of cam guy you like, you’ll find him here.</p></br>  
                        <p class="slider__txt">The prices are more or less standard. One particular detail I liked is the HD quality webcams.</br> 
                        Most of the gentlemen here have high definition webcams that look absolutely amazing.</p>
                    <h2 class="slider__caption">Fred | 35 | Denver</h2>
                </div>
                <div class="slider__contents">
                    <quote>&rdquo;</quote>
                    <p class="slider__txt">Congratulations to the developers of IGayChat.</p></br> 
                    <p class="slider__txt">These guys have created the absolute best gay sex cam in the world. No – that’s not an exaggeration either. Far from it!</p></br> 
                    <p class="slider__txt">These men have never disappointed me yet. I hope that continues!</p></br> 
                    <h2 class="slider__caption">Terry | 26 | Buffalo</h2>
                </div> 
                               
            </div>
        </div>
<!--        
  </div> #content 
</div>#primary -->



<style>


*, *:before, *:after {
  box-sizing: border-box;
}

.trendingpart{
    padding-bottom: 50px; 
}

html, body {
  height: 100%;  
}

.testimonials-section {
  background: #F9F9F9;
  height: 750px;
  position: relative;
  overflow: hidden;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-flex-flow: row nowrap;
  -ms-flex-flow: row nowrap;
  flex-flow: row nowrap;
  -webkit-box-align: end;
  -webkit-align-items: flex-end;
  -ms-flex-align: end;
  align-items: flex-end;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
  -ms-flex-pack: center;
  justify-content: center;
}

.slider__nav {
  width: 12px;
  height: 12px;
  margin: 80px 12px;
  border-radius: 50%;
  z-index: 10;
  outline: 6px solid #ccc;
  outline-offset: -6px;
  box-shadow: 0 0 0 0 #333, 0 0 0 0 rgba(51, 51, 51, 0);
  cursor: pointer;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.slider__nav:checked {
  -webkit-animation: check 0.4s linear forwards;
  animation: check 0.4s linear forwards;
}

.slider__nav:checked:nth-of-type(1) ~ .slider__inner {
  left: 0%;
}

.slider__nav:checked:nth-of-type(2) ~ .slider__inner {
  left: -100%;
}

.slider__nav:checked:nth-of-type(3) ~ .slider__inner {
  left: -200%;
}

.slider__nav:checked:nth-of-type(4) ~ .slider__inner {
  left: -300%;
}

.slider__nav:checked:nth-of-type(5) ~ .slider__inner {
  left: -400%;
}


.slider__inner {
  position: absolute;
  top: 80px;
  left: 0;
  width: 500%;
  height: auto;
  -webkit-transition: left 0.4s;
  transition: left 0.4s;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-flex-flow: row nowrap;
  -ms-flex-flow: row nowrap;
  flex-flow: row nowrap;
}

.slider__contents {
  height: 100%;
  text-align: center;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-flex: 1;
  -webkit-flex: 1;
  -ms-flex: 1;
  flex: 1;
  -webkit-flex-flow: column nowrap;
  -ms-flex-flow: column nowrap;
  flex-flow: column nowrap;
  -webkit-box-align: center;
  -webkit-align-items: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
  -ms-flex-pack: center;
  justify-content: center;
}

.slider__caption {
  font-size: 14px;
  color: #111;
  opacity: .5;
  font-family: 'Roboto';
  font-weight: bold;
}

.slider__txt {
  font-size: 18px;
  font-weight: bold;
  font-family: 'Montserrat', sans-serif;
  line-height: 1.7;
  color: #111;
  margin-top: -20px;
  margin-bottom: 20px;
  max-width: 750px;
}

quote {
  font-family: 'Arial';
  font-weight: bold;
  font-size: 100px;
  color: #black;
  margin-bottom: 0;
}

@-webkit-keyframes check {
  50% {
    outline-color: #333;
    box-shadow: 0 0 0 12px #333, 0 0 0 36px rgba(51, 51, 51, 0.2);
  }
  100% {
    outline-color: #333;
    box-shadow: 0 0 0 0 #333, 0 0 0 0 rgba(51, 51, 51, 0);
  }
}

@keyframes check {
  50% {
    outline-color: #333;
    box-shadow: 0 0 0 12px #333, 0 0 0 36px rgba(51, 51, 51, 0.2);
  }
  100% {
    outline-color: #333;
    box-shadow: 0 0 0 0 #333, 0 0 0 0 rgba(51, 51, 51, 0);
  }
}
 
</style>

<?php get_footer(); ?>