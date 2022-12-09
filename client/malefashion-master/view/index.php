<!DOCTYPE html>
<html lang="zxx">

<head>
    <?php include 'layout/headerpage.php' ?>
</head>

<body>

    <!-- Offcanvas Menu Begin -->
    <?php include 'layout/menu_page.php' ?>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <?php include 'layout/heder_section_page.php' ?>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__slider owl-carousel">
            <div class="hero__items set-bg" data-setbg="img/hero/hero-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-7 col-md-8">
                            <div class="hero__text">
                                <h6>Summer Collection</h6>
                                <h2>Fall - Winter Collections 2030</h2>
                                <p>A specialist label creating luxury essentials. Ethically crafted with an unwavering
                                commitment to exceptional quality.</p>
                                <a href="#" class="primary-btn">Shop now <span class="arrow_right"></span></a>
                                <div class="hero__social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__items set-bg" data-setbg="img/hero/hero-2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-7 col-md-8">
                            <div class="hero__text">
                                <h6>Summer Collection</h6>
                                <h2>Fall - Winter Collections 2030</h2>
                                <p>A specialist label creating luxury essentials. Ethically crafted with an unwavering
                                commitment to exceptional quality.</p>
                                <a href="#" class="primary-btn">Shop now <span class="arrow_right"></span></a>
                                <div class="hero__social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Banner Section Begin -->
    <section class="banner spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 offset-lg-4">
                    <div class="banner__item">
                        <div class="banner__item__pic">
                            <img src="img/banner/banner-1.jpg" alt="">
                        </div>
                        <div class="banner__item__text">
                            <h2>Clothing Collections 2030</h2>
                            <a href="#">Shop now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="banner__item banner__item--middle">
                        <div class="banner__item__pic">
                            <img src="img/banner/banner-2.jpg" alt="">
                        </div>
                        <div class="banner__item__text">
                            <h2>Accessories</h2>
                            <a href="#">Shop now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="banner__item banner__item--last">
                        <div class="banner__item__pic">
                            <img src="img/banner/banner-3.jpg" alt="">
                        </div>
                        <div class="banner__item__text">
                            <h2>Shoes Spring 2030</h2>
                            <a href="#">Shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="filter__controls">
                        <li class="active" data-filter="*">Best Sellers</li>
                        <li data-filter=".new-arrivals">New Arrivals</li>
                        <li data-filter=".hot-sales">Hot Sales</li>
                    </ul>
                </div>
            </div>
            <div class="row product__filter">
                <?php
                include '../utils/LTDUtils.php';

                $arrNameProduct = array("Giày xịn", "Giày hơi xịn", "Giày rất xịn", "Giày cũng xịn");
                $arrPrice = array(10, 5, 15, 7);
                for ($i = 0; $i < 4; $i++) {
        
                    echo '<div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">';
                    echo '    <div class="product__item">';
                    echo '  <div class="product__item__pic set-bg" data-setbg="img/product/product-1.jpg">';
                    echo '      <span class="label">New</span>';
                    echo '      <ul class="product__hover">';
                    echo '          <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>';
                    echo '          <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a></li>';
                    echo '    <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>';
                    echo '</ul>';
                    echo '</div>';
                    echo '  <div class="product__item__text">';
                    echo '      <h6>'.$arrNameProduct[$i].'</h6>';
                    echo '      <a href="#" class="add-cart">+ Add To Cart</a>';
                    echo '      <div class="rating">';
                    echo '          <i class="fa fa-star-o"></i>';
                    echo '          <i class="fa fa-star-o"></i>';
                    echo '          <i class="fa fa-star-o"></i>';
                    echo '          <i class="fa fa-star-o"></i>';
                    echo '          <i class="fa fa-star-o"></i>';
                    echo '      </div>';
                    echo '      <h5>'.chuyenUSDtoVND($arrPrice[$i]).'</h5>';
                    echo '      <div class="product__color__select">';
                    echo '          <label for="pc-1">';
                    echo '              <input type="radio" id="pc-1">';
                    echo '          </label>';
                    echo '          <label class="active black" for="pc-2">';
                    echo '              <input type="radio" id="pc-2">';
                    echo '          </label>';
                    echo '          <label class="grey" for="pc-3">';
                    echo '              <input type="radio" id="pc-3">';
                    echo '          </label>';
                    echo '      </div>';
                    echo '  </div>';
                    echo '</div>';
                    echo '</div>';
                }

                for ($i = 0; $i < 4; $i++) {
                    echo '<div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales">';
                    echo '    <div class="product__item">';
                    echo '  <div class="product__item__pic set-bg" data-setbg="img/product/product-2.jpg">';
                    echo '      <ul class="product__hover">';
                    echo '          <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>';
                    echo '          <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a></li>';
                    echo '          <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>';
                    echo '      </ul>';
                    echo '  </div>';
                    echo '  <div class="product__item__text">';
                    echo '      <h6>Piqué Biker Jacket</h6>';
                    echo '      <a href="#" class="add-cart">+ Add To Cart</a>';
                    echo '      <div class="rating">';
                    echo '          <i class="fa fa-star-o"></i>';
                    echo '          <i class="fa fa-star-o"></i>';
                    echo '          <i class="fa fa-star-o"></i>';
                    echo '          <i class="fa fa-star-o"></i>';
                    echo '          <i class="fa fa-star-o"></i>';
                    echo '      </div>';
                    echo '      <h5>67.24</h5>';
                    echo '      <div class="product__color__select">';
                    echo '          <label for="pc-4">';
                    echo '              <input type="radio" id="pc-4">';
                    echo '          </label>';
                    echo '          <label class="active black" for="pc-5">';
                    echo '              <input type="radio" id="pc-5">';
                    echo '          </label>';
                    echo '          <label class="grey" for="pc-6">';
                    echo '              <input type="radio" id="pc-6">';
                    echo '          </label>';
                    echo '      </div>';
                    echo '  </div>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </section>
    <!-- Product Section End -->

    <!-- Categories Section Begin -->
    <section class="categories spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="categories__text">
                        <h2>Clothings Hot <br /> <span>Shoe Collection</span> <br /> Accessories</h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="categories__hot__deal">
                        <img src="img/product-sale.png" alt="">
                        <div class="hot__deal__sticker">
                            <span>Sale Of</span>
                            <h5>$29.99</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1">
                    <div class="categories__deal__countdown">
                        <span>Deal Of The Week</span>
                        <h2>Multi-pocket Chest Bag Black</h2>
                        <div class="categories__deal__countdown__timer" id="countdown">
                            <div class="cd-item">
                                <span>3</span>
                                <p>Days</p>
                            </div>
                            <div class="cd-item">
                                <span>1</span>
                                <p>Hours</p>
                            </div>
                            <div class="cd-item">
                                <span>50</span>
                                <p>Minutes</p>
                            </div>
                            <div class="cd-item">
                                <span>18</span>
                                <p>Seconds</p>
                            </div>
                        </div>
                        <a href="#" class="primary-btn">Shop now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Instagram Section Begin -->
    <section class="instagram spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="instagram__pic">
                        <div class="instagram__pic__item set-bg" data-setbg="img/instagram/instagram-1.jpg"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="img/instagram/instagram-2.jpg"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="img/instagram/instagram-3.jpg"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="img/instagram/instagram-4.jpg"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="img/instagram/instagram-5.jpg"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="img/instagram/instagram-6.jpg"></div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="instagram__text">
                        <h2>Instagram</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.</p>
                        <h3>#Male_Fashion</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Instagram Section End -->

    <!-- Latest Blog Section Begin -->
    <section class="latest spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Latest News</span>
                        <h2>Fashion New Trends</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="img/blog/blog-1.jpg"></div>
                        <div class="blog__item__text">
                            <span><img src="img/icon/calendar.png" alt=""> 16 February 2020</span>
                            <h5>What Curling Irons Are The Best Ones</h5>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="img/blog/blog-2.jpg"></div>
                        <div class="blog__item__text">
                            <span><img src="img/icon/calendar.png" alt=""> 21 February 2020</span>
                            <h5>Eternity Bands Do Last Forever</h5>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="img/blog/blog-3.jpg"></div>
                        <div class="blog__item__text">
                            <span><img src="img/icon/calendar.png" alt=""> 28 February 2020</span>
                            <h5>The Health Benefits Of Sunglasses</h5>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Blog Section End -->

    <!-- Footer Section Begin -->
    <?php include 'layout/footer_section_page.php' ?>
    <!-- Footer Section End -->


</body>

</html>