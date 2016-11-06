<?php get_header();  ?>

<?php 
	$headerBackground = get_field('headerBackground',get_option('page_for_posts'));
?>

<header class="blog" style="background-image:url(<?php echo $headerBackground['url']?>)">
	<div class="headerBorderContainer">
		<nav class="mainNav">
			<div class="logoContainer">
				<?php 
					$custom_logo_id = get_theme_mod('custom_logo');
					$image = wp_get_attachment_image_src( $custom_logo_id , 'full' ); ?>
				<img src="<?php echo $image[0]; ?>" alt="<?php echo $image['alt']; ?>">
				<!-- or text as a logo -->
				<h2><?php the_field('textLogo',get_option('page_for_posts')); ?></h2>
			</div>
			<?php wp_nav_menu( array(
				'container' => false,
				'theme_location' => 'primary'
			)); ?>
		</nav>
		<h3 class="aboveHeader"><?php the_field('subheading1',get_option('page_for_posts')); ?></h3>
		<div class="headingContainer">
			<h1><?php the_field('pageTitle',get_option('page_for_posts')); ?></h1>
		</div>
		<h3 class="belowHeader"><?php the_field('subheading2',get_option('page_for_posts')); ?></h3>
		<div class="arrowDown">
			<a href="#main"><img src="<?php the_field('arrowDown',get_option('page_for_posts')); ?>" alt="link image"></a>
		</div>
		<div class="socialHeaderContainer">
			<?php 
				while(have_rows('social_bar','option')) : the_row();
			?>
				<a href="<?php the_sub_field('associated_link')?>"><i class="fa <?php the_sub_field('font_awesome_class'); ?>"></i></a>
			<?php endwhile; ?>
		</div>
		<div class="numberHeaderContainer">
			<h3 > 01 </h3>
			<h3> 02 </h3>
			<h3 class="selected"> 03 </h3>
		</div>
	</div>
</header>

<main id="main" class="content blogContent">
  <div class="container">
    <?php get_template_part( 'loop', 'index' );	?>
  </div> <!-- /.container -->
</main> <!-- /.main -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>