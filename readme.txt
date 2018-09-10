=== Im Logo ===

A light plugin to allow logo carousels to be used on Imaginaire client websites. 

== Description ==

Requires owl carousel 2 to be installed in theme files as this will just provide the code to display via a shortcode and for the backend functionality.

== Installation ==

This section describes how to install the plugin and get it working.

e.g.

1. Upload plugin folder to the `/wp-content/plugins/` directory or upload zip via dashboard
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Add logos via WP Dashboard and assign to a carousel using Logo Carousels box on the right
4. Add jquery from below to main.js in theme files
5. Use shortcode [logos] to display all logos and [logos type=carousel_name] to display specific carousel
6. Style with css -- use .logo-carousel as wrapper and then normal owl-carousel styling for everything else

jQuery script:

$('.logo-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
});



== Changelog ==

= 1.0 =
* uses owl carousel to display. To keep plugin light, haven't included owl-carousel in plugin files -- so needs to have owl carousel within theme.