---
title: Sorter
type: h2
weight: 220
filename: options/sorter.md
---

```php?start_inline=1
array(
  'id'             => 'sorter_1',
  'type'           => 'sorter',
  'title'          => 'Sorter',
  'default'        => array(
    'enabled'      => array(
      'bmw'        => 'BMW',
      'mercedes'   => 'Mercedes',
      'volkswagen' => 'Volkswagen',
    ),
    'disabled'     => array(
      'ferrari'    => 'Ferrari',
      'mustang'    => 'Mustang',
    ),
  ),
),
```

> Another Sorter Field Example

```php?start_inline=1
array(
  'id'             => 'sorter_2',
  'type'           => 'sorter',
  'title'          => 'Sorter',
  'default'        => array(
    'enabled'      => array(
      'blue'       => 'Blue',
      'green'      => 'Green',
      'red'        => 'Red',
      'yellow'     => 'Yellow',
      'orange'     => 'Orange',
      'ocean'      => 'Ocean',
    ),
    'disabled'     => array(
      'black'      => 'Black',
      'white'      => 'White',
    ),
  ),
  'enabled_title'  => 'Active Colors',
  'disabled_title' => 'Deactive Colors',
),
```

| **Key**          | **Default** | **Description**
| `id`             | unique      | an unique id - use nice name
| `type`           | sorter      | type of option
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
| `debug`          | null        | showing all config information
| `debug_light`    | null        | showing some config information
| `sanitize`       | null        | sanitize of field. can be enabled or disabled
| `validate`       | null        | validate of field. can be enabled or disabled
| `multilang`      | false       | multilangual support of field
| `show_only_lang` | null        | multilangual support for language keys eg. 'en' or 'tr' or 'es'
| **Extra Key**    | ---         | ---
| `enabled_title`  | null        | Enabled Modules text change
| `disabled_title` | null        | Disabled Modules text change
