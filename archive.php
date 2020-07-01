
<!-- Gets special header for blog -->
<?php get_header('primary'); ?>

<style>


  .storiesEventBanner{
    background:url(<?php echo get_theme_mod('stories_events_banner_image',get_bloginfo('template_url').'/images/events.jpg');?>) no-repeat ;
    background-size: 100% 100%;
}
  


</style>

<div class="bannerContainer storiesEventBanner">
    <div class="bannerTextContainer">
		<h1 class="bannerHeading bannerHeadinsCustomColour"><?php echo get_theme_mod('banner_heading','STORIES/EVENTS'); ?></h1>
    </div>
</div>


<div class="container py-3">
	<!-- <h2 class="py-2"><?php single_cat_title(); ?></h2> -->
	<div class="row">
		<?php get_template_part('includes/section','archive'); ?>
	</div>
	<div class="row pl-3">
		<?php previous_posts_link();  ?>
   		<?php next_posts_link();  ?>
	</div>
</div>
<div class="pageBreak">
</div>

<?php get_footer('primary'); ?>