---
title: How to create Customizer Live Preview
type: h2
weight: 1004
filename: faq/how_to_create_customizer_live_preview.md
---

### Update transport type

{% highlight php startinline %}
// codestar color picker
array(
  'name'          => 'codestar_color_picker',
  'default'       => '#3498db',
  'transport'     => 'postMessage', // Default Transport type for each setting is refresh, however, if you want to create live preview customization you can change it to 'postMessage'. Take a look at the example, we added trasport type to the color picker control.
  'control'       => array(
    'type'        => 'cs_field',
    'options'     => array(
      'type'      => 'color_picker',
      'title'     => 'Color Picker Field',
    ),
  ),
),
{% endhighlight %}

Default Transport type for each setting is refresh, however, if you want to create live preview customization you can change it to 'postMessage'. Take a look at the example, we added trasport type to the color picker control.

### Preparing Customizer Javascript

{% highlight js %}
( function( $ ) {

  // Update the site title in real time...
  wp.customize( '_cs_customize_options[codestar_color_picker]', function( value ) {

    value.bind( function( newval ) {
      $( 'body' ).css( {
        "background-color": newval
      });
    });

  });

})(jQuery);
{% endhighlight %}

To handle the live preview, we need to create a Javascript file for all customizer handling. Let's create our customizer file name `cs-customizer.js` and place it in your js theme folder.

Please notice that the control name is wrapped within `_cs_customize_options[setting_name]`

### Enqueue the Script

{% highlight php startinline %}
/**
 *
 * Used by hook: 'customize_preview_init'
 * @see add_action( 'customize_preview_init', $func )
 *
 */
function cs_customizer_live_preview() {
  wp_enqueue_script(
    'mytheme-themecustomizer', // Give the script an ID
    get_template_directory_uri().'/js/cs-customizer.js', // Point to file
    array( 'jquery','customize-preview' ), // Define dependencies
    '', // Define a version (optional)
    true // Put script in footer ?
  );
}
add_action( 'customize_preview_init', 'cs_customizer_live_preview' );
{% endhighlight %}

The next step is enqueuing the javascript file we have created before.
