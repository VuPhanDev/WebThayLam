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
                            <h6 class="mb-4" >Danh sách người dùng</h6>
                            <a class="btn btn-light m-2" href="./user_add.php">Thêm người dùng</a>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Họ và tên</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Giới tính</th>
                                            <th scope="col">SĐT</th>
                                            <th scope="col">Trạng thái</th>
                                            <th scope="col">Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            for ($i = 0; $i < count($data); $i++) {
                                                echo '<tr>';
                                                echo '    <th style="vertical-align: middle;" scope="row">' . $data[$i]["userID"] . '</th>';
                                                echo '    <td style="vertical-align: middle;">' . $data[$i]["name"] . '</td>';
                                                echo '    <td style="vertical-align: middle;">' . $data[$i]["email"] . '</td>';
                                                echo '    <td style="vertical-align: middle;">' . $data[$i]["gender"] . '</td>';
                                                echo '    <td style="vertical-align: middle;">' . $data[$i]["phone"] . '</td>';
                                                echo '    <td style="vertical-align: middle;">' .  $data[$i]["state"] . '</td>';
                                                echo '   <td>';
                                                echo '        <a class="btn btn-info rounded-pill m-2" href="./user_edit.php">Sửa</a>';
                                                echo '       <a class="btn btn-danger rounded-pill m-2" href="">Xoá</a>';
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