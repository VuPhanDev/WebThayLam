<nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
    <a href="index.php" class="navbar-brand d-flex d-lg-none me-4">
        <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
    </a>
    <a href="#" class="sidebar-toggler flex-shrink-0">
        <i class="fa fa-bars"></i>
    </a>
    <form class="d-none d-md-flex ms-4">
        <input class="form-control bg-dark border-0" type="search" placeholder="Search">
    </form>
    <div class="navbar-nav align-items-center ms-auto">
        <?php
        if (isset($_SESSION["email"])) {
            echo '<div class="nav-item dropdown">';
            echo '    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">';
            echo '  <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">';
            echo '  <span class="d-none d-lg-inline-flex"> ' . $_SESSION["email"] . ' </span>';
            echo '</a>';
            echo '<div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">';
            echo '  <a href="#" class="dropdown-item">My Profile</a>';
            echo '  <a href="#" class="dropdown-item">Settings</a>';
            echo '  <a href="logout_page.php" class="dropdown-item">Log Out</a>';
            echo '</div>';
            echo '</div>';
        }else{
            echo '<div class="nav-item dropdown">';
            echo '<a href="signin.php" class="nav-link">';
            echo '  <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">';
            echo '  <span class="d-none d-lg-inline-flex">Sign In</span>';
            echo '</a>';
            echo '</div>';
        }

        ?>
    </div>
</nav>