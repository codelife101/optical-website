<?php get_header(); ?>
<style>

  .topImg{
    background:url(<?php echo get_theme_mod('top_right_image',get_bloginfo('template_url').'/images/skate.jpg');?>);
  }

  .homeBannerImage{
    background:url(<?php echo get_theme_mod('home_banner_image',get_bloginfo('template_url').'/images/homeBanner.jpg');?>) no-repeat ;
    background-size: 100% 100%;
}
  


</style>

<div class="bannerContainer homeBannerImage">
  <div class="bannerTextContainer">
  <h1 class="bannerHeading bannerHeadinsCustomColour"><?php echo get_theme_mod('banner_heading','OPTICAL'); ?></h1>
  <p class="bannerText"><?php echo get_theme_mod('banner_text','providing opportunities  to people with epilepsy'); ?></p>
</div>
</div>

<div class="homeContainer">

    <div class="homeSectionOne">

      <div class="homeTopText">
        <h1 class="whatwedo">What we do</h1>
        <p class="text whatWeDOText"><?php echo get_theme_mod('what_we_do_text','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam facilisis malesuada dolor et consequat. 
          Maecenas malesuada rutrum nunc, at malesuada dui ultrices nec. Praesent eget nisi vitae diam ullamcorper 
          iaculis id sit amet lorem. Aliquam eget metus sollicitudin, maximus nisl ut, molestie lorem.'); ?></p>
      </div>

      <div class="topImgContainer">
          <div class="topImg"></div>
      </div>
    
    </div>
    <!-- <div style="clear: both;"></div> -->
  
    <!-- line break -->
      <hr class="breakLine">
    <!-- end of line break -->

    <div class="homeSectionTwo">

      <div class="subHeadingContainer">
        <h1 class="subHeading">HOW WE WORK</H1>
      </div>

      <div class="howWeWorkCardContainer">
    
      <div class="howWeWorkCard">
        <div class="flextest">
          <div>
            <i class="fas fa-users fa-6x"></i>
            <h1 class="cardHeading">COMMUNITY</h1>
            <p class="text"><?php echo get_theme_mod('community_text','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam facilisis malesuada dolor et consequat. 
              Maecenas malesuada rutrum nunc, at malesuada dui ultrices nec.'); ?></p>

              <button class="cardBtn" type="button">STORIES<button>
          </div>
        </div>
      </div>

      <div class="howWeWorkCard">
      <div class="flextest">
          <div>
          <i class="fas fa-dollar-sign fa-6x"></i>
            <h1 class="cardHeading">DONATE</h1>
            <p class="text"><?php echo get_theme_mod('donate_text','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam facilisis malesuada dolor et consequat. 
              Maecenas malesuada rutrum nunc, at malesuada dui ultrices nec.'); ?></p>
              
              <button class="cardBtn" type="button">DONATE<button>
          </div>
        </div>
      </div>

      <div class="howWeWorkCard">
      <div class="flextest">
          <div>
          <i class="fas fa-calendar-alt fa-6x"></i>
            <h1 class="cardHeading">EVENTS</h1>
            <p class="text"><?php echo get_theme_mod('events_text','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam facilisis malesuada dolor et consequat. 
              Maecenas malesuada rutrum nunc, at malesuada dui ultrices nec.'); ?></p>
              
              <button class="cardBtn" type="button">EVENTS<button>
          </div>
        </div>
      </div>

    </div>

    <div style="clear: both;"></div>

    <!-- line break -->
    <hr class="breakLine brakeLineTablet">
    <!-- end of line break -->

</div>


<?php get_footer(); ?>



