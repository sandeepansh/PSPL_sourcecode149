<?php
/**
 * The template for displaying all pages
 *
 * @package WordPress
 * @subpackage okontec
 * @since Okontec 1.0
 */

get_header(); ?>
<?php $ID = get_the_ID();
$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $ID ), 'full_image' );
?>
<div class="inner-banner-area w-100 d-flex align-items-center" style="background-image:url(<?php echo $thumbnail[0];?>)">
  <div class="container">
    <div class="banner-content">
      <?php the_field('add_banner_content');?>
    </div>
  </div>
</div>
<!--  -->

<div class="innerbody-panel w-100">
  <div class="container">
  <?php if(have_posts()): while(have_posts()): the_post();?>
    <div class="main-content w-100">
      <h1><?php the_title();?></h1>
      <?php the_content();?>
    </div>
  <?php endwhile; endif;?>
  </div>
</div>
<?php get_footer();?>
