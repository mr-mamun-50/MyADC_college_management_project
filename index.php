<?php include_once("./includes/head.php") ?>

<body class="bg-login">

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

                        <h5 class="mt-4">Not a student?</h5>
                        <a class="btn-grad-secondary" href="" data-toggle="modal" data-target="#secAlert"><i class="fas fa-user-plus"></i> Admission</a>

                        <!-- Modal -->
                        <div class="modal fade" id="secAlert" tabindex="-1" aria-labelledby="secAlertLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content px-3">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="secAlertLabel">Security Code</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="">
                                        <div class="modal-body text-left">
                                            <div class="form-group">
                                                <label class="" for="secCode">Please, Enter your admission security code</label>
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn" data-dismiss="modal">Close</button>
                                            <a class="btn-grad-primary" href="./admission_form.php">Submit</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php include_once("./includes/scripts.php") ?>
</body>

</html>