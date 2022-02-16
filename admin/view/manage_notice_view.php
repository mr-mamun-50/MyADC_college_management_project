<?php

$noticeData = $obj->display_notice();

if (isset($_GET['status'])) {
    if ($_GET['status'] == 'delete') {
        $delID = $_GET['id'];
        $dltMsg = $obj->delete_notice($delID);
    }
}

?>

<ul class="nav nav-tabs mt-3">
    <li class="nav-item">
        <a class="nav-link active" href="manage_notice.php">Manage Notice</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="add_notice.php">Create Notice</a>
    </li>
</ul>

<!-- <ol class="breadcrumb my-3">
    <li class="breadcrumb-item ">Notices</li>
    <li class="breadcrumb-item active">Manage Notice</li>
</ol> -->

<div class="shadow mb-3">
    <div class="card-header d-flex justify-content-between">
        <span class="mt-1">
            <i class="fas fa-flag"></i>
            Notices
        </span>
        <a class="btn btn-success btn-sm" href="add_notice.php"><i class="fas fa-plus-square"></i> Create</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Subject</th>
                        <th>Notice by</th>
                        <th>Description</th>
                        <th>Visibility</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Subject</th>
                        <th>Notice by</th>
                        <th>Description</th>
                        <th>Visibility</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>

                    <?php while ($notice = mysqli_fetch_assoc($noticeData)) { ?>

                        <tr>
                            <td><?php echo $notice['notice_id']; ?></td>
                            <td><?php echo $notice['notice_subject']; ?></td>
                            <td>
                                <?php echo $notice['notice_by_name']; ?><br>
                                <small><?php echo $notice['notice_by_designation']; ?></small>
                            </td>
                            <td><?php echo $notice['notice_description']; ?></td>
                            <td class="text-center"><?php
                                                    if ($notice['notice_status'] == 1) echo "Public";
                                                    else echo "Private";
                                                    ?></td>
                            <td class="text-center">
                                <a class="btn btn-outline-success mt-1 w-75 btn-sm" href="printable_files/notice_print.php?status=print_notice&&id=<?php echo $notice['notice_id']; ?>" target="blank"><i class="fas fa-print"></i> </a>
                                <a class="btn btn-outline-primary my-1 w-75 btn-sm" href="edit_notice.php?status=edit_notice&&id=<?php echo $notice['notice_id']; ?>"><i class="fas fa-edit"></i> </a>
                                <a class="btn btn-outline-danger w-75 btn-sm" href="?status=delete&&id=<?php echo $notice['notice_id']; ?>"><i class="fas fa-trash-alt"></i> </a>
                            </td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>