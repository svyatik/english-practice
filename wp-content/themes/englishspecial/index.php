<!-- ────────────────────────────────────────────────────────
─██████████████─██████████████─██████████████─██████████████─
─██░░░░░░░░░░██─██░░░░░░░░░░██─██░░░░░░░░░░██─██░░░░░░░░░░██─
─██░░██████████─██░░██████░░██─██████░░██████─██░░██████████─
─██░░██─────────██░░██──██░░██─────██░░██─────██░░██─────────
─██░░██─────────██░░██████░░██─────██░░██─────██░░██████████─
─██░░██─────────██░░░░░░░░░░██─────██░░██─────██░░░░░░░░░░██─
─██░░██─────────██░░██████░░██─────██░░██─────██████████░░██─
─██░░██─────────██░░██──██░░██─────██░░██─────────────██░░██─
─██░░██████████─██░░██──██░░██─────██░░██─────██████████░░██─
─██░░░░░░░░░░██─██░░██──██░░██─────██░░██─────██░░░░░░░░░░██─
─██████████████─██████──██████─────██████─────██████████████─


HEY! Looks like you are interested in coding?

Well, we can be friends :)
Send me an email to: <svyat.kovtun@gmail.com>
and we can do cool things together!

You can check my website as well <https://indelio.pro>

Cats with us. Always.

-->

<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="noindex, nofollow">
    <title>English Practice with Anatoljj</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500|Roboto+Slab:100,300,400" rel="stylesheet">
    <link rel="stylesheet" href="dist/main.css">

    <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
    <link rel="manifest" href="/favicons/site.webmanifest">
    <link rel="mask-icon" href="/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="msapplication-config" content="/favicons/browserconfig.xml">
    <meta name="theme-color" content="#fff">
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <div class="container">
                <nav class="nav">
                    <?php if (isset($_SESSION["admin"])) { ?>
                    <ul class="nav-list">
                        <li>
                            <a class="active" href="/">Sign Out</a>
                        </li>
                        <li>
                            <a href="/lessons.html">Go Prod</a>
                        </li>
                    </ul>
                    <?php } ?>
                    <div class="nav-logo">
                        <a href="/">
                            <img src="/img/logo.png" width="60" alt="logo">
                        </a>
                    </div>
                    <ul class="nav-list">
                        <li>
                            <a class="active" href="/">Home</a>
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
        <section class="intro">
            <div class="container">
                <h1>English online conversation</h1>
                <h3>Some random text. Quite long but with a lot of sense</h3>
            </div>

            <div class="background">
                <iframe width="700" height="420" src="https://www.youtube-nocookie.com/embed/ZwVs5TBMGxU?rel=0&amp;showinfo=0" frameborder="0"
                    allow="autoplay; encrypted-media" allowfullscreen>
                </iframe>
            </div>

            <div class="container-flex">
                <img src="img/avatar.png" alt="">
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
                        <img class="benefits-image" src="img/about-icons/vocabulary.png" width="125" height="125" alt="vocabulary">
                        <div>
                            <h3 class="benefits-title">Vocabulary</h3>
                            <p class="benefits-text">If you want to consider about something — you should really to know a good couple of English
                                words to express yourself. The more words You know the better You are. About 3 000 words
                                is already nice to start.</p>
                        </div>
                    </div>
                    <div class="col-2">
                        <img class="benefits-image" src="img/about-icons/grammar.png" width="125" height="125" alt="grammar">
                        <div>
                            <h3 class="benefits-title">Grammar</h3>
                            <p class="benefits-text">If You want to talk — you should to know the English grammar frame. It is obviously.</p>
                        </div>
                    </div>

                    <div class="col-2">
                        <img class="benefits-image" src="img/about-icons/reading.png" width="125" height="125" alt="reading">
                        <div>
                            <h3 class="benefits-title">Reading</h3>
                            <p class="benefits-text">Reading provides such features like Your pronunciation, increase Your vocabulary, speed of Your thoughts, etc... </p>
                        </div>
                    </div>
                    <div class="col-2">
                        <img class="benefits-image" src="img/about-icons/listening.png" width="125" height="125" alt="listening">
                        <div>
                            <h3 class="benefits-title">Listening</h3>
                            <p class="benefits-text">You should to understand all that strange english words by hearing</p>
                        </div>
                    </div>

                    <div class="col-2">
                        <img class="benefits-image" src="img/about-icons/writing.png" width="125" height="125" alt="writing">
                        <div>
                            <h3 class="benefits-title">Writing</h3>
                            <p class="benefits-text">Who knows that writing is also useful thing</p>
                        </div>
                    </div>
                    <div class="col-2">
                        <img class="benefits-image" src="img/about-icons/speaking.png" width="125" height="125" alt="speaking">
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
                    <div class="col-3">
                        <img src="http://via.placeholder.com/313x230" alt="grammar">
                        <div class="post-inner">
                            <h4>Lorem Ipsum</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tristique tellus mauris, ac sagittis erat tincidunt ac. Duis pellentesque, massa at pulvinar varius, nunc erat tincidunt elit</p>
                            <div class="button-container">
                                <a class="btn-default" href="/post.html">Read full</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <img src="http://via.placeholder.com/313x230" alt="grammar">
                        <div class="post-inner">
                            <h4>Lorem Ipsum</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tristique tellus mauris, ac sagittis erat tincidunt ac. Duis pellentesque, massa at pulvinar varius, nunc erat tincidunt elit</p>
                            <div class="button-container">
                                <a class="btn-default" href="/post.html">Read full</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <img src="http://via.placeholder.com/313x230" alt="grammar">
                        <div class="post-inner">
                            <h4>Lorem Ipsum</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tristique tellus mauris, ac sagittis erat tincidunt ac. Duis pellentesque, massa at pulvinar varius, nunc erat tincidunt elit</p>
                            <div class="button-container">
                                <a class="btn-default" href="/post.html">Read full</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-3">
                        <img src="http://via.placeholder.com/313x230" alt="grammar">
                        <div class="post-inner">
                            <h4>Lorem Ipsum</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tristique tellus mauris, ac sagittis erat tincidunt ac. Duis pellentesque, massa at pulvinar varius, nunc erat tincidunt elit</p>
                            <div class="button-container">
                                <a class="btn-default" href="/post.html">Read full</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <img src="http://via.placeholder.com/313x230" alt="grammar">
                        <div class="post-inner">
                            <h4>Lorem Ipsum</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tristique tellus mauris, ac sagittis erat tincidunt ac. Duis pellentesque, massa at pulvinar varius, nunc erat tincidunt elit</p>
                            <div class="button-container">
                                <a class="btn-default" href="/post.html">Read full</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <img src="http://via.placeholder.com/313x230" alt="grammar">
                        <div class="post-inner">
                            <h4>Lorem Ipsum</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tristique tellus mauris, ac sagittis erat tincidunt ac. Duis pellentesque, massa at pulvinar varius, nunc erat tincidunt elit</p>
                            <div class="button-container">
                                <a class="btn-default" href="/post.html">Read full</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bottom">
            <div class="container center">
                <h2>Happy learning</h2>
                <h3>A new language means another vision of life</h3>

                <img src="/img/find_tutor.png" alt="">
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