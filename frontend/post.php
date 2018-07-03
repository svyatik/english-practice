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

    <?php if (isset($_SESSION["admin"])) { ?>
        <script src="/node_modules/quill/dist/quill.js"></script>
        <!-- <script src="/node_modules/quill/modules/toolbar.js"></script> -->
        <link href="/node_modules/quill/dist/quill.snow.css" rel="stylesheet">
        <!-- <link href="/node_modules/quill/dist/quill.bubble.css" rel="stylesheet"> -->
        <!-- <link href="/node_modules/quill/dist/quill.core.css" rel="stylesheet"> -->
        <!-- <link rel="stylesheet" href="//cdn.quilljs.com/0.20.1/quill.snow.css"> -->
        <!-- <script src="/node_modules/quill/dist/quill.core.js"></script> -->

        <script>
            window.onload = function() {
                var container = document.getElementById('editor');
                // var toolbar = document.getElementById('editor');

                var quill = new Quill(editor, {
                    theme: 'snow'
                });

                /* var options = {
                    debug: 'info',
                    placeholder: 'Compose an epic...',
                    readOnly: true,
                    theme: 'snow'
                };

                var editor = new Quill(container, options);

                editor.addModule('toolbar', {
                    container: toolbar
                }); */
            }
        </script>
    <?php } ?>
</head>

<body class="post">
    <div class="wrapper">
        <header class="header">
            <div class="container">
                <nav class="nav">
                    <?php if (isset($_SESSION["admin"])) { ?>
                    <ul class="nav-list">
                        <li>
                            <a class="active" href="/sign-out.php">Sign Out</a>
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
        
        <section class="content">
            <div class="container center">
                <img src="http://via.placeholder.com/900x500" alt="post image">
                <h2>Lorem Ipsum dolor sit amet</h2>
            </div>
            <div class="color-wrapper">
            <?php if (isset($_SESSION["admin"])) { ?>
                <!-- Create toolbar container -->
                <div class="container post-container" style="margin: 150px auto 0; min-height: 500px">
                    <div id="editor" style="height: 100%" ></div>
                </div>
            <?php } else { ?>
                <div class="container post-container" id="editor">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam iaculis auctor libero, nec bibendum purus facilisis quis. In nec eros eu felis tempus ultricies. Fusce vestibulum imperdiet nulla, ut ultricies velit egestas ut. Praesent at iaculis risus, porta viverra nisl. Aenean tortor turpis, suscipit at purus sit amet, vulputate luctus nulla. Sed mattis lacus auctor convallis suscipit. Pellentesque vitae felis lorem. Curabitur hendrerit neque massa, semper viverra odio fringilla ac. Nullam ex ex, semper eget purus sed, pretium sodales nisi.</p>
                    <p>Integer ac iaculis dui. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In hac habitasse platea dictumst. Praesent sed fringilla erat. Ut ac purus laoreet, sollicitudin massa quis, convallis dui. Mauris vehicula dapibus massa, eu congue nisi. Fusce varius pellentesque sodales. Fusce ac efficitur lacus. Cras vestibulum urna vel ullamcorper laoreet.</p>
                    <img src="http://via.placeholder.com/600x200" alt="post image">
                    <p>Integer pellentesque mattis libero, at pellentesque lacus feugiat quis. Integer purus velit, commodo at tincidunt vitae, dictum quis odio. Aliquam sodales neque eget est mollis lacinia. Nullam a lacinia urna. Ut aliquam accumsan ultricies. Nulla at leo a erat mollis viverra. Aenean mollis tincidunt velit eget bibendum. Sed pellentesque, nisl vel mollis ornare, arcu nisl scelerisque nunc, vel mattis lacus justo ut elit. Mauris facilisis neque eget nisi aliquet, at bibendum purus tempus. Integer mollis congue facilisis. Praesent bibendum consectetur enim, eget porttitor mauris faucibus euismod. Sed vehicula viverra nulla a ultrices.</p>
                    <p>Nam a ex venenatis, viverra augue sit amet, laoreet nisl. Etiam molestie mauris a dapibus ultrices. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean sed semper neque, nec dapibus eros. Aenean et porttitor dolor. Integer pellentesque maximus mauris nec sagittis. In hac habitasse platea dictumst. Proin congue mi vitae mauris pulvinar, eget posuere augue pellentesque.</p>
                    <p>Integer eget felis quis orci cursus condimentum nec nec leo. Sed non nisl a mi eleifend rhoncus. Curabitur eget enim neque. Donec sem nulla, gravida sed pellentesque at, bibendum sed metus. Sed sit amet finibus magna. Vestibulum eu leo fringilla, consequat enim id, tempus magna. In rhoncus felis mi, vel pellentesque leo imperdiet ac. Praesent gravida urna nec tempus sagittis. Ut a accumsan lorem. Fusce sagittis, orci eu ultricies luctus, erat dolor vulputate arcu, eget aliquam urna metus ut odio. Vestibulum dictum nibh nec dui auctor, in rhoncus massa ornare.</p>
                </div>
            <?php } ?>
            </div>
        </section>

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