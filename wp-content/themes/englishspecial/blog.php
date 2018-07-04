<?php
    /* Template Name: Blog */

    get_header();
?>

        <section class="content blog">
            <div class="container center blog-header">
                <h2><?php the_field('page_title'); ?></h2>
                <h3><?php the_field('page_subtitle'); ?></h3>
                <?php
                    $image = get_field('page_image');
                    $size = 'full';
                    if($image) {
                        echo wp_get_attachment_image($image, $size);
                    } else { ?>
                        <img class="header-image" src="<?php bloginfo('template_url'); ?>/img/lessons.jpg" width="800" alt="lessons">
                    <?php }
                ?>
            </div>

            <?php
                $post_type = get_field('custom_post_type');

                if(! $post_type)
                    return false;

                // Get all the taxonomies for this post type
                $taxonomies = get_object_taxonomies(array('post_type' => $post_type));

                foreach($taxonomies as $taxonomy) :

                    // Gets every "category" (term) in this taxonomy to get the respective posts
                    $terms = get_terms($taxonomy); ?>

                    <div class="container center">
                        <ul class="categories">
                            <?php foreach($terms as $term): ?>
                                <li>
                                    <a href="#<?php echo $term->slug; ?>"><?php echo $term->name; ?></a>
                                </li>
                            <?php endforeach; ?>
                            </ul>
                    </div>

                    <div class="container categories-container">
                        <?php foreach($terms as $term):
                            $args = array(
                                    'post_type' => $post_type,
                                    'posts_per_page' => -1, //show all posts
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => $taxonomy,
                                            'field' => 'slug',
                                            'terms' => $term->slug,
                                        )
                                    )
                            );

                            $posts = new WP_Query($args);

                            if($posts->have_posts()): ?>
                                <h3 id="<?php echo $term->slug; ?>"><?php echo $term->name; ?></h3>

                                <div class="grid grid-blog">
                                    <?php while( $posts->have_posts() ) : $posts->the_post(); ?>
                                        <div class="col-5">
                                            <?php
                                                $image = get_field('post_image');
                                                $size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
                                                if($image) {
                                                    $image_url = wp_get_attachment_image_src($image, $size); ?>
                                                    <div class="post-image post-image_small" style="background-image: url(<?php echo $image_url[0] ?>)"></div>
                                            <?php } else { ?>
                                                <div class="post-image post-image_small" style="background-image: url(<?php bloginfo('template_url'); ?>/img/no-image.svg)"></div>
                                            <?php } ?>
                                            <div class="post-inner">
                                                <a href="<?php the_permalink(); ?>"><h5><?php echo get_the_title(); ?></h5></a>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                <?php endforeach;
            ?>
        </section>

        <section class="bottom">
            <div class="container center">
                <h2>Happy learning</h2>
                <h3>A new language means another vision of life</h3>

                <img src="<?php bloginfo('template_url'); ?>/img/find_tutor.png" alt="">
                <!-- <iframe allowtransparency="true" scrolling="no" frameborder="0" width="510" height="255" src="//rf.revolvermaps.com/5/f.php?i=5yf4ajpz6u9&amp;m=0&amp;h=255&amp;c=ff0000&amp;r=0" style="background: transparent;"></iframe> -->

                <div class="container-flex">
                    <h3 class="quote center">
                        <span>— Are you afraid of making mistakes?</span>
                        <span>I never make the same mistake twice.</span>
                        <span>I make it five or six times just to be sure</span>
                        <p>" NeNe Leakes</p>
                    </h3>
                </div>
            </div>
        </section>

        <section class="footer">
            <div class="container">
                <p>Copyright © 2018</p>
            </div>
        </section>
    </div>
</body>

</html>