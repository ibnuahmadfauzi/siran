<?php

// Header
function headerSection($extra_css, $page_title)
{
?>
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Import Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Quicksand:wght@400;700&display=swap" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        <!-- Import Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Extra Styling -->
        <link rel="stylesheet" href="<?= $extra_css; ?>">

        <title>SIRAN | <?= $page_title; ?></title>
    </head>

    <body>
    <?php
}

// Navbar
function navbar($home_url, $grade_reports_url, $classroom_url)
{
    ?>
        <nav class="navbar navbar-expand-lg bg-success navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand fw-bold" href="<?= $home_url; ?>"><i class="fas fa-graduation-cap"></i> S I R A N</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active fw-bold me-2" href="<?= $grade_reports_url; ?>"><i class="fas fa-table"></i> Grade Reports</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active fw-bold" href="<?= $classroom_url; ?>"><i class="fas fa-chalkboard-teacher"></i> Classroom</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    <?php
}

// Footer
function footerSection($extra_js)
{
    ?>
        <footer class="pt-5 pb-3">
            <p class="m-0 text-secondary text-center">Built and developed by: <a href="https://ibnuahmadfauzi.github.io/" class="text-decoration-none" target="_blank">Ibnu Ahmad Fauzi</a></p>
        </footer>
        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

        <!-- Import Font Awesome -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- extra javascript -->
        <script src="<?= $extra_js; ?>"></script>
    </body>

    </html>
<?php
}
