<?php

$students_info = $obj->display_students_info();

if (isset($_GET['status'])) {
    if ($_GET['status'] == 'view_profile') {
        $sl = $_GET['sl'];
        $student_info = $obj->get_student_info($sl);
    }
}

?>

<ol class="breadcrumb my-3">
    <li class="breadcrumb-item "><a href="all_students.php">Students info</a></li>
    <li class="breadcrumb-item active">Profile</li>
</ol>

<div class="card">
    <div class="row card-header m-0 pt-4">
        <div class="col-md-4 col-lg-3 col-5">
            <img class="w-100 m-3" src="images/students_img/<?php echo $student_info['photo']; ?>" alt="Photo">
        </div>
        <div class="col-md-8 col-lg-9 pr-4">
            <table class="table table-responsive-sm ml-4 mt-1">
                <tbody>
                    <tr>
                        <th class="border-top-0">Name: </th>
                        <td class="border-top-0"> <?php echo $student_info['name']; ?></td>
                    </tr>
                    <tr>
                        <th>Student ID: </th>
                        <td> <?php echo $student_info['st_id']; ?></td>
                    </tr>
                    <tr>
                        <th>Group: </th>
                        <td> <?php echo $student_info['dept']; ?></td>
                    </tr>
                    <tr>
                        <th>Session: </th>
                        <td> <?php echo $student_info['session']; ?></td>
                    </tr>
                    <tr>
                        <th>Father's Name: </th>
                        <td> <?php echo $student_info['fathers_name']; ?> </td>
                    </tr>
                    <tr>
                        <th>Mother's Name: </th>
                        <td> <?php echo $student_info['mothers_name']; ?> </td>
                    </tr>
                    <tr>
                        <th>Address: </th>
                        <td> <?php echo $student_info['address']; ?> </td>
                    </tr>
                    <tr>
                        <th>Birth registration/NID no: </th>
                        <td> <?php echo $student_info['birth_reg_nid']; ?> </td>
                    </tr>
                    <tr>
                        <th>Phone: </th>
                        <td> <a href="tel:<?php echo $student_info['phone']; ?>"><?php echo $student_info['phone']; ?></a> </td>
                    </tr>
                    <tr>
                        <th>Email: </th>
                        <td> <a href="mailto:<?php echo $student_info['email']; ?>" target="blank"><?php echo $student_info['email']; ?></a> </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td class="text-right">
                            <button class="btn btn-success"><i class="fas fa-edit"></i> Edit Profile</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


    <div class="jumbotron m-3 py-4">
        <h3>SSC Info</h3>
        <hr class="my-3">
        <table class="table table-bordered table-responsive-sm">
            <thead>
                <tr>
                    <th>School</th>
                    <th>Board</th>
                    <th>Group</th>
                    <th>Passing Year</th>
                    <th>GPA</th>
                    <th>Records</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $student_info['ssc_school'] ?></td>
                    <td><?php echo $student_info['ssc_board'] ?></td>
                    <td><?php echo $student_info['ssc_dept'] ?></td>
                    <td><?php echo $student_info['ssc_year'] ?></td>
                    <td><?php echo $student_info['ssc_res'] ?></td>
                    <td><a class="btn btn-primary btn-sm" href="#">Testimonial</a> <a class="btn btn-primary btn-sm" href="#">Marksheet</a> </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>