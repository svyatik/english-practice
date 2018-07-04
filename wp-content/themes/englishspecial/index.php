<?php get_header(); ?>

        <section class="intro">
            <div class="container">
                <h1>English online conversation</h1>
                <h3>Some random text. Quite long but with a lot of sense</h3>
            </div>

            <div class="background">
                <iframe src="https://www.youtube-nocookie.com/embed/ZwVs5TBMGxU?rel=0&amp;showinfo=0" frameborder="0"
                    allow="autoplay; encrypted-media" allowfullscreen>
                </iframe>
            </div>

            <div class="container-flex">
                <img src="<?php bloginfo('template_url'); ?>/img/avatar.png" alt="">
                <h3 class="quote">
                    <span>— Spoken by billions, English is ...</span>
                    <span class="quote-lvl-2">Should I consider about English?...</span>
                    <span class="quote-lvl-3">— I don't think so,</span>
                    <span class="quote-lvl-4">if You need it — just let's learn it.</span>
                    <p>" Anatoljj</p>
                </h3>
            </div>
        </section>

        <section class="benefits">
            <div class="container center">
                <h2>Studying strategy</h2>
                <h3>Learning English provides few areas such as:</h3>
            </div>

            <div class="container">
                <div class="grid benefits-grid">
                    <div class="col-2">
                        <img class="benefits-image" src="<?php bloginfo('template_url'); ?>/img/about-icons/vocabulary.png" width="125" height="125" alt="vocabulary">
                        <div>
                            <h3 class="benefits-title">Vocabulary</h3>
                            <p class="benefits-text">If you want to consider about something — you should really to know a good couple of English
                                words to express yourself. The more words You know the better You are. About 3 000 words
                                is already nice to start.</p>
                        </div>
                    </div>
                    <div class="col-2">
                        <img class="benefits-image" src="<?php bloginfo('template_url'); ?>/img/about-icons/grammar.png" width="125" height="125" alt="grammar">
                        <div>
                            <h3 class="benefits-title">Grammar</h3>
                            <p class="benefits-text">If You want to talk — you should to know the English grammar frame. It is obviously.</p>
                        </div>
                    </div>

                    <div class="col-2">
                        <img class="benefits-image" src="<?php bloginfo('template_url'); ?>/img/about-icons/reading.png" width="125" height="125" alt="reading">
                        <div>
                            <h3 class="benefits-title">Reading</h3>
                            <p class="benefits-text">Reading provides such features like Your pronunciation, increase Your vocabulary, speed of Your thoughts, etc... </p>
                        </div>
                    </div>
                    <div class="col-2">
                        <img class="benefits-image" src="<?php bloginfo('template_url'); ?>/img/about-icons/listening.png" width="125" height="125" alt="listening">
                        <div>
                            <h3 class="benefits-title">Listening</h3>
                            <p class="benefits-text">You should to understand all that strange english words by hearing</p>
                        </div>
                    </div>

                    <div class="col-2">
                        <img class="benefits-image" src="<?php bloginfo('template_url'); ?>/img/about-icons/writing.png" width="125" height="125" alt="writing">
                        <div>
                            <h3 class="benefits-title">Writing</h3>
                            <p class="benefits-text">Who knows that writing is also useful thing</p>
                        </div>
                    </div>
                    <div class="col-2">
                        <img class="benefits-image" src="<?php bloginfo('template_url'); ?>/img/about-icons/speaking.png" width="125" height="125" alt="speaking">
                        <div>
                            <h3 class="benefits-title">Speaking</h3>
                            <p class="benefits-text">Tt is our main goal, to speak English cleary with a good pronunciation</p>
                        </div>
                    </div>

                    <div class="col-2"></div>
                    <div class="col-2 read-more">
                        <p>Read more about <a href="/post.html">studying strategy</a>...</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="blog">
            <div class="container center">
                <h2>Latest posts</h2>
            </div>
            <div class="container blog-container">
                <div class="grid">
                    <?php
                        // the query
                        $wpb_all_query = new WP_Query(array('post_type'=>'lessons', 'post_status'=>'publish', 'posts_per_page'=>-1));
                    ?>

                    <?php if ( $wpb_all_query->have_posts() ) : ?>
                        <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
                            <div class="col-3">
                                <?php
                                    $image = get_field('post_image');
                                    $size = 'medium'; // (thumbnail, medium, large, full or custom size)
                                    if($image) {
                                        $image_url = wp_get_attachment_image_src($image, $size); ?>
                                        <div class="post-image" style="background-image: url(<?php echo $image_url[0] ?>)"></div>
                                <?php } else { ?>
                                    <div class="post-image" style="background-image: url(<?php bloginfo('template_url'); ?>/img/no-image.svg)"></div>
                                <?php } ?>
                                <div class="post-inner">
                                    <h4><?php the_title(); ?></h4>
                                    <p><?php the_excerpt() ?></p>
                                    <div class="button-container">
                                        <a class="btn-default" href="<?php the_permalink(); ?>">Read full</a>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>

                    <?php else: ?>
                        <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
                    <?php endif; ?>
                </div>
            </div>
        </section>

<?php get_footer() ?>