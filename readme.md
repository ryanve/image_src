### [WP plugin](http://wordpress.org/extend/plugins/image-src/): [image_src](https://github.com/ryanve/image_src)

Social media sites often use the `"image_src"` microformat for displaying link thumbnails. This simple plugin adds the image_src [rel value](http://microformats.org/wiki/existing-rel-values) to the code of your site. By default, the plugin applies only to singular views and it uses the [featured image](http://codex.wordpress.org/Post_Thumbnails). It only applies when an image is available.

### Install

1. Go to: WordPress **>** Plugins **>** Add New **>** and find "[image_src](http://wordpress.org/extend/plugins/image-src/)"
2. Activate via WordPress **>** Plugins **>** Installed Plugins

Requires: PHP 5.3+

### Customize

The `@image_src` [filter hook](http://codex.wordpress.org/Plugin_API#Filters) allows for image customization and/or extending the plugin to views without a [featured image](http://codex.wordpress.org/Post_Thumbnails):

```php
add_filter('@image_src', function ( $src = '' ) {
  return $src ? $src : '/example.png';
});
```

### License: [MIT](http://opensource.org/licenses/MIT)

Copyright (C) 2013 by [Ryan Van Etten](https://github.com/ryanve)