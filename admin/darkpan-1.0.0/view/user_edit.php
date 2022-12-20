<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../layout/header_page.php' ?>
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
        <?php include './layout/sidebar_page.php' ?>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <?php include './layout/header_navbar_page.php' ?>
            <!-- Navbar End -->
            <div class="container-fluid pt-4 px-4">
                <div><a class="btn btn-light rounded-pill m-2" href="./user_list.php">Back</a></div>
                <div class="row g-4">
                    <div class="col-12 col-xl-7">
                        <div class="col-sm-12 ">
                            <div class="bg-secondary rounded h-100 p-4">
                                <h6 class="mb-4" style="text-align: center;">Chi tiết người dùng</h6>
                                <form action="../controller/userController.php" method="post">
                                    <div class="row mb-3">
                                        <legend class="col-form-label col-sm-2 pt-0">Trạng thái</legend>
                                        <div class="col-sm-10">
                                            <select class="form-select mb-3"name="switch_state" id="switch_state" required>
                                                <option value="1">Hoạt động</option>
                                                <option value="0">Ngưng hoạt động</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="txt_name" class="col-sm-2 col-form-label">Họ và tên</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="txt_name" id="txt_name">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="txt_email" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" name="txt_email" id="txt_email">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="txt_pass" class="col-sm-2 col-form-label">Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" name="txt_pass" id="txt_pass">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="txt_sdt" class="col-sm-2 col-form-label">Số điện thoại</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="txt_sdt" id="txt_sdt">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="txt_address" class="col-sm-2 col-form-label">Địa chỉ</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="txt_address" id="txt_address">
                                        </div>
                                    </div>
                                    <fieldset class="row mb-3">
                                        <legend class="col-form-label col-sm-2 pt-0">Giới tính</legend>
                                        <div class="col-sm-10">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="radio_sex" id="radio_sex" value="man" checked>
                                                <label class="form-check-label" for="radio_sex">
                                                    Nam
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="radio_sex" id="radio_sex" value="woman">
                                                <label class="form-check-label" for="radio_sex">
                                                    Nữ
                                                </label>
                                            </div>
                                        </div>

                                    </fieldset>

                                    <fieldset class="row mb-3">
                                        <legend class="col-form-label col-sm-2 pt-0">Vai trò</legend>
                                        <div class="col-sm-10">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="radio_role" id="radio_role" value="admin" checked>
                                                <label class="form-check-label" for="radio_role">
                                                    Admin
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="radio_role" id="radio_role" value="user">
                                                <label class="form-check-label" for="radio_role">
                                                    User
                                                </label>
                                            </div>
                                        </div>

                                    </fieldset>
                                    <button type="submit" class="btn btn-outline-success m-2" name="user_action" value="user_update">Cập nhập</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer Start -->
                <?php include './layout/footer_page.php' ?>
                <!-- Footer End -->
            </div>
            <!-- Content End -->

        </div>

        <?php include '../view/layout/script_page.php' ?>
</body>

</html>