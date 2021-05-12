<?php
require_once $level . "config.php";
$sql = "SELECT * FROM PHONES ";
$query = mysqli_query($connect, $sql);
?>
<main id="main">
    <section class="section cart__area">
        <div class="container">
            <div class="responsive__cart-area">
                <form class="cart__form">
                    <div class="cart__table table-responsive">
                        <table width="100%" class="table">
                            <thead>
                                <tr>
                                    <th>PRODUCT</th>
                                    <th>NAME</th>
                                    <th>UNIT PRICE</th>
                                    <th>QUANTITY</th>
                                    <th>DESCRIPTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                while ($row = mysqli_fetch_assoc($query)) { ?>
                                    <tr>
                                        <td class="product__thumbnail">
                                            <a href="#">
                                                <img src="<?php echo $level . imgIPhone_path . $row['image']; ?>" width="100px" height="100px" alt="">
                                            </a>
                                        </td>
                                        <td class="product__name">
                                            <?php echo $row['name_phone']; ?>
                                            <br><br>
                                            <small>White/6.25</small>
                                        </td>
                                        <td class="product__price">
                                            <div class="price">
                                                <span class="new__price"><?php echo $row['price']; ?></span>
                                            </div>
                                    <th>TOTAL</th>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td class="product__thumbnail">
                                        <a href="#">
                                            <img src="<?php echo $level.imgIPhone_path."iphone6.jpeg"?>" alt="">
                                        </a>
                                    </td>
                                    <td class="product__name">
                                        <a href="#">Apple iPhone 11</a>
                                        <br><br>
                                        <small>White/6.25</small>
                                    </td>
                                    <td class="product__price">
                                        <div class="price">
                                            <span class="new__price">$250.99</span>
                                        </div>
                                    </td>
                                    <td class="product__quantity">
                                        <div class="input-counter">
                                            <div>
                                                <span class="minus-btn">
                                                    <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="minus" class="svg-inline--fa fa-minus fa-w-14"
                                                        role="img" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 448 512">
                                                        <path fill="currentColor"
                                                            d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <input type="text" min="1" value="1" max="10" class="counter-btn">
                                                <span class="plus-btn">
                                                    <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="plus" class="svg-inline--fa fa-plus fa-w-14"
                                                        role="img" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 448 512">
                                                        <path fill="currentColor"
                                                            d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="product__subtotal">
                                        <div class="price">
                                            <span class="new__price">$250.99</span>
                                        </div>
                                        <a href="#" class="remove__cart-item">
                                            <svg aria-hidden="true" focusable="false" data-prefix="far"
                                                data-icon="trash-alt" class="svg-inline--fa fa-trash-alt fa-w-14"
                                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <path fill="currentColor"
                                                    d="M268 416h24a12 12 0 0 0 12-12V188a12 12 0 0 0-12-12h-24a12 12 0 0 0-12 12v216a12 12 0 0 0 12 12zM432 80h-82.41l-34-56.7A48 48 0 0 0 274.41 0H173.59a48 48 0 0 0-41.16 23.3L98.41 80H16A16 16 0 0 0 0 96v16a16 16 0 0 0 16 16h16v336a48 48 0 0 0 48 48h288a48 48 0 0 0 48-48V128h16a16 16 0 0 0 16-16V96a16 16 0 0 0-16-16zM171.84 50.91A6 6 0 0 1 177 48h94a6 6 0 0 1 5.15 2.91L293.61 80H154.39zM368 464H80V128h288zm-212-48h24a12 12 0 0 0 12-12V188a12 12 0 0 0-12-12h-24a12 12 0 0 0-12 12v216a12 12 0 0 0 12 12z">
                                                </path>
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="product__thumbnail">
                                        <a href="#">
                                            <img src="<?php echo $level.imgSS_path."samsung5.jpeg"?>" alt="">
                                        </a>
                                    </td>
                                    <td class="product__name">
                                        <a href="#">Apple iPhone 11</a>
                                        <br><br>
                                        <small>White/6.25</small>
                                    </td>
                                    <td class="product__price">
                                        <div class="price">
                                            <span class="new__price">$250.99</span>
                                        </div>
                                    </td>
                                    <td class="product__quantity">
                                        <div class="input-counter">
                                            <div>
                                                <span class="minus-btn">
                                                    <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="minus" class="svg-inline--fa fa-minus fa-w-14"
                                                        role="img" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 448 512">
                                                        <path fill="currentColor"
                                                            d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <input type="text" min="1" value="1" max="10" class="counter-btn">
                                                <span class="plus-btn">
                                                    <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="plus" class="svg-inline--fa fa-plus fa-w-14"
                                                        role="img" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 448 512">
                                                        <path fill="currentColor"
                                                            d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="product__subtotal">
                                        <div class="price">
                                            <span class="new__price">$250.99</span>
                                        </div>
                                        <a href="#" class="remove__cart-item">
                                            <svg aria-hidden="true" focusable="false" data-prefix="far"
                                                data-icon="trash-alt" class="svg-inline--fa fa-trash-alt fa-w-14"
                                                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <path fill="currentColor"
                                                    d="M268 416h24a12 12 0 0 0 12-12V188a12 12 0 0 0-12-12h-24a12 12 0 0 0-12 12v216a12 12 0 0 0 12 12zM432 80h-82.41l-34-56.7A48 48 0 0 0 274.41 0H173.59a48 48 0 0 0-41.16 23.3L98.41 80H16A16 16 0 0 0 0 96v16a16 16 0 0 0 16 16h16v336a48 48 0 0 0 48 48h288a48 48 0 0 0 48-48V128h16a16 16 0 0 0 16-16V96a16 16 0 0 0-16-16zM171.84 50.91A6 6 0 0 1 177 48h94a6 6 0 0 1 5.15 2.91L293.61 80H154.39zM368 464H80V128h288zm-212-48h24a12 12 0 0 0 12-12V188a12 12 0 0 0-12-12h-24a12 12 0 0 0-12 12v216a12 12 0 0 0 12 12z">
                                                </path>
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="product__thumbnail">
                                        <a href="#">
                                            <img src="<?php echo $level.imgSS_path."samsung2.jpeg"?>" alt="">
                                        </a>
                                    </td>
                                    <td class="product__name">
                                        <a href="#">Apple iPhone 11</a>
                                        <br><br>
                                        <small>White/6.25</small>
                                    </td>
                                    <td class="product__price">
                                        <div class="price">
                                            <span class="new__price">$250.99</span>
                                        </div>
                                    </td>
                                    <td class="product__quantity">
                                        <div class="input-counter">
                                            <div>
                                                <span class="minus-btn">
                                                    <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="minus" class="svg-inline--fa fa-minus fa-w-14"
                                                        role="img" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 448 512">
                                                        <path fill="currentColor"
                                                            d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <input type="text" min="1" value="1" max="10" class="counter-btn">
                                                <span class="plus-btn">
                                                    <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="plus" class="svg-inline--fa fa-plus fa-w-14"
                                                        role="img" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 448 512">
                                                        <path fill="currentColor"
                                                            d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </div>
                                            <a href="#" class="remove__cart-item">
                                                <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="trash-alt" class="svg-inline--fa fa-trash-alt fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                    <path fill="currentColor" d="M268 416h24a12 12 0 0 0 12-12V188a12 12 0 0 0-12-12h-24a12 12 0 0 0-12 12v216a12 12 0 0 0 12 12zM432 80h-82.41l-34-56.7A48 48 0 0 0 274.41 0H173.59a48 48 0 0 0-41.16 23.3L98.41 80H16A16 16 0 0 0 0 96v16a16 16 0 0 0 16 16h16v336a48 48 0 0 0 48 48h288a48 48 0 0 0 48-48V128h16a16 16 0 0 0 16-16V96a16 16 0 0 0-16-16zM171.84 50.91A6 6 0 0 1 177 48h94a6 6 0 0 1 5.15 2.91L293.61 80H154.39zM368 464H80V128h288zm-212-48h24a12 12 0 0 0 12-12V188a12 12 0 0 0-12-12h-24a12 12 0 0 0-12 12v216a12 12 0 0 0 12 12z"></path>
                                                </svg>
                                            </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="product__thumbnail">
                                            <a href="#">
                                            <img src="<?php echo $level.imgSS_path."samsung5.jpeg"?>" alt="">
                                            </a>
                                    </td>
                                    <td class="product__name">
                                            <a href="#">Apple iPhone 11</a>
                                            <br><br>
                                            <small>White/6.25</small>
                                    </td>
                                    <td class="product__price">
                                            <div class="price">
                                                <span class="new__price">$250.99</span>
                                            </div>
                                    </td>
                                    <td class="product__quantity">
                                            <div class="input-counter">
                                                <div>
                                                    <span class="minus-btn">
                                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="minus" class="svg-inline--fa fa-minus fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                            <path fill="currentColor" d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path>
                                                        </svg>
                                                    </span>
                                                    <input type="text" min="1" value="1" max="10" class="counter-btn">
                                                    <span class="plus-btn">
                                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" class="svg-inline--fa fa-plus fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path></svg>
                                                    </span>
                                                </div>
                                            </div>
                                    </td>
                                    <td class="product__subtotal">
                                            <div class="price">
                                                <span class="new__price">$250.99</span>
                                            </div>
                                            <a href="#" class="remove__cart-item">
                                                <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="trash-alt" class="svg-inline--fa fa-trash-alt fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                    <path fill="currentColor" d="M268 416h24a12 12 0 0 0 12-12V188a12 12 0 0 0-12-12h-24a12 12 0 0 0-12 12v216a12 12 0 0 0 12 12zM432 80h-82.41l-34-56.7A48 48 0 0 0 274.41 0H173.59a48 48 0 0 0-41.16 23.3L98.41 80H16A16 16 0 0 0 0 96v16a16 16 0 0 0 16 16h16v336a48 48 0 0 0 48 48h288a48 48 0 0 0 48-48V128h16a16 16 0 0 0 16-16V96a16 16 0 0 0-16-16zM171.84 50.91A6 6 0 0 1 177 48h94a6 6 0 0 1 5.15 2.91L293.61 80H154.39zM368 464H80V128h288zm-212-48h24a12 12 0 0 0 12-12V188a12 12 0 0 0-12-12h-24a12 12 0 0 0-12 12v216a12 12 0 0 0 12 12z"></path>
                                                </svg>
                                            </a>
                                    </td>
                                </tr>
                                <tr>
                                        <td class="product__thumbnail">
                                            <a href="#">
                                                <img src="<?php echo $level.imgSS_path."samsung2.jpeg"?>" alt="">
                                            </a>
                                        </td>
                                        <td class="product__name">
                                            <a href="#">Apple iPhone 11</a>
                                            <br><br>
                                            <small>White/6.25</small>
                                        </td>
                                        <td class="product__price">
                                            <div class="price">
                                                <span class="new__price">$250.99</span>
                                            </div>
                                        </td>
                                        <td class="product__quantity">
                                            <div class="input-counter">
                                                <div>
                                                    <span class="minus-btn">
                                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="minus" class="svg-inline--fa fa-minus fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                            <path fill="currentColor" d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path>
                                                        </svg>
                                                    </span>
                                                    <input type="text" min="1" value="1" max="10" class="counter-btn">
                                                    <span class="plus-btn">
                                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" class="svg-inline--fa fa-plus fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                            <path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="product__subtotal">
                                            <div class="price">
                                                <span class="new__price"><?php echo $row['description']; ?></span>
                                            </div>
                                            <a href="#" class="remove__cart-item">
                                                <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="trash-alt" class="svg-inline--fa fa-trash-alt fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                    <path fill="currentColor" d="M268 416h24a12 12 0 0 0 12-12V188a12 12 0 0 0-12-12h-24a12 12 0 0 0-12 12v216a12 12 0 0 0 12 12zM432 80h-82.41l-34-56.7A48 48 0 0 0 274.41 0H173.59a48 48 0 0 0-41.16 23.3L98.41 80H16A16 16 0 0 0 0 96v16a16 16 0 0 0 16 16h16v336a48 48 0 0 0 48 48h288a48 48 0 0 0 48-48V128h16a16 16 0 0 0 16-16V96a16 16 0 0 0-16-16zM171.84 50.91A6 6 0 0 1 177 48h94a6 6 0 0 1 5.15 2.91L293.61 80H154.39zM368 464H80V128h288zm-212-48h24a12 12 0 0 0 12-12V188a12 12 0 0 0-12-12h-24a12 12 0 0 0-12 12v216a12 12 0 0 0 12 12z"></path>
                                                </svg>
                                            </a>
                                        </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="cart-btns">
                        <div class="continue__shopping">
                            <a href="/">Continue Shopping</a>
                        </div>
                        <div class="check__shipping">
                            <input type="checkbox">
                            <span>Shipping(+7$)</span>
                        </div>
                    </div>

                    <div class="cart__totals">
                        <h3>Cart Totals</h3>
                        <ul>
                            <li>
                                Subtotal
                                <span class="new__price">$250.99</span>
                            </li>
                            <li>
                                Shipping
                                <span>$0</span>
                            </li>
                            <li>
                                Total
                                <span class="new__price">$250.99</span>
                            </li>
                        </ul>
                        <a href="">PROCEED TO CHECKOUT</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
        <!-- Facility Section -->
    <section class="facility__section section" id="facility">
            <div class="container">
                <div class="facility__container">
                    <div class="facility__box">
                        <div class="facility-img__container">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plane" class="svg-inline--fa fa-plane fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M480 192H365.71L260.61 8.06A16.014 16.014 0 0 0 246.71 0h-65.5c-10.63 0-18.3 10.17-15.38 20.39L214.86 192H112l-43.2-57.6c-3.02-4.03-7.77-6.4-12.8-6.4H16.01C5.6 128-2.04 137.78.49 147.88L32 256 .49 364.12C-2.04 374.22 5.6 384 16.01 384H56c5.04 0 9.78-2.37 12.8-6.4L112 320h102.86l-49.03 171.6c-2.92 10.22 4.75 20.4 15.38 20.4h65.5c5.74 0 11.04-3.08 13.89-8.06L365.71 320H480c35.35 0 96-28.65 96-64s-60.65-64-96-64z"></path></svg>
                        </div>
                        <p>FREE SHIPPING WORLD WIDE</p>
                    </div>
                </div>

                <div class="facility__box">
                    <div class="facility-img__container">
                        <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="cc-visa"
                            class="svg-inline--fa fa-cc-visa fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 576 512">
                            <path fill="currentColor"
                                d="M470.1 231.3s7.6 37.2 9.3 45H446c3.3-8.9 16-43.5 16-43.5-.2.3 3.3-9.1 5.3-14.9l2.8 13.4zM576 80v352c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V80c0-26.5 21.5-48 48-48h480c26.5 0 48 21.5 48 48zM152.5 331.2L215.7 176h-42.5l-39.3 106-4.3-21.5-14-71.4c-2.3-9.9-9.4-12.7-18.2-13.1H32.7l-.7 3.1c15.8 4 29.9 9.8 42.2 17.1l35.8 135h42.5zm94.4.2L272.1 176h-40.2l-25.1 155.4h40.1zm139.9-50.8c.2-17.7-10.6-31.2-33.7-42.3-14.1-7.1-22.7-11.9-22.7-19.2.2-6.6 7.3-13.4 23.1-13.4 13.1-.3 22.7 2.8 29.9 5.9l3.6 1.7 5.5-33.6c-7.9-3.1-20.5-6.6-36-6.6-39.7 0-67.6 21.2-67.8 51.4-.3 22.3 20 34.7 35.2 42.2 15.5 7.6 20.8 12.6 20.8 19.3-.2 10.4-12.6 15.2-24.1 15.2-16 0-24.6-2.5-37.7-8.3l-5.3-2.5-5.6 34.9c9.4 4.3 26.8 8.1 44.8 8.3 42.2.1 69.7-20.8 70-53zM528 331.4L495.6 176h-31.1c-9.6 0-16.9 2.8-21 12.9l-59.7 142.5H426s6.9-19.2 8.4-23.3H486c1.2 5.5 4.8 23.3 4.8 23.3H528z">
                            </path>
                        </svg>
                    </div>
                    <p>100% MONEY BACK GUARANTEE</p>
                </div>

                <div class="facility__box">
                    <div class="facility-img__container">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="credit-card" class="svg-inline--fa fa-credit-card fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor" d="M0 432c0 26.5 21.5 48 48 48h480c26.5 0 48-21.5 48-48V256H0v176zm192-68c0-6.6 5.4-12 12-12h136c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H204c-6.6 0-12-5.4-12-12v-40zm-128 0c0-6.6 5.4-12 12-12h72c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H76c-6.6 0-12-5.4-12-12v-40zM576 80v48H0V80c0-26.5 21.5-48 48-48h480c26.5 0 48 21.5 48 48z"></path>
                       </svg>
                    </div>
                    <p>MANY PAYMENT GATWAYS</p>
                </div>

                <div class="facility__box">
                    <div class="facility-img__container">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="headphones-alt" class="svg-inline--fa fa-headphones-alt fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="currentColor" d="M160 288h-16c-35.35 0-64 28.7-64 64.12v63.76c0 35.41 28.65 64.12 64 64.12h16c17.67 0 32-14.36 32-32.06V320.06c0-17.71-14.33-32.06-32-32.06zm208 0h-16c-17.67 0-32 14.35-32 32.06v127.88c0 17.7 14.33 32.06 32 32.06h16c35.35 0 64-28.71 64-64.12v-63.76c0-35.41-28.65-64.12-64-64.12zM256 32C112.91 32 4.57 151.13 0 288v112c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V288c0-114.67 93.33-207.8 208-207.82 114.67.02 208 93.15 208 207.82v112c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V288C507.43 151.13 399.09 32 256 32z"></path>
                        </svg>
                    </div>
                    <p>24/7 ONLINE SUPPORT</p>
                </div>
            </div>
    </section>
</main>