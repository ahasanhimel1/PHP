<?php include 'header.php'; ?>


    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header text-center fw-bold">All students information</div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>Student Id     </th>
                                    <th>Student Name   </th>
                                    <th>Student Email  </th>
                                    <th>Student Moblie </th>
                                </tr>
                                </thead>

                                <tbody>
                                <?php foreach ($students as $student) { ?>
                                <tr>
                                    <td><?php echo $student['id'];     ?></td>
                                    <td><?php echo $student['name'];   ?></td>
                                    <td><?php echo $student['email'];  ?></td>
                                    <td><?php echo $student['mobile']; ?></td>
                                </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php include 'footer.php'; ?>