<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include '../view/layout/header_page.php';
    ?>
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <?php include '../view/layout/sidebar_page.php' ?>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <?php include '../view/layout/header_navbar_page.php' ?>
            <!-- Navbar End -->


            <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4" >Danh sách Sản Phẩm</h6>
                            <a class="btn btn-light m-2" href="../view/product_add.php">Thêm sản phẩm</a>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Tên sản phẩm</th>
                                            <th scope="col">Giá</th>
                                            <th scope="col">Số lượng</th>
                                            <th scope="col">Hình ảnh</th>
                                            <th scope="col">Mô tả</th>
                                            <th scope="col">Trạng thái</th>
                                            <th scope="col">Thể loại</th>
                                            <th scope="col">Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $state = "";
                                            for ($i = 0; $i < count($data["product"]); $i++) {
                                                if ($data["product"][$i]["status"] == 1){
                                                $state = "Hoạt động";
                                                }else{
                                                $state = "Ngừng hoạt động";
                                                }
                                                
                                                echo '<tr>';
                                                echo '    <th style="vertical-align: middle;" scope="row">' . $data["product"][$i]["productID"] . '</th>';
                                                echo '    <td style="vertical-align: middle;">' . $data["product"][$i]["productName"] . '</td>';
                                                echo '    <td style="vertical-align: middle;">' . $data["product"][$i]["price"] . '</td>';
                                                echo '    <td style="vertical-align: middle;">' . $data["product"][$i]["amount"] . '</td>';
                                                echo '    <td style="vertical-align: middle;"><img class="rounded-circle me-lg-2" src="../view/img/product/'. $data["product"][$i]["image"] .'" alt="" width="50" height="55"> </td>';
                                                echo '    <td style="vertical-align: middle;">' . $data["product"][$i]["description"] . '</td>';
                                                echo '    <td style="vertical-align: middle;">' . $data["product"][$i]["status"] . '</td>';
                                                echo '    <td style="vertical-align: middle;">' . $data["product"][$i]["catID"] . '</td>';
                                                echo '   <td>';
                                                echo '       <a class="btn btn-info rounded-pill m-2" href="../controller/productController.php?action=product_edit&id='.$data["product"][$i]["productID"].'">Sửa</a>';
                                                echo '       <a class="btn btn-danger rounded-pill m-2" href="../controller/productController.php?action=product_delete&id='.$data["product"][$i]["productID"].'">Xoá</a>';
                                                echo '    </td>';
                                                echo '</tr>';
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Footer Start -->
                    <?php include '../view/layout/footer_page.php' ?>
                    <!-- Footer End -->
                </div>
                <!-- Content End -->

            </div>

            <?php include '../view/layout/script_page.php' ?>
</body>

</html>