<?php
    function initStyles() {
        wp_enqueue_style('style', get_stylesheet_uri());
    }

    add_action('wp_head', 'initStyles');

    function my_custom_sidebar() {
        register_sidebar(
            array (
                'name' => __( 'Custom', 'englishspecial' ),
                'id' => 'custom-side-bar',
                'description' => __( 'Custom Sidebar', 'englishspecial' ),
                'before_widget' => '<div class="widget-content">',
                'after_widget' => "</div>",
                'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>',
            )
        );
    }
    add_action( 'widgets_init', 'my_custom_sidebar' );

    function admin_bar(){

        if(is_user_logged_in()){
          add_filter( 'show_admin_bar', '__return_true' , 1000 );
        }
      }
      add_action('init', 'admin_bar' );

      

      function hide_editor() {
      
              // Get the Post ID.
              if ( isset ( $_GET['post'] ) )
              $post_id = $_GET['post'];
              else if ( isset ( $_POST['post_ID'] ) )
              $post_id = $_POST['post_ID'];
      
          if( !isset ( $post_id ) || empty ( $post_id ) )
              return;
      
          // Get the name of the Page Template file.
          $template_file = get_post_meta($post_id, '_wp_page_template', true);
      
          if($template_file == 'blog.php'){ // edit the template name
              remove_post_type_support('page', 'editor');
          }
      
      }

      add_action( 'admin_init', 'hide_editor' );


    function wpb_custom_new_menu() {
        register_nav_menu('header', __('Header'));
    }

    add_action('init', 'wpb_custom_new_menu');

    function create_post_type() {
        register_post_type('lessons',
          array(
            'labels' => array(
              'name' => __('Lessons'),
              'singular_name' => __('Lesson'),
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'lessons'),
            'menu_position' => -1
          )
        );

        register_post_type('articles',
          array(
            'labels' => array(
              'name' => __('Articles'),
              'singular_name' => __('Article')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'articles'),
          )
        );
    }

    add_action('init', 'create_post_type');


    function lessons_categories() {
        register_taxonomy(
            'lessons-categories',
            'lessons',
            array(
                'label' => __('Lesson Categories'),
                'hierarchical' => true,
            )
        );

        register_taxonomy(
            'articles-categories',
            'articles',
            array(
                'label' => __('Article Categories'),
                'hierarchical' => true,
            )
        );
    }

    add_action('init', 'lessons_categories');


    function post_remove() {
        remove_menu_page('edit.php');
        remove_menu_page('edit-comments.php');
        // remove_menu_page('themes.php');
        remove_menu_page('tools.php');
    }

    add_action('admin_menu', 'post_remove');


    function wpse_custom_menu_order( $menu_ord ) {
        if ( !$menu_ord ) return true;
    
        return array(
            'index.php', // Dashboard
            'separator1', // First separator
            'edit.php?post_type=lessons',
            'edit.php?post_type=articles',
            'upload.php', // Media

            'separator2', // Second separator
            'edit.php?post_type=page', // Pages
            'users.php', // Users
            //'tools.php', // Tools
            'plugins.php', // Plugins
            'options-general.php', // Settings
            'separator-last', // Last separator
        );
    }
    add_filter( 'custom_menu_order', 'wpse_custom_menu_order', 10, 1 );
    add_filter( 'menu_order', 'wpse_custom_menu_order', 10, 1 );


    function remove_dashboard_widgets() {
        global $wp_meta_boxes;

        // unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
        // unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
        unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
        unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
        // unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_drafts']);
        unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
        unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);    
        // unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']);    
        // unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
    }

    add_action('wp_dashboard_setup', 'remove_dashboard_widgets' );
?>
