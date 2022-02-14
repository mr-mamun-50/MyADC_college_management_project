<?php

if (isset($_GET['status'])) {
    if ($_GET['status'] == 'edit_notice') {
        $id = $_GET['id'];
        $notice_data = $obj->get_notice_info($id);
    }
}
if (isset($_POST['update_notice'])) {
    $return_msg = $obj->update_notice($_POST);
}

?>

<ol class="breadcrumb my-3">
    <li class="breadcrumb-item "><a href="manage_notice.php">Notices</a></li>
    <li class="breadcrumb-item"><a href="manage_notice.php">Manage Notice</a></li>
    <li class="breadcrumb-item active">Edit Notice</li>
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
            <label class="mb-1" for="change_notice_subject">Subject</label>
            <input value="<?php echo $notice_data['notice_subject'] ?>" name="change_notice_subject" class="form-control" id="change_notice_subject" type="text" required />
        </div>

        <div class="form-group">
            <label class="mb-1" for="notice_by">Notice by</label>
            <div class="row">
                <div class="col"><input value="<?php echo $notice_data['notice_by_name'] ?>" name="change_notice_by_name" class="form-control" id="change_notice_by_name" type="text" required /></div>
                <div class="col"><input value="<?php echo $notice_data['notice_by_designation'] ?>" name="change_notice_by_designation" class="form-control" id="change_notice_by_designation" type="text" required /></div>
            </div>
        </div>

        <div class="form-group">
            <label class=" mb-1" for="notice_desc">Description</label>
            <textarea name="change_notice_description" class="form-control" id="change_notice_description" cols="30" rows="10"><?php echo $notice_data['notice_description'] ?></textarea>
        </div>

        <div class="form-group">
            <label for="change_notice_status">Status</label>
            <select id="change_notice_status" class="form-control" name="change_notice_status">
                <option value="1">Public</option>
                <option value="0">Private</option>
            </select>
        </div>

        <button name="update_notice" type="submit" class="form-control btn btn-primary my-2"><i class="fas fa-edit"></i> Save Changes</button>

    </form>
</div>