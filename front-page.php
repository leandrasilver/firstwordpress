<?php get_header(); ?>

<?php 
	$headerBackground = get_field('headerBackground');
?>

<header style="background-image:url(<?php echo $headerBackground['url']?>)">
	<div class="headerBorderContainer">
		<nav class="mainNav">
			<div class="logoContainer">
				<?php 
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					$image = wp_get_attachment_image_src( $custom_logo_id , 'full' ); ?>
				<img src="<?php echo $image[0]; ?>" alt="">
				<!-- or text as a logo -->
				<h2><?php the_field('textLogo'); ?></h2>
			</div>
			<?php wp_nav_menu( array(
				'container' => false,
				'theme_location' => 'primary'
			)); ?>
		</nav>
		<h3 class="aboveHeader"><?php the_field('subheading1'); ?></h3>
		<div class="headingContainer">
			<h1><?php the_field('pageTitle'); ?></h1>
		</div>
		<h3 class="belowHeader"><?php the_field('subheading2'); ?></h3>
		<div class="arrowDown">
			<a href="#main"><img src="<?php the_field('arrowDown'); ?>" alt="arrow down"></a>
		</div>
		<div class="socialHeaderContainer">
			<?php 
				while(have_rows('social_bar','option')) : the_row();
			?>
				<a href="<?php the_sub_field('associated_link')?>"><i class="fa <?php the_sub_field('font_awesome_class'); ?>"></i></a>
			<?php endwhile; ?>
		</div>
		<div class="numberHeaderContainer">
			<h3 class="selected"> 01 </h3>
			<h3> 02 </h3>
			<h3> 03 </h3>
		</div>
	</div>
</header>

<main id="main">
	<div class="container">
		<section class="services">
			<div class="contentContainer">
				<h2><?php the_field('service_title'); ?></h2>
				<p><?php the_field('service_content'); ?></p>
			</div>
			<div class="serviceContainer">
				<?php 
					while(have_rows('service_items')) : the_row();
				?>
					<div class="serviceItem">
						<i class="fa <?php the_sub_field('font_awesome_class'); ?>" aria-hidden:"true"></i>
						<h3> <?php the_sub_field('label'); ?></h3>
						<p> <?php the_sub_field('blurb'); ?></p>
					</div>
				<?php endwhile; ?>
			</div> <!-- serviceContainer -->
		</section>  <!-- /services -->
	</div> <!-- /.container -->
	<section class="pageBreak">
		<div class="container">
			<?php 
				while(have_rows('page_break','option')) : the_row();
			?>
				<div class="breakItem">
					<div class="leftContent">
						<i class="fa <?php the_sub_field('font_awesome_class'); ?>" aria-hidden:"true"></i>
					</div>
					<div class="rightContent">
						<h3 class="number"> <?php the_sub_field('number'); ?></h3>
						<h3 class="label"> <?php the_sub_field('label'); ?></p>
					</div>
				</div> <!--  /breakItem -->
			<?php endwhile; ?>
		</div>
	</section> <!-- /pageBreak -->
</main>

<?php get_footer(); ?>
