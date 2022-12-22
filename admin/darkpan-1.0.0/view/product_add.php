<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../view/layout/header_page.php' ?>
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
            <div class="container-fluid pt-4 px-4">
                <div><a class="btn btn-light rounded-pill m-2" href="../controller/productController.php">Back</a></div>
                <div class="row g-4">
                    <div class="col-12 col-xl-7">
                        <div class="col-sm-12 ">
                        <div class="bg-secondary rounded h-100 p-4">
                                <h6 class="mb-4" style="text-align: center;">Thêm sản phẩm</h6>
                                <form action="../controller/productController.php" method="post">
                                    <div class="row mb-3">
                                        <legend class="col-form-label col-sm-2 pt-0">Trạng thái</legend>
                                        <div class="col-sm-10">
                                            <select class="form-select mb-3" name="switch_status" id="switch_status" required>
                                                <option value="1">Hoạt động</option>
                                                <option value="0">Ngưng hoạt động</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="txt_name" class="col-sm-2 col-form-label">Tên sản phẩm</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" value="" name="txt_name" id="txt_name">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="txt_price" class="col-sm-2 col-form-label">Giá bán</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" value="" name="txt_price" id="txt_price">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="txt_amount" class="col-sm-2 col-form-label">Số lượng</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" value="" name="txt_amount" id="txt_amount">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="txt_description" class="col-sm-2 col-form-label">Mô tả</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" value="" name="txt_description" id="txt_description">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="file_image" class="col-sm-2 col-form-label">Hình ảnh</label>
                                        <div class="col-sm-10">
                                        <input type="file" id="file_image" name="file_image" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <legend class="col-form-label col-sm-2 pt-0">Loại sản phẩm</legend>
                                        <div class="col-sm-10">
                                            <select class="form-select mb-3" name="txt_catID" id="txt_catID" required>
                                                <option value="1">Áo</option>
                                                <option value="2">Quần</option>
                                                <option value="3">Balo</option>
                                                <option value="4">Giày</option>
                                            </select>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-outline-success m-2" name="product_action" value="product_create">Thêm</button>
                                </form>
                            </div>
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