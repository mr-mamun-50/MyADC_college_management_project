<?php

include("../class/function.php");

$obj = new adminMyADC();

if (isset($_GET['status'])) {
    if ($_GET['status'] == 'print_notice') {
        $id = $_GET['id'];
        $notice_data = $obj->get_notice_info($id);
    }
}

?>

<?php include_once("./head.php"); ?>

<body class="">


    <div class="card-header justify-content-between d-flex pt-5">

        <div class="text-right" style="width: 150px;">
            <img class="" src="../images/college_logo.png" alt="College Logo" style="height: 100px;">
        </div>

        <div class="text-center">
            <h1 class="text-center">Al-Emdad Degree College</h1>
            <h5 class="my-4">Golapgonj, Sylhet</h5>
        </div>
        <div class="text-right" style="width: 150px;">
            <button onclick="window.print()" class="btn btn-primary" id="print_btn"><i class="fas fa-print"></i> Print</button>
        </div>

    </div>

    <div class="text-center mt-4">
        <h3 class="">Notice</h3>
    </div>

    <div class="container-fluid mt-5" style="width: 90%;">

        <p class="blockquote"><b>Subject: <?php echo $notice_data['notice_subject']; ?></b></p>

        <p class="blockquote text-justify my-4"><?php echo $notice_data['notice_description']; ?></p>

        <div class="blockquote text-right mt-5">
            <p class="mb-0"><b><?php echo $notice_data['notice_by_name']; ?></b></p>
            <p class=""><?php echo $notice_data['notice_by_designation']; ?></p>
        </div>

    </div>



    <?php include_once("../includes/script.php") ?>
</body>