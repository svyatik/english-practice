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
    $_SESSION["admin"] = false;
    $_SESSION["form_error"] = false;

    if (isset($_POST['password'])) {
        $passwd = $_POST["password"];

        if($passwd === "159357") {
            $_SESSION["admin"] = true;

            header("Location: /");
            exit();
        }
        else
            $_SESSION["form_error"] = true;
    }
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

        <style>
            .benefits {
                padding: 150px 0;
            }
            .input__password {
                padding: 20px 25px;
                border: none;
                display: block;
                margin: 25px auto;
            }

            form.error .input__password {
                border-bottom: 3px solid #c0392b;
            }

            form > .error_text {
                color: #c0392b;
            }

            form:not(.error) > .error_text {
                display: none;
            }
        </style>

        <section class="benefits">
            <div class="container center">
                <?php if($_SESSION["admin"]) { ?>
                    <h2>Hello!</h2>
                <?php } else { ?>
                    <h2>Welcome, sweety</h2>
                    <h3>Enter the password so I may recognize you</h3>

                    <form action="login.php" method="post" <?php if($_SESSION["form_error"]) { ?> class="error" <?php } ?>>
                        <p class="error_text">You have entered incorrect password, my sweety</p>
                        <input class="input__password" type="password" name="password" required>
                        <button class="btn-default">Submit</button>
                    </form>
                <?php } ?>
            </div>
        </section>
    </div>
</body>

</html>