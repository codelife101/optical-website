<?php get_header(); ?>


<div class="bannerContainer">
    <div class="bannerTextContainer">
       <h1>gfdgewdfhsdf<h1>
    </div>
</div>




<section class="page-wrap">
   <div class="container  my-container">
      <div class="row my-row">

            <div class="col-lg-4 my-col">

                  <?php get_template_part('includes/section','events'); ?>
                  <!-- Pagination Method 1 -->
               <?php previous_posts_link();  ?>
               <?php next_posts_link();  ?>



               <!-- Pagination Method 2 -->
               <?php
                  // global $wp_query;
                  // $big = 99999999999;
                  // echo paginate_links(array(
                  //   'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                  //   'format'=>'?paged-%#%',
                  //   'current' => max(1, get_query_var('paged')),
                  //   'total' => $wp_query -> max_num_pages
                  // ));

               ?>
               </div>
      </div>
   </div>
</section>
<div class="pageBreak">
</div>
<?php get_footer(); ?>
