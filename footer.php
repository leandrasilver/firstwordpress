<!-- get_option('page_on_front') -->
<!-- page for posts -->

<footer>
	<section class="clients">
		<div class="container breakpoint">
			<div class="leftContent">					<h3 class="numberOfClients"><?php the_field('number_clients','option'); ?></h3>
				<h3 class="numberClientsLabel"><?php the_field('label_number','options'); ?></h3>
			</div> <!-- /left Content -->
			<div class="rightContent">
				<p><?php the_field('client_content','options') ?></p>
			</div> <!-- /rightContent/-->
		</div>
		<div class="container">
			<?php 
			while(have_rows('sponsors','option')) : the_row();
			?>
				<div class="sponsorItem">
					<?php $sponsor= get_sub_field('sponsor_image'); ?>
					<img src="<?php echo $sponsor ?>" alt="">
				</div>
			<?php endwhile; ?>
		</div> <!-- /container -->
	</section> <!-- /clients -->
	<section class="contact" id="contact">
		<?php 
		while(have_rows('footer_contact','option')) : the_row();
		?>
			<div class="contactItem">
				<i class="fa <?php the_sub_field('logo'); ?>"></i>
				<p> <?php the_sub_field('contact_paragraph'); ?></p>
				<p> <?php the_sub_field('contact_paragraph_two'); ?></p>
			</div>
		<?php endwhile; ?>
	</section>  <!-- /contact -->

	<section class="footerSocial">
		<?php 
		while(have_rows('social_bar','option')) : the_row();
		?>
			<div class="socialItem">
				<a href="<?php the_sub_field('associated_link')?>"><i class="fa <?php the_sub_field('font_awesome_class'); ?>"></i></a>
				<h4><?php the_sub_field('associated_title')?></h4>
			</div> <!-- /socialItem -->
		<?php endwhile; ?>
	</section> <!-- /footerSocial -->
	<div class="container">
	<p>&copy; Copyright <?php echo date('Y'); ?>  Developed by Leandra Silver <a href="http://www.twitter.com/leandrasilver"><i class="fa fa-twitter" aria-hidden:true></i></a> . Designed by Kalanidhi Themes</p>
	</div>
</footer>

<script>
// scripts.js, plugins.js and jquery are enqueued in functions.php

/* Google Analytics! */
	var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
	(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
	g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
	s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>