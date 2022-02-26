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
                <form action="">

                    <label for="">Name</label>
                    <input class="form-control" type="text">
                    <div class="row">
                        <div class="col-sm-6 col-lg-4 mt-2">
                            <label for="">Father's name</label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="col-sm-6 col-lg-4 mt-2">
                            <label for="">Mother's name</label>
                            <input class="form-control" type="text">
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-2">
                            <label for="">Date of birth</label>
                            <input class="form-control" type="date">
                        </div>
                        <div class="col-sm-6 col-lg-4 mt-2">
                            <label for="">Gender</label>
                            <select id="my-select" class="form-control" name="">
                                <option>Male</option>
                                <option>Female</option>
                                <option>Other</option>
                            </select>
                        </div>
                        <div class="col-sm-6 col-lg-4 mt-2">
                            <label for="">Contact no</label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="col-sm-6 col-lg-4 mt-2">
                            <label for="">Email</label>
                            <input class="form-control" type="email">
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-2">
                            <label for="">Permanant address</label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="col-sm-6 col-lg-4 mt-2">
                            <label for="">Present address</label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="col-sm-6 col-lg-4 mt-2">
                            <label for="">Birth registration / NID</label>
                            <input class="form-control" type="text">
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-2">
                            <label for="">SSC Passing Year</label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="col-sm-6 col-lg-4 mt-2">
                            <label for="">SSC GPA</label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="col-sm-6 col-lg-4 mt-2">
                            <label for="">SSC board</label>
                            <select id="ssc_board" class="form-control" name="">
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
                            <select id="my-select" class="form-control" name="">
                                <option>Science</option>
                                <option>Humanities</option>
                                <option>Business</option>
                                <option>Vocational</option>
                            </select>
                        </div>
                        <div class="col-sm-6 col-lg-4 mt-2">
                            <label for="">SSC school name</label>
                            <input class="form-control" type="text">
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-2">
                            <label for="">Applicable department</label>
                            <select id="my-select" class="form-control" name="">
                                <option>Science</option>
                                <option>Humanities</option>
                                <option>Business</option>
                            </select>
                        </div>

                        <div class="col-sm-6 col-lg-4 mt-2">
                            <label for="">Upload your photo</label>
                            <input type="file" class="form-control p-1">
                        </div>
                        <div class="col-sm-6 col-lg-4 mt-2">
                            <label for="">Upload SSC marksheet</label>
                            <input type="file" class="form-control p-1">
                        </div>
                        <div class="col-sm-6 col-lg-4 mt-2">
                            <label for="">Upload SSC testimonial</label>
                            <input type="file" class="form-control p-1">
                        </div>

                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn-grad-primary my-4">Submit Application</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>