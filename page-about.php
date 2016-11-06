<?php get_header();  

/*
	Template Name: About Page
*/

?>

<?php 
	$headerBackground = get_field('headerBackground');
?>

<header class="about" style="background-image:url(<?php echo $headerBackground['url']?>)">
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
			<?php while(have_rows('social_bar','option')) : the_row(); ?>
				<a href="<?php the_sub_field('associated_link')?>"><i class="fa <?php the_sub_field('font_awesome_class'); ?>"></i></a>
			<?php endwhile; ?>
		</div>
		<div class="numberHeaderContainer">
			<h3 > 01 </h3>
			<h3 class="selected"> 02 </h3>
			<h3> 03 </h3>
		</div>
		<div class="imageContainer imageContainer1">
			<img src="<?php the_field('background_image_one')?>" alt="random background shape">
		</div>
		<div class="imageContainer imageContainer2">
			<img src="<?php the_field('background_image_two')?>" alt="random background shape">
		</div>
		<div class="imageContainer imageContainer3">
			<img src="<?php the_field('background_image_three')?>" alt="random background shape">
		</div>
		<div class="imageContainer imageContainer4">
			<img src="<?php the_field('background_image_four')?>" alt="random background shape">
		</div>
		<div class="imageContainer imageContainer5">
			<img src="<?php the_field('background_image_five')?>" alt="random background shape">
		</div>
	</div> <!-- ./headerBorderContainer -->
</header>

<main id="main">
	<!-- <div class="container">
		<?php // Start the loop ?>
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
	<?php endwhile; // end the loop?>
	</div> -->
	<section class="aboutContent">
		<div class="container">
			<h2><?php the_field('about_content_title') ?></h2>
			<p><?php the_field('about_content') ?></p>
			<?php $aboutImage = get_field('about_image'); ?>
			<img src="<?php echo $aboutImage['url'] ?>" alt="<?php echo $aboutImage['alt'] ?>">
			<div class="aboutModal">
				<h3 class="modalTitle1"><?php the_field('modal_title_one') ?></h3>
				<h3 class="modalTitle2"><?php the_field('modal_title_two') ?></h3>
				<h3 class="modalTitle3"><?php the_field('modal_title_three') ?></h3>
				<div class="aboutModalContent">
					<p class="modalContent1"> <?php the_field('modal_content_one') ?></p>
					<p class="modalContent2"> <?php the_field('modal_content_two') ?></p>
					<p class="modalContent3"> <?php the_field('modal_content_three') ?></p>
				</div> <!-- ./aboutModalContent -->
			</div> <!-- ./aboutModal -->
			<div class="skills">
				<div class="skillBars">
					<h3> <?php the_field('skills_header') ?></h3>
					<?php 
					while(have_rows('skill_bars')) : the_row();
					?>
						<div class="barItem">
							<h4><?php the_sub_field('skill_name') ?> - <?php the_sub_field('skill_percentage') ?>%</h4>
							<div class="bar">
								<div class="blackBar" style="width: <?php the_sub_field('skill_percentage') ?>%"></div>
								<!-- /.greyBar -->
							</div>
						</div> <!-- /socialItem -->
					<?php endwhile; ?>
				</div> <!-- ./skillBars -->
				<div class="planProject">
					<h3> <?php the_field('aside_title') ?></h3>
					<button>
						<a href="#contact"><?php the_field('button_text') ?></a>
					</button>
				</div><!-- /.planProject -->
			</div> 
		</div><!-- ./container -->
	</section> <!-- ./aboutContent -->
	<section class="pageBreak">
		<div class="container">
			<?php 
				while(have_rows('page_break','option')) : the_row();
			?>
				<div class="breakItem">
					<div class="leftContent">
						<i class="fa <?php the_sub_field('font_awesome_class'); ?>" aria-hidden:"true"></i>
					</div> <!-- ./leftContent -->
					<div class="rightContent">
						<h3 class="number"> <?php the_sub_field('number'); ?></h3>
						<h3 class="label"> <?php the_sub_field('label'); ?></p>
					</div> <!-- ./rightContent -->
				</div> <!--  ./breakItem -->
			<?php endwhile; ?>
		</div>
	</section> <!-- ./pageBreak -->
	<section class="ourTeam">
		<div class="container">
			<h3><?php the_field('tagline') ?></h3>
			<h2><?php the_field('team_section_title') ?></h2>
			<div class="teamContainer">
				<?php 
					while(have_rows('team_section')) : the_row();
				?>
					<?php $teamImage = get_sub_field('image'); ?>
					<div class="teamItem">
						<figure>
							<img src="<?php echo $teamImage['url'] ?>" alt="<?php echo $teamImage['alt'] ?>" >
							<figcaption>
								<?php 
									while(have_rows('social_bar')) : the_row();
								?>
									<div class="teamSocialItem"> 
										<a href="<?php the_sub_field('social_link') ?>"><i class="fa <?php the_sub_field('font_awesome_class') ?>"></i></a>
									</div>
								<?php endwhile; ?>
							</figcaption>
						</figure>
						<p class="teamMemberName"><?php the_sub_field('name') ?></p>
						<p class="position"><?php the_sub_field('position') ?></p>
					</div> <!-- ./teamContainer -->
					<!-- /.teamItem -->
				<?php endwhile; ?>
			</div>
			
		</div>
		<!-- /.container -->
	</section>
	<!-- /.ourTeam -->
</main>

<?php get_footer(); ?>
