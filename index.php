<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebStudio</title>
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
                    <li class="nav-item"><a href="./index.php" class="nav-page current-page">Studio</a></li>
                    <li class="nav-item"><a href="./portfolio.php" class="nav-page">Portfolio</a></li>
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
                        <li class="mobile-menu-item"><a href="./index.php" class="mobile-menu-page current-page">Studio</a></li>
                        <li class="mobile-menu-item"><a href="./portfolio.php" class="mobile-menu-page">Portfolio</a></li>
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
        <section class="main-section">
            <div class="container main-container">
                <h1 class="main-title">Effective Solutions for Your Business</h1>
                <button type="button" class="order-button" data-modal-open>Order Service</button>
            </div>
        </section>

        <section class="advantage-section">
            <h2 class="visually-hidden">Our advantages</h2>
            <div class="container advantage-container">
                <ul class="advantage-list">
                    <li class="advantage-list-item">
                        <div class="advantage-list-item-background-icon">
                            <svg class="advantage-list-item-icon" width="64" height="64">
                                <use href="./images/icons.svg#icon-antenna-1"></use>
                            </svg>
                        </div>
                        <h3 class="advantage-list-item-title">Strategy</h3>
                        <p class="advantage-list-item-text">
                            Our goal is to identify the business problem to walk away with the perfect and creative solution.
                        </p>
                    </li>

                    <li class="advantage-list-item">
                        <div class="advantage-list-item-background-icon">
                            <svg class="advantage-list-item-icon" width="64" height="64">
                                <use href="./images/icons.svg#icon-clock-1"></use>
                            </svg>
                        </div>
                        <h3 class="advantage-list-item-title">Punctuality</h3>
                        <p class="advantage-list-item-text">
                            Bring the key message to the brand's audience for the best price within the shortest possible time.
                        </p>
                    </li>

                    <li class="advantage-list-item">
                        <div class="advantage-list-item-background-icon">
                            <svg class="advantage-list-item-icon" width="64" height="64">
                                <use href="./images/icons.svg#icon-diagram-1"></use>
                            </svg>
                        </div>
                        <h3 class="advantage-list-item-title">Diligence</h3>
                        <p class="advantage-list-item-text">
                            Research and confirm brands that present the strongest digital growth opportunities and minimize risk.
                        </p>
                    </li>

                    <li class="advantage-list-item">
                        <div class="advantage-list-item-background-icon">
                            <svg class="advantage-list-item-icon" width="64" height="64">
                                <use href="./images/icons.svg#icon-astronaut-1"></use>
                            </svg>
                        </div>
                        <h3 class="advantage-list-item-title">Technologies</h3>
                        <p class="advantage-list-item-text">
                            Design practice focused on digital experiences. We bring forth a deep passion for problem-solving.
                        </p>
                    </li>
                </ul>
            </div>
        </section>

        <section class="product-seclion">
            <div class="container products-container">
                <h2 class="products-title">What are we doing</h2>
                <ul class="product-list">
                    <li class="product-list-item"><img src="./images/img1.jpg" alt="img1" width="360" class="product-list-photo"></li>
                    <li class="product-list-item"><img src="./images/img2.jpg" alt="img2" width="360" class="product-list-photo"></li>
                    <li class="product-list-item"><img src="./images/img3.jpg" alt="img3" width="360" class="product-list-photo"></li>
                </ul>
            </div>
        </section>

        <section class="team-section">
            <div class="container team-comtainer">
                <h2 class="team-title">Our Team</h2>
                <ul class="team-list">
                    <li class="team-list-item">
                        <img srcset="./images/markguerrero.webp 1x, ./images/markguerrero-@2.webp 2x," src="./images/markguerrero.webp" alt="Mark Guerrero" width="264" class="employee-photo">
                        <div class="employee-information">
                            <h3 class="employee-fullname">Mark Guerrero</h3>
                            <p class="employee-position">Product Designer</p>
                            <ul class="employee-social-list">
                                <li class="employee-social-list-item">
                                    <a href="#" class="employee-social-list-item-link">
                                        <svg class="employee-social-list-item-icon" width="16" height="16">
                                            <use href="./images/icons.svg#icon-instagram-2"></use>
                                        </svg>
                                    </a>
                                </li>

                                <li class="employee-social-list-item">
                                    <a href="#" class="employee-social-list-item-link">
                                        <svg class="employee-social-list-item-icon" width="16" height="16">
                                            <use href="./images/icons.svg#icon-twitter-1"></use>
                                        </svg>
                                    </a>
                                </li>

                                <li class="employee-social-list-item">
                                    <a href="#" class="employee-social-list-item-link">
                                        <svg class="employee-social-list-item-icon" width="16" height="16">
                                            <use href="./images/icons.svg#icon-facebook-1"></use>
                                        </svg>
                                    </a>
                                </li>

                                <li class="employee-social-list-item">
                                    <a href="#" class="employee-social-list-item-link">
                                        <svg class="employee-social-list-item-icon" width="16" height="16">
                                            <use href="./images/icons.svg#icon-linkedin-1"></use>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="team-list-item">
                        <img srcset="./images/tomford.webp 1x, ./images/tomford-@2.webp 2x" src="./images/tomford.webp" alt="Tom Ford" width="264" class="employee-photo">
                        <div class="employee-information">
                            <h3 class="employee-fullname">Tom Ford</h3>
                            <p class="employee-position">Frontend Developer</p>
                            <ul class="employee-social-list">
                                <li class="employee-social-list-item">
                                    <a href="#" class="employee-social-list-item-link">
                                        <svg class="employee-social-list-item-icon" width="16" height="16">
                                            <use href="./images/icons.svg#icon-instagram-2"></use>
                                        </svg>
                                    </a>
                                </li>

                                <li class="employee-social-list-item">
                                    <a href="#" class="employee-social-list-item-link">
                                        <svg class="employee-social-list-item-icon" width="16" height="16">
                                            <use href="./images/icons.svg#icon-twitter-1"></use>
                                        </svg>
                                    </a>
                                </li>

                                <li class="employee-social-list-item">
                                    <a href="#" class="employee-social-list-item-link">
                                        <svg class="employee-social-list-item-icon" width="16" height="16">
                                            <use href="./images/icons.svg#icon-facebook-1"></use>
                                        </svg>
                                    </a>
                                </li>

                                <li class="employee-social-list-item">
                                    <a href="#" class="employee-social-list-item-link">
                                        <svg class="employee-social-list-item-icon" width="16" height="16">
                                            <use href="./images/icons.svg#icon-linkedin-1"></use>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="team-list-item">
                        <img srcset="./images/camilagarcia.webp 1x, ./images/camilagarcia-@2.webp 2x" src="./images/camilagarcia.webp" alt="Camila Garcia" width="264" class="employee-photo">
                        <div class="employee-information">
                            <h3 class="employee-fullname">Camila Garcia</h3>
                            <p class="employee-position">Marketing</p>
                            <ul class="employee-social-list">
                                <li class="employee-social-list-item">
                                    <a href="#" class="employee-social-list-item-link">
                                        <svg class="employee-social-list-item-icon" width="16" height="16">
                                            <use href="./images/icons.svg#icon-instagram-2"></use>
                                        </svg>
                                    </a>
                                </li>

                                <li class="employee-social-list-item">
                                    <a href="#" class="employee-social-list-item-link">
                                        <svg class="employee-social-list-item-icon" width="16" height="16">
                                            <use href="./images/icons.svg#icon-twitter-1"></use>
                                        </svg>
                                    </a>
                                </li>

                                <li class="employee-social-list-item">
                                    <a href="#" class="employee-social-list-item-link">
                                        <svg class="employee-social-list-item-icon" width="16" height="16">
                                            <use href="./images/icons.svg#icon-facebook-1"></use>
                                        </svg>
                                    </a>
                                </li>

                                <li class="employee-social-list-item">
                                    <a href="#" class="employee-social-list-item-link">
                                        <svg class="employee-social-list-item-icon" width="16" height="16">
                                            <use href="./images/icons.svg#icon-linkedin-1"></use>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="team-list-item">
                        <img srcset="./images/danielwilson.webp 1x, ./images/danielwilson-@2.webp 2x" src="./images/danielwilson.webp" alt="Daniel Wilson" width="264" class="employee-photo">
                        <div class="employee-information">
                            <h3 class="employee-fullname">Daniel Wilson</h3>
                            <p class="employee-position">UI Designer</p>
                            <ul class="employee-social-list">
                                <li class="employee-social-list-item">
                                    <a href="#" class="employee-social-list-item-link">
                                        <svg class="employee-social-list-item-icon" width="16" height="16">
                                            <use href="./images/icons.svg#icon-instagram-2"></use>
                                        </svg>
                                    </a>
                                </li>

                                <li class="employee-social-list-item">
                                    <a href="#" class="employee-social-list-item-link">
                                        <svg class="employee-social-list-item-icon" width="16" height="16">
                                            <use href="./images/icons.svg#icon-twitter-1"></use>
                                        </svg>
                                    </a>
                                </li>

                                <li class="employee-social-list-item">
                                    <a href="#" class="employee-social-list-item-link">
                                        <svg class="employee-social-list-item-icon" width="16" height="16">
                                            <use href="./images/icons.svg#icon-facebook-1"></use>
                                        </svg>
                                    </a>
                                </li>

                                <li class="employee-social-list-item">
                                    <a href="#" class="employee-social-list-item-link">
                                        <svg class="employee-social-list-item-icon" width="16" height="16">
                                            <use href="./images/icons.svg#icon-linkedin-1"></use>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <section class="customers-section">
            <div class="container customers-container">
                <h2 class="customers-title">Customers</h2>
                <ul class="customers-list">
                    <li class="customers-list-item">
                        <a href="#" class="customers-list-item-link">
                            <svg class="customers-list-item-icon" width="104" height="56">
                                <use href="./images/icons.svg#icon-Logo"></use>
                            </svg>
                        </a>
                    </li>

                    <li class="customers-list-item">
                        <a href="#" class="customers-list-item-link">
                            <svg class="customers-list-item-icon" width="104" height="56">
                                <use href="./images/icons.svg#icon-Logo-1"></use>
                            </svg>
                        </a>
                    </li>

                    <li class="customers-list-item">
                        <a href="#" class="customers-list-item-link">
                            <svg class="customers-list-item-icon" width="104" height="56">
                                <use href="./images/icons.svg#icon-Logo-2"></use>
                            </svg>
                        </a>
                    </li>

                    <li class="customers-list-item">
                        <a href="#" class="customers-list-item-link">
                            <svg class="customers-list-item-icon" width="104" height="56">
                                <use href="./images/icons.svg#icon-Logo-3"></use>
                            </svg>
                        </a>
                    </li>

                    <li class="customers-list-item">
                        <a href="#" class="customers-list-item-link">
                            <svg class="customers-list-item-icon" width="104" height="56">
                                <use href="./images/icons.svg#icon-Logo-4"></use>
                            </svg>
                        </a>
                    </li>

                    <li class="customers-list-item">
                        <a href="#" class="customers-list-item-link">
                            <svg class="customers-list-item-icon" width="104" height="56">
                                <use href="./images/icons.svg#icon-Logo-5"></use>
                            </svg>
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
                <p class="footer-text">Increase the flow of customers and sales for your business with digital marketing & growth solutions.</p>
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
                    <button type="submit" class="footer-form-button">Subscribe
                        <svg class="footer-form-button-icon" width="24" height="24">
                            <use href="./images/icons.svg#icon-footer-subscribe-button"></use>
                        </svg>
                    </button>
                </span>
            </form>
        </div>
    </footer>

    <div class="backdrop is-hidden" data-modal>
        <div class="modal">
            <button type="button" class="modal-close-button" data-modal-close>
                <svg class="modal-close-svg" width="8" height="8">
                    <use href="./images/icons.svg#close-modal"></use>
                </svg>
            </button>

            <form class="modal-form">
                <p class="modal-form-text">Leave your contacts and we will call you back</p>

                <label class="modal-form-label">
                    <span class="modal-form-desc">Name</span>
                    <span class="modal-form-input-wrapper">
                        <input type="text" name="user_name" class="modal-form-input" pattern="^[a-zA-Z]+" minlength="2">
                        <svg class="modal-form-label-svg" width="18" height="18">
                            <use href="./images/icons.svg#icon-person-modal"></use>
                        </svg>
                    </span>
                </label>

                <label class="modal-form-label">
                    <span class="modal-form-desc">Phone</span>
                    <span class="modal-form-input-wrapper">
                        <input type="tel" name="user_phone" class="modal-form-input" pattern="[0-9]{3}-[0-9]{3}-[0-9]{2}-[0-9]{2}" title="xxx-xxx-xx-xx">
                        <svg class="modal-form-label-svg" width="18" height="24">
                            <use href="./images/icons.svg#icon-phone-modal"></use>
                        </svg>
                    </span>
                </label>

                <label class="modal-form-label">
                    <span class="modal-form-desc">Email</span>
                    <span class="modal-form-input-wrapper">
                        <input type="email" name="user_email" class="modal-form-input">
                        <svg class="modal-form-label-svg" width="18" height="24">
                            <use href="./images/icons.svg#icon-email-modal"></use>
                        </svg>
                    </span>
                </label>

                <label class="modal-form-label">
                    <span class="modal-form-desc">Comment</span>
                    <textarea name="user_comment" class="modal-form-comment" placeholder="Text input"></textarea>
                </label>

                <input id="user-policy" type="checkbox" name="user_policy" class="modal-form-check visually-hidden">
                <label for="user-policy" class="modal-form-check-desc">
                    I accept the terms and conditions of the&nbsp;<a href="#" class="modal-form-user-policy">Privacy Policy</a>
                </label>

                <button type="submit" class="modal-form-button-send">Send</button>
            </form>
        </div>
    </div>

    <script src="./js/mobile-menu.js"></script>
    <script src="./js/modal.js"></script>
</body>

</html>