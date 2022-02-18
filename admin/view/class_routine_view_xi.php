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

<div class="card border-top-0 mb-3 rounded-0">

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
                        <button class="btn btn-success" name="routine_dept" id="routine_dept" type="submit"><i class="fas fa-eye"></i></button>
                    </div>
                </div>
            </form>
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
                <tbody id="table_body">

                    <?php

                    if (isset($_POST['routine_dept'])) {

                        if ($_POST['routine_status'] == 1) {
                            include_once("view/routines/scXI.php");
                        } else if ($_POST['routine_status'] == 2) {
                            include_once("view/routines/humXI.php");
                        } else if ($_POST['routine_status'] == 3) {
                            include_once("view/routines/busXI.php");
                        }
                    } else {
                        include_once("view/routines/scXI.php");
                    }

                    ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- <script type="text/javascript">
    $(document).ready(function() {
        $("#routine_dept").on("click", function(e) {
            $.ajax({
                url: "view/routines/scXI.php",
                type: "POST",
                success: function(data) {
                    $("#table_body").html(data);
                }
            });
        });
    });
</script> -->