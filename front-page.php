<?php get_header();  ?>

<div class="main">
<!--   <div class="container">
 -->
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>
        <section class="hero">
	        
	        <div class="flickity" data-flickity='{ "wrapAround": true }'>
	        	<?php while(has_sub_field('hero_slider')): ?>
		        	<div class="flickity-cell" style="background-image: url(<?php the_sub_field('hero_image'); ?>);background-size: cover;">
		        		<h2><?php the_sub_field('hero_title'); ?></h2>
		        		<p><?php the_sub_field('hero_subtitle'); ?></p>
		        		<div class="button-container"><a href="<?php bloginfo('url'); ?>/about/">Shop Now</a></div>
		        	</div>
		        <?php endwhile; ?>
	        </div>
	    </section>

         <section class="featured-category">
			<div class="container">
				<h2>Featured Products</h2>
				<div class="product-container">
					<div class="left">
						<figure>
							<img src="<?php the_field('left_image') ?>" alt="">
							<figcaption>
								<h3><?php the_field('left_title') ?></h3>
								<p><?php the_field('left_description') ?></p>
								<div class="button-container"><a href="<?php bloginfo('url'); ?>/about/">Shop Now</a></div>
							</figcaption>
						</figure>
					</div><!-- 
					 --><div class="right"><!-- 
						 --><div class="top">
							<div class="top-left">
								<img src="<?php the_field('top_left_image') ?>" alt="">
							</figure>
								
							</div><!-- 
							 --><div class="top-right">
								<img src="<?php the_field('top_right_image') ?>" alt="">
							</figure>
							</div>
						</div><!-- 
						 --><div class="bottom">
							<figure>
								<img src="<?php the_field('bottom_image') ?>" alt="">
								<figcaption>
									<h3><?php the_field('bottom_hover_text') ?></h3>
								</figcaption>
							</figure>
						</div>
					</div>
				</div>
			</div>
		</section>

        <section id="about">
        	<div class="about-wrapper">
	        	<div class="about-column">
	        		<img src="<?php the_field('about_image'); ?>" alt="">
	        	</div><!-- 
	        	 --><div class="about-column">
	        		<div class="about-column-wrapper">
		        		<h2><?php the_field('about_heading'); ?></h2>
		        		<?php the_field('about_copy'); ?>
	        		</div>
	        	</div>
        	</div>
        </section>

        <section class="blog-home">
	        <h2 class="blog-title">Recent Posts</h2>
	        <div class="container">

		        <?php
		            $new = new WP_Query('posts_per_page=3');
		            while ($new->have_posts()) : $new->the_post();
		        ?>

		        <article>
		            <?php the_post_thumbnail('full'); ?>
		            <h2><?php the_title(); ?></h2>
		            <?php the_excerpt(); ?>
		            <div class="more-link"><a href="<?php the_permalink(); ?>">Read More</a></div>
		        </article>

		        <?php endwhile; ?>

		        <?php wp_reset_query();?>
	        </div>
        </section>

      <?php endwhile; // end the loop?>

  <!-- </div> --> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>