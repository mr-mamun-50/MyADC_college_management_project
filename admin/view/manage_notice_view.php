<?php

$noticeData = $obj->display_notice();

if (isset($_GET['status'])) {
    if ($_GET['status'] == 'delete') {
        $delID = $_GET['id'];
        $dltMsg = $obj->delete_notice($delID);
    }
}

?>

<ol class="breadcrumb my-3">
    <li class="breadcrumb-item ">Notices</li>
    <li class="breadcrumb-item active">Manage Notice</li>
</ol>

<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-flag"></i>
        Notices
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
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
                        <th>Title</th>
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
                            <td><?php echo $notice['notice_title']; ?></td>
                            <td><?php echo $notice['notice_subject']; ?></td>
                            <td>
                                <?php echo $notice['notice_by_name']; ?><br>
                                <small><?php echo $notice['notice_by_designation']; ?></small>
                            </td>
                            <td><?php echo $notice['notice_description']; ?></td>
                            <td><?php
                                if ($notice['notice_status'] == 1) echo "Public";
                                else echo "Private";
                                ?></td>
                            <td>
                                <a href="edit_notice.php?status=edit_notice&&id=<?php echo $notice['notice_id']; ?>" class="btn btn-warning my-1 w-100"><i class="fas fa-edit"></i> </a>
                                <a href="?status=delete&&id=<?php echo $notice['notice_id']; ?>" class="btn btn-danger w-100"><i class="fas fa-trash-alt"></i> </a>
                            </td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>