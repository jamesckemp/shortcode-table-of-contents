=== Shortcode Table of Contents ===
Contributors: jamesckemp
Donate link: https://www.paypal.me/jamesckemp/
Tags: shortcode table of contents, toc, table of contents, anchorific, anchors, anchor links, shortcode
Requires at least: 4.0
Tested up to: 4.9.1
Stable tag: trunk
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Display an automated table of contents via shortcode.

== Description ==

Simply use the `[toc content=".your-container"]` shortcode to automatically generate a table of contents for any HTML container.

The shortcode accepts a number of parameters:

* `content` *string* **required**
  A CSS selector indicating the container of your content.
* `headers` *string*
  A comma separated list of heading selectors that you want to include.
* `speed` *int*
  Speed of sliding back to top.
* `anchor-class` *string*
  Class of anchor links.
* `anchor-text` *string*
  Prepended or appended to anchor headings. Leave blank to disable anchor links.
* `top_class` *string*
  Back to top button or link class.
* `spy` *true/false*
  Enable scroll spy. This will highlight the list items as you scroll past them.
* `position` *append/prepend*
  Position of anchor text.
* `spy-offset` *int*
  Specify heading offset for spy scrolling.

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/shortcode-toc` directory, or install the plugin through the WordPress plugins screen directly.
1. Activate the plugin through the 'Plugins' screen in WordPress

== Frequently Asked Questions ==

= Can I use the shortcode multiple times on a page? =

No. Currently it'll only work once per page.

= The table of contents isn't showing up. =

Did you set the `content` parameter of the shortcode to a valid CSS selector on your page? This is a required argument.

= Can I build a table of contents for just h2 and h3 tags? =

Yup, your shortcode would look like this `[toc content=".your-container" headers="h2,h3"]`

= Is there a PHP version of the shortcode? =

You can use the `do_shortcode()` function like this:

`<?php echo do_shortcode( '[toc content=".your-container"]' ); ?>`


== Screenshots ==


== Changelog ==

**v1.0.0 (29/11/2017)**
[release] Initial release.

== Upgrade Notice ==

