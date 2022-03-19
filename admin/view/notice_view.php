<ul class="nav nav-tabs mt-3" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
        <a class="nav-link active" id="manage_notice-tab" data-toggle="tab" href="#manage_notice" role="tab" aria-controls="manage_notice" aria-selected="true">Manage Notice</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link" id="add_notice-tab" data-toggle="tab" href="#add_notice" role="tab" aria-controls="add_notice" aria-selected="false">Create Notice</a>
    </li>
</ul>
<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="manage_notice" role="tabpanel" aria-labelledby="manage_notice-tab"><?php include_once("view/manage_notice_view.php") ?></div>
    <div class="tab-pane fade" id="add_notice" role="tabpanel" aria-labelledby="add_notice-tab"><?php include_once("view/add_notice_view.php") ?></div>
</div>