<?php 
   /*Template Name: About*/ 

get_header();  ?>

<div class="main">
  <div class="container clearfix">

    <div class="content" id="shop">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h2>Shop Coming Soon!</h2>
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>