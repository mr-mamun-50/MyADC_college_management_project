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
        $notice_title = $data['notice_title'];
        $notice_subject = $data['notice_subject'];
        $notice_by_name = $data['notice_by_name'];
        $notice_by_designation = $data['notice_by_designation'];
        $notice_desc = $data['notice_desc'];
        $notice_status = $data['notice_status'];

        $query = "INSERT INTO notices(notice_title, notice_subject, notice_description, notice_by_name, notice_by_designation, notice_status) VALUE('$notice_title', '$notice_subject', '$notice_desc', '$notice_by_name', '$notice_by_designation', '$notice_status')";

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
}
