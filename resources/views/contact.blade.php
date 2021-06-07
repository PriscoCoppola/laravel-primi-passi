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
                <h2>Contact</h2>
                <img src="data:image/jpeg;base64,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OkPZHJ7Qq02NskkYxkc2pPOc0Bos0nXW/DoXSNoIRujb4K2pgYGEtaNNdBqgNUFXXUMdoKcEh3KN7Y3nyBWVmPUp/wA5o+kHN+0AgJS6htq8IdUQgR25RjszL6Ag6Obfhca9oC3YsSgd6M0Tux7b+a2Wuvu17FnSqSpzU46owq041IOEtGRuzeECmhyGxe45pHDcTwA6gPaeKlCVbdUJSpUlUk5y1YpwjTioR0RdmWhipzGGEfDkBI+azU+vKtl5K1cF/TVL5d7YxkYeBPwj46dywMzpGCwA6lciIAiIgCIiA5nEcUZC8seyUn5jbjzWp+cbOFPUn6rPxLrXxNOpaD2hBCz4rfAIDkvzgPClqO/IPan5ck4Uk3eWrruTb0DwCrlHQEBx/wCWKjhRPPa8D7pQV9c70aRrfpPJ+6F2NgqoDjxFij+EMXWGkn+YkepbmGbPyCQS1MzpXDcDbKOwDQLpEQBERAEREAREQGhisUhZeINLhuDr29RXPiHFDwgb9V3tcuvRAcl7wxQ/5sbexjfaq/knEj/qQOxkX4V1iIDk/wAiYgd9We5sY8mqv5t1R9Ksl+q4t8rLq0QHLDY1h/azSyfSc53mVIUGzdLEQWsBPWplEAREQBERAEREBgfSRnexp7lgfhNOd8TfBbyICHl2apHb4wtN+x1Nvbdp+boukRAcwdkyPQqZ29j3jyKt/NifhWT/APN/9V1KIDlfzUe79pVTvHEF7yD3XU/h1CyFgjYLALbRAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQH/2Q==" alt="conact">
            </section>
        </main>
    </body>
</html>
