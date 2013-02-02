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

Social media sites use "image_src" microformat for displaying link thumbnails. This plugin adds the "image_src" microformat to your website by adding the "image_src" [rel value](http://microformats.org/wiki/existing-rel-values) to a `<link>` tag for an image. The default usage applies only to singular views. Its image defaults to the "featured image" in singular views. Markup is only added when an image is available. The `'@image_src'` filter hook allows for image customization and/or extending the plugin to other views.

== Installation ==

1. Upload `image_src.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

