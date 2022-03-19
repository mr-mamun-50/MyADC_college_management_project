<?php

include("class/function.php");
$obj = new adminMyADC();

if (isset($_POST['admin_login'])) {
    $obj->admin_login($_POST);
}

session_start();
if (isset($_SESSION['admin_id'])) {
    $id = $_SESSION['admin_id'];
    if ($id) {
        header("location: dashboard.php");
    }
}

?>

<?php include_once("./includes/head.php"); ?>

<body class="bg-login">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center pt-5">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header text-center">
                                    <!-- <h3 class="text-center font-weight-light my-4">Login</h3> -->
                                    <img class="py-2" style="width: 40%;" src="images/logo.png" alt="MyADC">
                                </div>
                                <div class="card-body">
                                    <form action="" method="POST">
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputEmailAddress">Email</label>
                                            <input name="admin_email" class="form-control py-4" id="inputEmailAddress" type="email" placeholder="Enter email address" />
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputPassword">Password</label>
                                            <input name="admin_pass" class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password" />
                                        </div>

                                        <div class="form-group mt-4 mb-2">
                                            <button name="admin_login" class="btn btn-primary form-control" type="submit">Login <i class="bi bi-box-arrow-in-right"></i></button>
                                        </div>
                                    </form>
                                </div>
                                <!-- <div class="card-footer text-center">
                                    <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-dark mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small text-white">
                        <div class="text-muted">Copyright &copy; MyADC 2022</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                            &middot;
                            <a href="https://github.com/mr-mamun-50">Developer's Info</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <?php include_once("./includes/scripts.php") ?>
</body>

</html>