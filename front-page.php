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
      <a href="#"><img src="<?php echo get_template_directory(); ?>/assets/homePage/arrowdown.png" alt="arrow down"></a>
    </div>
    <div class="socialHeaderContainer">
      <?php 
        while(have_rows('socialBar')) : the_row();
      ?>
        <a href="<?php the_sub_field('associatedLink'); ?>"><i class="fa <?php the_sub_field('fontAwesomeClass'); ?>"></i></a>
      <?php endwhile; ?>
    </div>
  </div>
</header>

<div class="main">
  <div class="container">
    <div class="content">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <section class="whatwedo">
          <?php 
            while(have_rows('service')) : the_row();
          ?>
          <div class="item">
            <?php $icon_image = get_sub_field('image'); ?>
            <img src="<?php echo $icon_image['url'] ?>" alt="">
            <h4> <?php the_sub_field('title_text'); ?></h4>
            <p> <?php the_sub_field('content'); ?></p>
          </div>
          <?php endwhile; ?>
        </section> 
      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>
