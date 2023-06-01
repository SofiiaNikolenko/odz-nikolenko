<?php
session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalog</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@700&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/modern-normalize@1.1.0/modern-normalize.min.css">
    <link rel="stylesheet" href="./css/styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
                    <li class="nav-item"><a href="./portfolio.php" class="nav-page">Portfolio</a></li>
                    <?php
                    if (!isset($_SESSION['user'])) {
                        echo '<li class="nav-item"><a href="./authorization.php" class="nav-page">Log in / Authorization</a></li>';
                    } else {
                        if ($_SESSION['user'] == "cat@gmail.com" || $_SESSION['user'] == "sonya") {
                            echo '<li class="nav-item"><a href="./admin/admin.php" class="nav-page">Admin panel</a></li>';
                        }
                        echo '<li class="nav-item"><a href="./catalog.php" class="nav-page current-page">Catalog</a></li>';
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
                        <li class="mobile-menu-item"><a href="./portfolio.php" class="mobile-menu-page">Portfolio</a></li>
                        <?php
                        if (!isset($_SESSION['user'])) {
                            echo '<li class="mobile-menu-item"><a href="./authorization.php" class="mobile-menu-page">Log in / Authorization</a></li>';
                        } else {
                            if ($_SESSION['user'] == "cat@gmail.com" || $_SESSION['user'] == "sonya") {
                                echo '<li class="mobile-menu-item"><a href="./admin/admin.php" class="mobile-menu-page">Admin panel</a></li>';
                            }
                            echo '<li class="mobile-menu-item"><a href="./catalog.php" class="mobile-menu-page current-page">Catalog</a></li>';
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
        <section class="portfolio-section" id="portfolio-section">
            <div class="container portfolio-container">

                <ul class="filter-button-list">
                    <li><a class="filter-button-list-item" href="#" data-filter="all">All</a></li>
                    <?php
                    require_once("./vendor/connect.php");
                    $sql = "SELECT * FROM categories";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $category_name = $row['сategory_name'];
                            echo '<li><a class="filter-button-list-item" href="#" data-filter="' . $category_name . '">' . $category_name . '</a></li>';
                        }
                    }
                    ?>
                </ul>
            </div>
        </section>

        <section class="section-collection" id="section-collection">
            <div class="container">
                <?php
                require_once("./vendor/connect.php");
                $sql = "SELECT * FROM `catalog`";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    echo '<ul class="portfolio-list">';
                    while ($row = $result->fetch_assoc()) {
                        echo '<li class="portfolio-item ' . $row['сategory_name'] . '">
                            <a href="#" class="portfolio-item-page">
                                <div class="portfolio-item-img-wrapper">
                                    <img src="uploads/' . $row["image"] . '" alt="' . $row["name"] . '" width="360" height="360" class="portfolio-item-photo">
                                    <p class="portfolio-item-overlay">' . $row["description"] . '</p>
                                </div>
                        
                                <div class="portfolio-item-text">
                                    <h3 class="portfolio-item-title">' . $row["name"] . '</h3>
                                    <p class="portfolio-item-filter">' . $row["price"] . ' Грн. </p>
                                </div>
                            </a>
                        </li>';
                    }
                    echo '</ul>';
                }
                ?>
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

    <script src="./js/mobile-menu.js"></script>
    <script src="./js/modal.js"></script>
    <script src="./js/category.js"></script>
</body>