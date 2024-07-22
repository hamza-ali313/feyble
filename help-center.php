<?php
include 'includes/header.php';
$page = 'home';
?>
<section class="host_event_banner help_center">
    <div class="container">
        <div class="he_banner">
            <h2>Hello, how can we help you</h2>

            <form>
                <div class="searchbox-wrap">
                    <input type="text" placeholder="Search for something...">
                    <button><span>Send</span> </button>
                </div>
            </form>
        </div>
    </div>
</section>
<section class="tabs-help">
    <div class="container">
        <div class="row">
            <div class="ml-auto col-12 mr-auto">
                <div class="card">
                    <div class="card-header">
                        <ul class="nav nav-tabs justify-content-around" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                    aria-selected="true">
                                    <i class="fa-regular fa-font-awesome"></i><span>Home</span>
                                </button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-profile" type="button" role="tab"
                                    aria-controls="pills-profile" aria-selected="false"><i
                                        class="fa-regular fa-font-awesome"></i><span>Profile</span></button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-contact" type="button" role="tab"
                                    aria-controls="pills-contact" aria-selected="false"><i
                                        class="fa-regular fa-font-awesome"></i><span>Contact</span></button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" id="pills-setting-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-setting" type="button" role="tab"
                                    aria-controls="pills-setting" aria-selected="false"><i
                                        class="fa-regular fa-font-awesome"></i><span>Setting</span></button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <!-- Tab panes -->
                        <div class="tab-content text-center">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab">
                                <section class="s10">
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col-md-10 wow " style="visibility: visible; ">
                                                <div class="accordion" id="accordionExample">
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingOne">
                                                            <button class="accordion-button" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                                aria-expanded="true" aria-controls="collapseOne">
                                                                Accordion Item #1
                                                            </button>
                                                        </h2>
                                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                                            aria-labelledby="headingOne"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Odit excepturi, aspernatur
                                                                assumenda eligendi dicta molestias officia at quasi iste
                                                                sit. Perspiciatis, sit dolore
                                                                voluptas quidem vero consequuntur eveniet deleniti
                                                                quibusdam nesciunt saepe quas
                                                                voluptates voluptatem. Necessitatibus aliquid labore
                                                                accusantium atque sit magni. Ipsam
                                                                nam illum consequatur ipsum quasi ex facilis?
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingTwo">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                                aria-expanded="false" aria-controls="collapseTwo">
                                                                Accordion Item #2
                                                            </button>
                                                        </h2>
                                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                                            aria-labelledby="headingTwo"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Odit excepturi, aspernatur
                                                                assumenda eligendi dicta molestias officia at quasi iste
                                                                sit. Perspiciatis, sit dolore
                                                                voluptas quidem vero consequuntur eveniet deleniti
                                                                quibusdam nesciunt saepe quas
                                                                voluptates voluptatem. Necessitatibus aliquid labore
                                                                accusantium atque sit magni. Ipsam
                                                                nam illum consequatur ipsum quasi ex facilis?
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingThree">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#collapseThree" aria-expanded="false"
                                                                aria-controls="collapseThree">
                                                                Accordion Item #3
                                                            </button>
                                                        </h2>
                                                        <div id="collapseThree" class="accordion-collapse collapse"
                                                            aria-labelledby="headingThree"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Odit excepturi, aspernatur
                                                                assumenda eligendi dicta molestias officia at quasi iste
                                                                sit. Perspiciatis, sit dolore
                                                                voluptas quidem vero consequuntur eveniet deleniti
                                                                quibusdam nesciunt saepe quas
                                                                voluptates voluptatem. Necessitatibus aliquid labore
                                                                accusantium atque sit magni. Ipsam
                                                                nam illum consequatur ipsum quasi ex facilis?
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="tab-pane fade show " id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab">
                                <section class="s10">
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col-md-10 wow " style="visibility: visible; ">
                                                <div class="accordion" id="accordionExample">
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingOne">
                                                            <button class="accordion-button" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                                aria-expanded="true" aria-controls="collapseOne">
                                                                Accordion Item #1
                                                            </button>
                                                        </h2>
                                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                                            aria-labelledby="headingOne"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Odit excepturi, aspernatur
                                                                assumenda eligendi dicta molestias officia at quasi iste
                                                                sit. Perspiciatis, sit dolore
                                                                voluptas quidem vero consequuntur eveniet deleniti
                                                                quibusdam nesciunt saepe quas
                                                                voluptates voluptatem. Necessitatibus aliquid labore
                                                                accusantium atque sit magni. Ipsam
                                                                nam illum consequatur ipsum quasi ex facilis?
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingTwo">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                                aria-expanded="false" aria-controls="collapseTwo">
                                                                Accordion Item #2
                                                            </button>
                                                        </h2>
                                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                                            aria-labelledby="headingTwo"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Odit excepturi, aspernatur
                                                                assumenda eligendi dicta molestias officia at quasi iste
                                                                sit. Perspiciatis, sit dolore
                                                                voluptas quidem vero consequuntur eveniet deleniti
                                                                quibusdam nesciunt saepe quas
                                                                voluptates voluptatem. Necessitatibus aliquid labore
                                                                accusantium atque sit magni. Ipsam
                                                                nam illum consequatur ipsum quasi ex facilis?
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingThree">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#collapseThree" aria-expanded="false"
                                                                aria-controls="collapseThree">
                                                                Accordion Item #3
                                                            </button>
                                                        </h2>
                                                        <div id="collapseThree" class="accordion-collapse collapse"
                                                            aria-labelledby="headingThree"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Odit excepturi, aspernatur
                                                                assumenda eligendi dicta molestias officia at quasi iste
                                                                sit. Perspiciatis, sit dolore
                                                                voluptas quidem vero consequuntur eveniet deleniti
                                                                quibusdam nesciunt saepe quas
                                                                voluptates voluptatem. Necessitatibus aliquid labore
                                                                accusantium atque sit magni. Ipsam
                                                                nam illum consequatur ipsum quasi ex facilis?
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="tab-pane fade show " id="pills-contact" role="tabpanel"
                                aria-labelledby="pills-contact-tab">
                                <section class="s10">
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col-md-12 wow" style="visibility: visible; ">
                                                <div class="accordion" id="accordionExample">
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingOne">
                                                            <button class="accordion-button" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                                aria-expanded="true" aria-controls="collapseOne">
                                                                Accordion Item #1
                                                            </button>
                                                        </h2>
                                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                                            aria-labelledby="headingOne"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Odit excepturi, aspernatur
                                                                assumenda eligendi dicta molestias officia at quasi iste
                                                                sit. Perspiciatis, sit dolore
                                                                voluptas quidem vero consequuntur eveniet deleniti
                                                                quibusdam nesciunt saepe quas
                                                                voluptates voluptatem. Necessitatibus aliquid labore
                                                                accusantium atque sit magni. Ipsam
                                                                nam illum consequatur ipsum quasi ex facilis?
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingTwo">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                                aria-expanded="false" aria-controls="collapseTwo">
                                                                Accordion Item #2
                                                            </button>
                                                        </h2>
                                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                                            aria-labelledby="headingTwo"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Odit excepturi, aspernatur
                                                                assumenda eligendi dicta molestias officia at quasi iste
                                                                sit. Perspiciatis, sit dolore
                                                                voluptas quidem vero consequuntur eveniet deleniti
                                                                quibusdam nesciunt saepe quas
                                                                voluptates voluptatem. Necessitatibus aliquid labore
                                                                accusantium atque sit magni. Ipsam
                                                                nam illum consequatur ipsum quasi ex facilis?
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingThree">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#collapseThree" aria-expanded="false"
                                                                aria-controls="collapseThree">
                                                                Accordion Item #3
                                                            </button>
                                                        </h2>
                                                        <div id="collapseThree" class="accordion-collapse collapse"
                                                            aria-labelledby="headingThree"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Odit excepturi, aspernatur
                                                                assumenda eligendi dicta molestias officia at quasi iste
                                                                sit. Perspiciatis, sit dolore
                                                                voluptas quidem vero consequuntur eveniet deleniti
                                                                quibusdam nesciunt saepe quas
                                                                voluptates voluptatem. Necessitatibus aliquid labore
                                                                accusantium atque sit magni. Ipsam
                                                                nam illum consequatur ipsum quasi ex facilis?
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="tab-pane fade show " id="pills-setting" role="tabpanel"
                                aria-labelledby="pills-setting-tab">
                                <section class="s10">
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col-md-10 wow " style="visibility: visible; ">
                                                <div class="accordion" id="accordionExample">
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingOne">
                                                            <button class="accordion-button" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                                aria-expanded="true" aria-controls="collapseOne">
                                                                Accordion Item #1
                                                            </button>
                                                        </h2>
                                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                                            aria-labelledby="headingOne"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Odit excepturi, aspernatur
                                                                assumenda eligendi dicta molestias officia at quasi iste
                                                                sit. Perspiciatis, sit dolore
                                                                voluptas quidem vero consequuntur eveniet deleniti
                                                                quibusdam nesciunt saepe quas
                                                                voluptates voluptatem. Necessitatibus aliquid labore
                                                                accusantium atque sit magni. Ipsam
                                                                nam illum consequatur ipsum quasi ex facilis?
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingTwo">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                                aria-expanded="false" aria-controls="collapseTwo">
                                                                Accordion Item #2
                                                            </button>
                                                        </h2>
                                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                                            aria-labelledby="headingTwo"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Odit excepturi, aspernatur
                                                                assumenda eligendi dicta molestias officia at quasi iste
                                                                sit. Perspiciatis, sit dolore
                                                                voluptas quidem vero consequuntur eveniet deleniti
                                                                quibusdam nesciunt saepe quas
                                                                voluptates voluptatem. Necessitatibus aliquid labore
                                                                accusantium atque sit magni. Ipsam
                                                                nam illum consequatur ipsum quasi ex facilis?
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingThree">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#collapseThree" aria-expanded="false"
                                                                aria-controls="collapseThree">
                                                                Accordion Item #3
                                                            </button>
                                                        </h2>
                                                        <div id="collapseThree" class="accordion-collapse collapse"
                                                            aria-labelledby="headingThree"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                                Odit excepturi, aspernatur
                                                                assumenda eligendi dicta molestias officia at quasi iste
                                                                sit. Perspiciatis, sit dolore
                                                                voluptas quidem vero consequuntur eveniet deleniti
                                                                quibusdam nesciunt saepe quas
                                                                voluptates voluptatem. Necessitatibus aliquid labore
                                                                accusantium atque sit magni. Ipsam
                                                                nam illum consequatur ipsum quasi ex facilis?
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <section class="s10">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 wow fadeInRight" data-wow-delay="0.25s" data-wow-duration="1.75s"
                style="visibility: visible; ">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Accordion Item #1
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit excepturi, aspernatur
                                assumenda eligendi dicta molestias officia at quasi iste sit. Perspiciatis, sit dolore
                                voluptas quidem vero consequuntur eveniet deleniti quibusdam nesciunt saepe quas
                                voluptates voluptatem. Necessitatibus aliquid labore accusantium atque sit magni. Ipsam
                                nam illum consequatur ipsum quasi ex facilis?
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Accordion Item #2
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit excepturi, aspernatur
                                assumenda eligendi dicta molestias officia at quasi iste sit. Perspiciatis, sit dolore
                                voluptas quidem vero consequuntur eveniet deleniti quibusdam nesciunt saepe quas
                                voluptates voluptatem. Necessitatibus aliquid labore accusantium atque sit magni. Ipsam
                                nam illum consequatur ipsum quasi ex facilis?
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Accordion Item #3
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit excepturi, aspernatur
                                assumenda eligendi dicta molestias officia at quasi iste sit. Perspiciatis, sit dolore
                                voluptas quidem vero consequuntur eveniet deleniti quibusdam nesciunt saepe quas
                                voluptates voluptatem. Necessitatibus aliquid labore accusantium atque sit magni. Ipsam
                                nam illum consequatur ipsum quasi ex facilis?
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->


<?php
include 'includes/footer.php';
$page = 'home';
?>