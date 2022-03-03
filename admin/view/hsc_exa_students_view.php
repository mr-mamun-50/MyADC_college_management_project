<?php

$students_info = $obj->display_hsc_exa_students_info();

?>

<ul class="nav nav-tabs mt-3">
    <li class="nav-item">
        <a class="nav-link" href="all_students.php">All Students</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="xi_students.php">XI</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="xii_students.php">XII</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" href="">HSC Examinee</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="old_students.php">Old Students</a>
    </li>
</ul>


<div class="card border-top-0 mb-3 rounded-0">
    <div class="card-header d-flex justify-content-between">
        <span class="mt-1">
            <i class="fas fa-users"></i>
            All Students
        </span>
        <a class="btn btn-success btn-sm" href="add_notice.php"><i class="fas fa-plus-square"></i> Add Student</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Photo</th>
                        <th>Name</th>
                        <th>Group</th>
                        <th>Parents Name</th>
                        <th>Phone</th>
                        <th>Session</th>
                        <th>More</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Photo</th>
                        <th>Name</th>
                        <th>Group</th>
                        <th>Parents Name</th>
                        <th>Phone</th>
                        <th>Session</th>
                        <th>More</th>
                    </tr>
                </tfoot>
                <tbody>

                    <?php while ($student = mysqli_fetch_assoc($students_info)) { ?>

                        <tr>
                            <td><?php echo $student['st_id']; ?></td>
                            <td><img class="" src="images/students_img/<?php echo $student['photo']; ?>" alt="Photo" style="width: 100px"></td>
                            <td><?php echo $student['st_name']; ?></td>
                            <td><?php echo $student['dept']; ?></td>
                            <td>
                                <b>Father: </b><?php echo $student['fathers_name']; ?><br>
                                <b>Mother: </b><?php echo $student['mothers_name']; ?><br>
                            </td>
                            <td><?php echo $student['phone']; ?></td>
                            <td><?php echo $student['session']; ?></td>

                            <td class="text-center btn-group">
                                <a class="btn btn-outline-primary my-1  btn-sm" href="student_profile.php?status=view_profile&&sl=<?php echo $student['sl']; ?>"> <i class="fas fa-user"></i> </a>
                                <a class="btn btn-outline-success my-1  btn-sm" href="tel:<?php echo $student['phone']; ?>"> <i class="fas fa-phone"></i> </a>
                                <a class="btn btn-outline-danger my-1 btn-sm" href="mailto:<?php echo $student['email']; ?>" target="blank"> <i class="fas fa-envelope"></i> </a>
                            </td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>