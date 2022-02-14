<div class="row">
    <div class="col-lg-10 col-sm-8">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item "><a href="class_routine_xii.php">Routines</a></li>
            <li class="breadcrumb-item "><a href="class_routine_xii.php">Class XII</a></li>
            <li class="breadcrumb-item font-weight-bold">Science</li>
        </ol>
    </div>
    <div class="col-lg-2 mb-3 col-sm-4">
        <a class="btn btn-primary w-100" href="printable_files/routine_print_xii.php?status=print_routine&&dept=sc" target="blank" style="padding: 0.65rem;"><i class="fas fa-print"></i> Print</a>
    </div>
</div>

<?php while ($routineXIISC = mysqli_fetch_assoc($routineDataXII)) { ?>

    <tr>
        <th class="text-center"><?php echo $routineXIISC['day']; ?></th>
        <td><?php echo $routineXIISC['sc10_30']; ?></td>
        <td><?php echo $routineXIISC['sc11_15']; ?></td>
        <td><?php echo $routineXIISC['sc12_00']; ?></td>
        <td><?php echo $routineXIISC['sc12_45']; ?></td>
        <td><?php echo $routineXIISC['sc1_30']; ?></td>
        <td class="text-center"><a class="btn btn-primary btn-sm" href="edit_routine_xii.php?status=edit_routine_xii&&id=<?php echo $routineXIISC['id']; ?>&&dept=sc"><i class="fas fa-edit"></i></a></td>

    </tr>

<?php } ?>