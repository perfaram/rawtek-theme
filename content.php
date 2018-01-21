<h2>
	<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
</h2>
<?php
	if ( has_post_thumbnail() ) {
		echo "<p>";
		the_post_thumbnail( 'large' );
		echo "</p>";
	}
?>

<?php the_content('<br><em>voir plus…</em>'); ?>

<small>PUBLIÉ LE
	<?php echo strtoupper(get_the_time("j F")); ?> DE L'AN DE GRÂCE <?php the_time("Y"); ?>.
</small>
