---
title: How to Use Dependency
type: h2
weight: 1003
filename: faq/how_to_use_dependency.md
---

{% highlight php startinline %}
// If text "not be empty"
array(
  'id'           => 'dep_1',
  'type'         => 'text',
  'title'        => 'If text not be empty',
),

array(
  'id'           => 'dummy_1',
  'type'         => 'notice',
  'class'        => 'info',
  'content'      => 'Done, this text option have something.',
  'dependency'   => array( 'dep_1', '!=', '' ),
),
{% endhighlight %}


{% highlight php startinline %}
// If switcher mode "ON"
array(
  'id'           => 'dep_2',
  'type'         => 'switcher',
  'title'        => 'If switcher mode ON',
),

array(
  'id'           => 'dummy_2',
  'type'         => 'notice',
  'class'        => 'success',
  'content'      => 'Woow! Switcher is ON',
  'dependency'   => array( 'dep_2', '==', 'true' ),
),
{% endhighlight %}

{% highlight php startinline %}
// If selected color is "black or white"
array(
  'id'           => 'dep_3',
  'type'         => 'select',
  'title'        => 'Select color black or white',
  'options'      => array(
    'blue'       => 'Blue',
    'yellow'     => 'Yellow',
    'green'      => 'Green',
    'black'      => 'Black',
    'white'      => 'White',
  ),
),

array(
  'id'           => 'dummy_3',
  'type'         => 'notice',
  'class'        => 'danger',
  'content'      => 'Well done!',
  'dependency'   => array( 'dep_3', 'any', 'black,white' ),
),
{% endhighlight %}

{% highlight php startinline %}
// If radio selected is "No, Thanks"
array(
  'id'           => 'dep_4',
  'type'         => 'radio',
  'title'        => 'If set No, Thanks',
  'options'      => array(
    'yes'        => 'Yes, Please',
    'no'         => 'No, Thanks',
    'not-sure'   => 'I am not sure!',
  ),
  'default'      => 'yes'
),

array(
  'id'           => 'dummy_4',
  'type'         => 'notice',
  'class'        => 'info',
  'content'      => 'Uh why?!!!',
  'dependency'   => array( 'dep_4_no', '==', 'true' ),
  //'dependency' => array( '{ID}_{VALUE}', '==', 'true' ),
),
{% endhighlight %}

{% highlight php startinline %}
// If checkbox selected is "danger"
array(
  'id'           => 'dep_5',
  'type'         => 'checkbox',
  'title'        => 'If checked danger',
  'options'      => array(
    'success'    => 'Success',
    'danger'     => 'Danger',
    'info'       => 'Info',
    'warning'    => 'Warning',
  ),
),

array(
  'id'           => 'dummy_5',
  'type'         => 'notice',
  'class'        => 'danger',
  'content'      => 'Danger!',
  'dependency'   => array( 'dep_5_danger', '==', 'true' ),
  //'dependency' => array( '{ID}_{VALUE}', '==', 'true' ),
),
{% endhighlight %}

{% highlight php startinline %}
// If image select is "blue"
array(
  'id'           => 'dep_6',
  'type'         => 'image_select',
  'title'        => 'If check <u>Blue box</u>',
  'options'      => array(
    'green'      => 'green.png',
    'red'        => 'red.png',
    'yellow'     => 'yellow.png',
    'blue'       => 'blue.png',
    'gray'       => 'gray.png',
  ),
),

array(
  'id'           => 'dummy_6',
  'type'         => 'notice',
  'class'        => 'info',
  'content'      => 'Blue box selected!',
  'dependency'   => array( 'dep_6_blue', '==', 'true' ),
  //'dependency' => array( '{ID}_{VALUE}', '==', 'true' ),
),
{% endhighlight %}

{% highlight php startinline %}
// Multiple element dependencies
array(
  'id'           => 'dep_10',
  'type'         => 'text',
  'title'        => 'If text string <u>hello</u>',
),

array(
  'id'           => 'dep_11',
  'type'         => 'text',
  'title'        => 'and this text string <u>world</u>',
),

array(
  'id'           => 'dep_12',
  'type'         => 'checkbox',
  'title'        => 'and checkbox mode <u>checked</u>',
  'label'        => 'Check me!'
),

array(
  'id'           => 'dummy_10',
  'type'         => 'notice',
  'class'        => 'info',
  'content'      => 'Done, Multiple Dependencies worked.',
  'dependency'   => array( 'dep_10|dep_11|dep_12', '==|==|==', 'hello|world|true' ),
),
{% endhighlight %}

{% highlight php startinline %}
// Another Multiple element dependencies
array(
  'id'           => 'dep_13',
  'type'         => 'select',
  'title'        => 'If color <u>black or white</u>',
  'options'      => array(
    'blue'       => 'Blue',
    'black'      => 'Black',
    'white'      => 'White',
  ),
),

array(
  'id'           => 'dep_14',
  'type'         => 'select',
  'title'        => 'If size <u>middle</u>',
  'options'      => array(
    'small'      => 'Small',
    'middle'     => 'Middle',
    'large'      => 'Large',
    'xlage'      => 'XLarge',
  ),
),

array(
  'id'           => 'dep_15',
  'type'         => 'select',
  'title'        => 'If text is <u>world</u>',
  'options'      => array(
    'hello'      => 'Hello',
    'world'      => 'World',
  ),
  'dependency'   => array( 'dep_13|dep_14', 'any|==', 'black,white|middle' ),
),

array(
  'id'           => 'dummy_11',
  'type'         => 'notice',
  'class'        => 'info',
  'content'      => 'Well done, Correctly!',
  'dependency'   => array( 'dep_15', '==', 'world' ),
),
{% endhighlight %}

Let's take a look how to using dependency
