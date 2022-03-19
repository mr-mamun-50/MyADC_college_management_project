<?php

include("./class/function.php");

$obj = new userMyADC();


?>

<?php include_once("./includes/head.php") ?>

<body class="bg-login">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center pt-5">
                        <div class="col-lg-5 col-md-7 mt-5">
                            <div class="card shadow-lg">
                                <div class="card-header text-center">
                                    <img class="py-2" style="width: 35%;" src="./admin/images/logo.png" alt="MyADC">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="text-muted">Welcome to</h5>
                                    <h4>Al-Emdad Degree College</h4>

                                    <h5 class="mt-4">Log in as-</h5>
                                    <a class="btn-grad-primary l-icon mx-1" href=""><i class="fas fa-users d-block"></i> Student</a>
                                    <a class="btn-grad-primary l-icon mx-1" href=""><i class="fas fa-chalkboard-teacher d-block"></i> Teacher</a>
                                    <hr>
                                    <h5 class="mt-4">Not a student?</h5>
                                    <a class="btn-grad-secondary" href="./admission_procedure.php"><i class="fas fa-user-plus"></i> Admission</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>

        <div id="layoutAuthentication_footer">
            <?php include_once("./includes/footer.php") ?>
        </div>
    </div>

    <?php include_once("./includes/scripts.php") ?>
</body>

</html>