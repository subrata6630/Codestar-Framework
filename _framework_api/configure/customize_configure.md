---
title: Customize Configure
type: h2
weight: 304
filename: configure/customize_configure.md
---

```
.
├── themename
|   ├── cs-framework
|   |   ├── config
|   |   |   ├── framework.config.php
|   |   |   ├── metabox.config.php
|   |   |   ├── shortcode.config.php
|   |   |   ├── customize.config.php
```

> take a look customize.config.php example

```php?start_inline=1
if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// -----------------------------------------
// Customize Core Fields                   -
// -----------------------------------------
$options        = array();
$options[]      = array(
  'name'        => 'core_fields',
  'title'       => 'Core Fields',
  'settings'    => array(

    array(
      'name'    => 'text_option',
      'control' => array(
        'label' => 'Text Field',
        'type'  => 'text',
      ),
    ),

    array(
      'name'    => 'text_option_with_default',
      'default' => 'bla bla bla',
      'control' => array(
        'label' => 'Text Field with Default',
        'type'  => 'text',
      ),
    ),

    array(
      'name'    => 'textarea_option',
      'transport' => 'postMessage', //Default Transport type for each setting is refresh, however, if you want to create live preview customization you can change it to 'postMessage'. Take a look at the example, we added trasport type to the color picker control.
      'control' => array(
        'label' => 'Textarea Field',
        'type'  => 'textarea',
      ),
    ),

  )
);

CSFramework_Customize::instance( $panels );
```

> How to getting options

```php?start_inline=1
echo cs_get_customize_option( 'text_option' );
echo cs_get_customize_option( 'text_option_with_default' );
echo cs_get_customize_option( 'textarea_option' );
```

Let's open `themename/cs-framework/config/customize.config.php` all examples there

also you can use override method for config. [see override](#override-configure)
