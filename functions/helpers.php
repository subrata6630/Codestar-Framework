<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
/**
 *
 * Add framework element
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if ( ! function_exists( 'cs_add_element' ) ) {
  function cs_add_element( $field = array(), $value = '', $unique = '' ) {

    $output     = '';
    $depend     = '';
    $sub        = ( isset( $field['sub'] ) ) ? 'sub-': '';
    $unique     = ( isset( $unique ) ) ? $unique : '';
    $languages  = cs_language_defaults();
    $class      = 'CSFramework_Option_' . $field['type'];
    $wrap_class = ( isset( $field['wrap_class'] ) ) ? ' ' . $field['wrap_class'] : '';
    $hidden     = ( isset( $field['show_only_language'] ) && ( $field['show_only_language'] != $languages['current'] ) ) ? ' hidden' : '';
    $is_pseudo  = ( isset( $field['pseudo'] ) ) ? ' pseudo-field' : '';

    if ( isset( $field['dependency'] ) ) {
      $hidden  = ' hidden';
      $depend .= ' data-'. $sub .'controller="'. $field['dependency'][0] .'"';
      $depend .= ' data-'. $sub .'condition="'. $field['dependency'][1] .'"';
      $depend .= " data-". $sub ."value='". $field['dependency'][2] ."'";
    }

    $fieldset_class = ( isset( $field['title'] ) ) ? 'cs-fieldset ' : '';

    $output .= '<div class="cs-element cs-field-'. $field['type'] . $is_pseudo . $wrap_class . $hidden .'"'. $depend .'>';

    if( isset( $field['title'] ) ) {
      $field_desc = ( isset( $field['desc'] ) ) ? '<p class="cs-text-desc">'. $field['desc'] .'</p>' : '';
      $output .= '<div class="cs-title"><h4>' . $field['title'] . '</h4>'. $field_desc .'</div>';
    }

    $output .= '<div class="'. $fieldset_class .'">';

    $value   = ( !isset( $value ) && isset( $field['default'] ) ) ? $field['default'] : $value;
    $value   = ( isset( $field['value'] ) ) ? $field['value'] : $value;

    // check class
    if( class_exists( $class ) ) {
      ob_start();
      $element = new $class( $field, $value, $unique );
      $element->output();
      $output .= ob_get_clean();
    } else {
      $output .= '<p>'. __( 'This field class is not available!', CS_TEXTDOMAIN ) .'</p>';
    }

    $output .= '</div>';

    $output .= '<div class="clear"></div>';

    $output .= '</div>';

    return $output;

  }
}

/**
 *
 * Safe web fonts
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if ( ! function_exists( 'cs_get_websafe_fonts' ) ) {
  function cs_get_websafe_fonts() {

    return apply_filters( 'cs_websafe_fonts', array(
      'Arial',
      'Arial Black',
      'Comic Sans MS',
      'Impact',
      'Lucida Sans Unicode',
      'Tahoma',
      'Trebuchet MS',
      'Verdana',
      'Courier New',
      'Lucida Console',
      'Georgia, serif',
      'Palatino Linotype',
      'Times New Roman'
    ) );

  }
}

/**
 *
 * Check for google font
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if ( ! function_exists( 'cs_is_googe_font' ) ) {
  function cs_is_googe_font( $font ) {
    return ( ! empty( $font ) && ! in_array( $font, cs_get_websafe_fonts() ) ) ? true : false;
  }
}

/**
 *
 * Get locate for load textdomain
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
function cs_get_locale() {

  global $locale, $wp_local_package;

  if ( isset( $locale ) ) {
    return apply_filters( 'locale', $locale );
  }

  if ( isset( $wp_local_package ) ) {
    $locale = $wp_local_package;
  }

  if ( defined( 'WPLANG' ) ) {
    $locale = WPLANG;
  }

  if ( is_multisite() ) {

    if ( defined( 'WP_INSTALLING' ) || ( false === $ms_locale = get_option( 'WPLANG' ) ) ) {
      $ms_locale = get_site_option( 'WPLANG' );
    }

    if ( $ms_locale !== false ) {
      $locale = $ms_locale;
    }

  } else {

    $db_locale = get_option( 'WPLANG' );

    if ( $db_locale !== false ) {
      $locale = $db_locale;
    }

  }

  if ( empty( $locale ) ) {
    $locale = 'en_US';
  }

  return apply_filters( 'locale', $locale );

}

/**
 *
 * Load options fields
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if ( ! function_exists( 'cs_load_option_fields' ) ) {
  function cs_load_option_fields() {

    $located_fields = array();

    foreach ( glob( CS_DIR .'/fields/*/*.{php}', GLOB_BRACE ) as $cs_field ) {
      $located_fields[] = basename( $cs_field );
      cs_locate_template( CS_BASENAME . str_replace(  CS_DIR, '', $cs_field ) );
    }

    // theme override fields
    $override_dir = get_template_directory() .'/cs-framework-override/fields';

    if( is_dir( $override_dir ) ) {

      foreach ( glob( $override_dir .'/*/*.{php}', GLOB_BRACE ) as $override_field ) {

        if( ! in_array( basename( $override_field ), $located_fields ) ) {

          cs_locate_template( CS_BASENAME . str_replace(  CS_DIR .'-override', '', $override_field ) );

        }

      }

    }

    do_action( 'cs_load_option_fields' );

  }
}

/**
 *
 * Array search key & value
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
if ( ! function_exists( 'cs_array_search' ) ) {
  function cs_array_search( $array, $key, $value ) {

    $results = array();

    if ( is_array( $array ) ) {
      if ( isset( $array[$key] ) && $array[$key] == $value ) {
        $results[] = $array;
      }

      foreach ( $array as $sub_array ) {
        $results = array_merge( $results, cs_array_search( $sub_array, $key, $value ) );
      }

    }

    return $results;

  }
}
