<?php

if (isset($_POST['submit_security_code'])) {
    $return_msg = $obj->add_admission_security($_POST);
}

?>

<ol class="breadcrumb my-3">
    <li class="breadcrumb-item "><a href="admission.php">Admission</a></li>
    <li class="breadcrumb-item"><a href="adm_security.php">Security code</a></li>
    <li class="breadcrumb-item active">Enter security code</li>
</ol>

<div class="shadow px-3 py-4 rounded my-3">

    <?php if (isset($return_msg)) { ?>

        <div class="alert alert-success alert-dismissible fade show my-3 text-center" role="alert">
            <?php echo $return_msg; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php } ?>

    <form action="" class="form" method="POST">
        <input type="hidden" name="edit_notice_id" value="<?php echo $id ?>">

        <div class="form-group">
            <label class=" mb-1" for="notice_desc">Name</label>
            <input type="text" class="form-control" name="std_name" id="std_name">
        </div>

        <div class="form-group">
            <label class="mb-1" for="notice_by">SSC information</label>
            <div class="row">
                <div class="col"><input value="" name="ssc_roll" class="form-control" id="ssc_rool" type="text" placeholder="SSC Roll" required /></div>
                <div class="col"><input value="" name="ssc_reg" class="form-control" id="ssc_reg" type="text" placeholder="SSC Registration" required /></div>
            </div>
        </div>

        <div class="form-group">
            <label class=" mb-1" for="notice_desc">Security code</label>
            <input type="text" class="form-control" name="security_code" id="security_code">
        </div>

        <button name="submit_security_code" type="submit" class="form-control btn btn-primary my-2"><i class="fas fa-save"></i> Submit Entry</button>

    </form>
</div>