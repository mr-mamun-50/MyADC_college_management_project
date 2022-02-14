<?php

include("../class/function.php");

$obj = new adminMyADC();

$dept;
if (isset($_GET['status'])) {
    if ($_GET['status'] == 'print_routine') {
        // $id = $_GET['id'];
        $dept = $_GET['dept'];
        $routine_data_xii = $obj->display_routine_xii();
    }
}

?>
<?php include_once("./head.php"); ?>

<body>

    <div class="card-header justify-content-between d-flex pt-5">

        <div class="text-right" style="width: 150px;">
            <img class="" src="../images/college_logo.png" alt="College Logo" style="height: 100px;">
        </div>

        <div class="text-center">
            <h1 class="text-center">Al-Emdad Degree College</h1>
            <h5 class="my-4">Golapgonj, Sylhet</h5>
        </div>
        <div class="text-right" style="width: 150px;">
            <button onclick="window.print()" class="btn btn-primary" id="print_btn"><i class="fas fa-print"></i> Print</button>
        </div>

    </div>

    <div class="text-center mt-4">
        <h3 class="">Class Routine: XII</h3>
        <h4 class="mt-2">
            <?php
            if ($dept == 'sc') echo "Department of Science";
            else if ($dept == 'hum') echo "Department of Humanities";
            else if ($dept == 'bus') echo "Department of Business Studies";
            ?>
        </h4>
    </div>

    <div class="container-fluid mt-4" style="width: 90%;">
        <div class="table-responsive mt-5">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr class="text-center">
                        <th>Day \ Time</th>
                        <th>10:30</th>
                        <th>11:15</th>
                        <th>12:00</th>
                        <th>12:45</th>
                        <th>01:30</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($routineXII = mysqli_fetch_assoc($routine_data_xii)) { ?>
                        <tr>
                            <td class="text-center font-weight-bold">
                                <?php echo $routineXII['day']; ?>
                            </td>
                            <td><?php
                                if ($dept == 'sc') echo $routineXII['sc10_30'];
                                else if ($dept == 'hum') echo $routineXII['hum10_30'];
                                else if ($dept == 'bus') echo $routineXII['bus10_30'];
                                ?></td>
                            <td><?php
                                if ($dept == 'sc') echo $routineXII['sc11_15'];
                                else if ($dept == 'hum') echo $routineXII['hum11_15'];
                                else if ($dept == 'bus') echo $routineXII['bus11_15'];
                                ?></td>
                            <td><?php
                                if ($dept == 'sc') echo $routineXII['sc12_00'];
                                else if ($dept == 'hum') echo $routineXII['hum12_00'];
                                else if ($dept == 'bus') echo $routineXII['bus12_00'];
                                ?></td>
                            <td><?php
                                if ($dept == 'sc') echo $routineXII['sc12_45'];
                                else if ($dept == 'hum') echo $routineXII['hum12_45'];
                                else if ($dept == 'bus') echo $routineXII['bus12_45'];
                                ?></td>
                            <td><?php
                                if ($dept == 'sc') echo $routineXII['sc1_30'];
                                else if ($dept == 'hum') echo $routineXII['hum1_30'];
                                else if ($dept == 'bus') echo $routineXII['bus1_30'];
                                ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>



</body>