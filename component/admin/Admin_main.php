<?php 
    require_once $level."config.php";
    $sql = "SELECT * FROM PHONES ";
    $count= "SELECT COUNT(id) as product_count  FROM PHONES ";
    $query2 =mysqli_query($connect,$count);
    $query = mysqli_query($connect,$sql);
?>
<div class="main-content">
<<<<<<< HEAD
    <!-- Header -->
    <header class="admin_header">
        <h1>
            <label for="nav-toggle">
                <span class="las la-bars"></span>
            </label>
            Dashboard
        </h1>
=======
                <!-- Header -->    
        <header class="admin_header">
            <h1>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label>
                Dashboard
            </h1>
>>>>>>> 2c62f027a2082eccf74329208c8edd3a49c7ca0f

        <div class="search-wrapper">
            <span class="las la-search"></span>
            <input type="search" placeholder="Search here" />
        </div>

        <div class="user-wrapper">
            <img src="<?php echo $level . img_path . "profile1.jpg" ?>" width="30px" height="30px" alt="">
            <div>
                <h4>Duc Bang</h4>
                <small>Super admin</small>
            </div>
        </div>
    </header>

    <main>

        <div class="cards">zz
            <div class="card-single">
                <div>
                    <h1>54</h1>
                    <span>Customers</span>
                </div>
                <div>
                    <span class="las la-users"></span>
                </div>
            </div>
<<<<<<< HEAD
=======
        </>
>>>>>>> 2c62f027a2082eccf74329208c8edd3a49c7ca0f

            <div class="card-single">
                <div>
                    <h1><?php 
                        while($dem = mysqli_fetch_assoc($query2)){?>
                            <?php echo $dem['product_count'] ?>               
                        <?php }?>                     

                    </h1>
                    <span>Product</span>
                </div>
                <div>
                    <span class="las la-clipboard-list"></span>
                </div>
            </div>

            <div class="card-single">
                <div>
                    <h1>100</h1>
                    <span>Orders</span>
                </div>
                <div>
                    <span class="las la-shopping-bag"></span>
                </div>
            </div>

            <div class="card-single">
                <div>
                    <h1>$6k</h1>
                    <span>Income</span>
                </div>
                <div>
                    <span class="lab la-google-wallet"></span>
                </div>
            </div>
        </div>

        <div class="recent-grid">
            <div class="projects">
                <div class="card">
                    <div class="card-header">
                        <h3>Products</h3>
                        <button> ADD PRODUCT <span class="las la-arorw-right"></span></button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table width="100%">
                                <thead>
                                    <tr>
                                        <td>Image</td>
                                        <td>Name</td>
                                        <td>Description</td>
                                        <td>Price</td>
                                        <td>Category</td>
                                        <td>status</td>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $i=1;
                                            while($row =mysqli_fetch_assoc($query)){?>
                                                <tr>
                                                    <td><img src="<?php echo $level.imgIPhone_path.$row['image']; ?>" width="100px" height="100px" alt=""></td>
                                                    <td><?php echo $row['name_phone']; ?></td>
                                                    <td><?php echo $row['description']; ?></td>
                                                    <td><?php echo $row['price']; ?></td>
                                                    <td><?php echo $row['category']; ?></td>
                                                    <td><span class="status purple"></span>
                                                        Review
                                                    </td>
                                                </tr>
                                            <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="customers">
                <div class="card">
                    <div class="card-header">
                        <h3>New Customer</h3>
                        <button>See All <span class="las la-arrow-right"></span> </button>
                    </div>
                    <div class="card-body">
                        <div class="customer">
                            <div class="info">
                                <img src="<?php echo $level . img_path . "profile2.jpg" ?>" width="40px" height="40px" alt="">
                                <div>
                                    <h4>Thanh Man</h4>
                                    <small>CEO VinGroup</small>
                                </div>
                            </div>
                            <div class="contact">
                                <span class="las la-user-circle"></span>
                                <span class="las la-comment"></span>
                                <span class="las la-phone"></span>
                            </div>
                        </div>
                        <div class="customer">
                            <div class="info">
                                <img src="<?php echo $level . img_path . "profile1.jpg" ?>" width="40px" height="40px" alt="">
                                <div>
                                    <h4>Thanh Man</h4>
                                    <small>CEO VinGroup</small>
                                </div>
                            </div>
                            <div class="contact">
                                <span class="las la-user-circle"></span>
                                <span class="las la-comment"></span>
                                <span class="las la-phone"></span>
                            </div>
                        </div>
                        <div class="customer">
                            <div class="info">
                                <img src="<?php echo $level . img_path . "profile1.jpg" ?>" width="40px" height="40px" alt="">
                                <div>
                                    <h4>Thanh Man</h4>
                                    <small>CEO VinGroup</small>
                                </div>
                            </div>
                            <div class="contact">
                                <span class="las la-user-circle"></span>
                                <span class="las la-comment"></span>
                                <span class="las la-phone"></span>
                            </div>
                        </div>
                        <div class="customer">
                            <div class="info">
                                <img src="<?php echo $level . img_path . "profile1.jpg" ?>" width="40px" height="40px" alt="">
                                <div>
                                    <h4>Thanh Man</h4>
                                    <small>CEO VinGroup</small>
                                </div>
                            </div>
                            <div class="contact">
                                <span class="las la-user-circle"></span>
                                <span class="las la-comment"></span>
                                <span class="las la-phone"></span>
                            </div>
                        </div>
                        <div class="customer">
                            <div class="info">
                                <img src="<?php echo $level . img_path . "profile1.jpg" ?>" width="40px" height="40px" alt="">
                                <div>
                                    <h4>Thanh Man</h4>
                                    <small>CEO VinGroup</small>
                                </div>
                            </div>
                            <div class="contact">
                                <span class="las la-user-circle"></span>
                                <span class="las la-comment"></span>
                                <span class="las la-phone"></span>
                            </div>
                        </div>
                        <div class="customer">
                            <div class="info">
                                <img src="<?php echo $level . img_path . "profile1.jpg" ?>" width="40px" height="40px" alt="">
                                <div>
                                    <h4>Thanh Man</h4>
                                    <small>CEO VinGroup</small>
                                </div>
                            </div>
                            <div class="contact">
                                <span class="las la-user-circle"></span>
                                <span class="las la-comment"></span>
                                <span class="las la-phone"></span>
                            </div>
                        </div>
                        <div class="customer">
                            <div class="info">
                                <img src="<?php echo $level . img_path . "profile1.jpg" ?>" width="40px" height="40px" alt="">
                                <div>
                                    <h4>Thanh Man</h4>
                                    <small>CEO VinGroup</small>
                                </div>
                            </div>
                            <div class="contact">
                                <span class="las la-user-circle"></span>
                                <span class="las la-comment"></span>
                                <span class="las la-phone"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

</div>