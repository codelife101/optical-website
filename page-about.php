<?php get_header(); ?>

<style>


  .aboutBannerImage{
    background:url(<?php echo get_theme_mod('about_banner_image',get_bloginfo('template_url').'/images/aboutbanner.jpg');?>) no-repeat ;
    background-size: 100% 100%;
}
  


</style>


<div class="bannerContainer aboutBannerImage">
    <div class="bannerTextContainer">
        <h1 class="bannerHeading bannerHeadingAbout bannerHeadinsCustomColour"><?php echo get_theme_mod('banner_heading','WHAT WE <br /> DO'); ?></h1>
    </div>
</div>


<div class="aboutTopContainer">

    <div class="subHeadingContainer">
        <h1 class="subHeading"> <?php echo get_theme_mod('create_oppourtunities_heading','CREATE OPPORTUNITIES'); ?></H1>
    </div>

    <p class="text"><?php echo get_theme_mod('create_oppourtunities_text',' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non auctor dui. Aenean elementum nisl ut libero mattis 
          suscipit.  Nunc posuere turpis mauris, vitae fringilla augue suscipit quis. Mauris auctor quis massa vitae rhoncus. Aliquam aliquet 
          euismod urna, et tincidunt ex. Nulla sodales libero libero, ut ultricies urna sollicitudin ac.'); ?>
        

    </p>

            
    <div>
            <!-- line break -->
        <hr class="breakLineAbout">
     <!-- end of line break -->
    </div>
</div>

<div>
    <div class="bannerContainer">
        <div class="bannerTextContainer">
            <h1 class="bannerSubHeadinAbout"><?php echo get_theme_mod('second_banner_heading','EVERY $ GOES INTO <br /> THE CHARITY'); ?> </h1>
            <p class="text aboutText"><?php echo get_theme_mod('second_banner_text','where all about providing oppourtunites,<br /> if nobody 
                started with the little things <br />the bigger things 
                wouldnt exist.'); ?>
            </p>
        </div>
    </div>
    
</div>

<!-- <h1>hwrewhfwfq</h1> -->
<div class="aboutCardPearent">
    <div class="aboutCard">
        <h1>LEND A HAND</h1>
        <button class="cardBtnAbout" type="button">Donate<button>
    </div>


    <div class="aboutCard">
    <h1>READ A STORY</h1>
    <button class="cardBtnAbout" type="button">Stories<button>
    </div>
</div>





 







<?php get_footer(); ?>