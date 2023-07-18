<?php
/**
 Template Name: Knowledge Centre Page
*/
get_header(); ?>
<style>
<?php $upload_banner_image = get_field('upload_banner_image');
if($upload_banner_image){
?>
.knw-banner:before{
    background:url('<?php echo $upload_banner_image['url']; ?>') no-repeat top center;
    background-size:cover;
}
<?php } ?>
<?php $upload_banner_image_mobile = get_field('upload_banner_image_mobile');
if($upload_banner_image_mobile){
?>
@media (max-width: 575.98px) {
    .c-banner:before {
        background: url(<?php echo $upload_banner_image_mobile['url']; ?>) no-repeat bottom center;
        background-size: cover;
    }
}
<?php } ?>
</style>
<section class="w-100 c-banner knw-banner">
   <div class="c-banner__caption d-inline-flex align-items-center flex-column justify-content-center">
      <?php the_field('banner_content'); ?>
   </div>
</section>
<div class="c-body-wrapper w-100">
   <section class="c-page-content-sec w-100">
      <div class="container">
         <?php if(get_field('nav_heading')){ ?>
         <h2 class="text-center"><?php the_field('nav_heading'); ?></h2>
         <?php } ?>
         <?php if(have_rows('dynamic_loop_content')): ?>
         <ul class="c-section-navigation-link">
           <?php $loop_count = 1; while(have_rows('dynamic_loop_content')): the_row();?>
             <li><a href="#section<?php echo $loop_count;?>"><?php the_sub_field('section_heading'); ?></a></li>
           <?php $loop_count++; endwhile; ?>
         </ul>
         <?php endif; ?>
         
         <?php if(get_field('main_content')){ ?>
         <div class="c-content-area">
           <?php the_field('main_content'); ?>
         </div>
         <?php } ?>
         <?php the_field('main_content_overlay_object'); ?>
      </div>
   </section>


  <?php $section_count = 1; if(have_rows('dynamic_loop_content')): while(have_rows('dynamic_loop_content')): the_row();
  $background_type = get_sub_field('background_type');
  if($background_type=='Featured Post'){
   $featured_post_image = get_sub_field('featured_post_image');
  ?>
   <section class="c-page-content-sec w-100" id="section<?php echo $section_count; ?>">
      <div class="container">
         <div class="knw-content-area">
            <div class="knw-c-left">
               <img src="<?php echo $featured_post_image['url']; ?>" alt="<?php echo $featured_post_image['alt']; ?>" width="735" height="483">
            </div>
            <div class="knw-c-right">
               <?php the_sub_field('featured_post_content'); ?>
            </div>
         </div>
      </div>
   </section>
  <?php }else{?>
   <section class="c-messaging-sec w-100 d-flex align-items-center <?php if ($background_type == 'Light Blue'){?>c-light-blue<?php }elseif($background_type == 'Dark Blue'){?>c-dark-blue<?php }elseif($background_type == 'White'){?>technology-sec<?php }?>" id="section<?php echo $section_count; ?>">
      <div class="container">
         <div class="web-post-section <?php if ( $background_type == 'Light Blue' || $background_type == 'Dark Blue'){?>thought-l-post<?php }?>">
            <h3 class="web-title"><?php the_sub_field('section_heading'); ?></h3>
            <div class="row">
            <?php if(have_rows('post_items')): while(have_rows('post_items')): the_row();
               $upload_post_image = get_sub_field('upload_post_image');
            ?>
               <div class="col-lg-4 col-md-6">
                  <div class="web-post-item">
                     <a href="<?php the_sub_field('post_link'); ?>">
                        <img src="<?php echo $upload_post_image['url']; ?>" alt="<?php echo $upload_post_image['alt']; ?>" width="400" height="200">
                        <div class="web-post-info">
                           <div class="web-post-info-in">
                           <h4><?php the_sub_field('heading'); ?></h4>
                           <h5><?php the_sub_field('post_date'); ?></h5>
                           <?php the_sub_field('post_excerpt'); ?>
                        </div>
                       </div>
                     </a>
                  </div>
               </div>
            <?php endwhile; endif; ?>
            </div>
            <?php if( get_sub_field('view_button_label') && get_sub_field('view_button_label') ){?>
            <a href="<?php the_sub_field('view_button_label'); ?>" class="<?php if ( $background_type == 'Light Blue' || $background_type == 'Dark Blue'){?>white-btn<?php }else{?>blue-border-btn<?php }?>"><?php the_sub_field('view_button_label'); ?></a>
            <?php } ?>
         </div>
      </div>
   </section>
   <?php } $section_count++; endwhile; endif; ?>
</div>

<?php get_footer(); ?>