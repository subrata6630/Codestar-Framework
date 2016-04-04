---
title: Taxonomy Configure
type: h2
weight: 302
filename: configure/taxonomy_configure.md
---

```
.
├── themename
|   ├── cs-framework
|   |   ├── config
|   |   |   ├── taxonomy.config.php
```

> take a look taxonomy.config.php example

```php?start_inline=1
if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
/**
 *
 * CSFramework Taxonomy Config
 *
 * @since 1.0
 * @version 1.0
 *
 */
$options      = array();

$options[]    = array(
  'id'        => '_custom_category_options',
  'post_type' => 'category', // or array( 'category', 'post_tag' )

  // begin: fields
  'fields'    => array(

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
```

> You should use `_custom_category_options` as this is the id for your key declared into taxonomy config file. So your code must look like this:

```php?start_inline=1
// way #1
$term = get_category_by_slug( 'uncategorized' );
$term_data = get_term_meta( $term->term_id, '_custom_category_options', true );
var_dump( $term_data );
```

```php?start_inline=1
// way #2
$term_id = get_cat_ID( 'uncategorized' );
$term_data = get_term_meta( $term_id, '_custom_category_options', true );
var_dump( $term_data );
```

```php?start_inline=1
// way #3 post_tag
$term = get_term_by( 'slug', 'tag1', 'post_tag' );
$term_data = get_term_meta( $term->term_id, '_custom_tag_options', true );
var_dump( $term_data );
```

Let's open `themename/cs-framework/config/taxonomy.config.php` all examples there

also you can use override method for config. [see override](#override-configure)
