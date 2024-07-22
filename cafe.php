<?php
include 'includes/header.php';
$page = 'home';
?>

<style>
    .drinks {
        display: none;
    }
</style>


<!-- cafe pg start -->
<section class="cafe-pg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10">
                <div class="cafe-branch">
                    <div class="row justify-content-center align-items-center flex-column">
                        <div class="col-12 col-lg-12">
                            <div class="cafe-col banner">
                                <div class="cafe-pg1">
                                    <a href="javascript:;" onclick="foodShow()">
                                        <h1>FOOD</h1>
                                    </a>
                                    <img src="images/cafe-pg.svg" alt="">
                                    <a href="javascript:;" onclick="drinkShow()">
                                        <h1>DRINKS</h1>
                                    </a>
                                </div>
                                <div>
                                    <a href="javascript:;" class="btn2">Download PDF</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="food-sec" id="food">
                    <div class="row justify-content-center align-items-center flex-column">
                        <div class="col-12">
                            <div class="cafe-col">
                                <h1>yum cha</h1>
                                <div class="with-plus">
                                    <a href="" type="button" class="" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        <h2>MOCHI
                                            <span>GF, VG</span>
                                        </h2>
                                        <h6>Muffin Pastry, with Seasonal Fruit</h6>
                                    </a>
                                    <i class="fa-solid fa-plus"></i>
                                </div>
                                <div class="with-plus">
                                    <a href="" type="button" class="" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        <h2>LOAF
                                            <span>GF</span>
                                        </h2>
                                        <h6>Muffin Pastry, with Seasonal Fruit</h6>
                                    </a>
                                    <i class="fa-solid fa-plus"></i>
                                </div>
                                <a href="" type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <h2>PARFAIT
                                        <span>GF, VG</span>
                                    </h2>
                                    <h6>Muffin Pastry, with Seasonal Fruit</h6>
                                </a>
                                <a href="" type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <h2>TOAST
                                        <span>VG</span>
                                    </h2>
                                    <h6>Muffin Pastry, with Seasonal Fruit</h6>
                                </a>
                            </div>
                        </div>
                        <div class="div-desh"></div>
                        <div class="col-12">
                            <div class="cafe-col">
                                <a href="" type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <h2>Vegatables
                                        <span>V</span>
                                    </h2>
                                    <h6>Muffin Pastry, with Seasonal Fruit</h6>
                                </a>
                                <a href="" type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <h2>Cabbage
                                        <span>GF, V</span>
                                    </h2>
                                    <h6>Muffin Pastry, with Seasonal Fruit</h6>
                                </a>
                                <a href="" type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <h2>Mushroom
                                        <span>GF, VG</span>
                                    </h2>
                                    <h6>Muffin Pastry, with Seasonal Fruit</h6>
                                </a>
                                <a href="" type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <h2>Broccoli
                                        <span>GF, V</span>
                                    </h2>
                                    <h6>Muffin Pastry, with Seasonal Fruit</h6>
                                </a>
                                <a href="" type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <h2>Salmon
                                    </h2>
                                    <h6>Tomato, Egg, Chili Oil, Scallion Bing</h6>
                                </a>
                                <a href="" type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <h2>Chicken
                                    </h2>
                                    <h6>Tomato, Egg, Chili Oil, Scallion Bing</h6>
                                </a>
                                <a href="" type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <h2>Bing
                                    </h2>
                                    <h6>Tomato, Egg, Chili Oil, Scallion Bing</h6>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-lg-8">
                            <div class="cafe-col">
                                <h1 class="mb-4">CONGEE</h1>
                                <a href="" type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <h2>Mother & The Wolf
                                    </h2>
                                    <h6>Chicken Congee, Egg, Radish, Fried Shallots, Green Onions, XO Sauce, Pork Floss,
                                        White Pepper, Youtiao</h6>
                                </a>
                                <a href="" type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <h2>Owl & The Grasshopper
                                        <span>GF, VG</span>
                                    </h2>
                                    <h6>Chicken Congee, Egg, Radish, Fried Shallots, Green Onions, XO Sauce, Pork Floss,
                                        White Pepper, Youtiao</h6>
                                </a>
                                <a href="" type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <h2>North Wind & The Sun
                                        <span>GF</span>
                                    </h2>
                                    <h6>Chicken Congee, Egg, Radish, Fried Shallots, Green Onions, XO Sauce, Pork Floss,
                                        White Pepper, Youtiao</h6>
                                </a>
                                <a href="" type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <h2>The Goose & The Golden Egg
                                        <span>GF</span>
                                    </h2>
                                    <h6>Chicken Congee, Egg, Radish, Fried Shallots, Green Onions, XO Sauce, Pork Floss,
                                        White Pepper, Youtiao</h6>
                                </a>
                            </div>
                            <div class="col-12">
                                <div class="text-center drint-btn">
                                    <a href="javascript:;" onclick="drinkShow()" class="btn2">Drink</a>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-12 col-lg-4">
                            <div class="cafe-col">
                                <h1>CONGEE</h1>
                                <a href="" type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <h2>Owl & The Grasshopper
                                        <span>GF, VG</span>
                                    </h2>
                                    <h6>Muffin Pastry, with Seasonal Fruit</h6>
                                </a>
                                <a href="" type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <h2>Owl & The Grasshopper
                                        <span>GF, VG</span>
                                    </h2>
                                    <h6>Muffin Pastry, with Seasonal Fruit</h6>
                                </a>
                                <a href="" type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <h2>Owl & The Grasshopper
                                        <span>GF, VG</span>
                                    </h2>
                                    <h6>Muffin Pastry, with Seasonal Fruit</h6>
                                </a>
                                <a href="" type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <h2>Owl & The Grasshopper
                                        <span>GF, VG</span>
                                    </h2>
                                    <h6>Muffin Pastry, with Seasonal Fruit</h6>
                                </a>
                                <a href="" type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <h2>Owl & The Grasshopper
                                        <span>GF, VG</span>
                                    </h2>
                                    <h6>Muffin Pastry, with Seasonal Fruit</h6>
                                </a>
                                <a href="" type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <h2>Owl & The Grasshopper
                                        <span>GF, VG</span>
                                    </h2>
                                    <h6>Muffin Pastry, with Seasonal Fruit</h6>
                                </a>
                                <h1>teas</h1>
                                <a href="" type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <h2>Owl & The Grasshopper
                                        <span>GF, VG</span>
                                    </h2>
                                    <h6>Muffin Pastry, with Seasonal Fruit</h6>
                                </a>
    
                                <a href="" type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <h2>Owl & The Grasshopper
                                        <span>GF, VG</span>
                                    </h2>
                                    <h6>Muffin Pastry, with Seasonal Fruit</h6>
                                </a>
                                <a href="" type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <h2>Owl & The Grasshopper
                                        <span>GF, VG</span>
                                    </h2>
                                    <h6>Muffin Pastry, with Seasonal Fruit</h6>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="cafe-col">
                                <h1>LOOSE LEAF</h1>
                                <a href="" type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <h2>Owl & The Grasshopper
                                        <span>GF, VG</span>
                                    </h2>
                                    <h6>Muffin Pastry, with Seasonal Fruit</h6>
                                </a>
                                <a href="" type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <h2>Owl & The Grasshopper
                                        <span>GF, VG</span>
                                    </h2>
                                    <h6>Muffin Pastry, with Seasonal Fruit</h6>
                                </a>
                                <a href="" type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <h2>Owl & The Grasshopper
                                        <span>GF, VG</span>
                                    </h2>
                                    <h6>Muffin Pastry, with Seasonal Fruit</h6>
                                </a>
                                <a href="" type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <h2>Owl & The Grasshopper
                                        <span>GF, VG</span>
                                    </h2>
                                    <h6>Muffin Pastry, with Seasonal Fruit</h6>
                                </a>
                                <a href="" type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <h2>Owl & The Grasshopper
                                        <span>GF, VG</span>
                                    </h2>
                                    <h6>Muffin Pastry, with Seasonal Fruit</h6>
                                </a>
                                <a href="" type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <h2>Owl & The Grasshopper
                                        <span>GF, VG</span>
                                    </h2>
                                    <h6>Muffin Pastry, with Seasonal Fruit</h6>
                                </a>
                                <a href="" type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <h2>Owl & The Grasshopper
                                        <span>GF, VG</span>
                                    </h2>
                                    <h6>Muffin Pastry, with Seasonal Fruit</h6>
                                </a>
                                <a href="" type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <h2>Owl & The Grasshopper
                                        <span>GF, VG</span>
                                    </h2>
                                    <h6>Muffin Pastry, with Seasonal Fruit</h6>
                                </a>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="drinks-sec" id="drinks" style="display: none;">
                    <div class="row justify-content-center align-items-center flex-column">
                        <div class="col-12 col-lg-6">
                            <div class="cafe-col">
                                <h1>LOOSE LEAF</h1>
                                <div class="with-plus">
                                    <a href="" type="button" class="" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        <h2>Green Tea
                                        </h2>
                                        <h6>Origins</h6>
                                    </a>
                                </div>
                                <div class="with-plus">
                                    <a href="" type="button" class="" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        <h2>Black Tea
                                        </h2>
                                        <h6>Focusing Oolong Tea</h6>
                                    </a>
                                </div>
                                <a href="" type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <h2>PU`ER
                                    </h2>
                                    <h6>Detoxing PU`ER</h6>
                                </a>
                                <a href="" type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <h2>Chrysanthemum
                                    </h2>
                                    <h6>Detoxing PU`ER</h6>
                                </a>
                            </div>
                        </div>
                        <div class="div-desh"></div>
                        <div class="col-12 col-lg-5">
                            <div class="cafe-col">
                                <a href="" type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <h1>LATTES
                                    </h1>
                                </a>
                                <a href="" type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <h2>Macha Based
                                    </h2>
                                </a>
                                <a href="" type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <h2>Coffee Based
                                    </h2>
                                </a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="text-center drint-btn">
                                <a href="javascript:;" onclick="foodShow()" class="btn2">Food</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- cafe pg end -->

<!-- get discounts start  -->
<section class="get-discounts">
    <div class="container-fluid p-0">
        <div class="row ">
            <div class="col-12 col-lg-6 pe-0">
                <div class="discount3-img">
                    <img class="img-fluid" src="images/discount3.png" alt="">
                </div>
            </div>
            <div class="col-12 col-lg-6 ps-0">
                <div class="discount-txt discount-txt3">
                    <h4><a href="members.php">Become A Resident<i class="fa-solid fa-arrow-right-long"></i></a></h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate sequi iusto natus ipsa
                        cumque? Iure ratione harum unde quos id.</p>
                    <ul>
                        <li>
                            <i class="fa-light fa-heart"></i>
                            <div>
                                <h6>lorem ipsum dolor</h6>
                                <p>Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet </p>
                            </div>
                        </li>
                        <li>
                            <i class="fa-light fa-star"></i>
                            <div>
                                <h6>lorem ipsum dolor</h6>
                                <p>Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet </p>
                            </div>
                        </li>
                        <li>
                            <i class="fa-light fa-user"></i>
                            <div>
                                <h6>lorem ipsum dolor</h6>
                                <p>Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- get discounts end  -->


<!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-toggle="modal" aria-label="Close">
                <i class="fa-solid fa-xmark"></i>
            </button>
            <div class="modal-body">
                <div class="row align-items-start">
                    <div class="col-12 col-lg-5">
                        <div class="modal-img">
                            <img src="images/modal1.png" alt="">
                        </div>
                    </div>
                    <div class="col-12 col-lg-7">
                        <div class="modal-desc">
                            <h1>Roasted Shrimps</h1>
                            <ul class="ratings-sec">
                                <li class="ratings">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star no"></i>
                                    <span>4.0</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-message"></i>
                                    <p> 235 Reviews</p>
                                </li>
                                <li>
                                    <i class="fa-solid fa-thumbs-up"></i>
                                    <p> 456k Like</p>
                                </li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure aliquid quia eaque
                                reiciendis impedit eum omnis nostrum rem placeat, enim ipsum ex, sit unde. Quibusdam
                                maiores iure ipsum itaque ut.
                            </p>
                            <ul class="modal-price">
                                <li>
                                    <h1>
                                        $15,63
                                    </h1>
                                </li>
                                <li>
                                    <h2>
                                        $16,99
                                    </h2>
                                </li>
                                <li>
                                    <h3>
                                        2%
                                    </h3>
                                </li>
                            </ul>
                            <div class="modal-cart-btn">
                                <ul class="quant">
                                    <li><button onclick="decrementCounter()"><i class="fa-solid fa-minus"></i></button>
                                    </li>
                                    <li class="counte">0</li>
                                    <li><button onclick="incrementCounter()"><i class="fa-solid fa-plus"></i></button>
                                    </li>
                                </ul>
                                <a href="#" class="btn5"><i class="fa-regular fa-cart-shopping"></i> add to cart</a>
                            </div>


                        </div>
                    </div>
                    <div class="col-12 col-lg-12">
                        <div class="more-imgs">
                            <ul>
                                <li>
                                    <img src="images/more1.png" alt="">
                                </li>
                                <li>
                                    <img src="images/more2.png" alt="">
                                </li>
                                <li>
                                    <img src="images/more3.png" alt="">
                                </li>
                                <li>
                                    <img src="images/more4.png" alt="">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->


<?php
include 'includes/footer.php';
$page = 'home';
?>