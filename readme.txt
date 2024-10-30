=== Empty Posts/Pages ===
Contributors: aaroncampbell
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=paypal%40xavisys%2ecom&item_name=Empty%20Posts%20Plugin&no_shipping=0&no_note=1&tax=0&currency_code=USD&lc=US&bn=PP%2dDonationsBF&charset=UTF%2d8
Tags: empty, posts, validate, formatting
Requires at least: 1.5
Tested up to: 2.5.1
Stable tag: 1.0.0

Empty posts/pages still get wrapped in tags, which makes them invalid.  This plugin fixes that.  PHP5 Required.

== Description ==

Empty posts/pages still get wrapped in tags, which makes them invalid.  This
plugin fixes that.  It looks like 2.5 no longer places empty paragraph tags in
a post/page, however it does still add a br tag.  For WordPress 2.5+, this
plugin removes that br tag, which can be very nice when you expect to let a
template do all the formatting.  PHP5 Required.

== Installation ==

1. Verify that you have PHP5, which is required for this plugin.
1. Upload `wp-empty.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
