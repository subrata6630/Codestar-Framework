<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// TAXONOMY OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options     = array();

// -----------------------------------------
// Taxonomy Options                        -
// -----------------------------------------
$options[]   = array(
  'id'       => '_custom_category_options',
  'taxonomy' => 'category',

  // begin: fields
  'fields'   => array(

    // begin: a field
    array(
      'id'    => 'section_1_text',
      'type'  => 'text',
      'title' => 'Text Field',
    ),
    // end: a field

    array(
      'id'    => 'section_1_textarea',
      'type'  => 'textarea',
      'title' => 'Textarea Field',
    ),

  ), // end: fields
);

$options[]   = array(
  'id'       => '_custom_tag_options',
  'taxonomy' => 'post_tag',
  'fields'   => array(

    array(
      'id'    => 'section_1_text',
      'type'  => 'text',
      'title' => 'Text Field',
    ),

  ),
);

CSFramework_Taxonomy::instance( $options );
