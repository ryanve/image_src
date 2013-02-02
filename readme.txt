=== Plugin Name ===
Contributors: ryanve
Tags: microformats, image_src
Requires at least: 2.8.0
Tested up to: 3.5.1
Stable tag: trunk
License: MIT
License URI: http://en.wikipedia.org/wiki/MIT_License

Add the "image_src" microformat.

== Description ==

Social media sites often use "image_src" microformat for displaying link thumbnails. This simple plugin adds an "image_src" link [rel value](http://microformats.org/wiki/existing-rel-values) to the code of your site. By default it applies only to singular views and it uses "featured image" if it is available. It is only added when an image is available. The `'@image_src'` filter hook allows for image customization and/or extending the plugin to other views.

== Installation ==

1. Upload `image_src.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

