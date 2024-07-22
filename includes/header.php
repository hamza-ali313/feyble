<!DOCTYPE html>
<html>

<head>
    <title>
        <?php if (isset($page) && is_string($page)) {
            echo $page;
        } else {
            echo 'Fitness Apparel & Accessories | Revolt Cara';
        } ?>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content=<?php if (isset($pageTag) && is_string($pageTag)) {
        echo $pageTag;
    } else {
        echo 'desired tag';
    } ?> />
    <meta name="description" content=<?php if (isset($pageDesc) && is_string($pageDesc)) {
        echo $pageDesc;
    } else {
        echo 'desired description';
    } ?> />
    <link rel="shortcut icon" href="media/favicon.png" />
    <link href="https://site-assets.fontawesome.com/releases/v6.0.0/css/all.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/animate.min.css" rel="stylesheet" type="text/css">
    <link href="css/aos.css" rel="stylesheet" type="text/css">
    <link href="css/fancybox.min.css" rel="stylesheet" type="text/css">
    <link href="css/owl.carousel.min.css" rel="stylesheet" type="text/css">
    <link href="css/owl.theme.default.css" rel="stylesheet" type="text/css">
    <link href="css/jquery-ui.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/slick.css" />
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <link href="css/custom.css" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- Navbar Start -->

    <header style="background-color: <?php echo isset($bg) ? $bg : ''; ?>">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- <a class="navbar-brand" href="index.php"><img src="images/cafeLogo.png" alt=""></a> -->
                <a class="navbar-brand" href="index.php">
                <img src="images/<?php echo isset($logo_head) ? $logo_head : 'main_logo'; ?>.png" alt="">
                </a>
                <div class="select-dropdown navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <button href="#" role="button" data-value="" class="select-dropdown__button"><i
                            class="fa-regular fa-bars-sort"></i>
                    </button>
                    <ul class="select-dropdown__list">
                        <li data-value="1" class="select-dropdown__list-item"><a href="about.php">AboutUs</a></li>
                        <li data-value="2" class="select-dropdown__list-item"><a href="comunity.php">Community</a></li>
                        <li data-value="3" class="select-dropdown__list-item"><a href="members.php">Members</a></li>
                        <li data-value="4" class="select-dropdown__list-item"><a href="merchandise.php">Merch</a>
                        </li>
                        <li data-value="4" class="select-dropdown__list-item"><a href="host_event.php">Host
                                Event</a></li>
                        <li data-value="4" class="select-dropdown__list-item"><a href="site_map.php">Site
                                Map</a></li>
                        <li data-value="4" class="select-dropdown__list-item"><a href="contact.php">Contact</a></li>
                        <li data-value="8" class="select-dropdown__list-item drop-show-resp"><a href="cafe.php">Cafe</a>
                        </li>
                        <li data-value="9" class="select-dropdown__list-item drop-show-resp"><a
                                href="studio.php">studio</a></li>
                        <li data-value="10" class="select-dropdown__list-item drop-show-resp"><a href="spa.php">spa</a>
                        </li>
                        <li data-value="11" class="select-dropdown__list-item drop-show-resp"><a href="members.php"
                                class="btn2 btn">Join The Club</a></li>
                    </ul>
                </div>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link " href="index.php">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="cafe.php">cafe</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="studio.php">studio </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="spa.php">spa</a>
                        </li>
                    </ul>
                    <ul class="login">
                        <li>
                            <a href="members.php" class="btn4">Login / Sign-up</a>
                        </li>
                        <li>
                            <a href="javascript:;"><i class="fa-regular fa-cart-shopping"></i></a>
                        </li>
                        <li>
                            <div class="select-dropdown">
                                <button href="#" role="button" data-value="" class="select-dropdown__button"><i
                                        class="fa-regular fa-bars-sort"></i>
                                </button>
                                <ul class="select-dropdown__list">
                                    <li data-value="1" class="select-dropdown__list-item"><a href="about.php">About
                                            Us</a></li>
                                    <li data-value="2" class="select-dropdown__list-item"><a
                                            href="comunity.php">Community</a></li>
                                    <li data-value="3" class="select-dropdown__list-item"><a
                                            href="members.php">Members</a></li>
                                    <li data-value="4" class="select-dropdown__list-item"><a
                                            href="merchandise.php">Merch</a>
                                    </li>
                                    <li data-value="5" class="select-dropdown__list-item"><a href="host_event.php">Host
                                            Event</a></li>
                                    <li data-value="6" class="select-dropdown__list-item"><a href="site_map.php">Site
                                            Map</a></li>
                                    <li data-value="7" class="select-dropdown__list-item"><a
                                            href="contact.php">Contact</a></li>

                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- navbar end -->