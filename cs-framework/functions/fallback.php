<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
/**
 *
 * A fallback for get term meta
 * get_term_meta added since WP 4.4
 *
 * @since 1.0.2
 * @version 1.0.0
 *
 */
if( ! function_exists( 'get_term_meta' ) ) {
  function get_term_meta( $term_id, $key = '', $single = false ) {
    return get_metadata( 'term', $term_id, $key, $single );
  }
}

/**
 *
 * A fallback for add term meta
 * add_term_meta added since WP 4.4
 *
 * @since 1.0.2
 * @version 1.0.0
 *
 */
if( ! function_exists( 'add_term_meta' ) ) {
  function add_term_meta( $term_id, $meta_key = '', $meta_value, $unique = false ) {
    return add_metadata( 'term', $term_id, $meta_key = '', $meta_value, $unique = false );
  }
}

/**
 *
 * A fallback for update term meta
 * update_term_meta added since WP 4.4
 *
 * @since 1.0.2
 * @version 1.0.0
 *
 */
if( ! function_exists( 'update_term_meta' ) ) {
  function update_term_meta( $term_id, $meta_key, $meta_value, $prev_value = '' ) {
    return update_metadata( 'term', $term_id, $meta_key, $meta_value, $prev_value );
  }
}

/**
 *
 * A fallback for delete term meta
 * delete_term_meta added since WP 4.4
 *
 * @since 1.0.2
 * @version 1.0.0
 *
 */
if( ! function_exists( 'delete_term_meta' ) ) {
  function delete_term_meta( $term_id, $meta_key, $meta_value = '', $delete_all = false ) {
    return delete_metadata( 'term', $term_id, $meta_key, $meta_value, $delete_all );
  }
}
