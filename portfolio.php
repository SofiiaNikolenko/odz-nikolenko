<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@700&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/modern-normalize@1.1.0/modern-normalize.min.css">
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body>
    <header class="header">
        <div class="container container-header">
            <a href="./index.php" class="logo"><span class="logo-web">web</span><span class="logo-studio">studio</span></a>
            <button type="button" class="mobile-menu-burger js-open-menu">
                <svg class="mobile-menu-burger-icon" width="32" height="22">
                    <use href="./images/icons.svg#icon-menu-burger"></use>
                </svg>
            </button>
            <nav class="header-nav">
                <ul class="nav-list">
                    <li class="nav-item"><a href="./index.php" class="nav-page">Studio</a></li>
                    <li class="nav-item"><a href="./portfolio.php" class="nav-page current-page">Portfolio</a></li>
                    <?php
                    if (!isset($_SESSION['user'])) {
                        echo '<li class="nav-item"><a href="./authorization.php" class="nav-page">Log in / Authorization</a></li>';
                    } else {
                        if ($_SESSION['user'] == "cat@gmail.com" || $_SESSION['user'] == "sonya") {
                            echo '<li class="nav-item"><a href="./admin/admin.php" class="nav-page">Admin panel</a></li>';
                        }
                        echo '<li class="nav-item"><a href="./catalog.php" class="nav-page">Catalog</a></li>';
                        echo '<li class="nav-item"><a href="./vendor/logout.php" class="nav-page">Exit</a></li>';
                    };
                    ?>
                </ul>
            </nav>
        </div>

        <div class="mobile-menu js-menu-container">
            <div class="container container-mobile-menu">
                <button type="button" class="mobile-menu-close-button js-close-menu">
                    <svg class="mobile-menu-close-svg" width="8" height="8">
                        <use href="./images/icons.svg#close-modal"></use>
                    </svg>
                </button>

                <div class="mobile-menu-top">
                    <ul class="mobile-menu-list">
                        <li class="mobile-menu-item"><a href="./index.php" class="mobile-menu-page">Studio</a></li>
                        <li class="mobile-menu-item"><a href="./portfolio.php" class="mobile-menu-page current-page">Portfolio</a></li>
                        <?php
                        if (!isset($_SESSION['user'])) {
                            echo '<li class="mobile-menu-item"><a href="./authorization.php" class="mobile-menu-page">Log in / Authorization</a></li>';
                        } else {
                            if ($_SESSION['user'] == "cat@gmail.com" || $_SESSION['user'] == "sonya") {
                                echo '<li class="mobile-menu-item"><a href="./admin/admin.php" class="mobile-menu-page">Admin panel</a></li>';
                            }
                            echo '<li class="mobile-menu-item"><a href="./catalog.php" class="mobile-menu-page">Catalog</a></li>';
                            echo '<li class="mobile-menu-item"><a href="./vendor/logout.php" class="mobile-menu-page">Exit</a></li>';
                        };
                        ?>
                    </ul>
                </div>

                <div class="mobile-menu-bottom">
                    <ul class="mobile-menu-contact-list">
                        <li class="mobile-menu-contact-item-tel"><a href="tel:+110001111111" class="mobile-menu-contact-tel">+11 (000)
                                111-11-11</a></li>
                        <li class="mobile-menu-contact-item-mail"><a href="mailto:info@devstudio.com" class="mobile-menu-contact-mail">info@devstudio.com</a></li>
                    </ul>

                    <ul class="mobile-menu-social-list">
                        <li class="mobile-menu-social-list-item">
                            <a href="#" class="mobile-menu-social-list-item-link">
                                <svg class="mobile-menu-social-list-item-icon" width="24" height="24">
                                    <use href="./images/icons.svg#icon-instagram-2"></use>
                                </svg>
                            </a>
                        </li>

                        <li class="mobile-menu-social-list-item">
                            <a href="#" class="mobile-menu-social-list-item-link">
                                <svg class="mobile-menu-social-list-item-icon" width="24" height="24">
                                    <use href="./images/icons.svg#icon-twitter-1"></use>
                                </svg>
                            </a>
                        </li>

                        <li class="mobile-menu-social-list-item">
                            <a href="#" class="mobile-menu-social-list-item-link">
                                <svg class="mobile-menu-social-list-item-icon" width="24" height="24">
                                    <use href="./images/icons.svg#icon-facebook-1"></use>
                                </svg>
                            </a>
                        </li>

                        <li class="mobile-menu-social-list-item">
                            <a href="#" class="mobile-menu-social-list-item-link">
                                <svg class="mobile-menu-social-list-item-icon" width="24" height="24">
                                    <use href="./images/icons.svg#icon-linkedin-1"></use>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <main>
        <section class="portfolio-section">
            <div class="container portfolio-container">
                <h1 class="visually-hidden">Portfolio items</h1>
                <!-- <ul class="filter-button-list">
                    <li><button type="button" class="filter-button-list-item">All</button></li>
                    <li><button type="button" class="filter-button-list-item">Web Site</button></li>
                    <li><button type="button" class="filter-button-list-item">App</button></li>
                    <li><button type="button" class="filter-button-list-item">Design</button></li>
                    <li><button type="button" class="filter-button-list-item">Marketing</button></li>
                </ul> -->

                <ul class="portfolio-list">
                    <li class="portfolio-item">
                        <a href="#" class="portfolio-item-page">
                            <div class="portfolio-item-img-wrapper">
                                <img src="./images/bankingapp.jpg" alt="Banking App" width="360" class="portfolio-item-photo">
                                <p class="portfolio-item-overlay">14 Stylish and User-Friendly App Design Concepts · Task Manager App · Calorie Tracker App · Exotic Fruit Ecommerce App ·Cloud Storage App</p>
                            </div>
                            <div class="portfolio-item-text">
                                <h3 class="portfolio-item-title">Banking App Interface Concept</h3>
                                <p class="portfolio-item-filter">App</p>
                            </div>
                        </a>
                    </li>

                    <li class="portfolio-item">
                        <a href="#" class="portfolio-item-page">
                            <div class="portfolio-item-img-wrapper">
                                <img src="./images/cashless.jpg" alt="Cashless Payment" width="360" class="portfolio-item-photo">
                                <p class="portfolio-item-overlay">14 Stylish and User-Friendly App Design Concepts · Task Manager App · Calorie Tracker App · Exotic Fruit Ecommerce App ·Cloud Storage App</p>
                            </div>
                            <div class="portfolio-item-text">
                                <h3 class="portfolio-item-title">Cashless Payment</h3>
                                <p class="portfolio-item-filter">Marketing</p>
                            </div>
                        </a>
                    </li>

                    <li class="portfolio-item">
                        <a href="#" class="portfolio-item-page">
                            <div class="portfolio-item-img-wrapper">
                                <img src="./images/meditaionapp.jpg" alt="Meditaion App" width="360" class="portfolio-item-photo">
                                <p class="portfolio-item-overlay">14 Stylish and User-Friendly App Design Concepts · Task Manager App · Calorie Tracker App · Exotic Fruit Ecommerce App ·Cloud Storage App</p>
                            </div>
                            <div class="portfolio-item-text">
                                <h3 class="portfolio-item-title">Meditaion App</h3>
                                <p class="portfolio-item-filter">App</p>
                            </div>
                        </a>
                    </li>

                    <li class="portfolio-item">
                        <a href="#" class="portfolio-item-page">
                            <div class="portfolio-item-img-wrapper">
                                <img src="./images/taxi.jpg" alt="Taxi Service" width="360" class="portfolio-item-photo">
                                <p class="portfolio-item-overlay">14 Stylish and User-Friendly App Design Concepts · Task Manager App · Calorie Tracker App · Exotic Fruit Ecommerce App ·Cloud Storage App</p>
                            </div>
                            <div class="portfolio-item-text">
                                <h3 class="portfolio-item-title">Taxi Service</h3>
                                <p class="portfolio-item-filter">Marketing</p>
                            </div>
                        </a>
                    </li>

                    <li class="portfolio-item">
                        <a href="#" class="portfolio-item-page">
                            <div class="portfolio-item-img-wrapper">
                                <img src="./images/screen.jpg" alt="Screen Illustrations" width="360" class="portfolio-item-photo">
                                <p class="portfolio-item-overlay">14 Stylish and User-Friendly App Design Concepts · Task Manager App · Calorie Tracker App · Exotic Fruit Ecommerce App ·Cloud Storage App</p>
                            </div>
                            <div class="portfolio-item-text">
                                <h3 class="portfolio-item-title">Screen Illustrations</h3>
                                <p class="portfolio-item-filter">Design</p>
                            </div>
                        </a>
                    </li>

                    <li class="portfolio-item">
                        <a href="#" class="portfolio-item-page">
                            <div class="portfolio-item-img-wrapper">
                                <img src="./images/online.jpg" alt="Online Courses" width="360" class="portfolio-item-photo">
                                <p class="portfolio-item-overlay">14 Stylish and User-Friendly App Design Concepts · Task Manager App · Calorie Tracker App · Exotic Fruit Ecommerce App ·Cloud Storage App</p>
                            </div>
                            <div class="portfolio-item-text">
                                <h3 class="portfolio-item-title">Online Courses</h3>
                                <p class="portfolio-item-filter">Marketing</p>
                            </div>
                        </a>
                    </li>

                    <li class="portfolio-item">
                        <a href="#" class="portfolio-item-page">
                            <div class="portfolio-item-img-wrapper">
                                <img src="./images/instagram.jpg" alt="Instagram Stories Concept" width="360" class="portfolio-item-photo">
                                <p class="portfolio-item-overlay">14 Stylish and User-Friendly App Design Concepts · Task Manager App · Calorie Tracker App · Exotic Fruit Ecommerce App ·Cloud Storage App</p>
                            </div>
                            <div class="portfolio-item-text">
                                <h3 class="portfolio-item-title">Instagram Stories Concept</h3>
                                <p class="portfolio-item-filter">Design</p>
                            </div>
                        </a>
                    </li>

                    <li class="portfolio-item">
                        <a href="#" class="portfolio-item-page">
                            <div class="portfolio-item-img-wrapper">
                                <img src="./images/organicfood.jpg" alt="Organic Food" width="360" class="portfolio-item-photo">
                                <p class="portfolio-item-overlay">14 Stylish and User-Friendly App Design Concepts · Task Manager App · Calorie Tracker App · Exotic Fruit Ecommerce App ·Cloud Storage App</p>
                            </div>
                            <div class="portfolio-item-text">
                                <h3 class="portfolio-item-title">Organic Food</h3>
                                <p class="portfolio-item-filter">Web Site</p>
                            </div>
                        </a>
                    </li>

                    <li class="portfolio-item">
                        <a href="#" class="portfolio-item-page">
                            <div class="portfolio-item-img-wrapper">
                                <img src="./images/freshcoffee.jpg" alt="Fresh Coffee" width="360" class="portfolio-item-photo">
                                <p class="portfolio-item-overlay">14 Stylish and User-Friendly App Design Concepts · Task Manager App · Calorie Tracker App · Exotic Fruit Ecommerce App ·Cloud Storage App</p>
                            </div>
                            <div class="portfolio-item-text">
                                <h3 class="portfolio-item-title">Fresh Coffee</h3>
                                <p class="portfolio-item-filter">Web Site</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container footer-container">
            <div class="footer-container-information">
                <a href="./index.php" class="logo">
                    <span class="logo-web">web</span>
                    <span class="logo-studio-footer">studio</span>
                </a>
                <p class="footer-text">Increase the flow of customers and sales for your business with digital marketing &
                    growth solutions.</p>
            </div>

            <div class="footer-container-social">
                <h1 class="footer-text-social">Social media</h1>
                <ul class="footer-social-list">
                    <li class="footer-social-list-item">
                        <a href="#" class="footer-social-list-item-link">
                            <svg class="footer-social-list-item-icon" width="24" height="24">
                                <use href="./images/icons.svg#icon-instagram-2"></use>
                            </svg>
                        </a>
                    </li>

                    <li class="footer-social-list-item">
                        <a href="#" class="footer-social-list-item-link">
                            <svg class="footer-social-list-item-icon" width="24" height="24">
                                <use href="./images/icons.svg#icon-twitter-1"></use>
                            </svg>
                        </a>
                    </li>

                    <li class="footer-social-list-item">
                        <a href="#" class="footer-social-list-item-link">
                            <svg class="footer-social-list-item-icon" width="24" height="24">
                                <use href="./images/icons.svg#icon-facebook-1"></use>
                            </svg>
                        </a>
                    </li>

                    <li class="footer-social-list-item">
                        <a href="#" class="footer-social-list-item-link">
                            <svg class="footer-social-list-item-icon" width="24" height="24">
                                <use href="./images/icons.svg#icon-linkedin-1"></use>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>

            <form class="footer-form">
                <p class="footer-form-text">Subscribe</p>
                <span class="footer-form-wrapper">
                    <input type="email" name="subscribe_email" class="footer-form-email" placeholder="E-mail">
                    <span class="footer-form-button-wrapper">
                        <button type="submit" class="footer-form-button">Subscribe</button>
                        <svg class="footer-form-button-icon" width="24" height="24">
                            <use href="./images/icons.svg#icon-footer-subscribe-button"></use>
                        </svg>
                    </span>
                </span>
            </form>
        </div>
    </footer>

    <script src="./js/mobile-menu.js"></script>
    <script src="./js/modal.js"></script>
</body>

</html>