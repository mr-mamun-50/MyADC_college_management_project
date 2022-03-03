<?php

$security_data = $obj->display_admission_security();

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
                        <th>Name</th>
                        <th>SSC Roll</th>
                        <th>SSC Registration</th>
                        <th>Security Code</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>SSC Roll</th>
                        <th>SSC Registration</th>
                        <th>Security Code</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>

                    <?php while ($secInfo = mysqli_fetch_assoc($security_data)) { ?>

                        <tr>
                            <td><?php echo $secInfo['std_name'] ?></td>
                            <td><?php echo $secInfo['ssc_roll'] ?></td>
                            <td><?php echo $secInfo['ssc_reg'] ?></td>
                            <td><?php echo $secInfo['security_code'] ?></td>
                            <td class="">
                                <a href="" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>

                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>