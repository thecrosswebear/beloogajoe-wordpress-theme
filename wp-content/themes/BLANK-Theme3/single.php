<?php get_header(); ?>

<?php get_sidebar(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
                        
                        
                            <h2><?php the_title(); ?></h2>
			
			

			<div class="entry">
				
				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
				
				<?php the_tags( 'Tags: ', ', ', ''); ?>

			</div>
                        
                        <?php /*include (TEMPLATEPATH . '/inc/meta.php' ); */ ?>
			
			<?php edit_post_link('Edit this entry','','.'); ?>
			
		</div>

	
                

	<?php endwhile; endif; ?>
	


<?php get_footer(); ?>