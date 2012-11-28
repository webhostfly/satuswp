# [Satus Framework for WordPress](http://satusframework.com/) 

Satus Framework for WordPress is a minimalist, [LESS](http://lesscss.org/) powered, mobile first responsive theme for developers based off of [Satus Framework](http://satusframework.com/) and inspired from [Roots Theme](https://github.com/retlehs/roots).

Satus Framework is based off of the [HTML5 Boilerplate](https://github.com/h5bp/html5-boilerplate).

I've opted to keep this theme minimal and as close to WordPress' default functionality as I could. As a result it uses WordPress' jQuery and it's code output isn't nice and clean but of course all of that can be modified by you, the mighty developer. If you desire to clean things up be sure to read [How to Hide The Fact That You’re Using WordPress](http://benword.com/how-to-hide-that-youre-using-wordpress/).

## Overview

### WordPress
 
* [Theme wrapper](http://scribu.net/wordpress/theme-wrappers.html).
* Custom author page that supports bio, gravatar, social networking links. Google profile link uses `[rel="me"]` ([Authorship markup video](http://youtu.be/FgFb6Y-UJUI)).
* archive.php, category.php and tag.php support description.
* Custom search results page.
* Editor CSS file reflects site styles.
* Feed links removed and one feed link placed `templates/head`.
* HTML output cleanup on gallery and images with captions. Gallery uses `ul` and images with captions use `figure` and `figcaption`.
* Custom template tags and shortcodes.
* Supports child themes.
* Nav menu supports description and contains classes and data attributes for Twitter Bootstrap's dropdowns if needed.
* [Posts pagination]((http://wp-snippets.com/pagination-without-plugin/)) from [WP-Snippets](http://wp-snippets.com/).
* Included page template with sample typography and form elements for quick styling.

### HTML and CSS

* Uses [RDFAa Lite 1.1](http://www.w3.org/TR/rdfa-lite/) and [schema.org](http://schema.org/).
* Supports HTML4 and HTML5 document outlines for accessibility. Following are some great links on this subject: [HTML5 document outline revisited](http://www.456bereastreet.com/archive/201104/html5_document_outline_revisited/) and [Make sure your HTML5 document outline is backwards compatible](http://www.456bereastreet.com/archive/201205/make_sure_your_html5_document_outline_is_backwards_compatible/).
* Development [Modernizr](http://modernizr.com/) included.
* Does not support Internet Explorer 7.
* Uses box-sizing on all elements.
* Minimal styling.
* Fluid videos.
* Uses [Less](http://lesscss.org/) to compile a single style sheet for modern browsers and one for Internet Explorer 8 that has the media queries removed rather than using a js media query reader.
* Fix for [iPhone viewport scale bug](http://www.blog.highub.com/mobile-2/a-fix-for-iphone-viewport-scale-bug/).
* Favicon and touch icons.

## Configuration

See `inc/config.php` to enable and disable theme functionality, define constants that are used throughout the theme and to edit post tags, schema.org itemscope body tag, and the password form.

## Template Tags

* `satus_short_title(20)` Use to truncate the title if needed.
* `satus_the_excerpt(40,'characters')` `satus_the_excerpt(40)` Allows for multiple excerpt lengths in theme using either words or characters.
* `is_tree(id)` Checks to see if pages are children or grand-children of the entered id.

## Shortcodes

* `[youtube id="YE7VzlLtp-4" ratio="widescreen"]` `[vimeo id="6284199" ratio="widescreen"]` Use these YouTube and Vimeo shortcodes for fuid videos. If ratio="widescreen" is not used it defaults to 4:3.
* `[field name="name-of-your-custom-field"]` Add iframes, image maps, html etc, via custom fields and this shortcode.
* `[html tag="article" atr='class="cool"']` `[close-html tag="article"]` This allows for adding custom wrapper html tags with attributes.

## Child Theme Minimum Required Folders and Files

* `assets/`
* `inc/` with `config.php` and `enqueue.php` ONLY

## Reporting Bugs

__PLEASE ONLY REPORT BUGS__ as my time is limited.

## Contributing

I am not planning on making signifcant changes to this theme, however I will be glad to look at suggested improvements within it's current scope when I have time.

## Project Information

* Source: [https://github.com/kylegeminden/satuswp](https://github.com/kylegeminden/satuswp)
* Website: [http://satusframework.com](http://satusframework.com)
* Author: [Kyle Geminden](http://kylegeminden.com)

