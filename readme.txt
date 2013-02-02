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

Social media sites often use the **image_src** microformat for displaying link thumbnails. This simple plugin adds the image_src [rel value](http://microformats.org/wiki/existing-rel-values) to the code of your site. By default, the plugin applies only to singular views and it uses the [featured image](http://codex.wordpress.org/Post_Thumbnails). It only applies when an image is available. The `'@image_src'` filter hook allows for image customization and/or extending the plugin to other views.

== Installation ==

Requires PHP 5.3+

1. Upload `image_src.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress