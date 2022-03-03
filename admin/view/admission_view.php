<?php

$adm_data = $obj->display_adm_data();

?>

<ul class="nav nav-tabs mt-3">
    <li class="nav-item">
        <a class="nav-link active" href="">Manage Admission</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="adm_security.php">Security Code</a>
    </li>
</ul>

<div class="card border-top-0 mb-3 rounded-0">
    <div class="card-header d-flex justify-content-between">
        <span class="mt-1">
            <i class="fas fa-user-plus"></i>
            Applications
        </span>
        <a class="btn btn-success btn-sm" href="add_notice.php"><i class="fas fa-plus-square"></i> Add Student</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Security code</th>
                        <th>Photo</th>
                        <th>Name</th>
                        <th>SSC Group</th>
                        <th>Applied Group</th>
                        <th>SSC GPA</th>
                        <th>SSC School</th>
                        <th>More</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Security code</th>
                        <th>Photo</th>
                        <th>Name</th>
                        <th>SSC Group</th>
                        <th>Applied Group</th>
                        <th>SSC GPA</th>
                        <th>SSC School</th>
                        <th>More</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php while ($adms = mysqli_fetch_assoc($adm_data)) { ?>
                        <tr>

                            <td><?php echo $adms['s_code'] ?></td>
                            <td><img class="" src="images/students_img/<?php echo $adms['std_photo'] ?>" alt="Photo" style="width: 100px;"></td>
                            <td><?php echo $adms['st_name'] ?></td>
                            <td><?php echo $adms['ssc_dept'] ?></td>
                            <td><?php echo $adms['appl_dept'] ?></td>
                            <td><?php echo $adms['ssc_res'] ?></td>
                            <td><?php echo $adms['ssc_school'] ?></td>
                            <td class="text-center btn-group">
                                <a class="btn btn-outline-primary btn-sm" href=""> <i class="fas fa-user"></i> </a>
                                <a class="btn btn-outline-success btn-sm" href="tel:<?php echo $adms['phone']; ?>"> <i class="fas fa-phone"></i> </a>
                                <a class="btn btn-outline-danger btn-sm" href="mailto:<?php echo $adms['email']; ?>" target="blank"> <i class="fas fa-envelope"></i> </a>
                            </td>

                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>