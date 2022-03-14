<?php

class adminMyADC
{
    private $conn;

    public function __construct()
    {
        // Database host, Database user, Database Pass, Database Name

        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = "";
        $dbname = 'my_adc_college_management';

        $this->conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

        if (!$this->conn) {
            die("Database Connection Error!!");
        }
    }

    public function admin_login($data)
    {
        $admin_email = $data['admin_email'];
        $admin_pass = md5($data['admin_pass']);

        $query = "SELECT * FROM admin_info WHERE admin_email='$admin_email' && admin_password='$admin_pass'";

        if (mysqli_query($this->conn, $query)) {
            $admin_info = mysqli_query($this->conn, $query);

            if ($admin_info) {
                header("location: dashboard.php");
                $admin_data = mysqli_fetch_assoc($admin_info);
                session_start();
                $_SESSION['admin_id'] = $admin_data['id'];
                $_SESSION['admin_name'] = $admin_data['admin_name'];
            }
        }
    }

    public function adminLogout()
    {
        unset($_SESSION['admin_id']);
        unset($_SESSION['admin_name']);
        header('location:index.php');
    }

    public function add_notice($data)
    {
        $notice_subject = $data['notice_subject'];
        $notice_by_name = $data['notice_by_name'];
        $notice_by_designation = $data['notice_by_designation'];
        $notice_desc = $data['notice_desc'];
        $notice_status = $data['notice_status'];

        $query = "INSERT INTO notices(notice_subject, notice_description, notice_by_name, notice_by_designation, notice_status) VALUE('$notice_subject', '$notice_desc', '$notice_by_name', '$notice_by_designation', '$notice_status')";

        if (mysqli_query($this->conn, $query)) {
            return "Notice Added Successfully";
        }
    }

    public function display_notice()
    {
        $query = "SELECT * FROM notices";

        if (mysqli_query($this->conn, $query)) {
            $notices = mysqli_query($this->conn, $query);
            return $notices;
        }
    }
    public function delete_notice($id)
    {
        $query = "DELETE FROM notices WHERE notice_id=$id";

        if (mysqli_query($this->conn, $query)) {
            return "Category Deleted Seccessfully";
        }
    }
    public function get_notice_info($id)
    {
        $query = "SELECT * FROM notices WHERE notice_id = '$id'";

        if (mysqli_query($this->conn, $query)) {
            $notice_info = mysqli_query($this->conn, $query);
            $notice = mysqli_fetch_assoc($notice_info);
            return $notice;
        }
    }
    public function update_notice($data)
    {
        $notice_id = $data['edit_notice_id'];
        $change_notice_subject = $data['change_notice_subject'];
        $change_notice_by_name = $data['change_notice_by_name'];
        $change_notice_by_designation = $data['change_notice_by_designation'];
        $change_notice_description = $data['change_notice_description'];
        $change_notice_status = $data['change_notice_status'];

        $query = "UPDATE notices SET notice_subject='$change_notice_subject', notice_description='$change_notice_description', notice_by_name='$change_notice_by_name', notice_by_designation='$change_notice_by_designation', notice_status='$change_notice_status' WHERE notice_id='$notice_id'";

        if (mysqli_query($this->conn, $query)) {
            return "Notice Updated Successfully!";
        }
    }

    public function display_routine_xi()
    {
        $query = "SELECT * FROM class_routine_xi";

        if (mysqli_query($this->conn, $query)) {
            $routine_xi = mysqli_query($this->conn, $query);
            return $routine_xi;
        }
    }
    public function display_routine_xii()
    {
        $query = "SELECT * FROM class_routine_xii";

        if (mysqli_query($this->conn, $query)) {
            $routine_xi = mysqli_query($this->conn, $query);
            return $routine_xi;
        }
    }
    public function get_routine_info_xi($id)
    {
        $query = "SELECT * FROM class_routine_xi WHERE ID = '$id'";

        if (mysqli_query($this->conn, $query)) {
            $routine_info = mysqli_query($this->conn, $query);
            $routine_xi = mysqli_fetch_assoc($routine_info);
            return $routine_xi;
        }
    }
    public function update_routine_xi_sc($data)
    {
        $id = $data['id'];
        $sc10_30 = $data['routine_10_30'];
        $sc11_15 = $data['routine_11_15'];
        $sc12_00 = $data['routine_12_00'];
        $sc12_45 = $data['routine_12_45'];
        $sc1_30 = $data['routine_1_30'];

        $query = "UPDATE class_routine_xi SET sc10_30='$sc10_30', sc11_15='$sc11_15', sc12_00='$sc12_00', sc12_45='$sc12_45', sc1_30='$sc1_30' WHERE ID='$id'";

        if (mysqli_query($this->conn, $query)) {
            return "Routine Updated Successfully!";
        }
    }
    public function update_routine_xi_hum($data)
    {
        $id = $data['id'];
        $hum10_30 = $data['routine_10_30'];
        $hum11_15 = $data['routine_11_15'];
        $hum12_00 = $data['routine_12_00'];
        $hum12_45 = $data['routine_12_45'];
        $hum1_30 = $data['routine_1_30'];

        $query = "UPDATE class_routine_xi SET hum10_30='$hum10_30', hum11_15='$hum11_15', hum12_00='$hum12_00', hum12_45='$hum12_45', hum1_30='$hum1_30' WHERE ID='$id'";

        if (mysqli_query($this->conn, $query)) {
            return "Routine Updated Successfully!";
        }
    }
    public function update_routine_xi_bus($data)
    {
        $id = $data['id'];
        $bus10_30 = $data['routine_10_30'];
        $bus11_15 = $data['routine_11_15'];
        $bus12_00 = $data['routine_12_00'];
        $bus12_45 = $data['routine_12_45'];
        $bus1_30 = $data['routine_1_30'];

        $query = "UPDATE class_routine_xi SET bus10_30='$bus10_30', bus11_15='$bus11_15', bus12_00='$bus12_00', bus12_45='$bus12_45', bus1_30='$bus1_30' WHERE ID='$id'";

        if (mysqli_query($this->conn, $query)) {
            return "Routine Updated Successfully!";
        }
    }

    public function get_routine_info_xii($id)
    {
        $query = "SELECT * FROM class_routine_xii WHERE id = '$id'";

        if (mysqli_query($this->conn, $query)) {
            $routine_info = mysqli_query($this->conn, $query);
            $routine_xi = mysqli_fetch_assoc($routine_info);
            return $routine_xi;
        }
    }
    public function update_routine_xii_sc($data)
    {
        $id = $data['id'];
        $sc10_30 = $data['routine_10_30'];
        $sc11_15 = $data['routine_11_15'];
        $sc12_00 = $data['routine_12_00'];
        $sc12_45 = $data['routine_12_45'];
        $sc1_30 = $data['routine_1_30'];

        $query = "UPDATE class_routine_xii SET sc10_30='$sc10_30', sc11_15='$sc11_15', sc12_00='$sc12_00', sc12_45='$sc12_45', sc1_30='$sc1_30' WHERE id='$id'";

        if (mysqli_query($this->conn, $query)) {
            return "Routine Updated Successfully!";
        }
    }
    public function update_routine_xii_hum($data)
    {
        $id = $data['id'];
        $hum10_30 = $data['routine_10_30'];
        $hum11_15 = $data['routine_11_15'];
        $hum12_00 = $data['routine_12_00'];
        $hum12_45 = $data['routine_12_45'];
        $hum1_30 = $data['routine_1_30'];

        $query = "UPDATE class_routine_xii SET hum10_30='$hum10_30', hum11_15='$hum11_15', hum12_00='$hum12_00', hum12_45='$hum12_45', hum1_30='$hum1_30' WHERE id='$id'";

        if (mysqli_query($this->conn, $query)) {
            return "Routine Updated Successfully!";
        }
    }
    public function update_routine_xii_bus($data)
    {
        $id = $data['id'];
        $bus10_30 = $data['routine_10_30'];
        $bus11_15 = $data['routine_11_15'];
        $bus12_00 = $data['routine_12_00'];
        $bus12_45 = $data['routine_12_45'];
        $bus1_30 = $data['routine_1_30'];

        $query = "UPDATE class_routine_xii SET bus10_30='$bus10_30', bus11_15='$bus11_15', bus12_00='$bus12_00', bus12_45='$bus12_45', bus1_30='$bus1_30' WHERE id='$id'";

        if (mysqli_query($this->conn, $query)) {
            return "Routine Updated Successfully!";
        }
    }
    public function display_students_info()
    {
        $query = "SELECT * FROM students_information";

        if (mysqli_query($this->conn, $query)) {
            $students = mysqli_query($this->conn, $query);
            return $students;
        }
    }
    public function display_old_students_info()
    {
        $query = "SELECT * FROM students_information WHERE c_class = 'Old student'";

        if (mysqli_query($this->conn, $query)) {
            $students = mysqli_query($this->conn, $query);
            return $students;
        }
    }
    public function display_xi_students_info()
    {
        $query = "SELECT * FROM students_information WHERE c_class = 'XI'";

        if (mysqli_query($this->conn, $query)) {
            $students = mysqli_query($this->conn, $query);
            return $students;
        }
    }
    public function display_xii_students_info()
    {
        $query = "SELECT * FROM students_information WHERE c_class = 'XII'";

        if (mysqli_query($this->conn, $query)) {
            $students = mysqli_query($this->conn, $query);
            return $students;
        }
    }
    public function display_hsc_exa_students_info()
    {
        $query = "SELECT * FROM students_information WHERE c_class = 'HSC Examinee'";

        if (mysqli_query($this->conn, $query)) {
            $students = mysqli_query($this->conn, $query);
            return $students;
        }
    }
    public function get_student_info($sl)
    {
        $query = "SELECT * FROM students_information WHERE sl = '$sl'";

        if (mysqli_query($this->conn, $query)) {
            $student_info = mysqli_query($this->conn, $query);
            $student = mysqli_fetch_assoc($student_info);
            return $student;
        }
    }

    public function add_admission_security($data)
    {
        $std_name = $data['std_name'];
        $ssc_roll = $data['ssc_roll'];
        $ssc_reg = $data['ssc_reg'];
        $security_code = $data['security_code'];

        $query = "INSERT INTO admission_security_code(std_name, ssc_roll, ssc_reg, security_code) VALUE('$std_name', '$ssc_roll', '$ssc_reg', '$security_code')";

        if (mysqli_query($this->conn, $query)) {
            return "Security Code Added Successfully";
        }
    }
    public function display_admission_security()
    {
        $query = "SELECT * FROM admission_security_code";

        if (mysqli_query($this->conn, $query)) {
            $students = mysqli_query($this->conn, $query);
            return $students;
        }
    }
    public function check_admission($s_code)
    {
        $query = "SELECT * FROM new_admitted_students WHERE s_code = '$s_code'";

        if (mysqli_query($this->conn, $query)) {
            $check_info = mysqli_query($this->conn, $query);
            $data = mysqli_fetch_assoc($check_info);

            if (isset($data)) {
                if ($data['s_code'] == $s_code) {
                    return "YES";
                } else {
                    return "NO";
                }
            }
        }
    }
    public function update_pay_id($data)
    {
        $sl = $data['sl'];
        $pay_id = $data['pay_id'];

        $query = "UPDATE admission_security_code SET pay_id	= '$pay_id' WHERE sl = '$sl'";

        if (mysqli_query($this->conn, $query)) {
            return "TrxID updated successfully!";
        }
    }
    public function display_adm_data()
    {
        $query = "SELECT * FROM new_admitted_students";

        if (mysqli_query($this->conn, $query)) {
            $admissions = mysqli_query($this->conn, $query);
            return $admissions;
        }
    }
    public function get_adm_data($sl)
    {
        $query = "SELECT * FROM new_admitted_students WHERE sl = '$sl'";

        if (mysqli_query($this->conn, $query)) {
            $student_info = mysqli_query($this->conn, $query);
            $student = mysqli_fetch_assoc($student_info);
            return $student;
        }
    }
}
