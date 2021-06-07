<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Homepage</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
                width: 1180px;
                margin: 0 auto;
            }

            header img {
                width: 80px;
            }

            main nav ul {
                list-style: none;
                display: flex;
            }

            nav ul li {
                margin-right: 20px;
            }

            section {
                margin-top: 100px;
            }
        </style>
    </head>
    <body>
        <header>
            <h1>PHP Bool</h1>
            <a href="/"><img src="https://www.laramind.com/blog/wp-content/uploads/2017/06/LaravelLogo.png" alt="Logo"></a>
        </header>

        <main>
            <nav>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </nav>

            <section>
                <h2>Homepage</h2>
                <img src="https://marvel-b1-cdn.bc0a.com/f00000000152152/www.zend.com/sites/zend/files/image/2019-09/logo-laravel.jpg" alt="homepage">
            </section>
        </main>
    </body>
</html>
