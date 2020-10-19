<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Wordpress Portfolio Themplate for web developers">
    <?php wp_head(); ?>
</head>
<body>
    <div class="cover-bg" id="home">
        <header id="header">
            <nav class="navbar navbar-expand-lg navbar-black fixed-top">
                <div class="container">
            <a class="navbar-brand" href="#home">
                    <img src="<?php echo THEME_IMG_PATH; ?>/whiteLogo.png" class="top-logo" alt="Logo"> </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
                    </button>
                <div class="collapse navbar-collapse"   id="navbarResponsive">
                    <ul class="navbar-nav ml-auto text-center">
                        <li class="nav-item">
                            <a class="nav-link active" href="#home">Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about-me">About Me</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#my-skills">My Skills</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact Me</a>
                        </li>
                    </ul>
                </div>
                </div>
            </nav>
        </header>
    </div>