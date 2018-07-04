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

<?php wp_head(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="noindex, nofollow">
    <title>English Practice with Anatoljj</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500|Roboto+Slab:100,300,400" rel="stylesheet">

    <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
    <link rel="manifest" href="/favicons/site.webmanifest">
    <link rel="mask-icon" href="/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="msapplication-config" content="/favicons/browserconfig.xml">
    <meta name="theme-color" content="#fff">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php do_action('wp_head'); ?>
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <div class="container">
                <nav class="nav">
                    <div class="nav-logo">
                        <a href="/">
                            <img src="<?php bloginfo('template_url'); ?>/img/logo.png" width="60" alt="logo">
                        </a>
                    </div>
                    <?php
                        wp_nav_menu(array(
                            'theme_location' => 'header',
                            'container_class' => 'nav-list'));
                    ?>
                    <!-- <ul class="nav-list">
                        <li>
                            <a class="active" href="/">Home</a>
                        </li>
                        <li>
                            <a href="/lessons.html">Lessons</a>
                        </li>
                        <li>
                            <a href="/articles.html">Articles</a>
                        </li>
                    </ul> -->
                </nav>
            </div>
        </header>