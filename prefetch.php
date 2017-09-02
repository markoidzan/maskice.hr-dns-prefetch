<?php
/*
Plugin Name: maskice.hr DNS Prefetch
Plugin URI: https://github.com/markoidzan/
Description: DNS Prefetch
Version: 1.0
Author: Marko Idžan
Author URI: https://idzan.com.hr
*/
//* Adding DNS Prefetching
function maskice_dns_prefetch() {
echo '<meta http-equiv="x-dns-prefetch-control" content="on">
<link rel="dns-prefetch" href="//secure.gravatar.com" />
    <link rel="dns-prefetch" href="//www.google-analytics.com" />
    <link rel="dns-prefetch" href="//apis.google.com" />
    <link rel="dns-prefetch" href="//ad.doubleclick.net" />
    <link rel="dns-prefetch" href="//pagead2.googlesyndication.com" />
    <link rel="dns-prefetch" href="//fonts.gstatic.com" />
    <link rel="dns-prefetch" href="//fonts.googleapis.com" />
    <link rel="dns-prefetch" href="//www.facebook.com" />
    <link rel="dns-prefetch" href="//scontent.xx.fbcdn.net" />
    <link rel="dns-prefetch" href="//gstatic.com" />
    <link rel="dns-prefetch" href="//cdnjs.cloudflare.com" />
    <link rel="dns-prefetch" href="//platform.twitter.com" />
    <link rel="dns-prefetch" href="//jetpack.wordpress.com" />
    <link rel="dns-prefetch" href="//s0.wp.com" />
    <link rel="dns-prefetch" href="//s1.wp.com" />
    <link rel="dns-prefetch" href="//s2.wp.com" />
    <link rel="dns-prefetch" href="//public-api.wordpress.com" />
    <link rel="dns-prefetch" href="//0.gravatar.com" />
    <link rel="dns-prefetch" href="//1.gravatar.com" />
    <link rel="dns-prefetch" href="//2.gravatar.com" />';';
}
add_action('wp_head', 'maskice_dns_prefetch', 0);