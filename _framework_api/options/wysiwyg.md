---
title: Wysiwyg
type: h2
weight: 217
filename: options/wysiwyg.md
---

```php?start_line=1
array(
  'id'    => 'wysiwyg_1',
  'type'  => 'wysiwyg',
  'title' => 'Wysiwyg Field',
),
```

> Another Wysiwyg Field Example

```php?start_line=1
array(
  'id'       => 'wysiwyg_2',
  'type'     => 'wysiwyg',
  'title'    => 'Wysiwyg with Custom Settings',
  'settings' => array(
    'textarea_rows' => 5,
    'tinymce'       => false,
    'media_buttons' => false,
  )
),
```

| **Key**          | **Default** | **Description**
| `id`             | unique      | an unique id - use nice name
| `type`           | wysiwyg     | type of option
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
| `sanitize`       | wysiwyg     | sanitize of field. can be enabled or disabled
| `validate`       | null        | validate of field. can be enabled or disabled
| `multilang`      | false       | multilangual support of field
| `show_only_lang` | null        | multilangual support for language keys eg. 'en' or 'tr' or 'es'
| **Extra Key**    | ---         | ---
| `settings`       | array       | An array of arguments. [see more detail](http://codex.wordpress.org/Function_Reference/wp_editor#Arguments)
