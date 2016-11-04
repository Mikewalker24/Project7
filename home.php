<!-- This is the blog index -->

<?php get_header();  ?>

<div class="main">
  <div class="container">

    <div class="content">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      
      <div class="blog-post">
        <img src=" <?php echo get_the_post_thumbnail_url($post, 'full'); ?> " alt="">
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
      </div>

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>