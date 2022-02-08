<?php

include("class/function.php");
$obj = new adminMyADC();
session_start();
$id = $_SESSION['admin_id'];
if ($id == null) {
    header("location: index.php");
}
if (isset($_GET['adminlogout'])) {
    if ($_GET['adminlogout'] == 'logout') {
        $obj->adminLogout();
    }
}

?>

<?php include_once("./includes/head.php"); ?>

<body class="sb-nav-fixed">
    <?php include_once("./includes/topnav.php") ?>

    <div id="layoutSidenav">
        <?php include_once("./includes/sidenav.php") ?>

        <div id="layoutSidenav_content">
            <main>

                <div class="container-fluid">
                    <?php

                    if (isset($view)) {
                        if ($view == "dashboard") {
                            include("./view/dash_view.php");
                        } else  if ($view == "add_notice") {
                            include("./view/add_notice_view.php");
                        } else  if ($view == "manage_notice") {
                            include("./view/manage_notice_view.php");
                        }
                    }

                    ?>
                </div>

            </main>
            <?php include_once("./includes/footer.php") ?>
        </div>
    </div>
    <?php include_once("./includes/script.php") ?>
</body>