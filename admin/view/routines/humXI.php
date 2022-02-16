<div class="row">
    <div class="col-lg-10 col-sm-8">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item "><a href="class_routine_xi.php">Routines</a></li>
            <li class="breadcrumb-item "><a href="class_routine_xi.php">Class XI</a></li>
            <li class="breadcrumb-item font-weight-bold">Humanities</li>
        </ol>
    </div>
    <div class="col-lg-2 mb-3 col-sm-4">
        <a class="btn btn-outline-success font-weight-bold w-100" href="printable_files/routine_print_xi.php?status=print_routine&&dept=hum" target="blank" style="padding: 0.65rem;"><i class="fas fa-print"></i> Print</a>
    </div>
</div>

<?php while ($routineXIHUM = mysqli_fetch_assoc($routineDataXI)) { ?>

    <tr>
        <th class="text-center"><?php echo $routineXIHUM['day']; ?></th>
        <td><?php echo $routineXIHUM['hum10_30']; ?></td>
        <td><?php echo $routineXIHUM['hum11_15']; ?></td>
        <td><?php echo $routineXIHUM['hum12_00']; ?></td>
        <td><?php echo $routineXIHUM['hum12_45']; ?></td>
        <td><?php echo $routineXIHUM['hum1_30']; ?></td>
        <td class="text-center"><a class="btn btn-outline-primary btn-sm" href="edit_routine_xi.php?status=edit_routine_xi&&id=<?php echo $routineXIHUM['ID']; ?>&&dept=hum"><i class="fas fa-edit"></i></a></td>
    </tr>


<?php } ?>