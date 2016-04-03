---
title: Notice
type: h2
weight: 298
filename: options/notice.md
---

```php?start_line=1
array(
  'type'    => 'notice',
  'class'   => 'Success',
  'content' => 'Success: Lorem Ipsum Dollar.',
),
```

```php?start_line=1
array(
  'type'    => 'notice',
  'class'   => 'warning',
  'content' => 'Warning: Lorem Ipsum Dollar.',
),
```

```php?start_line=1
array(
  'type'    => 'notice',
  'class'   => 'danger',
  'content' => 'Danger: Lorem Ipsum Dollar.',
),
```

```php?start_line=1
array(
  'type'    => 'notice',
  'class'   => 'info',
  'content' => 'Info: Lorem Ipsum Dollar.',
),
```


| **Key**    | **Default** | **Description**
| `type`     | notice      | type of option
| `class`    | null        | success, warning, danger, info classes for notice
| `content`  | null        | content of field
