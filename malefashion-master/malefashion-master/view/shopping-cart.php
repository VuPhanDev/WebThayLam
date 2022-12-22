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
                        <h4>Shopping Cart</h4>
                        <div class="breadcrumb__links">
                            <a href="./index.php">Home</a>
                            <a href="./shop.php">Shop</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="shopping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                for ($i = 0; $i < count($data["cart"]); $i++) {
                                    echo '<tr>';
                                    echo '   <td class="product__cart__item">';
                                    echo '   <div class="product__cart__item__pic">';
                                    echo '       <img src="../view/img/product/'.$data["cart"][$i]["image"] .'" alt="" width="50">';
                                    echo '   </div>';
                                    echo '   <div class="product__cart__item__text">';
                                    echo '       <h6>T-shirt Contrast Pocket</h6>';
                                    echo '       <h5>444</h5>';
                                    echo '   </div>';
                                    echo '</td>';
                                    echo '<td class="quantity__item">';
                                    echo '   <div class="quantity">';
                                    echo '       <div class="pro-qty-2">';
                                    echo '           <input type="text" value="1">';
                                    echo '       </div>';
                                    echo '   </div>';
                                    echo '</td>';
                                    echo '<td class="cart__price">$ 30.00</td>';
                                    echo '<td class="cart__close"><i class="fa fa-close"></i></td>';
                                    echo '</tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn">
                                <a href="#">Continue Shopping</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn update__btn">
                                <a href="#"><i class="fa fa-spinner"></i> Update cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cart__discount">
                        <h6>Discount codes</h6>
                        <form action="#">
                            <input type="text" placeholder="Coupon code">
                            <button type="submit">Apply</button>
                        </form>
                    </div>
                    <div class="cart__total">
                        <h6>Cart total</h6>
                        <ul>
                            <li>Subtotal <span>$ 169.50</span></li>
                            <li>Total <span>$ 169.50</span></li>
                        </ul>
                        <a href="#" class="primary-btn">Proceed to checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->

    <!-- Footer Section Begin -->
    <?php include '../view/layout/footer_section_page.php' ?>
    <!-- Footer Section End -->
</body>

</html>