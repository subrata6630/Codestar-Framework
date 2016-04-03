---
title: Gallery
type: h2
weight: 219
filename: options/galley.md
---

```php?start_inline=1
array(
  'id'    => 'gallery_1',
  'type'  => 'gallery',
  'title' => 'Gallery',
),
```

> Another Gallery Field Example

```php?start_inline=1
array(
  'id'          => 'gallery_2',
  'type'        => 'gallery',
  'title'       => 'Gallery with Custom Title',
  'add_title'   => 'Add Images',
  'edit_title'  => 'Edit Images',
  'clear_title' => 'Remove Images',
),
```

> Front-End Basic Usage Example

```php?start_inline=1
$gallery = cs_get_option( 'gallery_1' );

if( ! empty( $gallery ) ) {

  $ids = explode( ',', $gallery );

  foreach ( $ids as $id ) {
    $attachment = wp_get_attachment_image_src( $id, 'full' );
    var_dump( $attachment );
  }

}
```

| **Key**          | **Default** | **Description**
| `id`             | unique      | an unique id - use nice name
| `type`           | gallery     | type of option
| `title`          | null        | title of field
| `desc`           | null        | decription of field. this is showing below title. can be used html
| `default`        | null        | default value of field
| `help`           | null        | help tooltip of field
| `class`          | null        | extra class of field.
| `wrap_class`     | null        | extra class of field wrapper
| `dependency`     | null        | dependency for showing and hiding fields [see an example](#how-to-use-dependency)
| `before`         | null        | extra text for field before area
| `after`          | null        | extra text for field after area
| `name`           | null        | name of field
| `sanitize`       | null        | sanitize of field. can be enabled or disabled
| `validate`       | null        | validate of field. can be enabled or disabled
| `multilang`      | false       | multilangual support of field
| `show_only_lang` | null        | multilangual support for language keys eg. 'en' or 'tr' or 'es'
| **Extra Key**    | ---         | ---
| `add_title`      | null        | Add Gallery text change
| `edit_title`     | null        | Edit Gallery text change
| `clear_title`    | null        | Clear text change
