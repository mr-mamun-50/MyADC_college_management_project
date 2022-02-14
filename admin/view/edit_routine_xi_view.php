<?php

if (isset($_GET['status'])) {
    if ($_GET['status'] == 'edit_routine_xi') {
        $id = $_GET['id'];
        $dept = $_GET['dept'];
        $routine_data_xi = $obj->get_routine_info_xi($id);
    }
}
if ($dept == 'sc') {
    if (isset($_POST['update_routine_xi'])) {
        $return_msg = $obj->update_routine_xi_sc($_POST);
    }
} else if ($dept == 'hum') {
    if (isset($_POST['update_routine_xi'])) {
        $return_msg = $obj->update_routine_xi_hum($_POST);
    }
} else if ($dept == 'bus') {
    if (isset($_POST['update_routine_xi'])) {
        $return_msg = $obj->update_routine_xi_bus($_POST);
    }
}

?>


<ol class="breadcrumb my-3">
    <li class="breadcrumb-item "><a href="class_routine_xi.php">Routines</a></li>
    <li class="breadcrumb-item"><a href="class_routine_xi.php">Class routine XI</a></li>
    <li class="breadcrumb-item active">Edit Routine XI</li>
</ol>

<div class="shadow px-3 py-4 rounded my-3">

    <?php if (isset($return_msg)) { ?>

        <div class="alert alert-success alert-dismissible fade show my-3 text-center" role="alert">
            <?php echo $return_msg; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php } ?>

    <form action="" class="form" method="POST">
        <input type="hidden" name="id" value="<?php echo $id ?>">

        <div class="form-group">
            <label class="mb-1" for="routine_day">Day</label>
            <input value="<?php echo $routine_data_xi['day'] ?>" disabled name="routine_day" class="form-control" id="routine_day" type="text" />
        </div>

        <div class="form-group">

            <div class="row">
                <div class="col">
                    <label class="mb-1" for="notice_by">10:30</label>
                    <input value="<?php
                                    if ($dept == 'sc') echo $routine_data_xi['sc10_30'];
                                    else if ($dept == 'hum') echo $routine_data_xi['hum10_30'];
                                    else if ($dept == 'bus') echo $routine_data_xi['bus10_30'];
                                    ?>" name="routine_10_30" class="form-control mb-3" id="routine_10_30" type="text" />
                </div>
                <div class="col">
                    <label class="mb-1" for="notice_by">11:15</label>
                    <input value="<?php
                                    if ($dept == 'sc') echo $routine_data_xi['sc11_15'];
                                    else if ($dept == 'hum') echo $routine_data_xi['hum11_15'];
                                    else if ($dept == 'bus') echo $routine_data_xi['bus11_15'];
                                    ?>" name="routine_11_15" class="form-control mb-3" id="routine_11_15" type="text" />
                </div>
                <div class="col">
                    <label class="mb-1" for="notice_by">12:00</label>
                    <input value="<?php
                                    if ($dept == 'sc') echo $routine_data_xi['sc12_00'];
                                    else if ($dept == 'hum') echo $routine_data_xi['hum12_00'];
                                    else if ($dept == 'bus') echo $routine_data_xi['bus12_00'];
                                    ?>" name="routine_12_00" class="form-control mb-3" id="routine_12_00" type="text" />
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label class="mb-1" for="notice_by">12:45</label>
                    <input value="<?php
                                    if ($dept == 'sc') echo $routine_data_xi['sc12_45'];
                                    else if ($dept == 'hum') echo $routine_data_xi['hum12_45'];
                                    else if ($dept == 'bus') echo $routine_data_xi['bus12_45'];
                                    ?>" name="routine_12_45" class="form-control" id="routine_12_45" type="text" />
                </div>
                <div class="col">
                    <label class="mb-1" for="notice_by">01:30</label>
                    <input value="<?php
                                    if ($dept == 'sc') echo $routine_data_xi['sc1_30'];
                                    else if ($dept == 'hum') echo $routine_data_xi['hum1_30'];
                                    else if ($dept == 'bus') echo $routine_data_xi['bus1_30'];
                                    ?>" name="routine_1_30" class="form-control" id="routine_1_30" type="text" />
                </div>
            </div>
        </div>


        <button name="update_routine_xi" type="submit" class="form-control btn btn-primary my-2"><i class="fas fa-edit"></i> Save Changes</button>

    </form>
</div>