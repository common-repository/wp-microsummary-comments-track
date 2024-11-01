=== WP-Microsummary Comments Track ===
Contributors: Marin Gatellier
Donate link: http://www.gatellier.be/blog/wp-microsummary-comments-track/
Tags: comments, spam, count, microsummary, firefox, livebookmark
Requires at least: 2.0.2
Tested up to: 2.7
Stable tag: 0.1

This plugins allows you to track approved, pending and spam comments count from a Firefox bookmark.

== Description ==

Using Firefox 2+ Microsummaries (http://wiki.mozilla.org/Microsummaries), this plugin only displays the amount of
* Approved
* Pending
* Spam 
comments that you have on your Wordpress blog.

The bookmark will appear as `A: xx - P: xx - S: xx` where you stored it.

This makes the approval of pending comments much easier.

== Installation ==

This section describes how to install the plugin and get it working.

1. Unzip the whole wp-microsummary-comments-track folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Go to your comments admin page page (generally `/wp-admin/edit-comments.php`) with Firefox
4. Using the Bookmark menu, select the `Bookmark this page` option
5. Next to the `Name` field you'll find a dropdown, select the `A: xx - P: xx - S: xx` option and place the bookmark where you like it (`Bookmarks toolbar` will be much handy)

== Frequently Asked Questions ==

= What is the Refresh Rate =

By default Firefox updates microsummaries every 30" 

= Is it possible to change the refresh rate =

Yes, but by changing Firefox settings (http://kb.mozillazine.org/Browser.microsummary.updateInterval)

In Firefox:
1. open the configuration panel (about:config)
2. add the Integer Preference Name named: browser.microsummary.updateInterval and set the value in minutes.

= Are other browsers supported =

Not at this time. The Microsummaries are only supported by Firefox 2+ so far. You should ask your browser vendor to implement 

== Screenshots ==

http://vault.gatellier.be/wp-microsummary-comments-track/demo/

== Known Issues ==

There is an issue with the AskApache Password Protect Wordpress plugin, in order to get this plugin to work, you should edit the .htaccess to include the `wp-microsummary-comments-track/index.php` file from referral check.