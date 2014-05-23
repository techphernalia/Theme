This repository has jQuery files, we will include the required licenses as soon as the things are finalized.

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

Every theme has a header and a footer so we require a `header.php` and `footer.php` apart from this we also require some php files for
 - tags : `tag.php`
 - categories : `category.php`
 - posts : `single.php`
 - pages : `page.php`

So we create all blank files for all 6 of them and put file name as content in them so we can test them as well. Browse following pages next
 - Home Page
 - A tag page
 - A category page
 - Page
 - Any post page

So we are good here, but wait where is header and footer? Since we are not reffering to header and footer so they are not displayed. Let us refer them, simply add `<?php	get_header(); ?>` at top of all the files (single, tag, category, index, page). and refresh above said pages again.

Similarly add `<?php get_footer(); ?>` at the end of all 5 files and you will see footer displayed as well.

 > May 23

First of all put our basic items in Header and Footer like head, title, CSS and so on. You can copy all of these from any theme.

Header.php
```HTML
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<!-- TODO -->
	<link rel='stylesheet' id='main-css'  href='<?php echo get_template_directory_uri(); ?>/style.css?ver=3.6' type='text/css' media='all' />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
```

Footer.php
```PHP
	<?php wp_footer(); ?>
</body>
</html>
```

Let us now create our taskbar. What are all the items in a taskbar:
 - Start Button
 - Taskbar Buttons
 - Separator
 - Applications
 - Separator
 - Time

Go ahead and create a structure for these items in header.php
```PHP
	<div id="taskbar" class="taskbar glossy">
		<div id="taskbar-items" class="taskbar-items">
			<div id="start-button-div" class="taskbar-item">Start</div>
			<div id="taskbar-buttons" class="taskbar-item"></div>
			<div class="separator taskbar-item"></div>
			<div class="applications taskbar-item">
				<div class="application taskbar-item"></div>
				<div class="application taskbar-item"></div>
			</div>
			<div class="separator taskbar-item"></div>
			<div class="time" id="time">
			</div>
		</div>
	</div>
```

What are you doing man? Why did you checked your UI for any change, you will not see anything except for Start text. It is because we have not added any style information.

Open style.css and add style information for main taskbar.

Properties of TaskBar
 - It should be 100% in width (width:100%;box-sizing:border-box;)
 - Height should be fixed (say height:32px;)
 - Located absolutely at bottom (position:absolute;left:0px;bottom:0px;)
 - No margin and padding except for some left padding(margin:0px; padding:0px;padding-left:5px;)
 - It should always be on top of everything (z-index:1;)
 - Give it some background color (background-color: rgb(0, 0, 0);)
 -  A glossy background look (background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0) 50%, rgba(0, 0, 0, 0.12) 51%, rgba(0, 0, 0, 0.04));) (We put this in a new class glossy as we will require this css again and again later, so we add glossy to taskbar class as well)

 ```CSS
.glossy
{
	background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0) 50%, rgba(0, 0, 0, 0.12) 51%, rgba(0, 0, 0, 0.04));
}
.taskbar
{
	width:100%;
	box-sizing:border-box;
	height: 32px;
	position:absolute;
	left:0px;
	bottom:0px;
	margin: 0px;
	padding: 0px;
	padding-left: 5px;
	z-index: 1;
	background-color: rgb(0, 0, 0);
}
 ```

 Have a demo, and next design our Start button.
  - It should have a pointer cursor, create a new class `pointer` and apply whereever required `.pointer{cursor: pointer;}`
  - Make it a button
  - Add some green background
  - Add box and text shadow
  - Adjust the font and border
  - Put glossy and hover effect

```CSS
.pointer
{
	cursor: pointer;
}
.button
{
	vertical-align: middle;
	color: rgb(255, 255, 255);
	text-align: center;
	text-decoration: none;
	border: 1px solid;
	border-radius: 4px;
	padding: 3px 10px;
	position: relative;
	top:5px;
	max-width:60px; 
}
.btn-green
{
	background-color: rgb(28, 169, 19);
	border-color: rgb(20, 123, 14) rgb(17, 100, 11) rgb(17, 100, 11);	
}
.shadow
{
	box-shadow: inset 0 1px rgba(255, 255, 255, 0.4), 0 1px 2px rgba(0, 0, 0, 0.2);
	text-shadow: 0 1px rgb(13, 77, 9);
}
#start-button-div
{
	border:1px solid #FFF;
	font-size: small;
}
.btn-green:hover
{
	background-color: rgb(21, 155, 13);
}
```

All taskbar-item would be positioned absolutely so add CSS info for same
```CSS
.taskbar-item
{
	position: absolute;
}
```

All separator will have width 0 and some border (so that it appears as a separator)
```CSS
.separator
{
	height: 28px;
	width: 0px;
	border-left: 1px solid rgb(152, 200, 255);
	border-right: 1px solid rgb(255, 255, 255);
}
```
Give first Separator appropriate left and top position as it is absolutely positioned. `<div class="separator taskbar-item" style="top:2px;left:100px;"></div>`

Similarly position second separator, we will make it dynamic later. `<div class="separator taskbar-item" style="top:2px;left:1000px;"></div>`