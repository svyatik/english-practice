<?php get_header(); ?>

        <?php
            while (have_posts()) : the_post(); ?>
                <section class="content post-content">
                    <div class="container center post-image">
                        <?php
                            $image = get_field('post_image');
                            $size = 'full'; // (thumbnail, medium, large, full or custom size)
                            if($image) {
                                echo wp_get_attachment_image($image, $size);
                            }
                        ?>
                        <h2><?php the_title() ?></h2>
                    </div>
                    <div class="post-wrapper">
                        <div class="post-container">
                            <?php the_content() ?>
                        </div>

                         <sidebar>
                            <?php get_sidebar() ?>
                        </sidebar>
                    </div>
                </section>
            <?php endwhile;
        ?>

<?php get_footer() ?>