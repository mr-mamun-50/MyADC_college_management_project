<?php

include("./class/function.php");
$obj = new userMyADC();

session_start();
$id = $_SESSION['s_id'];
$code = $_SESSION['s_code'];
$s_name = $_SESSION['name'];
if ($id == null) {
    header("location: index.php");
}

if (isset($_POST['submit_admission'])) {
    $return_msg = $obj->admisson_form_submit($_POST);
}

?>

<?php include("./includes/head.php") ?>

<body>

    <div class="container">
        <div class="shadow-lg">

            <div class="mt-3 bg-grad-primary card-header d-flex justify-content-between">
                <a class="mt-1 btn text-white" href="./index.php"><i class="fas fa-arrow-left"></i></a>
                <h4 class="mt-2 ml-3 text-white">Admission form</h5>
                    <a class="mt-1 btn text-white" href=""><i class="fas fa-info-circle"></i></a>
            </div>

            <div class="card-body">

                <?php if (isset($return_msg)) { ?>

                    <div class="alert alert-success alert-dismissible fade show my-3 text-center" role="alert">
                        <?php echo $return_msg; ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php } ?>

                <form action="" method="POST" enctype="multipart/form-data">

                    <div class="row my-2">
                        <div class="col-sm-4">
                            <label for="">Security Code</label>
                            <input class="form-control" name="s_code" type="text" value="<?php echo $code; ?>" readonly>
                        </div>
                        <div class="col-sm-8">
                            <label for="">Name</label>
                            <input class="form-control" name="st_name" type="text" value="<?php echo $s_name; ?>" readonly>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-6 col-lg-4 mt-2">
                            <label for="">Father's name</label>
                            <input class="form-control" name="father_name" type="text">
                        </div>
                        <div class="col-sm-6 col-lg-4 mt-2">
                            <label for="">Mother's name</label>
                            <input class="form-control" name="mother_name" type="text">
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-2">
                            <label for="">Date of birth</label>
                            <input class="form-control" name="dob" type="date">
                        </div>
                        <div class="col-sm-6 col-lg-4 mt-2">
                            <label for="">Gender</label>
                            <select id="my-select" class="form-control" name="gender">
                                <option>Male</option>
                                <option>Female</option>
                                <option>Other</option>
                            </select>
                        </div>
                        <div class="col-sm-6 col-lg-4 mt-2">
                            <label for="">Contact no</label>
                            <input class="form-control" name="contact" type="text">
                        </div>
                        <div class="col-sm-6 col-lg-4 mt-2">
                            <label for="">Email</label>
                            <input class="form-control" name="email" type="email">
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-2">
                            <label for="">Permanant address</label>
                            <input class="form-control" name="par_address" type="text">
                        </div>
                        <div class="col-sm-6 col-lg-4 mt-2">
                            <label for="">Present address</label>
                            <input class="form-control" name="pre_address" type="text">
                        </div>
                        <div class="col-sm-6 col-lg-4 mt-2">
                            <label for="">Birth registration / NID</label>
                            <input class="form-control" name="br_nid" type="text">
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-2">
                            <label for="">SSC Passing Year</label>
                            <input class="form-control" name="ssc_year" type="text">
                        </div>
                        <div class="col-sm-6 col-lg-4 mt-2">
                            <label for="">SSC GPA</label>
                            <input class="form-control" name="ssc_gpa" type="text">
                        </div>
                        <div class="col-sm-6 col-lg-4 mt-2">
                            <label for="">SSC board</label>
                            <select id="ssc_board" class="form-control" name="ssc_board">
                                <option>Sylhet</option>
                                <option>Dhaka</option>
                                <option>Rajshahi</option>
                                <option>Comilla</option>
                                <option>Jessore</option>
                                <option>Chittagong</option>
                                <option>Barisal</option>
                                <option>Dinajpur</option>
                                <option>Madrasah</option>
                            </select>
                        </div>
                        <div class="col-sm-6 col-lg-4 mt-2">
                            <label for="">SSC Department</label>
                            <select id="ssc_dept" class="form-control" name="ssc_dept">
                                <option>Science</option>
                                <option>Humanities</option>
                                <option>Business</option>
                                <option>Vocational</option>
                            </select>
                        </div>
                        <div class="col-sm-6 col-lg-4 mt-2">
                            <label for="">SSC school name</label>
                            <input class="form-control" type="text" name="ssc_school">
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-2">
                            <label for="">Applicable department</label>
                            <select id="my-select" class="form-control" name="appl_dept">
                                <option>Science</option>
                                <option>Humanities</option>
                                <option>Business</option>
                            </select>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-2">
                            <label for="">Upload your photo</label>
                            <input type="file" class="form-control p-f" name="std_photo">
                        </div>
                        <div class="col-sm-6 col-lg-4 mt-2">
                            <label for="">Upload SSC marksheet</label>
                            <input type="file" class="form-control p-f" name="ssc_marksheet">
                        </div>
                        <div class="col-sm-6 col-lg-4 mt-2">
                            <label for="">Upload SSC testimonial</label>
                            <input type="file" class="form-control p-f" name="ssc_testimonial">
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-2">
                            <label for="">Rocket payment transection ID</label>
                            <input class="form-control" type="text" name="pay_transc">
                        </div>

                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn-grad-primary my-4" name="submit_admission">Submit Application</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>