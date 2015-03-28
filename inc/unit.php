<?php
/**
 *
 * Register Widget for Developer
 *
 */
if( ! function_exists( 'cs_widgets_init' ) ) {
  function cs_widgets_init() {

    register_sidebar( array(
      'name'          => 'Widget Area',
      'id'            => 'sidebar-1',
      'description'   => 'Add widgets here to appear in your sidebar.',
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h2 class="widget-title">',
      'after_title'   => '</h2>',
    ) );

  }
  add_action( 'widgets_init', 'cs_widgets_init' );
}
