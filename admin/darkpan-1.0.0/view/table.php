<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './layout/header_page.php' ?>
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


            <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Responsive Table</h6>
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
                                        for ($i = 0; $i < 5; $i++) {
                                            echo '<tr>';
                                            echo '    <th style="vertical-align: middle;" scope="row">' . ($i + 1) . '</th>';
                                            echo '    <td style="vertical-align: middle;">Vũ Phan</td>';
                                            echo '    <td style="vertical-align: middle;">jhon@email.com</td>';
                                            echo '    <td style="vertical-align: middle;">Nam</td>';
                                            echo '    <td style="vertical-align: middle;">USA</td>';
                                            echo '    <td style="vertical-align: middle;">Hoạt động</td>';
                                            echo '   <td>';
                                            echo '        <a class="btn btn-info rounded-pill m-2" href="./user_detail.php">Edit</a>';
                                            echo '       <a class="btn btn-danger rounded-pill m-2" href="">Delete</a>';
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
                    <?php include './layout/footer_page.php' ?>
                    <!-- Footer End -->
                </div>
                <!-- Content End -->

            </div>

            <!-- JavaScript Libraries -->
            <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
            <script src="lib/chart/chart.min.js"></script>
            <script src="lib/easing/easing.min.js"></script>
            <script src="lib/waypoints/waypoints.min.js"></script>
            <script src="lib/owlcarousel/owl.carousel.min.js"></script>
            <script src="lib/tempusdominus/js/moment.min.js"></script>
            <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
            <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

            <!-- Template Javascript -->
            <script src="js/main.js"></script>
</body>

</html>