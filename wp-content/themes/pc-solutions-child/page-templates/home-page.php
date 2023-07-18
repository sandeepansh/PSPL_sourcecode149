<?php
/**
 Template Name: Home Page
*/
get_header(); ?>
<section class="w-100 c-banner">
  <div class="c-banner__caption d-inline-flex align-items-center flex-column justify-content-center">
    <?php the_field('banner_content'); ?>
  </div>
</section>
<div class="c-body-wrapper w-100">
  <?php if(get_field('main_content')){ ?>
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
      <div class="c-content-area">
        <?php the_field('main_content'); ?>
      </div>
    </div>
    <?php the_field('main_content_overlay_object'); ?>
  </section>
  <?php } ?>

  <?php $section_count = 1; if(have_rows('dynamic_loop_content')): while(have_rows('dynamic_loop_content')): the_row();
  $background_type = get_sub_field('background_type');
  ?>
  <section class="c-messaging-sec w-100 d-flex align-items-center <?php if ($background_type == 'Light Blue'){?>c-light-blue<?php }elseif($background_type == 'Dark Blue'){?>c-dark-blue<?php }?>" id="section<?php echo $section_count; ?>">
    <div class="container">
      <h2 class="c-section-title <?php if ($background_type == 'Light Blue' || $background_type == 'Dark Blue'){?>c-section-title__white<?php }?>"><?php the_sub_field('section_heading'); ?></h2>
      <div class="c-content-area <?php if ($background_type == 'Light Blue' || $background_type == 'Dark Blue'){?>c-content-area__white<?php }?>">
        <?php the_sub_field('section_content'); ?>
      </div>
    </div>
    <?php the_sub_field('section_overlay_object'); ?>
  </section>
  <?php $section_count++; endwhile; endif; ?>
</div>
<?php get_footer(); ?>