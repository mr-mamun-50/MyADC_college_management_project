<?php

include("./class/function.php");
include_once("./includes/head.php");

$obj = new userMyADC();

if (isset($_POST['v_check'])) {
    $obj->check_security_code($_POST);
}

?>

<body>

    <div class="container">
        <div class="shadow-lg mb-5">

            <div class="mt-3 bg-grad-primary card-header d-flex justify-content-between p-0">
                <a class="mt-1 btn text-white" href="./index.php"><img class="" src="./admin/images/icon.png" alt="" style="width: 50px;"></a>
                <h4 class="mt-2 ml-3 text-white mt-4">Admission Procedure</h4>
                <a class="mt-1 btn text-white m-3" href=""><i class="fas fa-info-circle fa-lg"></i></a>
            </div>

            <div class="card-body px-lg-5 pt-5">

                <h4>Required documents</h4>
                <hr>

                <p>
                    Dolor amet gubergren diam diam ut ipsum stet invidunt stet, eirmod no sit et erat ut, voluptua eirmod sed sadipscing labore dolore justo consetetur, sed kasd voluptua aliquyam ea sanctus, aliquyam vero diam dolores duo labore, sed eirmod eos dolor eirmod eirmod, ut eirmod dolor sea sadipscing dolores nonumy sit.
                    Accusam amet et elitr aliquyam lorem takimata duo aliquyam. Est erat et ipsum sit eos. Nonumy dolor sadipscing gubergren takimata sadipscing. Et ut at ipsum nonumy sea dolor vero accusam sadipscing. Dolor invidunt est voluptua takimata takimata dolores ipsum amet. Justo aliquyam aliquyam est dolor amet dolor sed. Et sit sit justo lorem et ea, elitr sit ut elitr lorem.
                </p><br>

                <h4>Payment system</h4>
                <hr>

                <p>
                    Vero amet dolor dolore ut rebum at. Sea justo elitr sed eos nonumy duo eos dolores consetetur. Takimata dolore at ipsum ut ipsum et erat, nonumy ut sit lorem stet accusam lorem justo et. Sit sed labore ut eos, lorem rebum invidunt sadipscing rebum et et, nonumy kasd accusam et.
                    Tempor aliquyam justo justo nonumy erat. Gubergren elitr vero amet et at lorem et sed. Sit dolores magna eirmod clita.
                </p><br>


                <h4>College policy</h4>
                <hr>

                <p>
                    Takimata diam kasd lorem sit ipsum labore lorem takimata. Elitr et dolor ipsum sea kasd eirmod. Amet eirmod voluptua lorem at et et no, et labore ipsum vero sadipscing. Ipsum justo duo sit accusam voluptua et et lorem. Stet erat clita amet magna et sed ipsum elitr, eos lorem sit dolore dolore diam. Duo vero erat erat eirmod eos, at clita eos eirmod sadipscing. Ipsum labore accusam gubergren labore gubergren. Ipsum dolor amet sit eos labore voluptua, magna takimata ipsum amet sanctus est. Erat nonumy dolor ipsum et, sadipscing erat dolore diam dolor justo. Et justo sit eos at. Diam.
                </p><br>



                <div class="text-center">
                    <a class="btn-grad-secondary" href="" data-toggle="modal" data-target="#secAlert"><i class="fas fa-user-plus"></i> Admission</a>
                </div>


                <!-- Modal -->
                <div class="modal fade" id="secAlert" tabindex="-1" aria-labelledby="secAlertLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content px-3">
                            <div class="modal-header">
                                <h5 class="modal-title" id="secAlertLabel">Varify yourself</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="" method="POST">
                                <div class="modal-body text-left">
                                    <div class="form-group">
                                        <label class="" for="secCode">Admission security code</label>
                                        <input class="form-control" name="s_code" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label class="" for="secCode">Rocket transaction ID</label>
                                        <input class="form-control" name="pay_id" type="text">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn" data-dismiss="modal">Close</button>
                                    <button name="v_check" class="btn-grad-primary" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <?php include_once("./includes/scripts.php") ?>

            </div>
        </div>
    </div>
</body>