<?php get_header(); ?>

<body class="post">
    <div class="wrapper">
        <header class="header">
            <div class="container">
                <nav class="nav">
                    <div class="nav-logo">
                        <a href="/">
                            <img src="/img/logo.png" width="60" alt="logo">
                        </a>
                    </div>
                    <ul class="nav-list">
                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li>
                            <a href="/lessons.html">Lessons</a>
                        </li>
                        <li>
                            <a href="/articles.html">Articles</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>

        <?php
            while (have_posts()) : the_post(); ?>
                <section class="content">
                    <div class="container center">
                        <img src="http://via.placeholder.com/900x500" alt="post image">
                        <h2><?php the_title() ?></h2>
                    </div>
                    <div class="color-wrapper">
                        <div class="container post-container">
                            <?php the_content() ?>
                        </div>
                    </div>
                </section>
            <?php endwhile;
        ?>

        <section class="bottom">
            <div class="container center">
                <h2>Happy learning</h2>
                <h3>A new language means another vision of life</h3>

                <img src="/img/find_tutor.png" alt="">

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