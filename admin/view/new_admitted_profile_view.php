<?php

$students_info = $obj->display_adm_data();

if (isset($_GET['status'])) {
    if ($_GET['status'] == 'view_admitted_profile') {
        $sl = $_GET['sl'];
        $student_info = $obj->get_adm_data($sl);
    }
}

?>

<ol class="breadcrumb my-3">
    <li class="breadcrumb-item "><a href="admission.php">Admission</a></li>
    <li class="breadcrumb-item active">Student profile</li>
</ol>

<div class="card">
    <div class="row card-header m-0 pt-4">
        <div class="col-md-4 col-lg-3 col-5">
            <img class="w-100 m-3 rounded-circle" src="images/students_img/<?php echo $student_info['std_photo']; ?>" alt="Photo">
        </div>
        <div class="col-md-8 col-lg-9 pr-4">

            <h1 class="ml-4 mt-3 mb-4"> <?php echo $student_info['st_name']; ?> </h1>

            <div class="jumbotron ml-4 mt-1 p-3">
                <table class="table table-responsive-sm border-white">
                    <tbody>
                        <tr>
                            <th class="border-top-0">Security code: </th>
                            <td class="border-top-0"> <?php echo $student_info['s_code']; ?></td>
                        </tr>
                        <tr>
                            <th class="border-white">Applied department: </th>
                            <td class="border-white"> <?php echo $student_info['appl_dept']; ?></td>
                        </tr>
                        <tr>
                            <th class="border-white">SSC department: </th>
                            <td class="border-white"> <?php echo $student_info['ssc_dept']; ?></td>
                        </tr>
                        <tr>
                            <th class="border-white">Father's Name: </th>
                            <td class="border-white"> <?php echo $student_info['fathers_name']; ?> </td>
                        </tr>
                        <tr>
                            <th class="border-white">Mother's Name: </th>
                            <td class="border-white"> <?php echo $student_info['mothers_name']; ?> </td>
                        </tr>
                        <tr>
                            <th class="border-white">Date of birth: </th>
                            <td class="border-white"> <?php echo $student_info['dob']; ?> </td>
                        </tr>
                        <tr>
                            <th class="border-white">Gender: </th>
                            <td class="border-white"> <?php echo $student_info['gender']; ?> </td>
                        </tr>
                        <tr>
                            <th class="border-white">Presetnt address: </th>
                            <td class="border-white"> <?php echo $student_info['pre_address']; ?> </td>
                        </tr>
                        <tr>
                            <th class="border-white">Permanent address: </th>
                            <td class="border-white"> <?php echo $student_info['par_address']; ?> </td>
                        </tr>
                        <tr>
                            <th class="border-white">Birth registration/NID no: </th>
                            <td class="border-white"> <?php echo $student_info['birth_reg_nid']; ?> </td>
                        </tr>
                        <tr>
                            <th class="border-white">Phone: </th>
                            <td class="border-white"> <a href="tel:<?php echo $student_info['phone']; ?>"><?php echo $student_info['phone']; ?></a> </td>
                        </tr>
                        <tr>
                            <th class="border-white">Email: </th>
                            <td class="border-white"> <a href="mailto:<?php echo $student_info['email']; ?>" target="blank"><?php echo $student_info['email']; ?></a> </td>
                        </tr>

                    </tbody>
                </table>
            </div>
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