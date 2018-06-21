<?php
/*
Plugin Name: 关闭WordPress的Feed功能
Description: 启用本插件后会关闭WordPress中的RSS Feed订阅功能
Author: Hlynford
*/
 
//关闭WordPress的RSS feed功能

function disable_all_feeds() {
   wp_die( '本站不提供Feed' );
}
add_action('do_feed', 'disable_all_feeds', 1);
add_action('do_feed_rdf', 'disable_all_feeds', 1);
add_action('do_feed_rss', 'disable_all_feeds', 1);
add_action('do_feed_rss2', 'disable_all_feeds', 1);
add_action('do_feed_atom', 'disable_all_feeds', 1);

?>