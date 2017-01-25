<?php
$main_nav_options = array(
  'theme_location'    => 'main_menu',
  'depth'             => 2,
  'container'         => '',
  'container_class'   => '',
  'menu_class'        => 'nav navbar-nav navbar-right',
  'fallback_cb'       => 'bootstrap_four_wp_navwalker::fallback',
  'walker'            => new bootstrap_four_wp_navwalker()
);
?>

<?php if ( has_nav_menu( 'main_menu' ) ) : ?>
  <nav class="navbar navbar-light bg-faded">
    <div class="container">
      <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <?php $custom_logo_id = get_theme_mod( 'custom_logo' );
$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
echo '<img alt="Brand" src="'.$image[0].'"/>'; ?>
        </a>
      <?php wp_nav_menu( $main_nav_options ); ?>
      
    </div><!-- .container -->
  </nav>
<?php endif; ?>