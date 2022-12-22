<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7">
                    <div class="header__top__left">
                        <p>Free shipping, 30-day return or refund guarantee.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5">
                    <div class="header__top__right">
                        <?php
                        if (isset($_SESSION["email"])) {
                            echo '  <div class="header__top__hover">';
                            echo '       <span>Hi ' . $_SESSION["email"] . ' <i class="arrow_carrot-down"></i></span>';
                            echo '       <ul>';
                            echo '           <li><a href="../view/logout_page.php" class="dropdown-item">Log Out</a></li>';
                            echo '       </ul>';
                            echo '   </div>';
                            echo '</div>';
                        } else {
                            echo '   <div class="header__top__links">';
                            echo '      <a href="../view/signin_signup.php">Sign in</a>';
                            echo '  </div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="header__logo">
                    <a href="./index.php"><img src="../view/img/logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <nav class="header__menu mobile-menu">
                    <ul>
                        <li><a href="./index.php">Trang chủ</a></li>
                        <li><a href="../controller/productController.php">Cửa hàng</a></li>
                        <li><a href="#">Pages</a>
                            <ul class="dropdown">
                                <li><a href="./about.php">Về chúng tôi</a></li>
                                <li><a href="./shop-details.php">Shop Details</a></li>
                                <li><a href="./shopping-cart.php">Giỏ hàng</a></li>
                                <li><a href="./checkout.php">Thanh toán</a></li>
                                <li><a href="./blog-details.php">Blog Details</a></li>
                            </ul>
                        </li>
                        <li><a href="./blog.php">Blog</a></li>
                        <li><a href="../controller/productController.php?action=order_clear">Empty Cart</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="header__nav__option">
                    <a href="#" class="search-switch"><img src="../view/img/icon/search.png" alt=""></a>
                    <?php
                    if (!empty($_SESSION["cart_item"])) {
                        echo '<a href="../controller/productController.php?action=order_checkout"><img src="../view/img/icon/cart.png" alt=""> <span>'.count($_SESSION["cart_item"]).'</span></a>';
                    } else {
                        echo '<a href="#"><img src="../view/img/icon/cart.png" alt=""> <span>5</span></a>';
                    }

                    ?>
                    <!-- <a href="#"><img src="../view/img/icon/cart.png" alt=""> <span>5</span></a>
                    <div class="price">$0.00</div> -->
                </div>
            </div>
        </div>
        <div class="canvas__open"><i class="fa fa-bars"></i></div>
    </div>
</header>