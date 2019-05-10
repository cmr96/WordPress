<?php
get_header();

$args = array(
    'post_type'      => 'cpt_proyectos',
    'posts_per_page' => 1,
);
$query = new WP_Query( $args ); 

?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="archive-description posts-page-description"><h1 class="archive-title">Proyectos</h1></div>
		<?php
		while ($query -> have_posts()) : $query -> the_post();
		?>
		
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<a href="<?php echo get_permalink(); ?>">
		<div class="entry-content">
			<?php the_post_thumbnail(); ?>
			<p class="proyect-archive proyect-archive-title-s"><?php the_field('nombre_corto'); ?></p>
			<p class="proyect-archive proyect-archive-title-l"><?php echo get_the_title(); ?></p>
		</div>
	</a>
</article><!-- #post-<?php the_ID(); ?> -->
		
		<?php
		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
