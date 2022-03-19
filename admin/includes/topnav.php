<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <button class="btn btn-link btn-sm order-1 order-lg-0 ml-3" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
    <a class="navbar-brand ml-1" style="width: 120px;" href="dashboard.php"><img style="height: 40px;" src="./images/logo_white.png" alt="MyADC"></a>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
            <input class="form-control r-border-left" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
            <div class="input-group-append">
                <button class="btn btn-primary r-border-right" type="button"><i class="fas fa-search"></i></button>
            </div>
        </div>
    </form>
    <a href="../index.php" class="btn btn-outline-warning r-border mr-1 d-none d-md-inline font-weight-bold" target="blank">Go to MyADC <i class="bi bi-box-arrow-in-up-right"></i></a>
    <!-- Navbar-->
    <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <div class="dropdown-menu dropdown-menu-right shadow" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">Settings</a>
                <a class="dropdown-item" href="#">Activity Log</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="?adminlogout=logout" onclick="return confirm('Do you really want to log out?')">Logout</a>
            </div>
        </li>
    </ul>
</nav>