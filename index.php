<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <title>Personal Web Afdhal</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">

</head>


<body>

    <div class="container">

        <div class="profile">

            <?php
                echo '<img src="foto profile.jpg" alt="Foto Profile">';
            ?>

        </div>

        <div class="identity">

            <?php

                echo '<h1>Afdhal Zikri Kathin</h1>';

                echo '<p>
                    102022530057 / Fakultas Rekayasa Industri / S1 Sistem Informasi
                </p>';

            ?>

        </div>


        <div class="social-media">

            <?php

                echo '
                <a href="https://x.com"
                   target="_blank">

                    <div class="icon">
                        X
                    </div>

                    <span>X</span>

                </a>
                ';


                echo '
                <a href="https://github.com/a-zikk"
                   target="_blank">

                    <div class="icon">
                        GitHub
                    </div>

                    <span>Github</span>

                </a>
                ';


                echo '
                <a href="https://www.instagram.com/dhlthin?stkn=MWgxZzFkZjVsdXA1bQ=="
                   target="_blank">

                    <div class="icon">
                        IG
                    </div>

                    <span>IG</span>

                </a>
                ';


                echo '
                <a href="https://www.linkedin.com/in/afdhal-zikri-kathin-348497387?utm_source=share_via&utm_content=profile&utm_medium=member_android"
                   target="_blank">

                    <div class="icon">
                        in
                    </div>

                    <span>LinkedIn</span>

                </a>
                ';


                echo '
                <a href="https://www.tiktok.com/@usernamekamu"
                   target="_blank">

                    <div class="icon">
                        TT
                    </div>

                    <span>TikTok</span>

                </a>
                ';

            ?>

        </div>

    </div>

</body>

</html>