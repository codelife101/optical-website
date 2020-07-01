<?php get_header(); ?>

<section class="page-wrap  container m-auto mt-5">


<div class="blogPostPage">

    <div class="subHeadingContainer blogPostPage">
        <h1 class="subHeading"> <?php the_title(); ?>   </h1>
    </div>


  <div class="">
    <?php if(has_post_thumbnail()): ?>
        <!-- This has a featured image -->
        <div>
          <img src="<?php the_post_thumbnail_url('blog-small'); ?>" alt="<?php the_title(); ?>" class="mb-3 img-fluid img-thumbnail">
        </div>
    <?php endif; ?>
   </div>
   <hr class="breakLine">
    <div class="text">
      <?php get_template_part('includes/section','blogcontent'); ?>
         <?php wp_link_pages(); ?>
    </div>


    </div>

</section>
<?php get_footer(); ?>
