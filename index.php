<?php
include 'includes/header.php';
$page = 'home';
?>

<style>
    footer {
        display: none;
    }

    header {
        display: none;
    }
</style>

<!-- landing pg start -->
<section class="landing-pg">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="landing-header-sec">
                    <a href="#" class="btn1" data-bs-toggle="modal" data-bs-target="#signModal">
                        Sign In
                    </a>
                    <div class="select-dropdown">
                        <button href="#" role="button" data-value="" class="select-dropdown__button"><i
                                class="fa-regular fa-bars-sort"></i>
                        </button>
                        <ul class="select-dropdown__list">
                            <li data-value="1" class="select-dropdown__list-item"><a href="about.php">About
                                    Us</a></li>
                            <li data-value="2" class="select-dropdown__list-item"><a href="comunity.php">Community</a>
                            </li>
                            <li data-value="3" class="select-dropdown__list-item"><a href="members.php">Members</a>
                            </li>
                            <li data-value="4" class="select-dropdown__list-item"><a href="merchandise.php">Merch</a>
                            </li>
                            <li data-value="4" class="select-dropdown__list-item"><a href="host_event.php">Host
                                    Event</a></li>
                            <li data-value="4" class="select-dropdown__list-item"><a href="site_map.php">Site
                                    Map</a></li>
                            <li data-value="4" class="select-dropdown__list-item"><a href="contact.php">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="landing-main">
                    <div>
                        <img src="images/landing-logo.png" alt="">
                    </div>
                    <ul>
                        <li>
                            <a href="cafe.php">Cafe</a>
                        </li>
                        <li>
                            <a href="studio.php">studio</a>
                        </li>
                        <li>
                            <a href="spa.php">spa</a>
                        </li>
                    </ul>
                    <div>
                       <a href="members.php" class="btn8">Join The Club</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- landing pg end -->




<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <h5 id="offcanvasRightLabel">Offcanvas right</h5>
    </div>
    <div class="offcanvas-body">
    </div>
</div>

<?php
include 'includes/footer.php';
$page = 'home';
?>