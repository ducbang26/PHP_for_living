<?php 
    require_once $level."config.php";
    $sql = "SELECT * FROM PHONES ";
    $query = mysqli_query($connect,$sql);
?>
<main id="main">
    <div class="container">
        <!-- Products Details -->
        <section class="section product-details__section">
            <div class="product-detail__container">
                <div class="product-detail__left">
                    <div class="details__container--left">
                        <div class="product__pictures">
                            <div class="pictures__container">
                                <img class="picture" src="<?php echo $level.imgIPhone_path."iphone1.jpeg"?>"
                                    id="pic1" />
                            </div>
                            <div class="pictures__container">
                                <img class="picture" src="<?php echo $level.imgIPhone_path."iphone2.jpeg"?>"
                                    id="pic2" />
                            </div>
                            <div class="pictures__container">
                                <img class="picture" src="<?php echo $level.imgIPhone_path."iphone3.jpeg"?>"
                                    id="pic3" />
                            </div>
                            <div class="pictures__container">
                                <img class="picture" src="<?php echo $level.imgIPhone_path."iphone4.jpeg"?>"
                                    id="pic4" />
                            </div>
                            <div class="pictures__container">
                                <img class="picture" src="<?php echo $level.imgIPhone_path."iphone5.jpeg"?>"
                                    id="pic5" />
                            </div>
                        </div>
                        <div class="product__picture" id="product__picture">
                            <!-- <div class="rect" id="rect"></div> -->
                            <div class="picture__container">
                                <img src="<?php echo $level.imgIPhone_path."iphone1.jpeg"?>" id="pic" />
                            </div>
                        </div>
                        <div class="zoom" id="zoom"></div>
                    </div>

                    <div class="product-details__btn">
                        <a class="add" href="#">
                            <span>
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus"
                                    class="svg-inline--fa fa-plus fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 448 512">
                                    <path fill="currentColor"
                                        d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                                    </path>
                                </svg>
                            </span>
                            ADD TO CART</a>
                        <a class="buy" href="#">
                            <span>
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="credit-card"
                                    class="svg-inline--fa fa-credit-card fa-w-18" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <path fill="currentColor"
                                        d="M0 432c0 26.5 21.5 48 48 48h480c26.5 0 48-21.5 48-48V256H0v176zm192-68c0-6.6 5.4-12 12-12h136c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H204c-6.6 0-12-5.4-12-12v-40zm-128 0c0-6.6 5.4-12 12-12h72c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H76c-6.6 0-12-5.4-12-12v-40zM576 80v48H0V80c0-26.5 21.5-48 48-48h480c26.5 0 48 21.5 48 48z">
                                    </path>
                                </svg>
                            </span>
                            BUY NOW
                        </a>
                    </div>
                </div>

                <div class="product-detail__right">
                    <div class="product-detail__content">
                        
                        <h3><?php 
                        $row = mysqli_fetch_assoc($query);
                        echo $row['Title']; ?>
                        </h3>
                        <div class="price">
                            <span class="new__price"> <?php echo $row['price']; ?></span>
                        </div>
                        <div class="product__review">
                            <div class="rating">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                    class="svg-inline--fa fa-star fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512">
                                    <path fill="currentColor"
                                        d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                    </path>
                                </svg>
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                    class="svg-inline--fa fa-star fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512">
                                    <path fill="currentColor"
                                        d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                    </path>
                                </svg>
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                    class="svg-inline--fa fa-star fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512">
                                    <path fill="currentColor"
                                        d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                    </path>
                                </svg>
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                    class="svg-inline--fa fa-star fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512">
                                    <path fill="currentColor"
                                        d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                    </path>
                                </svg>
                                <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="star"
                                    class="svg-inline--fa fa-star fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512">
                                    <path fill="currentColor"
                                        d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z">
                                    </path>
                                </svg>
                            </div>
                            <a href="#" class="rating__quatity">3 reviews</a>
                        </div>
                        <p>
                            <?php echo $row['description']; ?>
                        </p>
                        <div class="product__info-container">
                            <ul class="product__info">
                                <li class="select">
                                    <div class="select__option">
                                        <label for="colors">Color</label>
                                        <select name="colors" id="colors" class="select-box">
                                            <option value="blue">blue</option>
                                            <option value="red">red</option>
                                        </select>
                                    </div>
                                    <div class="select__option">
                                        <label for="size">Inches</label>
                                        <select name="size" id="size" class="select-box">
                                            <option value="6.65">6.65</option>
                                            <option value="7.50">7.50</option>
                                        </select>
                                    </div>
                                </li>
                                <li>

                                    <div class="input-counter">
                                        <span>Quantity:</span>
                                        <div>
                                            <span class="minus-btn">
                                                <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                    data-icon="minus" class="svg-inline--fa fa-minus fa-w-14" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                    <path fill="currentColor"
                                                        d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                                                    </path>
                                                </svg>
                                            </span>
                                            <input type="text" min="1" value="1" max="10" class="counter-btn">
                                            <span class="plus-btn">
                                                <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                    data-icon="plus" class="svg-inline--fa fa-plus fa-w-14" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                    <path fill="currentColor"
                                                        d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">
                                                    </path>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <span>Subtotal:</span>
                                    <a href="#" class="new__price">$250.99</a>
                                </li>
                                <li>
                                    <span>Brand:</span>
                                    <a href="#">Apple</a>
                                </li>
                                <li>
                                    <span>Product Type:</span>
                                    <a href="#">Phone</a>
                                </li>
                                <li>
                                    <span>Availability:</span>
                                    <a href="#" class="in-stock">In Stock (7 Items)</a>
                                </li>
                            </ul>
                            <div class="product-info__btn">
                                <a href="#">
                                    <span>
                                        <svg>
                                            <use xlink:href="./img/sprite.svg#icon-crop"></use>
                                        </svg>
                                    </span>&nbsp;
                                    SIZE GUIDE
                                </a>
                                <a href="#">
                                    <span>
                                        <svg>
                                            <use xlink:href="./img/sprite.svg#icon-truck"></use>
                                        </svg>
                                    </span>&nbsp;
                                    SHIPPING
                                </a>
                                <a href="#">
                                    <span>
                                        <svg>
                                            <use xlink:href="./img/sprite.svg#icon-envelope-o"></use>
                                        </svg>&nbsp;
                                    </span>
                                    ASK ABOUT THIS PRODUCT
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="product-detail__bottom">
                <div class="title__container tabs">

                    <div class="section__titles category__titles ">
                        <div class="section__title detail-btn active" data-id="description">
                            <span class="dot"></span>
                            <h1 class="primary__title">Description</h1>
                        </div>
                    </div>

                    <div class="section__titles">
                        <div class="section__title detail-btn" data-id="reviews">
                            <span class="dot"></span>
                            <h1 class="primary__title">Reviews</h1>
                        </div>
                    </div>

                    <div class="section__titles">
                        <div class="section__title detail-btn" data-id="shipping">
                            <span class="dot"></span>
                            <h1 class="primary__title">Shipping Details</h1>
                        </div>
                    </div>
                </div>

                <div class="detail__content">
                    <div class="content active" id="description">
                        <p>Nam tempus turpis at metus scelerisque placerat nulla deumantos solicitud felis. Pellentesque
                            diam
                            dolor, elementum etos lobortis des mollis ut risus. Sedcus faucibus an sullamcorper mattis
                            drostique des
                            commodo pharetras loremos.Donec pretium egestas sapien et mollis.
                        </p>
                        <h2>Sample Unordered List</h2>
                        <ul>
                            <li>Comodous in tempor ullamcorper miaculis</li>
                            <li>Pellentesque vitae neque mollis urna mattis laoreet.</li>
                            <li>Divamus sit amet purus justo.</li>
                            <li>Proin molestie egestas orci ac suscipit risus posuere loremous</li>
                        </ul>
                        <h2>Sample Ordered Lista</h2>
                        <ol>
                            <li>Comodous in tempor ullamcorper miaculis</li>
                            <li>Pellentesque vitae neque mollis urna mattis laoreet.</li>
                            <li>Divamus sit amet purus justo.</li>
                            <li>Proin molestie egestas orci ac suscipit risus posuere loremous</li>
                        </ol>
                        <h2>Sample Paragraph Text</h2>
                        <p>Praesent vestibulum congue tellus at fringilla. Curabitur vitae semper sem, eu convallis est.
                            Cras
                            felis
                            nunc commodo eu convallis vitae interdum non nisl. Maecenas ac est sit amet augue pharetra
                            convallis nec
                            danos dui. Cras suscipit quam et turpis eleifend vitae malesuada magna congue. Damus id
                            ullamcorper
                            neque. Sed vitae mi a mi pretium aliquet ac sed elit. Pellentesque nulla eros accumsan quis
                            justo at
                            tincidunt lobortis denimes loremous. Suspendisse vestibulum lectus in lectus volutpat, ut
                            dapibus purus
                            pulvinar. Vestibulum sit amet auctor ipsum.</p>
                    </div>
                    <div class="content" id="reviews">
                        <h1>Customer Reviews</h1>
                        <div class="rating">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="svg-inline--fa fa-star fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="svg-inline--fa fa-star fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="svg-inline--fa fa-star fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                class="svg-inline--fa fa-star fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                </path>
                            </svg>
                            <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="star"
                                class="svg-inline--fa fa-star fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <div class="content" id="shipping">
                        <h3>Returns Policy</h3>
                        <p>You may return most new, unopened items within 30 days of delivery for a full refund. We'll
                            also pay
                            the return shipping costs if the return is a result of our error (you received an incorrect
                            or defective
                            item, etc.).</p>
                        <p>You should expect to receive your refund within four weeks of giving your package to the
                            return
                            shipper, however, in many cases you will receive a refund more quickly. This time period
                            includes the
                            transit time for us to receive your return from the shipper (5 to 10 business days), the
                            time it takes
                            us to process your return once we receive it (3 to 5 business days), and the time it takes
                            your bank to
                            process our refund request (5 to 10 business days).
                        </p>
                        <p>If you need to return an item, simply login to your account, view the order using the
                            'Complete
                            Orders' link under the My Account menu and click the Return Item(s) button. We'll notify you
                            via
                            e-mail of your refund once we've received and processed the returned item.
                        </p>
                        <h3>Shipping</h3>
                        <p>We can ship to virtually any address in the world. Note that there are restrictions on some
                            products,
                            and some products cannot be shipped to international destinations.</p>
                        <p>When you place an order, we will estimate shipping and delivery dates for you based on the
                            availability of your items and the shipping options you choose. Depending on the shipping
                            provider you
                            choose, shipping date estimates may appear on the shipping quotes page.
                        </p>
                        <p>Please also note that the shipping rates for many items we sell are weight-based. The weight
                            of any
                            such item can be found on its detail page. To reflect the policies of the shipping companies
                            we use, all
                            weights will be rounded up to the next full pound.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Related Products -->
        <section class="section related__products">
            <div class="title__container">
                <div class="section__title filter-btn active">
                    <span class=" dot"></span>
                    <h1 class="primary__title">Related Products</h1>
                </div>
            </div>
            <div class="container" data-aos="fade-up" data-aos-duration="1200">
                <div class="glide" id="glide_3">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides latest-center">
                            <li class="glide__slide">
                                <div class="product">
                                    <div class="product__header">
                                        <a href="#"><img src="<?php echo $level.imgSS_path."samsung5.jpeg"?>" alt="product"></a>
                                    </div>
                                    <div class="product__footer">
                                        <h3>Samsung Galaxy</h3>
                                        <div class="rating">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                class="svg-inline--fa fa-star fa-w-18" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="#e5e5e5"
                                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                class="svg-inline--fa fa-star fa-w-18" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="#e5e5e5"
                                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                class="svg-inline--fa fa-star fa-w-18" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="#e5e5e5"
                                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                class="svg-inline--fa fa-star fa-w-18" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="star"
                                                class="svg-inline--fa fa-star fa-w-18" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="product__price">
                                            <h4>$900</h4>
                                        </div>
                                        <a href="#"><button type="submit" class="product__btn">Add To Cart</button></a>
                                    </div>
                                    <ul>
                                        <li>
                                            <a data-tip="Quick View" data-place="left" href="#">
                                                <!-- icon-eye -->
                                                <svg aria-hidden="true" focusable="false" data-prefix="far"
                                                    data-icon="eye" class="svg-inline--fa fa-eye fa-w-18" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                    <path fill="#e5e5e5"
                                                        d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-tip="Add To Wishlist" data-place="left" href="#">
                                                <!-- icon-heart -->
                                                <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                    data-icon="heart" class="svg-inline--fa fa-heart fa-w-16" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <path fill="#e5e5e5"
                                                        d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-tip="Add To Compare" data-place="left" href="#">
                                                <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                    data-icon="undo" class="svg-inline--fa fa-undo fa-w-16" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <path fill="#e5e5e5"
                                                        d="M212.333 224.333H12c-6.627 0-12-5.373-12-12V12C0 5.373 5.373 0 12 0h48c6.627 0 12 5.373 12 12v78.112C117.773 39.279 184.26 7.47 258.175 8.007c136.906.994 246.448 111.623 246.157 248.532C504.041 393.258 393.12 504 256.333 504c-64.089 0-122.496-24.313-166.51-64.215-5.099-4.622-5.334-12.554-.467-17.42l33.967-33.967c4.474-4.474 11.662-4.717 16.401-.525C170.76 415.336 211.58 432 256.333 432c97.268 0 176-78.716 176-176 0-97.267-78.716-176-176-176-58.496 0-110.28 28.476-142.274 72.333h98.274c6.627 0 12 5.373 12 12v48c0 6.627-5.373 12-12 12z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="glide__slide">
                                <div class="product">
                                    <div class="product__header">
                                        <a href="#"><img src="<?php echo $level.imgIPhone_path."iphone6.jpeg"?>" alt="product"></a>
                                    </div>
                                    <div class="product__footer">
                                        <h3>Apple iPhone 11</h3>
                                        <div class="rating">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                class="svg-inline--fa fa-star fa-w-18" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                class="svg-inline--fa fa-star fa-w-18" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                class="svg-inline--fa fa-star fa-w-18" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                class="svg-inline--fa fa-star fa-w-18" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="star"
                                                class="svg-inline--fa fa-star fa-w-18" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="product__price">
                                            <h4>$750</h4>
                                        </div>
                                        <a href="#"><button type="submit" class="product__btn">Add To Cart</button></a>
                                    </div>
                                    <ul>
                                        <li>
                                            <a data-tip="Quick View" data-place="left" href="#">
                                                <svg aria-hidden="true" focusable="false" data-prefix="far"
                                                    data-icon="eye" class="svg-inline--fa fa-eye fa-w-18" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                    <path fill="#e5e5e5"
                                                        d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-tip="Add To Wishlist" data-place="left" href="#">
                                                <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                    data-icon="heart" class="svg-inline--fa fa-heart fa-w-16" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <path fill="#e5e5e5"
                                                        d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-tip="Add To Compare" data-place="left" href="#">
                                                <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                    data-icon="undo" class="svg-inline--fa fa-undo fa-w-16" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <path fill="#e5e5e5"
                                                        d="M212.333 224.333H12c-6.627 0-12-5.373-12-12V12C0 5.373 5.373 0 12 0h48c6.627 0 12 5.373 12 12v78.112C117.773 39.279 184.26 7.47 258.175 8.007c136.906.994 246.448 111.623 246.157 248.532C504.041 393.258 393.12 504 256.333 504c-64.089 0-122.496-24.313-166.51-64.215-5.099-4.622-5.334-12.554-.467-17.42l33.967-33.967c4.474-4.474 11.662-4.717 16.401-.525C170.76 415.336 211.58 432 256.333 432c97.268 0 176-78.716 176-176 0-97.267-78.716-176-176-176-58.496 0-110.28 28.476-142.274 72.333h98.274c6.627 0 12 5.373 12 12v48c0 6.627-5.373 12-12 12z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="glide__slide">
                                <div class="product">
                                    <div class="product__header">
                                        <a href="#"><img src="./img/products/sumsung/samsung3.jpeg" alt="product"></a>
                                    </div>
                                    <div class="product__footer">
                                        <h3>Samsung Galaxy</h3>
                                        <div class="rating">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                class="svg-inline--fa fa-star fa-w-18" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="#e5e5e5"
                                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                class="svg-inline--fa fa-star fa-w-18" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="#e5e5e5"
                                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                class="svg-inline--fa fa-star fa-w-18" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                class="svg-inline--fa fa-star fa-w-18" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="star"
                                                class="svg-inline--fa fa-star fa-w-18" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="product__price">
                                            <h4>$850</h4>
                                        </div>
                                        <a href="#"><button type="submit" class="product__btn">Add To Cart</button></a>
                                    </div>
                                    <ul>
                                        <li>
                                            <a data-tip="Quick View" data-place="left" href="#">
                                                <svg aria-hidden="true" focusable="false" data-prefix="far"
                                                    data-icon="eye" class="svg-inline--fa fa-eye fa-w-18" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                    <path fill="#e5e5e5"
                                                        d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-tip="Add To Wishlist" data-place="left" href="#">
                                                <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                    data-icon="heart" class="svg-inline--fa fa-heart fa-w-16" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <path fill="#e5e5e5"
                                                        d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-tip="Add To Compare" data-place="left" href="#">
                                                <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                    data-icon="undo" class="svg-inline--fa fa-undo fa-w-16" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <path fill="#e5e5e5"
                                                        d="M212.333 224.333H12c-6.627 0-12-5.373-12-12V12C0 5.373 5.373 0 12 0h48c6.627 0 12 5.373 12 12v78.112C117.773 39.279 184.26 7.47 258.175 8.007c136.906.994 246.448 111.623 246.157 248.532C504.041 393.258 393.12 504 256.333 504c-64.089 0-122.496-24.313-166.51-64.215-5.099-4.622-5.334-12.554-.467-17.42l33.967-33.967c4.474-4.474 11.662-4.717 16.401-.525C170.76 415.336 211.58 432 256.333 432c97.268 0 176-78.716 176-176 0-97.267-78.716-176-176-176-58.496 0-110.28 28.476-142.274 72.333h98.274c6.627 0 12 5.373 12 12v48c0 6.627-5.373 12-12 12z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="glide__slide">
                                <div class="product">
                                    <div class="product__header">
                                        <a href="#"><img src="./img/products/iPhone/iphone2.jpeg" alt="product"></a>
                                    </div>
                                    <div class="product__footer">
                                        <h3>Apple iPhone 11</h3>
                                        <div class="rating">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                class="svg-inline--fa fa-star fa-w-18" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                class="svg-inline--fa fa-star fa-w-18" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                class="svg-inline--fa fa-star fa-w-18" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                class="svg-inline--fa fa-star fa-w-18" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="star"
                                                class="svg-inline--fa fa-star fa-w-18" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="product__price">
                                            <h4>$450</h4>
                                        </div>
                                        <a href="#"><button type="submit" class="product__btn">Add To Cart</button></a>
                                    </div>
                                    <ul>
                                        <li>
                                            <a data-tip="Quick View" data-place="left" href="#">
                                                <svg aria-hidden="true" focusable="false" data-prefix="far"
                                                    data-icon="eye" class="svg-inline--fa fa-eye fa-w-18" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                    <path fill="#e5e5e5"
                                                        d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-tip="Add To Wishlist" data-place="left" href="#">
                                                <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                    data-icon="heart" class="svg-inline--fa fa-heart fa-w-16" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <path fill="#e5e5e5"
                                                        d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-tip="Add To Compare" data-place="left" href="#">
                                                <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                    data-icon="undo" class="svg-inline--fa fa-undo fa-w-16" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <path fill="#e5e5e5"
                                                        d="M212.333 224.333H12c-6.627 0-12-5.373-12-12V12C0 5.373 5.373 0 12 0h48c6.627 0 12 5.373 12 12v78.112C117.773 39.279 184.26 7.47 258.175 8.007c136.906.994 246.448 111.623 246.157 248.532C504.041 393.258 393.12 504 256.333 504c-64.089 0-122.496-24.313-166.51-64.215-5.099-4.622-5.334-12.554-.467-17.42l33.967-33.967c4.474-4.474 11.662-4.717 16.401-.525C170.76 415.336 211.58 432 256.333 432c97.268 0 176-78.716 176-176 0-97.267-78.716-176-176-176-58.496 0-110.28 28.476-142.274 72.333h98.274c6.627 0 12 5.373 12 12v48c0 6.627-5.373 12-12 12z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="glide__slide">
                                <div class="product">
                                    <div class="product__header">
                                        <a href="#"><img src="./img/products/headphone/headphone4.jpeg"
                                                alt="product"></a>
                                    </div>
                                    <div class="product__footer">
                                        <h3>Sony WH-CH510</h3>
                                        <div class="rating">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                class="svg-inline--fa fa-star fa-w-18" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                class="svg-inline--fa fa-star fa-w-18" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                class="svg-inline--fa fa-star fa-w-18" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                class="svg-inline--fa fa-star fa-w-18" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="star"
                                                class="svg-inline--fa fa-star fa-w-18" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="product__price">
                                            <h4>$600</h4>
                                        </div>
                                        <a href="#"><button type="submit" class="product__btn">Add To Cart</button></a>
                                    </div>
                                    <ul>
                                        <li>
                                            <a data-tip="Quick View" data-place="left" href="#">
                                                <svg aria-hidden="true" focusable="false" data-prefix="far"
                                                    data-icon="eye" class="svg-inline--fa fa-eye fa-w-18" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                    <path fill="#e5e5e5"
                                                        d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-tip="Add To Wishlist" data-place="left" href="#">
                                                <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                    data-icon="heart" class="svg-inline--fa fa-heart fa-w-16" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <path fill="#e5e5e5"
                                                        d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-tip="Add To Compare" data-place="left" href="#">
                                                <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                    data-icon="undo" class="svg-inline--fa fa-undo fa-w-16" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <path fill="#e5e5e5"
                                                        d="M212.333 224.333H12c-6.627 0-12-5.373-12-12V12C0 5.373 5.373 0 12 0h48c6.627 0 12 5.373 12 12v78.112C117.773 39.279 184.26 7.47 258.175 8.007c136.906.994 246.448 111.623 246.157 248.532C504.041 393.258 393.12 504 256.333 504c-64.089 0-122.496-24.313-166.51-64.215-5.099-4.622-5.334-12.554-.467-17.42l33.967-33.967c4.474-4.474 11.662-4.717 16.401-.525C170.76 415.336 211.58 432 256.333 432c97.268 0 176-78.716 176-176 0-97.267-78.716-176-176-176-58.496 0-110.28 28.476-142.274 72.333h98.274c6.627 0 12 5.373 12 12v48c0 6.627-5.373 12-12 12z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="glide__slide">
                                <div class="product">
                                    <div class="product__header">
                                        <a href="#"><img src="img/products/sumsung/samsung1.jpeg" alt="product"></a>
                                    </div>
                                    <div class="product__footer">
                                        <h3>Samsung Galaxy</h3>
                                        <div class="rating">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                class="svg-inline--fa fa-star fa-w-18" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                class="svg-inline--fa fa-star fa-w-18" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                class="svg-inline--fa fa-star fa-w-18" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                class="svg-inline--fa fa-star fa-w-18" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="star"
                                                class="svg-inline--fa fa-star fa-w-18" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="product__price">
                                            <h4>$300</h4>
                                        </div>
                                        <a href="#"><button type="submit" class="product__btn">Add To Cart</button></a>
                                    </div>
                                    <ul>
                                        <li>
                                            <a data-tip="Quick View" data-place="left" href="#">
                                                <svg aria-hidden="true" focusable="false" data-prefix="far"
                                                    data-icon="eye" class="svg-inline--fa fa-eye fa-w-18" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                    <path fill="#e5e5e5"
                                                        d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-tip="Add To Wishlist" data-place="left" href="#">
                                                <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                    data-icon="heart" class="svg-inline--fa fa-heart fa-w-16" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <path fill="#e5e5e5"
                                                        d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-tip="Add To Compare" data-place="left" href="#">
                                                <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                    data-icon="undo" class="svg-inline--fa fa-undo fa-w-16" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <path fill="#e5e5e5"
                                                        d="M212.333 224.333H12c-6.627 0-12-5.373-12-12V12C0 5.373 5.373 0 12 0h48c6.627 0 12 5.373 12 12v78.112C117.773 39.279 184.26 7.47 258.175 8.007c136.906.994 246.448 111.623 246.157 248.532C504.041 393.258 393.12 504 256.333 504c-64.089 0-122.496-24.313-166.51-64.215-5.099-4.622-5.334-12.554-.467-17.42l33.967-33.967c4.474-4.474 11.662-4.717 16.401-.525C170.76 415.336 211.58 432 256.333 432c97.268 0 176-78.716 176-176 0-97.267-78.716-176-176-176-58.496 0-110.28 28.476-142.274 72.333h98.274c6.627 0 12 5.373 12 12v48c0 6.627-5.373 12-12 12z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="glide__slide">
                                <div class="product">
                                    <div class="product__header">
                                        <a href="#"><img src="img/products/headphone/headphone2.jpeg" alt="product"></a>
                                    </div>
                                    <div class="product__footer">
                                        <h3>Sony WH-CH510</h3>
                                        <div class="rating">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                class="svg-inline--fa fa-star fa-w-18" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                class="svg-inline--fa fa-star fa-w-18" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                class="svg-inline--fa fa-star fa-w-18" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                class="svg-inline--fa fa-star fa-w-18" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="star"
                                                class="svg-inline--fa fa-star fa-w-18" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="product__price">
                                            <h4>$300</h4>
                                        </div>
                                        <a href="#"><button type="submit" class="product__btn">Add To Cart</button></a>
                                    </div>
                                    <ul>
                                        <li>
                                            <a data-tip="Quick View" data-place="left" href="#">
                                                <svg aria-hidden="true" focusable="false" data-prefix="far"
                                                    data-icon="eye" class="svg-inline--fa fa-eye fa-w-18" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                    <path fill="#e5e5e5"
                                                        d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-tip="Add To Wishlist" data-place="left" href="#">
                                                <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                    data-icon="heart" class="svg-inline--fa fa-heart fa-w-16" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <path fill="#e5e5e5"
                                                        d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-tip="Add To Compare" data-place="left" href="#">
                                                <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                    data-icon="undo" class="svg-inline--fa fa-undo fa-w-16" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <path fill="#e5e5e5"
                                                        d="M212.333 224.333H12c-6.627 0-12-5.373-12-12V12C0 5.373 5.373 0 12 0h48c6.627 0 12 5.373 12 12v78.112C117.773 39.279 184.26 7.47 258.175 8.007c136.906.994 246.448 111.623 246.157 248.532C504.041 393.258 393.12 504 256.333 504c-64.089 0-122.496-24.313-166.51-64.215-5.099-4.622-5.334-12.554-.467-17.42l33.967-33.967c4.474-4.474 11.662-4.717 16.401-.525C170.76 415.336 211.58 432 256.333 432c97.268 0 176-78.716 176-176 0-97.267-78.716-176-176-176-58.496 0-110.28 28.476-142.274 72.333h98.274c6.627 0 12 5.373 12 12v48c0 6.627-5.373 12-12 12z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="glide__slide">
                                <div class="product">
                                    <div class="product__header">
                                        <a href="#"><img src="img/products/headphone/headphone1.jpeg" alt="product"></a>
                                    </div>
                                    <div class="product__footer">
                                        <h3>Sony WH-CH510</h3>
                                        <div class="rating">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                class="svg-inline--fa fa-star fa-w-18" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                class="svg-inline--fa fa-star fa-w-18" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                class="svg-inline--fa fa-star fa-w-18" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                class="svg-inline--fa fa-star fa-w-18" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="star"
                                                class="svg-inline--fa fa-star fa-w-18" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="product__price">
                                            <h4>$250</h4>
                                        </div>
                                        <a href="#"><button type="submit" class="product__btn">Add To Cart</button></a>
                                    </div>
                                    <ul>
                                        <li>
                                            <a data-tip="Quick View" data-place="left" href="#">
                                                <svg aria-hidden="true" focusable="false" data-prefix="far"
                                                    data-icon="eye" class="svg-inline--fa fa-eye fa-w-18" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                    <path fill="#e5e5e5"
                                                        d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-tip="Add To Wishlist" data-place="left" href="#">
                                                <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                    data-icon="heart" class="svg-inline--fa fa-heart fa-w-16" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <path fill="#e5e5e5"
                                                        d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-tip="Add To Compare" data-place="left" href="#">
                                                <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                    data-icon="undo" class="svg-inline--fa fa-undo fa-w-16" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <path fill="#e5e5e5"
                                                        d="M212.333 224.333H12c-6.627 0-12-5.373-12-12V12C0 5.373 5.373 0 12 0h48c6.627 0 12 5.373 12 12v78.112C117.773 39.279 184.26 7.47 258.175 8.007c136.906.994 246.448 111.623 246.157 248.532C504.041 393.258 393.12 504 256.333 504c-64.089 0-122.496-24.313-166.51-64.215-5.099-4.622-5.334-12.554-.467-17.42l33.967-33.967c4.474-4.474 11.662-4.717 16.401-.525C170.76 415.336 211.58 432 256.333 432c97.268 0 176-78.716 176-176 0-97.267-78.716-176-176-176-58.496 0-110.28 28.476-142.274 72.333h98.274c6.627 0 12 5.373 12 12v48c0 6.627-5.373 12-12 12z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="glide__slide">
                                <div class="product">
                                    <div class="product__header">
                                        <a href="#"><img src="img/products/iPhone/iphone1.jpeg" alt="product"></a>
                                    </div>
                                    <div class="product__footer">
                                        <h3>Apple iPhone XR</h3>
                                        <div class="rating">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                class="svg-inline--fa fa-star fa-w-18" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                class="svg-inline--fa fa-star fa-w-18" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                class="svg-inline--fa fa-star fa-w-18" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                class="svg-inline--fa fa-star fa-w-18" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="star"
                                                class="svg-inline--fa fa-star fa-w-18" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="product__price">
                                            <h4>$550</h4>
                                        </div>
                                        <a href="#"><button type="submit" class="product__btn">Add To Cart</button></a>
                                    </div>
                                    <ul>
                                        <li>
                                            <a data-tip="Quick View" data-place="left" href="#">
                                                <svg aria-hidden="true" focusable="false" data-prefix="far"
                                                    data-icon="eye" class="svg-inline--fa fa-eye fa-w-18" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                    <path fill="#e5e5e5"
                                                        d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-tip="Add To Wishlist" data-place="left" href="#">
                                                <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                    data-icon="heart" class="svg-inline--fa fa-heart fa-w-16" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <path fill="#e5e5e5"
                                                        d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-tip="Add To Compare" data-place="left" href="#">
                                                <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                    data-icon="undo" class="svg-inline--fa fa-undo fa-w-16" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <path fill="#e5e5e5"
                                                        d="M212.333 224.333H12c-6.627 0-12-5.373-12-12V12C0 5.373 5.373 0 12 0h48c6.627 0 12 5.373 12 12v78.112C117.773 39.279 184.26 7.47 258.175 8.007c136.906.994 246.448 111.623 246.157 248.532C504.041 393.258 393.12 504 256.333 504c-64.089 0-122.496-24.313-166.51-64.215-5.099-4.622-5.334-12.554-.467-17.42l33.967-33.967c4.474-4.474 11.662-4.717 16.401-.525C170.76 415.336 211.58 432 256.333 432c97.268 0 176-78.716 176-176 0-97.267-78.716-176-176-176-58.496 0-110.28 28.476-142.274 72.333h98.274c6.627 0 12 5.373 12 12v48c0 6.627-5.373 12-12 12z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                        </ul>
                    </div>

                    <div class="glide__arrows" data-glide-el="controls">
                        <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-left"
                                class="svg-inline--fa fa-caret-left fa-w-6" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512">
                                <path fill="#001a00"
                                    d="M192 127.338v257.324c0 17.818-21.543 26.741-34.142 14.142L29.196 270.142c-7.81-7.81-7.81-20.474 0-28.284l128.662-128.662c12.599-12.6 34.142-3.676 34.142 14.142z">
                                </path>
                            </svg>
                        </button>
                        <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-right"
                                class="svg-inline--fa fa-caret-right fa-w-6" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512">
                                <path fill="#001a00"
                                    d="M0 384.662V127.338c0-17.818 21.543-26.741 34.142-14.142l128.662 128.662c7.81 7.81 7.81 20.474 0 28.284L34.142 398.804C21.543 411.404 0 402.48 0 384.662z">
                                </path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <!-- Latest Products -->
        <section class="section latest__products">
            <div class="title__container">
                <div class="section__title filter-btn active" data-id="Latest Products">
                    <span class="dot"></span>
                    <h1 class="primary__title">Latest Products</h1>
                </div>
            </div>
            <div class="container" data-aos="fade-up" data-aos-duration="1200">
                <div class="glide" id="glide_2">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides latest-center">
                            <li class="glide__slide">
                                <div class="product">
                                    <div class="product__header">
                                        <a href="#"><img src="./img/products/iPhone/iphone6.jpeg" alt="product"></a>
                                    </div>
                                    <div class="product__footer">
                                        <h3>Apple iPhone 11</h3>
                                        <div class="rating">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                class="svg-inline--fa fa-star fa-w-18" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                class="svg-inline--fa fa-star fa-w-18" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                class="svg-inline--fa fa-star fa-w-18" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                class="svg-inline--fa fa-star fa-w-18" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="star"
                                                class="svg-inline--fa fa-star fa-w-18" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="product__price">
                                            <h4>$750</h4>
                                        </div>
                                        <a href="#"><button type="submit" class="product__btn">Add To Cart</button></a>
                                    </div>
                                    <ul>
                                        <li>
                                            <a data-tip="Quick View" data-place="left" href="#">
                                                <svg aria-hidden="true" focusable="false" data-prefix="far"
                                                    data-icon="eye" class="svg-inline--fa fa-eye fa-w-18" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                    <path fill="#e5e5e5"
                                                        d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-tip="Add To Wishlist" data-place="left" href="#">
                                                <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                    data-icon="heart" class="svg-inline--fa fa-heart fa-w-16" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <path fill="#e5e5e5"
                                                        d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-tip="Add To Compare" data-place="left" href="#">
                                                <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                    data-icon="undo" class="svg-inline--fa fa-undo fa-w-16" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <path fill="#e5e5e5"
                                                        d="M212.333 224.333H12c-6.627 0-12-5.373-12-12V12C0 5.373 5.373 0 12 0h48c6.627 0 12 5.373 12 12v78.112C117.773 39.279 184.26 7.47 258.175 8.007c136.906.994 246.448 111.623 246.157 248.532C504.041 393.258 393.12 504 256.333 504c-64.089 0-122.496-24.313-166.51-64.215-5.099-4.622-5.334-12.554-.467-17.42l33.967-33.967c4.474-4.474 11.662-4.717 16.401-.525C170.76 415.336 211.58 432 256.333 432c97.268 0 176-78.716 176-176 0-97.267-78.716-176-176-176-58.496 0-110.28 28.476-142.274 72.333h98.274c6.627 0 12 5.373 12 12v48c0 6.627-5.373 12-12 12z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="glide__slide">
                                <div class="product">
                                    <div class="product__header">
                                        <a href="#"><img src="./img/products/sumsung/samsung5.jpeg" alt="product"></a>
                                    </div>
                                    <div class="product__footer">
                                        <h3>Samsung Galaxy</h3>
                                        <div class="rating">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                class="svg-inline--fa fa-star fa-w-18" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                class="svg-inline--fa fa-star fa-w-18" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                class="svg-inline--fa fa-star fa-w-18" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                                class="svg-inline--fa fa-star fa-w-18" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                </path>
                                            </svg>
                                            <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="star"
                                                class="svg-inline--fa fa-star fa-w-18" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="product__price">
                                            <h4>$900</h4>
                                        </div>
                                        <a href="#"><button type="submit" class="product__btn">Add To Cart</button></a>
                                    </div>
                                    <ul>
                                        <li>
                                            <a data-tip="Quick View" data-place="left" href="#">
                                                <svg aria-hidden="true" focusable="false" data-prefix="far"
                                                    data-icon="eye" class="svg-inline--fa fa-eye fa-w-18" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                    <path fill="#e5e5e5"
                                                        d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-tip="Add To Wishlist" data-place="left" href="#">
                                                <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                    data-icon="heart" class="svg-inline--fa fa-heart fa-w-16" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <path fill="#e5e5e5"
                                                        d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-tip="Add To Compare" data-place="left" href="#">
                                                <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                    data-icon="undo" class="svg-inline--fa fa-undo fa-w-16" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <path fill="#e5e5e5"
                                                        d="M212.333 224.333H12c-6.627 0-12-5.373-12-12V12C0 5.373 5.373 0 12 0h48c6.627 0 12 5.373 12 12v78.112C117.773 39.279 184.26 7.47 258.175 8.007c136.906.994 246.448 111.623 246.157 248.532C504.041 393.258 393.12 504 256.333 504c-64.089 0-122.496-24.313-166.51-64.215-5.099-4.622-5.334-12.554-.467-17.42l33.967-33.967c4.474-4.474 11.662-4.717 16.401-.525C170.76 415.336 211.58 432 256.333 432c97.268 0 176-78.716 176-176 0-97.267-78.716-176-176-176-58.496 0-110.28 28.476-142.274 72.333h98.274c6.627 0 12 5.373 12 12v48c0 6.627-5.373 12-12 12z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="glide__slide">
                                <div class="product">
                                    <div class="product__header">
                                        <a href="#"><img src="./img/products/headphone/headphone4.jpeg"
                                                alt="product"></a>
                                    </div>
                                    <div class="product__footer">
                                        <h3>Sony WH-CH510</h3>
                                        <div class="rating">
                                            <svg>
                                                <use xlink:href="./img/sprite.svg#icon-star-full"></use>
                                            </svg>
                                            <svg>
                                                <use xlink:href="./img/sprite.svg#icon-star-full"></use>
                                            </svg>
                                            <svg>
                                                <use xlink:href="./img/sprite.svg#icon-star-full"></use>
                                            </svg>
                                            <svg>
                                                <use xlink:href="./img/sprite.svg#icon-star-full"></use>
                                            </svg>
                                            <svg>
                                                <use xlink:href="./img/sprite.svg#icon-star-empty"></use>
                                            </svg>
                                        </div>
                                        <div class="product__price">
                                            <h4>$600</h4>
                                        </div>
                                        <a href="#"><button type="submit" class="product__btn">Add To Cart</button></a>
                                    </div>
                                    <ul>
                                        <li>
                                            <a data-tip="Quick View" data-place="left" href="#">
                                                <svg aria-hidden="true" focusable="false" data-prefix="far"
                                                    data-icon="eye" class="svg-inline--fa fa-eye fa-w-18" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                    <path fill="#e5e5e5"
                                                        d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-tip="Add To Wishlist" data-place="left" href="#">
                                                <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                    data-icon="heart" class="svg-inline--fa fa-heart fa-w-16" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <path fill="#e5e5e5"
                                                        d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-tip="Add To Compare" data-place="left" href="#">
                                                <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                    data-icon="undo" class="svg-inline--fa fa-undo fa-w-16" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <path fill="#e5e5e5"
                                                        d="M212.333 224.333H12c-6.627 0-12-5.373-12-12V12C0 5.373 5.373 0 12 0h48c6.627 0 12 5.373 12 12v78.112C117.773 39.279 184.26 7.47 258.175 8.007c136.906.994 246.448 111.623 246.157 248.532C504.041 393.258 393.12 504 256.333 504c-64.089 0-122.496-24.313-166.51-64.215-5.099-4.622-5.334-12.554-.467-17.42l33.967-33.967c4.474-4.474 11.662-4.717 16.401-.525C170.76 415.336 211.58 432 256.333 432c97.268 0 176-78.716 176-176 0-97.267-78.716-176-176-176-58.496 0-110.28 28.476-142.274 72.333h98.274c6.627 0 12 5.373 12 12v48c0 6.627-5.373 12-12 12z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="glide__slide">
                                <div class="product">
                                    <div class="product__header">
                                        <a href="#"><img src="./img/products/sumsung/samsung3.jpeg" alt="product"></a>
                                    </div>
                                    <div class="product__footer">
                                        <h3>Samsung Galaxy</h3>
                                        <div class="rating">
                                            <svg>
                                                <use xlink:href="./img/sprite.svg#icon-star-full"></use>
                                            </svg>
                                            <svg>
                                                <use xlink:href="./img/sprite.svg#icon-star-full"></use>
                                            </svg>
                                            <svg>
                                                <use xlink:href="./img/sprite.svg#icon-star-full"></use>
                                            </svg>
                                            <svg>
                                                <use xlink:href="./img/sprite.svg#icon-star-full"></use>
                                            </svg>
                                            <svg>
                                                <use xlink:href="./img/sprite.svg#icon-star-empty"></use>
                                            </svg>
                                        </div>
                                        <div class="product__price">
                                            <h4>$850</h4>
                                        </div>
                                        <a href="#"><button type="submit" class="product__btn">Add To Cart</button></a>
                                    </div>
                                    <ul>
                                        <li>
                                            <a data-tip="Quick View" data-place="left" href="#">
                                                <svg aria-hidden="true" focusable="false" data-prefix="far"
                                                    data-icon="eye" class="svg-inline--fa fa-eye fa-w-18" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                    <path fill="#e5e5e5"
                                                        d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-tip="Add To Wishlist" data-place="left" href="#">
                                                <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                    data-icon="heart" class="svg-inline--fa fa-heart fa-w-16" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <path fill="#e5e5e5"
                                                        d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-tip="Add To Compare" data-place="left" href="#">
                                                <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                    data-icon="undo" class="svg-inline--fa fa-undo fa-w-16" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <path fill="#e5e5e5"
                                                        d="M212.333 224.333H12c-6.627 0-12-5.373-12-12V12C0 5.373 5.373 0 12 0h48c6.627 0 12 5.373 12 12v78.112C117.773 39.279 184.26 7.47 258.175 8.007c136.906.994 246.448 111.623 246.157 248.532C504.041 393.258 393.12 504 256.333 504c-64.089 0-122.496-24.313-166.51-64.215-5.099-4.622-5.334-12.554-.467-17.42l33.967-33.967c4.474-4.474 11.662-4.717 16.401-.525C170.76 415.336 211.58 432 256.333 432c97.268 0 176-78.716 176-176 0-97.267-78.716-176-176-176-58.496 0-110.28 28.476-142.274 72.333h98.274c6.627 0 12 5.373 12 12v48c0 6.627-5.373 12-12 12z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="glide__slide">
                                <div class="product">
                                    <div class="product__header">
                                        <a href="#"><img src="./img/products/iPhone/iphone2.jpeg" alt="product"></a>
                                    </div>
                                    <div class="product__footer">
                                        <h3>Apple iPhone 11</h3>
                                        <div class="rating">
                                            <svg>
                                                <use xlink:href="./img/sprite.svg#icon-star-full"></use>
                                            </svg>
                                            <svg>
                                                <use xlink:href="./img/sprite.svg#icon-star-full"></use>
                                            </svg>
                                            <svg>
                                                <use xlink:href="./img/sprite.svg#icon-star-full"></use>
                                            </svg>
                                            <svg>
                                                <use xlink:href="./img/sprite.svg#icon-star-full"></use>
                                            </svg>
                                            <svg>
                                                <use xlink:href="./img/sprite.svg#icon-star-empty"></use>
                                            </svg>
                                        </div>
                                        <div class="product__price">
                                            <h4>$450</h4>
                                        </div>
                                        <a href="#"><button type="submit" class="product__btn">Add To Cart</button></a>
                                    </div>
                                    <ul>
                                        <li>
                                            <a data-tip="Quick View" data-place="left" href="#">
                                                <svg aria-hidden="true" focusable="false" data-prefix="far"
                                                    data-icon="eye" class="svg-inline--fa fa-eye fa-w-18" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                    <path fill="#e5e5e5"
                                                        d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-tip="Add To Wishlist" data-place="left" href="#">
                                                <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                    data-icon="heart" class="svg-inline--fa fa-heart fa-w-16" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <path fill="#e5e5e5"
                                                        d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-tip="Add To Compare" data-place="left" href="#">
                                                <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                    data-icon="undo" class="svg-inline--fa fa-undo fa-w-16" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <path fill="#e5e5e5"
                                                        d="M212.333 224.333H12c-6.627 0-12-5.373-12-12V12C0 5.373 5.373 0 12 0h48c6.627 0 12 5.373 12 12v78.112C117.773 39.279 184.26 7.47 258.175 8.007c136.906.994 246.448 111.623 246.157 248.532C504.041 393.258 393.12 504 256.333 504c-64.089 0-122.496-24.313-166.51-64.215-5.099-4.622-5.334-12.554-.467-17.42l33.967-33.967c4.474-4.474 11.662-4.717 16.401-.525C170.76 415.336 211.58 432 256.333 432c97.268 0 176-78.716 176-176 0-97.267-78.716-176-176-176-58.496 0-110.28 28.476-142.274 72.333h98.274c6.627 0 12 5.373 12 12v48c0 6.627-5.373 12-12 12z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="glide__slide">
                                <div class="product">
                                    <div class="product__header">
                                        <a href="#"><img src="img/products/headphone/headphone2.jpeg" alt="product"></a>
                                    </div>
                                    <div class="product__footer">
                                        <h3>Sony WH-CH510</h3>
                                        <div class="rating">
                                            <svg>
                                                <use xlink:href="./img/sprite.svg#icon-star-full"></use>
                                            </svg>
                                            <svg>
                                                <use xlink:href="./img/sprite.svg#icon-star-full"></use>
                                            </svg>
                                            <svg>
                                                <use xlink:href="./img/sprite.svg#icon-star-full"></use>
                                            </svg>
                                            <svg>
                                                <use xlink:href="./img/sprite.svg#icon-star-full"></use>
                                            </svg>
                                            <svg>
                                                <use xlink:href="./img/sprite.svg#icon-star-empty"></use>
                                            </svg>
                                        </div>
                                        <div class="product__price">
                                            <h4>$300</h4>
                                        </div>
                                        <a href="#"><button type="submit" class="product__btn">Add To Cart</button></a>
                                    </div>
                                    <ul>
                                        <li>
                                            <a data-tip="Quick View" data-place="left" href="#">
                                                <svg aria-hidden="true" focusable="false" data-prefix="far"
                                                    data-icon="eye" class="svg-inline--fa fa-eye fa-w-18" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                    <path fill="#e5e5e5"
                                                        d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-tip="Add To Wishlist" data-place="left" href="#">
                                                <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                    data-icon="heart" class="svg-inline--fa fa-heart fa-w-16" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <path fill="#e5e5e5"
                                                        d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-tip="Add To Compare" data-place="left" href="#">
                                                <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                    data-icon="undo" class="svg-inline--fa fa-undo fa-w-16" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <path fill="#e5e5e5"
                                                        d="M212.333 224.333H12c-6.627 0-12-5.373-12-12V12C0 5.373 5.373 0 12 0h48c6.627 0 12 5.373 12 12v78.112C117.773 39.279 184.26 7.47 258.175 8.007c136.906.994 246.448 111.623 246.157 248.532C504.041 393.258 393.12 504 256.333 504c-64.089 0-122.496-24.313-166.51-64.215-5.099-4.622-5.334-12.554-.467-17.42l33.967-33.967c4.474-4.474 11.662-4.717 16.401-.525C170.76 415.336 211.58 432 256.333 432c97.268 0 176-78.716 176-176 0-97.267-78.716-176-176-176-58.496 0-110.28 28.476-142.274 72.333h98.274c6.627 0 12 5.373 12 12v48c0 6.627-5.373 12-12 12z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="glide__slide">
                                <div class="product">
                                    <div class="product__header">
                                        <a href="#"><img src="img/products/sumsung/samsung1.jpeg" alt="product"></a>
                                    </div>
                                    <div class="product__footer">
                                        <h3>Samsung Galaxy</h3>
                                        <div class="rating">
                                            <svg>
                                                <use xlink:href="./img/sprite.svg#icon-star-full"></use>
                                            </svg>
                                            <svg>
                                                <use xlink:href="./img/sprite.svg#icon-star-full"></use>
                                            </svg>
                                            <svg>
                                                <use xlink:href="./img/sprite.svg#icon-star-full"></use>
                                            </svg>
                                            <svg>
                                                <use xlink:href="./img/sprite.svg#icon-star-full"></use>
                                            </svg>
                                            <svg>
                                                <use xlink:href="./img/sprite.svg#icon-star-empty"></use>
                                            </svg>
                                        </div>
                                        <div class="product__price">
                                            <h4>$300</h4>
                                        </div>
                                        <a href="#"><button type="submit" class="product__btn">Add To Cart</button></a>
                                    </div>
                                    <ul>
                                        <li>
                                            <a data-tip="Quick View" data-place="left" href="#">
                                                <svg aria-hidden="true" focusable="false" data-prefix="far"
                                                    data-icon="eye" class="svg-inline--fa fa-eye fa-w-18" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                    <path fill="#e5e5e5"
                                                        d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-tip="Add To Wishlist" data-place="left" href="#">
                                                <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                    data-icon="heart" class="svg-inline--fa fa-heart fa-w-16" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <path fill="#e5e5e5"
                                                        d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-tip="Add To Compare" data-place="left" href="#">
                                                <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                    data-icon="undo" class="svg-inline--fa fa-undo fa-w-16" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <path fill="#e5e5e5"
                                                        d="M212.333 224.333H12c-6.627 0-12-5.373-12-12V12C0 5.373 5.373 0 12 0h48c6.627 0 12 5.373 12 12v78.112C117.773 39.279 184.26 7.47 258.175 8.007c136.906.994 246.448 111.623 246.157 248.532C504.041 393.258 393.12 504 256.333 504c-64.089 0-122.496-24.313-166.51-64.215-5.099-4.622-5.334-12.554-.467-17.42l33.967-33.967c4.474-4.474 11.662-4.717 16.401-.525C170.76 415.336 211.58 432 256.333 432c97.268 0 176-78.716 176-176 0-97.267-78.716-176-176-176-58.496 0-110.28 28.476-142.274 72.333h98.274c6.627 0 12 5.373 12 12v48c0 6.627-5.373 12-12 12z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="glide__slide">
                                <div class="product">
                                    <div class="product__header">
                                        <a href="#"><img src="img/products/headphone/headphone1.jpeg" alt="product"></a>
                                    </div>
                                    <div class="product__footer">
                                        <h3>Sony WH-CH510</h3>
                                        <div class="rating">
                                            <svg>
                                                <use xlink:href="./img/sprite.svg#icon-star-full"></use>
                                            </svg>
                                            <svg>
                                                <use xlink:href="./img/sprite.svg#icon-star-full"></use>
                                            </svg>
                                            <svg>
                                                <use xlink:href="./img/sprite.svg#icon-star-full"></use>
                                            </svg>
                                            <svg>
                                                <use xlink:href="./img/sprite.svg#icon-star-full"></use>
                                            </svg>
                                            <svg>
                                                <use xlink:href="./img/sprite.svg#icon-star-empty"></use>
                                            </svg>
                                        </div>
                                        <div class="product__price">
                                            <h4>$250</h4>
                                        </div>
                                        <a href="#"><button type="submit" class="product__btn">Add To Cart</button></a>
                                    </div>
                                    <ul>
                                        <li>
                                            <a data-tip="Quick View" data-place="left" href="#">
                                                <svg aria-hidden="true" focusable="false" data-prefix="far"
                                                    data-icon="eye" class="svg-inline--fa fa-eye fa-w-18" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                    <path fill="#e5e5e5"
                                                        d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-tip="Add To Wishlist" data-place="left" href="#">
                                                <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                    data-icon="heart" class="svg-inline--fa fa-heart fa-w-16" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <path fill="#e5e5e5"
                                                        d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-tip="Add To Compare" data-place="left" href="#">
                                                <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                    data-icon="undo" class="svg-inline--fa fa-undo fa-w-16" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <path fill="#e5e5e5"
                                                        d="M212.333 224.333H12c-6.627 0-12-5.373-12-12V12C0 5.373 5.373 0 12 0h48c6.627 0 12 5.373 12 12v78.112C117.773 39.279 184.26 7.47 258.175 8.007c136.906.994 246.448 111.623 246.157 248.532C504.041 393.258 393.12 504 256.333 504c-64.089 0-122.496-24.313-166.51-64.215-5.099-4.622-5.334-12.554-.467-17.42l33.967-33.967c4.474-4.474 11.662-4.717 16.401-.525C170.76 415.336 211.58 432 256.333 432c97.268 0 176-78.716 176-176 0-97.267-78.716-176-176-176-58.496 0-110.28 28.476-142.274 72.333h98.274c6.627 0 12 5.373 12 12v48c0 6.627-5.373 12-12 12z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="glide__slide">
                                <div class="product">
                                    <div class="product__header">
                                        <a href="#"><img src="img/products/iPhone/iphone1.jpeg" alt="product"></a>
                                    </div>
                                    <div class="product__footer">
                                        <h3>Apple iPhone XR</h3>
                                        <div class="rating">
                                            <svg>
                                                <use xlink:href="./img/sprite.svg#icon-star-full"></use>
                                            </svg>
                                            <svg>
                                                <use xlink:href="./img/sprite.svg#icon-star-full"></use>
                                            </svg>
                                            <svg>
                                                <use xlink:href="./img/sprite.svg#icon-star-full"></use>
                                            </svg>
                                            <svg>
                                                <use xlink:href="./img/sprite.svg#icon-star-full"></use>
                                            </svg>
                                            <svg>
                                                <use xlink:href="./img/sprite.svg#icon-star-empty"></use>
                                            </svg>
                                        </div>
                                        <div class="product__price">
                                            <h4>$550</h4>
                                        </div>
                                        <a href="#"><button type="submit" class="product__btn">Add To Cart</button></a>
                                    </div>
                                    <ul>
                                        <li>
                                            <a data-tip="Quick View" data-place="left" href="#">
                                                <svg aria-hidden="true" focusable="false" data-prefix="far"
                                                    data-icon="eye" class="svg-inline--fa fa-eye fa-w-18" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                    <path fill="#e5e5e5"
                                                        d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-tip="Add To Wishlist" data-place="left" href="#">
                                                <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                    data-icon="heart" class="svg-inline--fa fa-heart fa-w-16" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <path fill="#e5e5e5"
                                                        d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a data-tip="Add To Compare" data-place="left" href="#">
                                                <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                    data-icon="undo" class="svg-inline--fa fa-undo fa-w-16" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <path fill="#e5e5e5"
                                                        d="M212.333 224.333H12c-6.627 0-12-5.373-12-12V12C0 5.373 5.373 0 12 0h48c6.627 0 12 5.373 12 12v78.112C117.773 39.279 184.26 7.47 258.175 8.007c136.906.994 246.448 111.623 246.157 248.532C504.041 393.258 393.12 504 256.333 504c-64.089 0-122.496-24.313-166.51-64.215-5.099-4.622-5.334-12.554-.467-17.42l33.967-33.967c4.474-4.474 11.662-4.717 16.401-.525C170.76 415.336 211.58 432 256.333 432c97.268 0 176-78.716 176-176 0-97.267-78.716-176-176-176-58.496 0-110.28 28.476-142.274 72.333h98.274c6.627 0 12 5.373 12 12v48c0 6.627-5.373 12-12 12z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                        </ul>
                    </div>

                    <div class="glide__arrows" data-glide-el="controls">
                        <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-left"
                                class="svg-inline--fa fa-caret-left fa-w-6" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512">
                                <path fill="#001a00"
                                    d="M192 127.338v257.324c0 17.818-21.543 26.741-34.142 14.142L29.196 270.142c-7.81-7.81-7.81-20.474 0-28.284l128.662-128.662c12.599-12.6 34.142-3.676 34.142 14.142z">
                                </path>
                            </svg>
                        </button>
                        <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-right"
                                class="svg-inline--fa fa-caret-right fa-w-6" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512">
                                <path fill="#001a00"
                                    d="M0 384.662V127.338c0-17.818 21.543-26.741 34.142-14.142l128.662 128.662c7.81 7.81 7.81 20.474 0 28.284L34.142 398.804C21.543 411.404 0 402.48 0 384.662z">
                                </path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Facility Section -->
    <section class="facility__section section" id="facility">
        <div class="container">
            <div class="facility__contianer">
                <div class="facility__box">
                    <div class="facility-img__container">
                        <svg>
                            <use xlink:href="./img/svg/airplane.svg"></use>
                        </svg>
                    </div>
                    <p>FREE SHIPPING WORLD WIDE</p>
                </div>

                <div class="facility__box">
                    <div class="facility-img__container">
                        <svg>
                            <use xlink:href="./img/sprite.svg#icon-credit-card-alt"></use>
                        </svg>
                    </div>
                    <p>100% MONEY BACK GUARANTEE</p>
                </div>

                <div class="facility__box">
                    <div class="facility-img__container">
                        <svg>
                            <use xlink:href="./img/sprite.svg#icon-credit-card"></use>
                        </svg>
                    </div>
                    <p>MANY PAYMENT GATWAYS</p>
                </div>

                <div class="facility__box">
                    <div class="facility-img__container">
                        <svg>
                            <use xlink:href="./img/sprite.svg#icon-headphones"></use>
                        </svg>
                    </div>
                    <p>24/7 ONLINE SUPPORT</p>
                </div>
            </div>
        </div>
    </section>
</main>