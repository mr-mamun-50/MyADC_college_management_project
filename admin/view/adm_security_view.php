<?php

$security_data = $obj->display_admission_security();

if (isset($_POST['add_pay_id'])) {
    $obj->update_pay_id($_POST);
}

?>

<ul class="nav nav-tabs mt-3">
    <li class="nav-item">
        <a class="nav-link" href="admission.php">Manage Admission</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="">Security Code</a>
    </li>
</ul>

<div class="card border-top-0 mb-3 rounded-0">
    <div class="card-header d-flex justify-content-between">
        <span class="mt-1">
            <i class="fas fa-shield-alt"></i>
            Admission security code
        </span>
        <a class="btn btn-success btn-sm" href="enter_security.php"><i class="fas fa-plus-square"></i> Enter security code</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Security Code</th>
                        <th>Name</th>
                        <th>SSC Roll</th>
                        <th>SSC Registration</th>
                        <th>Transaction ID</th>
                        <th>Admission Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Security Code</th>
                        <th>Name</th>
                        <th>SSC Roll</th>
                        <th>SSC Registration</th>
                        <th>Transaction ID</th>
                        <th>Admission Status</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>

                    <?php while ($secInfo = mysqli_fetch_assoc($security_data)) { ?>

                        <tr>
                            <td><?php echo $secInfo['security_code'] ?></td>
                            <td><?php echo $secInfo['std_name'] ?></td>
                            <td><?php echo $secInfo['ssc_roll'] ?></td>
                            <td><?php echo $secInfo['ssc_reg'] ?></td>

                            <td class="text-center d-flex justify-content-around">
                                <?php echo $secInfo['pay_id'] ?>
                                <a href="" data-toggle="modal" data-target="<?php echo "#alert_" . $secInfo['security_code'] ?>"> <i class="fas fa-edit"></i></a>

                                <!-- Modal -->
                                <div class="modal fade" id="<?php echo "alert_" . $secInfo['security_code'] ?>" tabindex="-1" aria-labelledby="<?php echo "alert_" . $secInfo['security_code'] . "Label"; ?>" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content px-3">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="<?php echo "alert_" . $secInfo['security_code'] . "Label"; ?>">Payment transaction ID</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="" method="POST">
                                                <div class="modal-body text-left">
                                                    <input type="hidden" name="sl" value="<?php echo $secInfo['sl'] ?>">
                                                    <div class="form-group">
                                                        <label class="" for="secCode">Enter Rocket transaction ID</label>
                                                        <input class="form-control" name="pay_id" type="text" value="<?php echo $secInfo['pay_id'] ?>">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn" data-dismiss="modal">Close</button>
                                                    <button name="add_pay_id" class="btn btn-primary" type="submit">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </td>

                            <td class="text-center">
                                <?php
                                if ($obj->check_admission($secInfo['security_code']) == "YES") {
                                    echo '<i class="fas fa-check-circle fa-lg text-success"></i>';
                                } else {
                                    echo '<i class="fas fa-times-circle fa-lg text-danger"></i>';
                                }
                                ?>
                            </td>
                            <td class="text-center">
                                <a href="" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                            </td>



                        </tr>

                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>