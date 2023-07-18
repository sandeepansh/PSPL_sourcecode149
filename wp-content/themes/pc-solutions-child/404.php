<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>
<?php $ID = 15;
$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $ID ), 'full_image' );
?>
<div class="inner-banner-area w-100 d-flex align-items-center" style="background-image:url(<?php echo $thumbnail[0];?>)">
  <div class="container">
    <div class="banner-content">
      <?php the_field('add_banner_content',15);?>
    </div>
  </div>
</div>
<div class="innerbody-panel w-100">
  <div class="container">
    <div class="main-content w-100">
      <h1><?php _e('Error 404 - Not Found', 'kubrick'); ?></h1>
    <div style="text-align:center;" class="content-section">
      <p><img style="display:inline-block;" alt="404" src="<?php bloginfo('stylesheet_directory'); ?>/images/404_1.png"></p>
      <h1>Whoops!</h1>
      <p>We're sorry, but the page you're looking for can't be found</p>
      <p>Back to <b><a href="<?php echo get_option('home'); ?>">Home</a></b></p>
    </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
