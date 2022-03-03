<?php

class userMyADC
{
    private $conn;

    public function __construct()
    {
        $this->conn = mysqli_connect('localhost', 'root', "", 'my_adc_college_management');

        if (!$this->conn) {
            die("Database Connection Error!!");
        }
    }

    public function check_security_code($data)
    {
        $s_code = $data['s_code'];

        $query = "SELECT * FROM admission_security_code WHERE security_code = '$s_code'";

        if (mysqli_query($this->conn, $query)) {
            $s_info = mysqli_query($this->conn, $query);

            if ($s_info) {
                header("location: admission_form.php");
                $s_data = mysqli_fetch_assoc($s_info);
                session_start();
                $_SESSION['s_id'] = $s_data['sl'];
                $_SESSION['s_code'] = $s_data['security_code'];
                $_SESSION['name'] = $s_data['std_name'];
            }
        }
    }

    public function admisson_form_submit($data)
    {
        $s_code = $data['s_code'];
        $st_name = $data['st_name'];
        $father_name = $data['father_name'];
        $mother_name = $data['mother_name'];
        $dob = $data['dob'];
        $gender = $data['gender'];
        $contact = $data['contact'];
        $email = $data['email'];
        $par_address = $data['par_address'];
        $pre_address = $data['pre_address'];
        $br_nid = $data['br_nid'];
        $ssc_year = $data['ssc_year'];
        $ssc_gpa = $data['ssc_gpa'];
        $ssc_board = $data['ssc_board'];
        $ssc_dept = $data['ssc_dept'];
        $ssc_school = $data['ssc_school'];
        $appl_dept = $data['appl_dept'];
        $pay_transc = $data['pay_transc'];

        $std_photo = $_FILES['std_photo']['name'];
        $std_photo_tmp = $_FILES['std_photo']['tmp_name'];

        $ssc_marksheet = $_FILES['ssc_marksheet']['name'];
        $ssc_marksheet_tmp = $_FILES['ssc_marksheet']['tmp_name'];

        $ssc_testimonial = $_FILES['ssc_testimonial']['name'];
        $ssc_testimonial_tmp = $_FILES['ssc_testimonial']['tmp_name'];


        $query = "INSERT INTO new_admitted_students(s_code, st_name, fathers_name, mothers_name, dob, gender, phone, email, par_address, pre_address, birth_reg_nid, ssc_year, ssc_res, ssc_board, ssc_dept, ssc_school, appl_dept, pay_transc, std_photo, ssc_marksheet, ssc_testimonial) VALUE('$s_code', '$st_name', '$father_name', '$mother_name', '$dob', '$gender', '$contact', '$email', '$par_address', '$pre_address', '$br_nid', '$ssc_year', '$ssc_gpa', '$ssc_board', '$ssc_dept', '$ssc_school', '$appl_dept', '$pay_transc', '$std_photo', '$ssc_marksheet', '$ssc_testimonial')";

        if (mysqli_query($this->conn, $query)) {
            move_uploaded_file($std_photo_tmp, 'admin/images/students_img/' . $std_photo);
            move_uploaded_file($ssc_marksheet_tmp, 'admin/images/ssc_marksheet/' . $ssc_marksheet);
            move_uploaded_file($ssc_testimonial_tmp, 'admin/images/ssc_testimonial/' . $ssc_testimonial);

            return "<b>Congratulations!</b> Your admission was successful.";
        }
    }
}
