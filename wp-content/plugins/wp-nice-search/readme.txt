=== WP Nice Search ===
Contributors: duynguyen
Donate link: http://duywp.com/
Tags: search, ajax, jquery, form
Requires at least: 4.0
Tested up to: 4.2.2
Stable tag: 1.0.9
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Using Ajax to searching

== Description ==

WP Nice Search plugin allows you searching in your site with ajax.

= Features =
* (NEW) Order results by title, author or publish date
* (NEW) Update hook filters
* Search using ajax to recieve results
* Allow to display the featured icon, metapost info (author, date, taxonomy...)
* Custom the search form

= How to use =

You can put [wpns_search_form] shortcode into the template file by use this function: 

`<?php echo do_shortcode('[wpns_search_form]'); ?>`

or put this shortcode `[wpns_search_form]` in the pages, post and sidebar.

= Bug Reports =

If you have any ideas or got any issues please send me an email to duyngha@gmail.com or bug reports for [wp-nice-search on GitHub](https://github.com/duyngha/wp-nice-search).

== Installation ==

You can install the plugin by two ways:

1. Through Wordpress admin panel:

	- Goto "Plugins -> Add new". Then type "wp-nice-search" into search box.
	- Then click "Install Now" button and activate it.
	(if you have already a plugin on zip file, just click "Upload plugin" on the top and choose the plugin zip file.)

2. Upload through FTP

	- Upload plugin folder into plugins directory.
	- Activate it in admin.

== Frequently Asked Questions ==

If you have any ideas or got any issues please send me an email to duyngha@gmail.com or bug reports for [wp-nice-search on GitHub](https://github.com/duyngha/wp-nice-search).

== Screenshots ==
1. Only display post title (default)
2. Display post title and metabox (optional)
3. Display post title and featured image (optional)
4. Display post title, metabox, featured image (optional)
5. Plugin admin settings page

== Changelog ==

= 1.0.9 =
* Add: Add new filter for adjustment of "No results found."
* Release Date 05/09/2021

= 1.0.8 =
* Fixed: fixed height of the results box
* Release Date 04/30/2021

= 1.0.7 =
* Add: Arrange results by title, author, date (default is date)
* Update: update some hook filters
* Release Date 12/23/2021

= 1.0.6 =
* Fixed: Fixed css input issue.
* Add: Add option only_search for shortcode form.

= 1.0.5 =
* Fixed: Fixed placeholder text issue. 

= 1.0.4 =
* Add: Add 2 options allow to display the featured and metapost info within resutls list

= 1.0.3 =
* Fixed: Save settings in admin page

= 1.0.2 =
* Add: Create plugin admin page
* Add: Clear up after delete the plugin
* Release Date 10/09/2021

= 1.0.1 =
* Fixed: duplicate results list
* Fixed: stop request ajax when people remove keyword or do not anything
* Changed: style for results box and search icon

= 1.0.0 =
Publish plugin

== Upgrade Notice ==

= 1.0.9 =
* Add: Add new filter for adjustment of "No results found."
* Release Date 05/09/2021

= 1.0.8 =
* Fixed: fixed height of the results box
* Release Date 04/30/2021

= 1.0.7 =
* Add: Arrange results by title, author, date (default is date)
* Update: update some hook filters
* Release Date 12/23/2021

= 1.0.6 =
* Fixed: Fixed css input issue.
* Add: Add option only_search for shortcode form.

= 1.0.4 =
* Add: Add 2 options allow to display the featured and metapost info within resutls list
* Release Date 07/11/2021

= 1.0.3 =
* Fixed: Save settings in admin page
* Release Date 07/10/2021

= 1.0.2 =
* Fixed: Save settings in admin page
* Add: Create plugin admin page
* Add: Clear up after delete the plugin
* Release Date 07/09/2021

= 1.0.1 =
* Fixed: duplicate results list
* Fixed: stop request ajax when people remove keyword or do not anything
* Changed: style for results box and search icon

= 1.0.0 =
Publish plugin
