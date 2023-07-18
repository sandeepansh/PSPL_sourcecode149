<?php
/**
 * The template for displaying the footer
 *
 * @package WordPress
 * @subpackage pc-solutions
 * @since pc-solutions 1.0
 */
?>
<div class="c-footer-wrapper" id="request-a-call">
  <div class="c-request-form-sec w-100">
    <div class="container">
      <div class="text-center">
        <?php if (get_field('section_heading_form',2)) {?>
        <h2><?php the_field('section_heading_form',2); ?></h2>
        <?php }?>
        <?php if (get_field('short_description_form',2)) { the_field('short_description_form',2); } ?>
      </div>
      <?php echo do_shortcode(get_field('form_shortcode',2)); ?>
      <hr/>
    </div>
  </div>
  <footer class="o-footer w-100">
    <div class="o-footer__bg">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <h4><?php the_field('footer_menu_heading_1',2); ?></h4>
            <?php wp_nav_menu( array( 'menu'=>get_field('footer_menu_name_1',2), 'container'=> false ) );?>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <h4><?php the_field('footer_menu_heading_2',2); ?></h4>
            <?php wp_nav_menu( array( 'menu'=>get_field('footer_menu_name_2',2), 'container'=> false ) );?>
          </div>
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <h4><?php the_field('footer_menu_heading_3',2); ?></h4>
            <?php wp_nav_menu( array( 'menu'=>get_field('footer_menu_name_3',2), 'container'=> false ) );?>
          </div>
          <div class="col-md-6 col-lg-2 mb-4 mb-lg-0">
            <h4><?php the_field('footer_menu_heading_4',2); ?></h4>
            <?php the_field('footer_menu_name_4',2); ?>
          </div>
        </div>

        <div class="o-footer__copyright text-center">
          <p><?php the_field('footer_copyright_text',2); ?></p>
        </div>

      </div>
    </div>
  </footer>
</div>
	<?php wp_footer(); ?>
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri();?>/css/plugins.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri();?>/css/home-body.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri();?>/css/footer.css">
  <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://kit.fontawesome.com/a4cea2dab2.js" crossorigin="anonymous" strategy="lazyOnload" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>  
  <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/component.js"></script>
  <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/edit-js.js"></script>  
</body>
</html>