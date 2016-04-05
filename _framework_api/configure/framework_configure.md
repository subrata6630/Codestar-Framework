---
title: Framework Configure
type: h2
weight: 301
filename: configure/framework_configure.md
---

```
.
├── themename
|   ├── cs-framework
|   |   ├── config
|   |   |   ├── framework.config.php
```

> take a look framework.config.php example

```php?start_inline=1
if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
/**
 *
 * CSFramework Config
 *
 * @since 1.0
 * @version 1.0
 *
 */

// Top level Menu
$settings           = array(
  'menu_title'      => 'Framework',
  'menu_type'       => 'menu', // menu, submenu, options, theme, etc.
  'menu_slug'       => 'cs-framework',
  'ajax_save'       => false,
  'show_reset_all'  => false,
  'framework_title' => 'Codestar Framework <small>by Codestar</small>',
);

/*
// child of another menu in wordpress
$settings           = array(
  'menu_title'      => 'Framework',
  'menu_type'       => 'theme', // <----- under appearance
  'menu_slug'       => 'cs-framework',
  'ajax_save'       => false,
  'show_reset_all'  => false,
  'framework_title' => 'Codestar Framework <small>by Codestar</small>',
);

// child of another by parent slug
$settings           = array(
  'menu_title'      => 'Framework',
  'menu_type'       => 'submenu', // <------- set to submenu
 'menu_parent'      => 'your_parent_slug', // <-------
  'menu_slug'       => 'cs-framework',
  'ajax_save'       => false,
  'show_reset_all'  => false,
  'framework_title' => 'Codestar Framework <small>by Codestar</small>',
);
*/

// Framework Options
$options      = array();

// a new setting section
$options[]    = array(
  'name'      => 'section_1',
  'title'     => 'Section #1',
  'icon'      => 'fa fa-repeat',
  'fields'    => array(

    // a text field
    array(
      'id'    => 'section_1_text',
      'type'  => 'text',
      'title' => 'Text Option Field',
    ),

    // a textarea field
    array(
      'id'    => 'section_1_textarea',
      'type'  => 'textarea',
      'title' => 'Textarea Option Field',
    ),

  )
);

CSFramework::instance( $settings, $options );
```

> How to getting options

```php?start_inline=1
echo cs_get_option( 'section_1_text' );
echo cs_get_option( 'section_1_textarea' );
```

Let's open `themename/cs-framework/config/framework.config.php` all examples there

| **Settings keys**  | **Default**    | **Description**
| `menu_parent`      | null           | working with "submenu" type
| `menu_title`       | Framework      | options menu name
| `menu_type`        | menu           | type of menu, submenu, options, theme, etc.
| `menu_slug`        | cs-framework   | slug of menu
| `menu_icon`        | null           | supporting dashicon
| `menu_position`    | null           | menu of position
| `menu_capability`  | manage_options | capability
| `ajax_save`        | false          | saving options without refresh
| `show_reset_all`   | false          | show -reset all options- button
| `framework_title`  | text           | options framework header title

also you can use override method for config. [see override](#override-configure)
