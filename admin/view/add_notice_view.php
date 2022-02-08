<?php

if (isset($_POST['add_notice'])) {
    $return_msg = $obj->add_notice($_POST);
}

?>

<ol class="breadcrumb my-3">
    <li class="breadcrumb-item">Notices</li>
    <li class="breadcrumb-item active">Create Notice</li>
</ol>

<div class="shadow px-3 py-4 mb-3 rounded">

    <?php if (isset($return_msg)) { ?>

        <div class="alert alert-success alert-dismissible fade show my-2 text-center" role="alert">
            <?php echo $return_msg; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php } ?>

    <form action="" method="POST">

        <div class="form-group">
            <label class="mb-1" for="notice_title">Title</label>
            <input name="notice_title" class="form-control py-2" id="notice_title" placeholder="Enter title here" type="text" required />
        </div>

        <div class="form-group">
            <label class="mb-1" for="notice_subject">Subject</label>
            <input name="notice_subject" class="form-control py-2" id="notice_subject" placeholder="Enter subject here" type="text" required />
        </div>

        <div class="form-group">
            <label class="mb-1" for="notice_by">Notice by</label>
            <div class="row">
                <div class="col"><input name="notice_by_name" class="form-control py-2" id="notice_by_name" placeholder="Name" type="text" required /></div>
                <div class="col"><input name="notice_by_designation" class="form-control py-2" id="notice_by_designation" placeholder="Designation" type="text" required /></div>
            </div>
        </div>

        <div class="form-group">
            <label class=" mb-1" for="notice_desc">Description</label>
            <textarea name="notice_desc" class="form-control" id="notice_desc" cols="30" rows="10"></textarea>
        </div>

        <div class="form-group">
            <label for="notice_status">Status</label>
            <select id="notice_status" class="form-control" name="notice_status">
                <option value="1">Public</option>
                <option value="0">Private</option>
            </select>
        </div>

        <button name="add_notice" type="submit" class="form-control btn btn-primary"><i class="fas fa-plus-square"></i> Create Notice</button>

    </form>
</div>