---
title: Typography
type: h2
weight: 214
filename: options/typography.md
---

```php?start_inline=1
array(
  'id'        => 'unique_option_4001',
  'type'      => 'typography',
  'title'     => 'Typography Field',
),
```

```php?start_inline=1
array(
  'id'        => 'unique_option_4002',
  'type'      => 'typography',
  'title'     => 'Typography Field',
  'default'   => array(
    'family'  => 'Open Sans',
    'variant' => '800',
    'font'    => 'google', // this is helper for output
  ),
),
```

```php?start_inline=1
array(
  'id'        => 'unique_option_4002',
  'type'      => 'typography',
  'title'     => 'Typography Field',
  'default'   => array(
    'family'  => 'Arial',
    'font'    => 'websafe',
  ),
),
```

```php?start_inline=1
// Typography without Chosen and Variant
array(
  'id'        => 'unique_option_4002',
  'type'      => 'typography',
  'title'     => 'Typography Field',
  'default'   => array(
    'family'  => 'Ubuntu',
    'font'    => 'google',
  ),
  'variant'   => false,
  'chosen'    => false,
),
```

| **Key**          | **Default** | **Description**
| `id`             | unique      | an unique id - use nice name
| `type`           | typography  | type of option
| `title`          | null        | title of field
| `desc`           | null        | decription of field. this is showing below title. can be used html
| `help`           | null        | help tooltip of field
| `class`          | null        | extra class of field.
| `wrap_class`     | null        | extra class of field wrapper
| `dependency`     | null        | dependency for showing and hiding fields [see an example](#how-to-use-dependency)
| `before`         | null        | extra text for field before area
| `after`          | null        | extra text for field after area
| `name`           | null        | name of field
| `attirbutes`     | array       | attributes of field. supporting only html standard attributes [see an example](#how-to-use-attributes)
| `sanitize`       | text        | sanitize of field. can be enabled or disabled
| `validate`       | null        | validate of field. can be enabled or disabled
| `multilang`      | false       | multilangual support of field
| `show_only_lang` | null        | multilangual support for language keys eg. 'en' or 'tr' or 'es'
| **Extra Key**    | ---         | ---
| `default`        | array       | default value of field
| `family`         | font-face   | font family of field
| `variant`        | 800         | font family of variant
| `chosen`         | true        | disable chosen select
| `font`           | null        | helper for output google, websafe, custom
