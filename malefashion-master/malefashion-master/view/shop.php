<!DOCTYPE html>
<html lang="zxx">

<head>
    <?php include '../view/layout/headerpage.php' ?>
</head>

<body>
    <!-- Offcanvas Menu Begin -->
    <?php include '../view/layout/menu_page.php' ?>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <?php include '../view/layout/heder_section_page.php'  ?>
    <!-- Header Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Cửa hàng</h4>
                        <div class="breadcrumb__links">
                            <a href="./index.php">Trang chủ</a>
                            <span>Cửa hàng</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shop Section Begin -->
    <section class="shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="shop__sidebar">
                        <div class="shop__sidebar__search">
                            <form action="#">
                                <input type="text" placeholder="Tìm kiếm...">
                                <button type="submit"><span class="icon_search"></span></button>
                            </form>
                        </div>
                        <div class="shop__sidebar__accordion">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseOne">Danh mục sản phẩm</a>
                                    </div>
                                    <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__categories">
                                                <ul class="nice-scroll">
                                                    <li><a href="#">Áo (20)</a></li>
                                                    <li><a href="#">Quần (20)</a></li>
                                                    <li><a href="#">Giày (20)</a></li>
                                                    <li><a href="#">Balo (20)</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <?php
                        include '../utils/LTDUtils.php';
                        for ($i = 0; $i < count($data["product"]); $i++) {
                            echo '<div class="col-lg-4 col-md-6 col-sm-6">';
                            echo ' <div class="product__item">';
                            echo '   <div class="product__item__pic set-bg" data-setbg="../view/img/product/'.$data["product"][$i]["image"] .'">';
                            echo '       <ul class="product__hover">';
                            echo '           <li><a href="#"><img src="../view/img/icon/heart.png" alt=""></a></li>';
                            echo '           <li><a href="#"><img src="../view/img/icon/compare.png" alt=""> <span>Compare</span></a>';
                            echo '           </li>';
                            echo '           <li><a href="#"><img src="../view/img/icon/search.png" alt=""></a></li>';
                            echo '       </ul>';
                            echo '   </div>';
                            echo '   <div class="product__item__text">';
                            echo '       <h6>' . $data["product"][$i]["productName"] . '</h6>';
                            echo '       <a href="../controller/productController.php?action=order_add&id='.$data["product"][$i]["productID"].'" class="add-cart">+ Add To Cart</a>';
                            echo '       <div class="rating">';
                            echo '           <i class="fa fa-star-o"></i>';
                            echo '           <i class="fa fa-star-o"></i>';
                            echo '           <i class="fa fa-star-o"></i>';
                            echo '           <i class="fa fa-star-o"></i>';
                            echo '           <i class="fa fa-star-o"></i>';
                            echo '       </div>';
                            echo '       <h5>$' . chuyenUSDtoVND($data["product"][$i]["price"]) . '</h5>';
                            echo '       <div class="product__color__select">';
                            echo '           <label for="pc-4">';
                            echo '         <input type="radio" id="pc-4">';
                            echo '           </label>';
                            echo '           <label class="active black" for="pc-5">';
                            echo '               <input type="radio" id="pc-5">';
                            echo '           </label>';
                            echo '           <label class="grey" for="pc-6">';
                            echo '               <input type="radio" id="pc-6">';
                            echo '           </label>';
                            echo '       </div>';
                            echo '   </div>';
                            echo '</div>';
                            echo '</div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Section End -->

    <!-- Footer Section Begin -->
    <?php include '../view/layout/footer_section_page.php' ?>
    <!-- Footer Section End -->
</body>

</html>