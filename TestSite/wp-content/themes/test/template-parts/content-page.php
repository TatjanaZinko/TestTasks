<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package test
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php test_post_thumbnail(); ?>

	<div class="entry-content">
		<div class="posts">
			<?php $attachments = new WP_Query(array(
								   'post_type' => 'attachments',
								   'posts_per_page' => 2
							   ));

							   if ( $attachments->have_posts() ) :

								  while ( $attachments->have_posts() ) : $attachments->the_post();
			$link_1 = get_field('300x300');
			$position_1 = get_field('position_1');
			$link_2 = get_field('600x500');
			$position_2 = get_field('position_2');
			?>

									<div class="attachments-item">
										<h3 class="attachments__title"><?php the_title(); ?></h3>
										<?php if($link_1) { ?>
											<div class="attachments__300" style="background: url('<?php echo $link_1; ?>') <?php echo $position_1 ?> no-repeat"></div>
										<?php } ?>
										<?php if($link_2) { ?>
											<div class="attachments__600" style="background: url('<?php echo $link_2; ?>') <?php echo $position_2 ?> no-repeat"></div>
										<?php } ?>
									</div>
								 <?php endwhile;

								wp_reset_postdata();
								endif; ?>
		</div>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'test' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
