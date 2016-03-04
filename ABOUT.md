# Introduction

This theme was built by BEN TAN on top of the SAGE Wordpress theme boilerplate template (https://roots.io/sage/). The advantages include a modular set up pages, inclusion of package management Bower, and the task automater Gulp, all typically not found with most Wordpress themes.

# Getting things up and running

As a pre-requiresite, you may require to install the following, accessible globally:

- node
- npm
- bower
- gulp

For full guide on installation, check out this link: https://roots.io/sage/docs/theme-development-and-building/

Once installed, install all the dependacies `npm install` and `bower install` from the theme root.

To get gulp working, run `gulp watch --production` also from the theme root. This will also set up a browser sync view, accessible from localhost:3000.

**Note:** You may need to tell browsersync where localhost:3000 points at. This is set in the `/assets/manifest.json`.

# Folder structure

- **/assets**: This is where your raw assets live
- **/dist**: This is where your exported assets live, these are served live the user
- **/lib**: This is where the Sage theme configuration lives
- **/templates**: Theme templates

# Adding assets to the view

Assets that require concat and minifying are added through the `manifest.json`. The gulp watch task will need to be terminated and reloaded for the manifest.json to update and take effect.

Then to add the script to load globally when using this theme, add it to the `lib/setup.php` file.

``wp_enqueue_script('sage/js', Assets\asset_path('scripts/main.js'), ['jquery'], null, true);``

Otherwise, if it is page-specific, add the `wp_enqueue_script()` function in the `page-template.php`.