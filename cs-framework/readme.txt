=== Codestar Framework ===
Contributors: Codestar
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=32VSHY265GXY2
Tags: admin, admin panel, options, theme options, framework, options framework, settings, metabox options, shortcode generator, customize options, theme framework
Requires at least: 3.5.0
Tested up to: 4.1
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A Lightweight and easy-to-use WordPress Options Framework

== Description ==

Codestar Framework a lightweight and easy-to-use WordPress options framework. It is a free framework for building theme options. Save your time!

- [Documentation](http://codestarframework.com/documentation/)
- [Codestar Framework GitHub Repository](https://github.com/Codestar/codestar-framework/)
- [Issue and Support](https://github.com/Codestar/codestar-framework/issues)

= Features =
- Options Framework
- Metabox Framework
- WP Customize Framework
- Shortcode Generator
- Supports Child Themes
- Validate Fields
- Sanitize Fields
- Localization
- Fields Dependencies
- Supports Multilangual Fields
- Reset/Restore/Export/Import Options
- WordPress 4.0.1+ Compatibility
- and so much more...

= Options Fields =
- Text
- Textarea
- Checkbox
- Radio
- Select
- Number
- Icons
- Group
- Upload
- Switcher
- Background
- Color Picker
- Multi Checkbox
- Checkbox Image Select
- Radio Image Select
- Typography
- Backup
- Heading
- Sub Heading
- Notice
- and **extendable** fields

= Donate to the Development =
You Guys! If you want to see more functions and features for this framework, you can buy me a coffee. I need a lot of it when I am creating new stuff for you. Thank you in advance.

= Credits =
Thanks for guys! Please read [credits](http://codestarframework.com/credits/). If you would like to contribute please fork the project and [report bugs](https://github.com/Codestar/codestar-framework/issues) or submit [pull requests](https://github.com/Codestar/codestar-framework/pulls)</a>.

== Installation ==

= A) Usage as Theme =
* Download zip file from github repository
* Extract download zip on `themename/cs-framework` folder under your theme directory
* Add framework include code on your theme `themename/functions.php` file

```
require_once dirname( __FILE__ ) .'/cs-framework/cs-framework.php';
```

* Yay! Right now you are ready to configure framework, metaboxes, wp customize, shortcoder
* Take a look for config files from `themename/cs-framework/config` folder
* Read for more from [documentation](http://codestarframework.com/documentation/)

= B) Usage as Plugin =
* Download zip file from github repository
* **Way1** Extract download zip on `wp-content/plugins/cs-framework` folder under your plugin directory
* **Way2** Upload zip file from `wordpess plugins panel -> add new -> upload plugin`
* Active Codestar Framework plugin from wordpress plugins panel
* Yay! Right now you are ready to configure framework, metaboxes, wp customize, shortcoder
* Take a look for config files from `wp-content/plugins/cs-framework/config` folder also you can manage config files from theme directory. see overriding files method.
* Read for more from [documentation](http://codestarframework.com/documentation/)

= Enable - Disable Mods =
Add define code on your `themename/functions.php` directly.
```
define( 'CS_ACTIVE_FRAMEWORK',  true  ); // default true
define( 'CS_ACTIVE_METABOX',    false ); // default true
define( 'CS_ACTIVE_SHORTCODE',  false ); // default true
define( 'CS_ACTIVE_CUSTOMIZE',  false ); // default true
```
or take a look for change define base code from `/cs-framework/cs-framework.php` directly.

= Overriding Files =
You can override an existing file without change `themename/cs-framework` folder. just create one `themename/cs-framework-override` folder on your theme directory. for eg:

```
themename/cs-framework-override/config/framework.config.php
themename/cs-framework-override/functions/constants.php
themename/cs-framework-override/fields/text/text.php
```

== Frequently Asked Questions ==

- [Documentation](http://codestarframework.com/documentation/)
- [Codestar Framework GitHub Repository](https://github.com/Codestar/codestar-framework/)
- [Issue and Support](https://github.com/Codestar/codestar-framework/issues)

== Screenshots ==

1. Codestar Framework Theme Options

== Changelog ==

= 1.0.0 =
* Initial release.

== Upgrade Notice ==
Initial release.