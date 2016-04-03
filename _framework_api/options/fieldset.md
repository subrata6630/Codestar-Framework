---
title: Fieldset
type: h2
weight: 221
filename: options/fieldset.md
---

```php?start_line=1
array(
  'id'        => 'fieldset_1',
  'type'      => 'fieldset',
  'title'     => 'Fieldset Field',
  'fields'    => array(

    array(
      'id'    => 'fieldset_1_text',
      'type'  => 'text',
      'title' => 'Text Field',
    ),

    array(
      'id'    => 'fieldset_1_upload',
      'type'  => 'upload',
      'title' => 'Upload Field',
    ),

    array(
      'id'    => 'fieldset_1_textarea',
      'type'  => 'textarea',
      'title' => 'Textarea Field',
    ),

  ),
),
```

> Fieldset with Default and Subheading

```php?start_line=1
array(
  'id'        => 'fieldset_2',
  'type'      => 'fieldset',
  'title'     => 'Fieldset Field with Default',
  'fields'    => array(

    array(
      'type'    => 'subheading',
      'content' => 'Title of Fieldset',
    ),

    array(
      'id'      => 'fieldset_2_text',
      'type'    => 'text',
      'title'   => 'Text Field',
    ),

    array(
      'id'      => 'fieldset_2_checkbox',
      'type'    => 'checkbox',
      'title'   => 'Checkbox Field',
      'label'   => 'Are you sure?',
    ),

    array(
      'id'      => 'fieldset_2_textarea',
      'type'    => 'textarea',
      'title'   => 'Upload Field',
    ),

  ),
  'default'   => array(
    'fieldset_2_text'     => 'Hello',
    'fieldset_2_checkbox' => true,
    'fieldset_2_textarea' => 'Do stuff',
  )
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
| `sanitize`       | null        | sanitize of field. can be enabled or disabled
| `validate`       | null        | validate of field. can be enabled or disabled
| `multilang`      | false       | multilangual support of field
| `show_only_lang` | null        | multilangual support for language keys eg. 'en' or 'tr' or 'es'
| **Extra Key**    | ---         | ---
| `fields`         | array       | fields of group field this is inside fields of field
