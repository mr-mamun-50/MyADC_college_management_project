<?php

$routineDataXI = $obj->display_routine_xi();

?>


<ul class="nav nav-tabs mt-3">
    <li class="nav-item">
        <a class="nav-link active" href="">Class XI</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="class_routine_xii.php">Class XII</a>
    </li>
</ul>

<div class="shadow mb-3">

    <div class="card-header d-flex justify-content-between">
        <span class="mt-2">
            <i class="fas fa-calendar-alt"></i>
            Routine XI
        </span>
        <div class="form-inline">
            <form action="" method="POST" class="form-inline">
                <div class="input-group">
                    <select id="routine_status" class="form-control" name="routine_status">
                        <option value="1">Science</option>
                        <option value="2">Humanities</option>
                        <option value="3">Business</option>
                    </select>
                    <div class="input-group-append">
                        <button class="btn btn-success" name="routine_dept" type="submit"><i class="fas fa-eye"></i></button>
                    </div>
                </div>
            </form>
            <!-- <div class="dropdown">
                <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-expanded="false">
                    Select Department
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <button class="dropdown-item" type="submit" name="science_view">Science</button>
                    <button class="dropdown-item" type="submit" name="humanities_view">Humanities</button>
                    <button class="dropdown-item" type="submit" name="business_view">Business</button>
                </div>
            </div> -->
        </div>
    </div>


    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr class="text-center">
                        <th>Day \ Time</th>
                        <th>10:30</th>
                        <th>11:15</th>
                        <th>12:00</th>
                        <th>12:45</th>
                        <th>01:30</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php

                    if (isset($_POST['routine_dept'])) {

                        if ($_POST['routine_status'] == 1) {
                            include_once("view/routines/scXI.php");
                        } else if ($_POST['routine_status'] == 2) {
                            include_once("view/routines/humXI.php");
                        } else if ($_POST['routine_status'] == 3) {
                            include_once("view/routines/busXI.php");
                        }
                    }
                    // if (isset('science_view')) {
                    //     include_once("view/routines/scXI.php");
                    // } else if (isset("humanities_view")) {
                    //     include_once("view/routines/humXI.php");
                    // } else if (isset("business_view")) {
                    //     include_once("view/routines/busXI.php");
                    // }
                    else {
                        include_once("view/routines/scXI.php");
                    }

                    ?>

                </tbody>
            </table>
        </div>
    </div>
</div>