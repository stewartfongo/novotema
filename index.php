<?php get_header();?>
	<div class="row">
		<div class="col-md-12">
			<div class="jumbotron">
				<h2>Seja bem-vindo ao novo tema</h2>
			</div>
		</div>
	</div>
	
	<div class="row">
		<?php
			$cont = 0;
				if (have_posts()){
					while (have_posts()){
						the_post();
						$cont++;
					if ($cont <- 3)) {
		?>
		
					<div class="col-md-4">
						
						<h3><?php the_title(); ?></h3>
						<div class="img-responsive img-thumbnail foto"><?php the_post_thumbnail(); ?></div>
						<p><?php the_excerpt(); ?></p>
	</div>
	<?php
					}
					}
				}
				?>


<?php
	if ( have_posts()){
		while (have_posts()){
			the_post();
			the_title();
			the_excerpt();
		} // fim do while
	} // fim do if
?>

<?php get_footer();?>