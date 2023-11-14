<?php get_header(); ?>

index.php
    <div class="row tm-row">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :

				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;


			while ( have_posts() ) :
				the_post();

//                if(get_post_type()) { echo 'index.php '.get_post_type().' ';}
//				get_template_part( 'template-parts/content', get_post_type() );
				get_template_part( 'template-parts/content', 'content' );

			endwhile;


		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

    </div>

<?php
get_sidebar();
get_footer();
