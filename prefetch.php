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
<link rel="dns-prefetch" href="//fonts.googleapis.com" />
<link rel="dns-prefetch" href="//fonts.gstatic.com" />
<link rel="dns-prefetch" href="//0.gravatar.com/" />
<link rel="dns-prefetch" href="//2.gravatar.com/" />
<link rel="dns-prefetch" href="//1.gravatar.com/" />';
}
add_action('wp_head', 'maskice_dns_prefetch', 0);