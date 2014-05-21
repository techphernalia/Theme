Theme
=====
Basic requirement of any wordpress theme is index.php and style.css. First of all add these two files in our Theme directory.

Next is setting up some properties so that user can see our themes properties so add property values in style.css file as below:

```css
/*
Theme Name: Desktop
Theme URI: 
Author: Durgesh Chaudhary
Author URI: https://durgesh.org/
Description: This theme will give you a feel of working on your desktop.
Version: 1.1
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Tags: desktop,light,dark
Text Domain: Desktop theme
*/
```

At this point you can go ahead and activate your theme. Once activated you can see blank screen as your website.

Every theme has a header and a footer so we require a header.php and footer.php apart from this we also require some php files for
tags : tag.php
categories : category.php
posts : single.php
pages : page.php

so we create all blank files for all 6 of them and put file name as content in them so we can test them as well. Browse following pages next
Home Page
A tag page
A category page
Page
Any post page

So we are good here, but wait where is header and footer? Since we are not reffering to header and footer so they are not displayed. Let us refer them, simply add `<?php	get_header(); ?>` at top of all the files (single, tag, category, index, page). and refresh above said pages again.

Similarly add `<?php get_footer(); ?>` at the end of all 5 files and you will see footer displayed as well.