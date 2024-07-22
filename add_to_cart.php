<?php
include 'includes/header.php';
$page = 'home';
?>

<!-- <section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="shopping-cart">
                    <div class="title">
                        Shopping Bag
                    </div>

                    <div class="item">
                        <div class="buttons">
                            <span class="delete-btn"></span>
                            <span class="like-btn"></span>
                        </div>

                        <div class="image">
                            <img src="images/item-1.png" alt="" />
                        </div>

                        <div class="description">
                            <span>Common Projects</span>
                            <span>Bball High</span>
                            <span>White</span>
                        </div>

                        <div class="quantity">
                            <button class="plus-btn" type="button" name="button">
                                <img src="images/plus.svg" alt="" />
                            </button>
                            <input type="text" name="name" value="1">
                            <button class="minus-btn" type="button" name="button">
                                <img src="images/minus.svg" alt="" />
                            </button>
                        </div>

                        <div class="total-price">$549</div>
                    </div>

                    <div class="item">
                        <div class="buttons">
                            <span class="delete-btn"></span>
                            <span class="like-btn"></span>
                        </div>

                        <div class="image">
                            <img src="images/item-2.png" alt="" />
                        </div>

                        <div class="description">
                            <span>Maison Margiela</span>
                            <span>Future Sneakers</span>
                            <span>White</span>
                        </div>

                        <div class="quantity">
                            <button class="plus-btn" type="button" name="button">
                                <img src="images/plus.svg" alt="" />
                            </button>
                            <input type="text" name="name" value="1">
                            <button class="minus-btn" type="button" name="button">
                                <img src="images/minus.svg" alt="" />
                            </button>
                        </div>

                        <div class="total-price">$870</div>
                    </div>

                    <div class="item">
                        <div class="buttons">
                            <span class="delete-btn"></span>
                            <span class="like-btn"></span>
                        </div>

                        <div class="image">
                            <img src="images/item-3.png" alt="" />
                        </div>

                        <div class="description">
                            <span>Our Legacy</span>
                            <span>Brushed Scarf</span>
                            <span>Brown</span>
                        </div>

                        <div class="quantity">
                            <button class="plus-btn" type="button" name="button">
                                <img src="images/plus.svg" alt="" />
                            </button>
                            <input type="text" name="name" value="1">
                            <button class="minus-btn" type="button" name="button">
                                <img src="images/minus.svg" alt="" />
                            </button>
                        </div>

                        <div class="total-price">$349</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<section class="cart_section sec_ptb_120 bg_default_gray">
    <div class="container">
        <div class="cart_table">
            <table class="table">
                <thead class="text-uppercase wow fadeInUp" data-wow-delay=".1s"
                    style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="wow fadeInUp" data-wow-delay=".1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <td>
                            <div class="carttable_product_item">
                                <div class="item_image">
                                    <img src="images/img_01.png" alt="image_not_found">
                                </div>
                                <h3 class="item_title">Americano coffee beans</h3>
                            </div>
                        </td>
                        <td><span class="price_text1">$19,00</span></td>
                        <td>
                            <div class="quantity_input">
                                <form>
                                    <button type="button" class="input_number_decrement"
                                        onclick="decrement(this)">–</button>
                                    <input class="input_number" disabled type="text" value="2" readonly>
                                    <button type="button" class="input_number_increment"
                                        onclick="increment(this)">+</button>
                                </form>
                            </div>
                        </td>
                        <td><span class="price_text2">$38.00</span></td>
                        <td>
                            <button type="button" class="remove_btn"><i class="fal fa-times"></i></button>
                        </td>
                    </tr>

                    <tr class="wow fadeInUp" data-wow-delay=".1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <td>
                            <div class="carttable_product_item">
                                <div class="item_image">
                                    <img src="images/img_01.png" alt="image_not_found">
                                </div>
                                <h3 class="item_title">Americano coffee beans</h3>
                            </div>
                        </td>
                        <td><span class="price_text1">$19,00</span></td>
                        <td>
                            <div class="quantity_input">
                                <form>
                                    <button type="button" class="input_number_decrement"
                                        onclick="decrement(this)">–</button>
                                    <input class="input_number" disabled type="text" value="2" readonly>
                                    <button type="button" class="input_number_increment"
                                        onclick="increment(this)">+</button>
                                </form>
                            </div>
                        </td>
                        <td><span class="price_text2">$38.00</span></td>
                        <td>
                            <button type="button" class="remove_btn"><i class="fal fa-times"></i></button>
                        </td>
                    </tr>

                    <tr class="wow fadeInUp" data-wow-delay=".1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <td>
                            <div class="carttable_product_item">
                                <div class="item_image">
                                    <img src="images/img_01.png" alt="image_not_found">
                                </div>
                                <h3 class="item_title">Americano coffee beans</h3>
                            </div>
                        </td>
                        <td><span class="price_text1">$19,00</span></td>
                        <td>
                            <div class="quantity_input">
                                <form>
                                    <button type="button" class="input_number_decrement"
                                        onclick="decrement(this)">–</button>
                                    <input class="input_number" disabled type="text" value="1" readonly>
                                    <button type="button" class="input_number_increment"
                                        onclick="increment(this)">+</button>
                                </form>
                            </div>
                        </td>
                        <td><span class="price_text2">$19.00</span></td>
                        <td>
                            <button type="button" class="remove_btn"><i class="fal fa-times"></i></button>
                        </td>
                    </tr>

                    <tr class="wow fadeInUp" data-wow-delay=".1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <td>
                            <div class="carttable_product_item">
                                <div class="item_image">
                                    <img src="images/img_01.png" alt="image_not_found">
                                </div>
                                <h3 class="item_title">Americano coffee beans</h3>
                            </div>
                        </td>
                        <td><span class="price_text1">$19,00</span></td>
                        <td>
                            <div class="quantity_input">
                                <form>
                                    <button type="button" class="input_number_decrement"
                                        onclick="decrement(this)">–</button>
                                    <input class="input_number" disabled type="text" value="1" readonly>
                                    <button type="button" class="input_number_increment"
                                        onclick="increment(this)">+</button>
                                </form>
                            </div>
                        </td>
                        <td><span class="price_text2">$19.00</span></td>
                        <td>
                            <button type="button" class="remove_btn"><i class="fal fa-times"></i></button>
                        </td>
                    </tr>

                    <tr class="wow fadeInUp" data-wow-delay=".1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <td>
                            <div class="carttable_product_item">
                                <div class="item_image">
                                    <img src="images/img_01.png" alt="image_not_found">
                                </div>
                                <h3 class="item_title">Americano coffee beans</h3>
                            </div>
                        </td>
                        <td><span class="price_text1">$19,00</span></td>
                        <td>
                            <div class="quantity_input">
                                <form>
                                    <button type="button" class="input_number_decrement"
                                        onclick="decrement(this)">–</button>
                                    <input class="input_number" disabled type="text" value="1" readonly>
                                    <button type="button" class="input_number_increment"
                                        onclick="increment(this)">+</button>
                                </form>
                            </div>
                        </td>
                        <td><span class="price_text2">$19.00</span></td>
                        <td>
                            <button type="button" class="remove_btn"><i class="fal fa-times"></i></button>
                        </td>
                    </tr>

                    <tr class="wow fadeInUp" data-wow-delay=".1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <td>
                            <div class="carttable_product_item">
                                <div class="item_image">
                                    <img src="images/img_01.png" alt="image_not_found">
                                </div>
                                <h3 class="item_title">Americano coffee beans</h3>
                            </div>
                        </td>
                        <td><span class="price_text1">$19,00</span></td>
                        <td>
                            <div class="quantity_input">
                                <form>
                                    <button type="button" class="input_number_decrement"
                                        onclick="decrement(this)">–</button>
                                    <input class="input_number" disabled type="text" value="1" readonly>
                                    <button type="button" class="input_number_increment"
                                        onclick="increment(this)">+</button>
                                </form>
                            </div>
                        </td>
                        <td><span class="price_text2">$19.00</span></td>
                        <td>
                            <button type="button" class="remove_btn"><i class="fal fa-times"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <ul class="carttable_footer ul_li_right wow fadeInUp" data-wow-delay=".1s"
            style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <li>
                <div class="total_price text-uppercase">
                    <span>Subtotal</span>
                    <span id="subtotal">$0</span>
                </div>
            </li>
            <li>
                <div class="total_price text-uppercase">
                    <span>Total</span>
                    <span id="total">$0</span>
                </div>
            </li>
            <li>
                <a class="btn btn_primary text-uppercase" href="shop_checkout.html">Proceed to Checkout</a>
            </li>
        </ul>
    </div>
</section>
<!-- <script>
    $('.like-btn').on('click', function () {
        $(this).toggleClass('is-active');
    });

    $('.minus-btn').on('click', function (e) {
        e.preventDefault();
        var $this = $(this);
        var $input = $this.closest('div').find('input');
        var value = parseInt($input.val());

        if (value > 1) {
            value = value - 1;
        } else {
            value = 0;
        }

        $input.val(value);
    });

    $('.plus-btn').on('click', function (e) {
        e.preventDefault();
        var $this = $(this);
        var $input = $this.closest('div').find('input');
        var value = parseInt($input.val());

        if (value < 100) {
            value = value + 1;
        } else {
            value = 100;
        }

        $input.val(value);
    });
</script> -->
<?php
include 'includes/footer.php';
$page = 'home';
?>

<style>
    /* cart page - start
================================================== */
    .cart_table table {
        border: none;
        margin-bottom: 30px;
        color: #7c7770;
        vertical-align: middle;
    }

    .cart_table thead {
        font-size: 15px;
        font-weight: 700;
        border-bottom: none;
        color: #1B1B1B;
    }

    .cart_table thead tr {
        margin: 0px;
        background-color: transparent;
    }

    .cart_table th {
        padding: 0px 8px;
        border-bottom: none;
        font-size: 30px;
        color: #e2a239;
        font-family: "Copperplate-Gothic";
        text-transform: capitalize;
    }

    .cart_table tr {
        display: flex;
        margin-top: 30px;
        align-items: center;
    }

    .cart_table th,
    .cart_table td {
        border: none;
    }

    .cart_table th:nth-child(1),
    .cart_table td:nth-child(1) {
        width: 40%;
    }

    .cart_table th:nth-child(2),
    .cart_table th:nth-child(3),
    .cart_table th:nth-child(4),
    .cart_table td:nth-child(2),
    .cart_table td:nth-child(3),
    .cart_table td:nth-child(4) {
        width: 20%;
    }

    .cart_table .quantity_input input {
        width: 30px;
        border: none;
        text-align: center;
        display: inline-block;
        background-color: transparent;
        color: #E2A239;
        font-size: 20px;
    }

    .cart_table .quantity_input input:focus {
        outline: none;
    }

    .cart_table .price_text1,
    .cart_table .price_text2 {
        font-size: 15px;
        font-weight: 700;
        display: inline-block;
    }

    .cart_table .price_text1 {
        color: #E2A239;
    }

    .cart_table .price_text2 {
        color: #E2A239;
    }

    .carttable_product_item {
        display: flex;
        align-items: center;
        gap: 20%;
    }

    .quantity_input button {
        padding: 0px;
        border: none;
        outline: none;
        background: none;
        display: inline-block;
        color: #E2A239;
        font-size: 22px;
    }

    .carttable_product_item .item_image {
        width: 70px;
        height: 70px;
        align-items: center;
        display: inline-flex;
        justify-content: center;
        background-color: #f6f6f6;
    }

    .carttable_product_item .item_image img {
        max-height: 50px;
    }

    .carttable_product_item .remove_btn {
        color: #ff5555;
        font-size: 20px;
        margin: 0px 30px;
    }

    .carttable_product_item .item_title {
        font-size: 15px;
        font-weight: 500;
        margin-bottom: 0px;
        color: #E2A239;
    }

    section.cart_section {
        padding: 80px;
    }

    .carttable_footer {
        margin: -15px;
        justify-content: flex-end;
    }

    .carttable_footer li {
        padding: 15px;
    }

    .ul_li,
    .ul_li_right,
    .ul_li_center {
        margin: 0px;
        padding: 0px;
        display: flex;
        flex-wrap: wrap;
        align-items: center;

    }

    .carttable_footer .btn {
        border-radius: 0px;
        padding: 19px 42px;
        color: #1B1B1B;
        background-color: #E2A239;
    }

    button.remove_btn {
        border: 2px solid #E2A239;
        background-color: transparent;
        color: #E2A239;
        padding: 7px 10px;
        border-radius: 50%;
        font-weight: 700;
        line-height: 0;
    }

    .carttable_footer .total_price {
        line-height: 1;
        font-size: 15px;
        font-weight: 700;
        min-width: 236px;
        align-items: center;
        padding: 22.5px 40px;
        display: inline-flex;
        color: #E2A239;
        border: 2px solid #E2A239;
        justify-content: space-between;
    }

    /* cart item - start */
    .cart_item {
        display: flex;
        position: relative;
        align-items: center;
        padding-right: 25px;
    }

    .cart_item:not(:last-child) {
        margin-bottom: 20px;
    }

    .cart_item .item_image {
        display: block;
        min-width: 70px;
        overflow: hidden;
        border-radius: 3px;
        position: relative;
        margin-right: 10px;
    }

    .cart_item .item_title {
        font-size: 14px;
        font-weight: 500;
        margin-bottom: 10px;
    }

    .cart_item .item_price {
        line-height: 1;
        display: block;
        font-size: 14px;
        font-weight: 600;
        color: #c7a17a;
    }

    .cart_item .remove_btn {
        top: 50%;
        right: 0px;
        color: red;
        width: 20px;
        height: 20px;
        font-size: 12px;
        line-height: 22px;
        text-align: center;
        position: absolute;
        border-radius: 100%;
        background-color: #ffffff;
        transform: translateY(-50%);
        box-shadow: 0px 3px 10px 0px rgba(0, 0, 0, 0.15);
    }

    .cart_item .remove_btn:hover {
        color: #ffffff;
        background-color: red;
    }

    /* cart item - end */
    /* cart sidebar - start */
    .sidebar-menu-wrapper {
        display: block;
    }

    .cart_sidebar {
        top: 0;
        width: 300px;
        right: -320px;
        height: 100vh;
        z-index: 9999;
        position: fixed;
        padding: 50px 20px;
        overflow-y: scroll;
        background-color: #ffffff;
        transition: 0.6s cubic-bezier(1, 0, 0, 1);
    }

    .cart_sidebar .mCustomScrollBox {
        overflow: visible !important;
    }

    .cart_sidebar.active {
        right: 0px;
    }

    .cart_sidebar .close_btn {
        top: 15px;
        right: 20px;
        line-height: 1;
        font-size: 24px;
        position: absolute;
    }

    .cart_sidebar .close_btn:hover {
        color: red;
    }

    .cart_sidebar .heading_title {
        line-height: 1;
        font-size: 18px;
        margin-bottom: 20px;
        padding-bottom: 15px;
        border-bottom: 1px solid #f6f6f6;
    }

    .cart_sidebar .heading_title span {
        color: #c7a17a;
    }

    .cart_sidebar .total_price {
        display: flex;
        font-size: 16px;
        font-weight: 500;
        margin-top: 20px;
        padding: 10px 0px;
        margin-bottom: 15px;
        align-items: center;
        color: #1B1B1B;
        border-top: 1px solid #f6f6f6;
        border-bottom: 1px solid #f6f6f6;
        justify-content: space-between;
    }

    .cart_sidebar .total_price span:first-child {
        font-family: "Oswald", sans-serif;
    }

    .cart_sidebar .total_price span:last-child {
        color: #c7a17a;
    }

    .cart_sidebar .btns_group {
        margin: -5px;
    }

    .cart_sidebar .btns_group li {
        width: 50%;
        padding: 5px;
    }

    .cart_sidebar .btn {
        display: block;
        font-size: 12px;
        padding: 17px 20px;
    }

    .cart_sidebar .btn.btn_border {
        padding: 15px 20px;
    }

    .cart_sidebar::-webkit-scrollbar {
        width: 0px;
    }

    .cart_sidebar_overlay {
        top: 0px;
        left: 0px;
        right: 0px;
        bottom: 0px;
        opacity: 0;
        z-index: 999;
        width: 100vw;
        height: 100vh;
        display: none;
        position: fixed;
        background: rgba(0, 0, 0, 0.8);
        transition: 0.6s cubic-bezier(0.25, 1, 0.5, 1);
    }

    .cart_sidebar_overlay.active {
        opacity: 1;
        display: block;
    }

</style>
<script>
    updateSubtotal(inputElement)
    
</script>