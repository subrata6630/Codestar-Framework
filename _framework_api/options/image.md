---
title: Image
type: h2
weight: 218
filename: options/image.md
---

```php?start_line=1
array(
  'id'    => 'image_1',
  'type'  => 'image',
  'title' => 'Image',
),
```

> Another Wysiwyg Field Example

```php?start_line=1
array(
  'id'        => 'image_2',
  'type'      => 'image',
  'title'     => 'Image with Custom Title',
  'add_title' => 'Add Logo',
),
```

> Front-End Basic Usage Example

```php?start_line=1
$image_id = cs_get_option( 'gallery_1' );
$attachment = wp_get_attachment_image_src( $image_id, 'full' );
var_dump( $attachment );
```

| **Key**          | **Default** | **Description**
| `id`             | unique      | an unique id - use nice name
| `type`           | image       | type of option
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
| `add_title`      | null        | Add Image text change
