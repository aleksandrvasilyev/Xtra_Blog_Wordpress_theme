template-parts/content-post.php
<article id="post-<?php the_ID(); ?>" class="col-12 col-md-6 tm-post">
	<hr class="tm-hr-primary">
	<a href="<?php echo esc_url( get_permalink() ); ?>" class="effect-lily tm-post-link tm-pt-20">
		<div class="tm-post-link-inner">
			<?php the_post_thumbnail(); ?>
		</div>
		<?php esc_html__(the_title( '<h2 class="tm-pt-30 tm-color-primary tm-post-title">', '</h2>' )); ?>
	</a>
	<p class="tm-pt-30">
		<?php echo esc_html__(get_the_excerpt());?>
	</p>
	<div class="d-flex justify-content-between tm-pt-45">
		<span class="tm-color-primary"><?php echo get_the_category_list(', ');?></span>
		<span class="tm-color-primary"><?php xtrablog_posted_on();?></span>
	</div>
	<hr>
	<div class="d-flex justify-content-between">
		<span><?php comments_number(); ?></span>
		<span><?php echo esc_html__(xtrablog_posted_by());?></span>
	</div>
</article>

<?php
