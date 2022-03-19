<ul class="nav nav-tabs mt-3" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
        <a class="nav-link active" id="all_teachers-tab" data-toggle="tab" href="#all_teachers" role="tab" aria-controls="all_teachers" aria-selected="true">All Teachers</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link" id="administrator_tcr-tab" data-toggle="tab" href="#administrator_tcr" role="tab" aria-controls="administrator_tcr" aria-selected="false">Administrators</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link" id="science_tcr-tab" data-toggle="tab" href="#science_tcr" role="tab" aria-controls="science_tcr" aria-selected="false">Science</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link" id="hum_tcr-tab" data-toggle="tab" href="#hum_tcr" role="tab" aria-controls="hum_tcr" aria-selected="false">Humanities</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link" id="bus_tcr-tab" data-toggle="tab" href="#bus_tcr" role="tab" aria-controls="bus_tcr" aria-selected="false">Business</a>
    </li>
</ul>
<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="all_teachers" role="tabpanel" aria-labelledby="all_teachers-tab">
        <?php include_once("view/all_teachers.php") ?>
    </div>
    <div class="tab-pane fade" id="administrator_tcr" role="tabpanel" aria-labelledby="administrator_tcr-tab">...</div>
    <div class="tab-pane fade" id="science_tcr" role="tabpanel" aria-labelledby="science_tcr-tab">...</div>
    <div class="tab-pane fade" id="hum_tcr" role="tabpanel" aria-labelledby="hum_tcr-tab">...</div>
    <div class="tab-pane fade" id="bus_tcr" role="tabpanel" aria-labelledby="bus_tcr-tab">...</div>
</div>