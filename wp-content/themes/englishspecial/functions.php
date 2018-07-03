<?php
    function initStyles() {
        wp_enqueue_style('style', get_stylesheet_uri());
    }

    add_action('wp_head', 'initStyles');
?>
