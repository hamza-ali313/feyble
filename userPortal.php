<?php
include 'includes/header.php';
$page = 'home';
$logo_head = '';
?>

<style>
header {
    display: none;
}

footer {
    display: none;
}
</style>

<!--  user portal pg start -->
<section class='user-portal'>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-2 col-md-2 p-0">
                <div class="sidebar default-left " id='sidebar'>
                    <div class="sidebar-logo">
                        <img src="images/testi.png" alt="">
                        <h2>Olivia</h2>
                    </div>
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-Details-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-Details" type="button" role="tab" aria-controls="pills-Details"
                                aria-selected="true" onclick="toggleLeft()">
                                <i class="fas fa-edit"></i>
                                <h6>Edit Details</h6>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link " id="pills-Inbox-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-Inbox" type="button" role="tab" aria-controls="pills-Inbox"
                                aria-selected="true" onclick="toggleLeft()">
                                <i class="fas fa-envelope"></i>
                                <h6>Inbox</h6>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link " id="pills-rewards-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-rewards" type="button" role="tab" aria-controls="pills-rewards"
                                aria-selected="true" onclick="toggleLeft()">
                                <i class="fal fa-trophy"></i>
                                <h6>Feybl rewards</h6>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link " id="pills-Membership-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-Membership" type="button" role="tab"
                                aria-controls="pills-Membership" aria-selected="true" onclick="toggleLeft()">
                                <i class="fas fa-users"></i>
                                <h6>My Membership</h6>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link " id="pills-orders-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-orders" type="button" role="tab" aria-controls="pills-orders"
                                aria-selected="true" onclick="toggleLeft()">
                                <i class="fal fa-trophy"></i>
                                <h6>My orders</h6>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link " id="pills-events-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-events" type="button" role="tab" aria-controls="pills-events"
                                aria-selected="true" onclick="toggleLeft()">
                                <i class="far fa-calendar-alt"></i>
                                <h6>My events</h6>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link " id="pills-Invites-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-Invites" type="button" role="tab" aria-controls="pills-Invites"
                                aria-selected="true" onclick="toggleLeft()">
                                <i class="fal fa-user"></i>
                                <h6>My Invites </h6>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link " id="pills-Bulletin-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-Bulletin" type="button" role="tab" aria-controls="pills-Bulletin"
                                aria-selected="true" onclick="toggleLeft()">
                                <i class="fal fa-home-alt"></i>
                                <h6>
                                    Bulletin Board
                                </h6>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-Complaints-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-Complaints" type="button" role="tab"
                                aria-controls="pills-Complaints" aria-selected="true" onclick="toggleLeft()">
                                <i class="fas fa-user-headset"></i>
                                <h6>
                                    Support/Complaints
                                </h6>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-lg-10 col-md-10">
                <div class="tab-content user-pg-main" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-Details" role="tabpanel"
                        aria-labelledby="pills-Details-tab">
                        <section class="contact-pg">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-lg-12">
                                        <div class='text-end menu-btn'>
                                            <button class="btn1" onclick="toggleLeft()">
                                                <i class="fas fa-bars"></i>
                                            </button>
                                        </div>
                                        <h1>Edit Details</h1>
                                        <form action="">
                                            <div class="row align-items-center">
                                                <div class="col-12 col-lg-6">
                                                    <div class="cont-box-field">
                                                        <label for="name">Name</label>
                                                        <input type="text">
                                                    </div>
                                                    <div class="cont-box-field">
                                                        <label for="phone">Email</label>
                                                        <input type="email">
                                                    </div>
                                                    <div class="cont-box-field">
                                                        <label for="name">Phone</label>
                                                        <input type="text">
                                                    </div>
                                                    <div class="cont-box-field">
                                                        <label for="name">Location</label>
                                                        <input type="text">
                                                    </div>
                                                    <div class="img-upload">
                                                        <input type="file">
                                                        <label for="">
                                                            <i class="fas fa-image"></i> Upload your image
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    <div class="membership-card">
                                                        <div>
                                                            <img src="images/main_logo1.png" alt="">
                                                            <h5>50 points</h5>
                                                        </div>
                                                        <h4>1234 5678 4563</h4>
                                                        <div>
                                                            <div class="d-block">

                                                                <h3>Henry palfray</h3>
                                                                <h4>patron</h4>
                                                            </div>

                                                            <img src="images/qr.png" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-start">
                                                    <a href="" class="btn4">Update</a>
                                                </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="tab-pane fade" id="pills-Inbox" role="tabpanel" aria-labelledby="pills-Inbox-tab">
                        <div class='text-end menu-btn'>
                            <button class="btn1" onclick="toggleLeft()">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                        <div class="row justify-space-between align-items-center">
                            <div class="col-12 col-lg-3">
                                <h1>Inbox</h1>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="membership-card">
                                    <div>
                                        <img src="images/main_logo1.png" alt="">
                                        <h5>50 points</h5>
                                    </div>
                                    <h4>1234 5678 4563</h4>
                                    <div>
                                        <div class="d-block">

                                            <h3>Henry palfray</h3>
                                            <h4>patron</h4>
                                        </div>

                                        <img src="images/qr.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='mt-5'>
                            <div class="message">
                                <input type="checkbox" />
                                <span class="sender">Olivia</span>
                                <span class="date">Saturday</span>
                                <span class="title">hello world Lorem ipsum dolor sit amet consectetur, adipisicing
                                    elit. Culpa, a?</span>
                            </div>

                            <div class="message">
                                <input type="checkbox" />
                                <span class="sender">Admin</span>
                                <span class="date">today</span>
                                <span class="title">hello world Lorem ipsum dolor sit amet consectetur, adipisicing
                                    elit. Culpa, a?</span>
                            </div>

                            <div class="message">
                                <input type="checkbox" />
                                <span class="sender">Admin</span>
                                <span class="date">Monday</span>
                                <span class="title">hello world Lorem ipsum dolor sit amet consectetur, adipisicing
                                    elit. Culpa, a?</span>
                            </div>

                            <div class="message">
                                <input type="checkbox" />
                                <span class="sender">Henry</span>
                                <span class="date">today</span>
                                <span class="title">hello world Lorem ipsum dolor sit amet consectetur, adipisicing
                                    elit. Culpa, a?</span>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-rewards" role="tabpanel" aria-labelledby="pills-rewards-tab">
                        <div class='text-end menu-btn'>
                            <button class="btn1" onclick="toggleLeft()">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                        <div class="row justify-space-between align-items-center">
                            <div class="col-12 col-lg-3">
                                <h1>rewards</h1>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="membership-card">
                                    <div>
                                        <img src="images/main_logo1.png" alt="">
                                        <h5>50 points</h5>
                                    </div>
                                    <h4>1234 5678 4563</h4>
                                    <div>
                                        <div class="d-block">

                                            <h3>Henry palfray</h3>
                                            <h4>patron</h4>
                                        </div>

                                        <img src="images/qr.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h4>Spa </h4>
                            <div class="row">
                                <div class="col-12 col-lg-3 col-md-6">
                                    <div class='reward-box'>
                                        <i class="far fa-dumbbell"></i>
                                        <h2>sound therapy</h2>
                                        <h6>available</h6>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3 col-md-6">
                                    <div class='reward-box'>
                                        <i class="far fa-dumbbell"></i>
                                        <h2>spa space</h2>
                                        <h5>availed</h5>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3 col-md-6">
                                    <div class='reward-box'>
                                        <i class="far fa-dumbbell"></i>
                                        <h2> special offer to practitioners</h2>
                                        <h6>available</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h4>Cafe </h4>
                            <div class="row">
                                <div class="col-12 col-lg-3 col-md-6">
                                    <div class='reward-box'>
                                        <i class="fad fa-utensils-alt"></i>
                                        <h2>Secret Dining Access</h2>
                                        <h5>availed</h5>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3 col-md-6">
                                    <div class='reward-box'>
                                        <i class="fad fa-utensils-alt"></i>
                                        <h2>Secret Menu Access</h2>
                                        <h5>availed</h5>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3 col-md-6">
                                    <div class='reward-box'>
                                        <i class="fad fa-utensils-alt"></i>
                                        <h2>Rewards Program</h2>
                                        <h6>available</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h4>Studio </h4>
                            <div class="row">
                                <div class="col-12 col-lg-3 col-md-6">
                                    <div class='reward-box'>
                                        <i class="far fa-music"></i>
                                        <h2> versatile photography</h2>
                                        <h6>available</h6>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3 col-md-6">
                                    <div class='reward-box'>
                                        <i class="far fa-music"></i>
                                        <h2>mighty sound studio</h2>
                                        <h5>availed</h5>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3 col-md-6">
                                    <div class='reward-box'>
                                        <i class="far fa-music"></i>
                                        <h2> private conference</h2>
                                        <h6>available</h6>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3 col-md-6">
                                    <div class='reward-box'>
                                        <i class="far fa-music"></i>
                                        <h2>movement studio</h2>
                                        <h5>availed</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-orders" role="tabpanel" aria-labelledby="pills-orders-tab">
                        <div class='text-end menu-btn'>
                            <button class="btn1" onclick="toggleLeft()">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                        <div class="row justify-space-between align-items-center">
                            <div class="col-12 col-lg-3">
                                <h1>orders</h1>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="membership-card">
                                    <div>
                                        <img src="images/main_logo1.png" alt="">
                                        <h5>50 points</h5>
                                    </div>
                                    <h4>1234 5678 4563</h4>
                                    <div>
                                        <div class="d-block">

                                            <h3>Henry palfray</h3>
                                            <h4>patron</h4>
                                        </div>

                                        <img src="images/qr.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='table-responsive'>
                            <table class="table table-borderless main">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <h6>serial No</h6>
                                        </th>
                                        <th scope="col">
                                            <h6>Products/Services</h6>
                                        </th>
                                        <th scope="col">
                                            <h6>Quantity/Duration</h6>
                                        </th>
                                        <th scope="col">
                                            <h6>$Cost</h6>
                                        </th>
                                        <th scope="col">
                                            <h6>Membership</h6>
                                        </th>
                                        <th scope="col">
                                            <h6>Rewards</h6>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><img src="images/thrap1.png" alt="">Spa therapy</td>
                                        <td>
                                            <h5>3 Days</h5>
                                        </td>
                                        <td>
                                            <h5>$20</h5>
                                        </td>
                                        <td class="james-donawan"><span>patron</span></td>
                                        <td>
                                            <h6>100 points <span class='plus'>plus</span></h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><img src="images/pant1.png" alt="">Pant</td>
                                        <td>
                                            <h5>2</h5>
                                        </td>
                                        <td>
                                            <h5>$10</h5>
                                        </td>
                                        <td class="james-donawan"><span>patron</span> </td>

                                        <td>
                                            <h6>200 points <span class='plus'>plus</span></h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><img src="images/skirt22.png" alt="">Skirt</td>
                                        <td>
                                            <h5>1</h5>
                                        </td>
                                        <td>
                                            <h5>$90</h5>
                                        </td>
                                        <td class="james-donawan"><span class='minus'>patron</span> </td>

                                        <td>
                                            <h6>50 points <span class='minus'>minus</span></h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td><img src="images/speak1.png" alt="">studio</td>
                                        <td>
                                            <h5>5 Days</h5>
                                        </td>
                                        <td>
                                            <h5>$50</h5>
                                        </td>
                                        <td class="james-donawan"><span>patron</span> </td>

                                        <td>
                                            <h6>150 points <span class='plus'>plus</span></h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td><img src="images/modal1.png" alt="">Cafe</td>
                                        <td>
                                            <h5>6 Days</h5>
                                        </td>
                                        <td>
                                            <h5>$30</h5>
                                        </td>
                                        <td class="james-donawan"><span>patron</span> </td>

                                        <td>
                                            <h6>50 points <span class='minus'>minus</span></h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td><img src="images/shirt1.png" alt="">Shirt</td>
                                        <td>
                                            <h5>3</h5>
                                        </td>
                                        <td>
                                            <h5>$50</h5>
                                        </td>
                                        <td class="james-donawan"><span>patron</span> </td>

                                        <td>
                                            <h6>100 points <span class='plus'>plus</span></h6>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="total-points mt-5 text-end">
                            <h2>Total Points 100 </h2>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-events" role="tabpanel" aria-labelledby="pills-events-tab">
                        <div class='text-end menu-btn'>
                            <button class="btn1" onclick="toggleLeft()">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                        <div class="row justify-space-between align-items-center">
                            <div class="col-12 col-lg-3">
                                <h1>events</h1>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="membership-card">
                                    <div>
                                        <img src="images/main_logo1.png" alt="">
                                        <h5>50 points</h5>
                                    </div>
                                    <h4>1234 5678 4563</h4>
                                    <div>
                                        <div class="d-block">

                                            <h3>Henry palfray</h3>
                                            <h4>patron</h4>
                                        </div>

                                        <img src="images/qr.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-12 col-lg-3 col-md-6 col-sm-6">
                                <div class='event-box mb-5'>
                                    <img src="images/speak2.png" alt="">
                                    <div>
                                        <h5>21 March <span></span> 25 March</h5>
                                        <h2>event name here</h2>
                                        <h6><i class="fas fa-map-marker-alt"></i> event location here</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 col-md-6 col-sm-6">
                                <div class='event-box mb-5'>
                                    <img src="images/speak3.png" alt="">
                                    <div>
                                        <h5>21 March <span></span> 25 March</h5>
                                        <h2>event name here</h2>
                                        <h6><i class="fas fa-map-marker-alt"></i> event location here</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 col-md-6 col-sm-6">
                                <div class='event-box mb-5'>
                                    <img src="images/speak4.png" alt="">
                                    <div>
                                        <h5>21 March <span></span> 25 March</h5>
                                        <h2>event name here</h2>
                                        <h6><i class="fas fa-map-marker-alt"></i> event location here</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 col-md-6 col-sm-6">
                                <div class='event-box mb-5'>
                                    <img src="images/speak5.png" alt="">
                                    <div>
                                        <h5>21 March <span></span> 25 March</h5>
                                        <h2>event name here</h2>
                                        <h6><i class="fas fa-map-marker-alt"></i> event location here</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-Invites" role="tabpanel" aria-labelledby="pills-Invites-tab">
                        <div class='text-end menu-btn'>
                            <button class="btn1" onclick="toggleLeft()">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                        <div class="row justify-space-between align-items-center">
                            <div class="col-12 col-lg-3">
                                <h1>Invites</h1>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="membership-card">
                                    <div>
                                        <img src="images/main_logo1.png" alt="">
                                        <h5>50 points</h5>
                                    </div>
                                    <h4>1234 5678 4563</h4>
                                    <div>
                                        <div class="d-block">

                                            <h3>Henry palfray</h3>
                                            <h4>patron</h4>
                                        </div>

                                        <img src="images/qr.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-12 col-lg-3 col-md-6 col-sm-6">
                                <div class='event-box mb-5'>
                                    <img src="images/speak2.png" alt="">
                                    <div>
                                        <h5>21 March <span></span> 25 March</h5>
                                        <h2>event name here</h2>
                                        <h6><i class="fas fa-map-marker-alt"></i> event location here</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3 col-md-6 col-sm-6">
                                <div class='event-box mb-5'>
                                    <img src="images/speak3.png" alt="">
                                    <div>
                                        <h5>21 March <span></span> 25 March</h5>
                                        <h2>event name here</h2>
                                        <h6><i class="fas fa-map-marker-alt"></i> event location here</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-Bulletin" role="tabpanel" aria-labelledby="pills-Bulletin-tab">
                        <div class='text-end menu-btn'>
                            <button class="btn1" onclick="toggleLeft()">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                        <div class="row justify-space-between align-items-center">
                            <div class="col-12 col-lg-3">
                                <h1>Bulletin</h1>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="membership-card">
                                    <div>
                                        <img src="images/main_logo1.png" alt="">
                                        <h5>50 points</h5>
                                    </div>
                                    <h4>1234 5678 4563</h4>
                                    <div>
                                        <div class="d-block">

                                            <h3>Henry palfray</h3>
                                            <h4>patron</h4>
                                        </div>

                                        <img src="images/qr.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-bulliton-all-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-bulliton-all" type="button" role="tab"
                                    aria-controls="pills-bulliton-all" aria-selected="true">All</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-bulliton-news-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-bulliton-news" type="button" role="tab"
                                    aria-controls="pills-bulliton-news" aria-selected="false">News</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-bulliton-updates-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-bulliton-updates" type="button" role="tab"
                                    aria-controls="pills-bulliton-updates" aria-selected="false">Updates</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-bulliton-event-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-bulliton-event" type="button" role="tab"
                                    aria-controls="pills-bulliton-event" aria-selected="false">Events</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-bulliton-impo-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-bulliton-impo" type="button" role="tab"
                                    aria-controls="pills-bulliton-impo" aria-selected="false">important</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-bulliton-all" role="tabpanel"
                                aria-labelledby="pills-bulliton-all-tab">
                                <div class="bulliton-box">
                                    <h2>Sun March 03 2024</h2>
                                    <h3>Bulliton Heading</h3>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero et obcaecati
                                        tempora quibusdam officiis quos!</p>
                                </div>
                                <div class="bulliton-box">
                                    <h2>Sun March 03 2024</h2>
                                    <h3>Bulliton Heading</h3>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero et obcaecati
                                        tempora quibusdam officiis quos!</p>
                                </div>
                                <div class="bulliton-box">
                                    <h2>Sun March 03 2024</h2>
                                    <h3>Bulliton Heading</h3>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero et obcaecati
                                        tempora quibusdam officiis quos!</p>
                                </div>
                            </div>
                            <div class="tab-pane fade " id="pills-bulliton-news" role="tabpanel"
                                aria-labelledby="pills-bulliton-news-tab">
                                <div class="bulliton-box">
                                    <h2>Sun March 03 2024</h2>
                                    <h3>Bulliton Heading</h3>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero et obcaecati
                                        tempora quibusdam officiis quos!</p>
                                </div>
                                <div class="bulliton-box">
                                    <h2>Sun March 03 2024</h2>
                                    <h3>Bulliton Heading</h3>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero et obcaecati
                                        tempora quibusdam officiis quos!</p>
                                </div>
                                <div class="bulliton-box">
                                    <h2>Sun March 03 2024</h2>
                                    <h3>Bulliton Heading</h3>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero et obcaecati
                                        tempora quibusdam officiis quos!</p>
                                </div>
                            </div>
                            <div class="tab-pane fade " id="pills-bulliton-updates" role="tabpanel"
                                aria-labelledby="pills-bulliton-updates-tab">
                                <div class="bulliton-box">
                                    <h2>Sun March 03 2024</h2>
                                    <h3>Bulliton Heading</h3>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero et obcaecati
                                        tempora quibusdam officiis quos!</p>
                                </div>
                                <div class="bulliton-box">
                                    <h2>Sun March 03 2024</h2>
                                    <h3>Bulliton Heading</h3>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero et obcaecati
                                        tempora quibusdam officiis quos!</p>
                                </div>
                                <div class="bulliton-box">
                                    <h2>Sun March 03 2024</h2>
                                    <h3>Bulliton Heading</h3>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero et obcaecati
                                        tempora quibusdam officiis quos!</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-bulliton-event" role="tabpanel"
                                aria-labelledby="pills-bulliton-event-tab">
                                <div class="bulliton-box">
                                    <h2>Sun March 03 2024</h2>
                                    <h3>Bulliton Heading</h3>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero et obcaecati
                                        tempora quibusdam officiis quos!</p>
                                </div>
                                <div class="bulliton-box">
                                    <h2>Sun March 03 2024</h2>
                                    <h3>Bulliton Heading</h3>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero et obcaecati
                                        tempora quibusdam officiis quos!</p>
                                </div>
                                <div class="bulliton-box">
                                    <h2>Sun March 03 2024</h2>
                                    <h3>Bulliton Heading</h3>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero et obcaecati
                                        tempora quibusdam officiis quos!</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-bulliton-impo" role="tabpanel"
                                aria-labelledby="pills-bulliton-impo-tab">
                                <div class="bulliton-box">
                                    <h2>Sun March 03 2024</h2>
                                    <h3>Bulliton Heading</h3>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero et obcaecati
                                        tempora quibusdam officiis quos!</p>
                                </div>
                                <div class="bulliton-box">
                                    <h2>Sun March 03 2024</h2>
                                    <h3>Bulliton Heading</h3>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero et obcaecati
                                        tempora quibusdam officiis quos!</p>
                                </div>
                                <div class="bulliton-box">
                                    <h2>Sun March 03 2024</h2>
                                    <h3>Bulliton Heading</h3>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero et obcaecati
                                        tempora quibusdam officiis quos!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-Membership" role="tabpanel"
                        aria-labelledby="pills-Membership-tab">
                        <div class='text-end menu-btn'>
                            <button class="btn1" onclick="toggleLeft()">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                        <div class="row justify-space-between align-items-center">
                            <div class="col-12 col-lg-5">
                                <h1>My Membership</h1>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="membership-card">
                                    <div>
                                        <img src="images/main_logo1.png" alt="">
                                        <h5>50 points</h5>
                                    </div>
                                    <h4>1234 5678 4563</h4>
                                    <div>
                                        <div class="d-block">

                                            <h3>Henry palfray</h3>
                                            <h4>patron</h4>
                                        </div>

                                        <img src="images/qr.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-6 col-lg-3 py-3">
                                <div class="mem-border">
                                    <div class="mem-item">
                                        <div class="mem-item-top">
                                            <h2>PATRON</h2>
                                            <div class="mem-line"></div>
                                            <h3>$ 10 / MONTH</h3>
                                        </div>
                                        <ul>
                                            <li><span class="li-p">Basic Menu</span></li>
                                            <li><span class="li-p">General Seating</span></li>
                                            <li><span class="li-p">Standard Pricing</span></li>
                                            <li><span class="li-p">Secret Dining Access</span></li>
                                            <li><span class="li-p">Secret Menu Access</span></li>
                                            <li><span class="li-p">Rewards Program</span></li>
                                        </ul>
                                    </div>
                                    <!-- <form action="https://node-app.demowebapp.digital/membership-payment" method="post">
                                        <input type="hidden" name="_token"
                                            value="teFq1qp8CryxcRG86cftTIvt1gOhcG8uOmbJ5z88" autocomplete="off"> <input
                                            type="number" name="id" value="2" hidden="">
                                    </form> -->
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5 mem-btns">
                            <div class="col-12 col-lg-2 col-md-3">
                                <a href="javascript:;" class="btn8">Purchase</a>
                            </div>
                            <div class="col-12 col-lg-2 col-md-3">
                                <a href="javascript:;" class="btn8">Renew</a>
                            </div>
                            <div class="col-12 col-lg-2 col-md-3">
                                <a href="javascript:;" class="btn8">Upgrade</a>
                            </div>
                            <div class="col-12 col-lg-2 col-md-3">
                                <a href="javascript:;" class="btn8">Cancel</a>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class='text-end update-opt'>
                                    <a href="https://www.paypal.com/us/webapps/mpp/payflow-payment-gateway"
                                        class="">Update payment option<i class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-Complaints" role="tabpanel"
                        aria-labelledby="pills-Complaints-tab">
                        <div class='text-end menu-btn'>
                            <button class="btn1" onclick="toggleLeft()">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                        <div class="row justify-space-between align-items-center">
                            <div class="col-12 col-lg-6">
                                <h1>Supports/Complaints</h1>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="membership-card">
                                    <div>
                                        <img src="images/main_logo1.png" alt="">
                                        <h5>50 points</h5>
                                    </div>
                                    <h4>1234 5678 4563</h4>
                                    <div>
                                        <div class="d-block">
                                            <h3>Henry palfray</h3>
                                            <h4>patron</h4>
                                        </div>

                                        <img src="images/qr.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testbox">
                            <form action="/">
                                <h5>Personal Information</h5>
                                <div class="item">
                                    <p>Your Full Legal Name</p>
                                    <div class="name-item">
                                        <input type="text" name="name" placeholder="First Name" />
                                        <input type="text" name="name" placeholder="Last Name" />
                                    </div>
                                </div>
                                <div class="item">
                                    <p>Address</p>
                                    <div class="row">
                                        <div class="col-12 col-lg-6">
                                            <input type="text" name="name" placeholder="Street address" />
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <input type="text" name="name" placeholder="Street address line 2" />
                                        </div>
                                        <div class="col-12 col-lg-3">
                                            <input type="text" name="name" placeholder="City" />
                                        </div>
                                        <div class="col-12 col-lg-3">
                                            <input type="text" name="name" placeholder="Region" />
                                        </div>
                                        <div class="col-12 col-lg-3">
                                            <input type="text" name="name" placeholder="Postal / Zip code" />
                                        </div>
                                        <div class="col-12 col-lg-5">
                                            <select>
                                                <option value="">Country</option>
                                                <option value="1">Russia</option>
                                                <option value="2">Germany</option>
                                                <option value="3">France</option>
                                                <option value="4">Armenia</option>
                                                <option value="5">USA</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <p>Email</p>
                                    <input type="text" name="name" />
                                </div>
                                <div class="item">
                                    <p>Phone</p>
                                    <input type="text" name="name" />
                                </div>
                                <div class="item preferred-metod">
                                    <p>Preferred method of contact</p>
                                    <div class="preferred-metod-item">
                                        <label><input type="checkbox" name="name"> <span>Email</span></label>
                                        <label><input type="checkbox" name="name"> <span>Phone</span></label>
                                        <label><input type="checkbox" name="name"> <span>U.S. Mail</span></label>
                                    </div>
                                </div>
                                <h5>Information about your complaint</h5>
                                <div class="item">
                                    <p>First date on which the events or issues occurred</p>
                                    <input type="date" name="name" required />
                                </div>
                                <div class="item">
                                    <p>Name(s) of the person(s) involved</p>
                                    <textarea rows="5"></textarea>
                                </div>
                                <div class="item">
                                    <p>Please describe your complaint in detail. Include the names of persons,
                                        locations, and dates involved. If this complaint is against specific person(s),
                                        please list their names and titles</p>
                                    <textarea rows="5"></textarea>
                                </div>
                                <div class="item">
                                    <p>What attempts have you made to resolve this complaint up to now? Please state who
                                        you contacted and what transpired</p>
                                    <textarea rows="5"></textarea>
                                </div>
                                <div class="item">
                                    <p>Why do you think the complaint was not able to be resolved in your prior
                                        attempts?</p>
                                    <textarea rows="5"></textarea>
                                </div>
                                <div class="item">
                                    <p>What resolution would you consider fair? What resolution do you seek?</p>
                                    <textarea rows="5"></textarea>
                                </div>
                                <div class="item">
                                    <p>Any other information you want to provide?</p>
                                    <textarea rows="5"></textarea>
                                </div>
                                <div class="text-center mt-5">
                                    <a type="submit" href="/" class='btn8'>SEND</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  user portal pg end -->




<?php
include 'includes/footer.php';
$page = 'home';
?>