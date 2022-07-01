<div class="p-3" style="background-color: #1f2839; min-height: 90vh;">
    <div class="p-3" style="background-color: #f5f5ef; justify-content:center; min-height: 85vh;">
        <div class="btn-group">
            <a href="<?= base_url('employee/addemployee') ?>">
                <button style="float: right; background-color: #b69d74; border: 5px; box-shadow: 2x 2px 5px dimgray;" class="px-4 py-2 m-3">
                    Add Employee
                </button>
            </a>
        </div>
        <center>
            <h2>Employee Management</h2>
        </center>
        <hr>
        <br>
        <div class="table-responsive">
            <table class="table table-codensed table-custom">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Department</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($get_employee->result() as $row) {
                    ?>
                        <tr>
                            <td><?php echo $row->user_id; ?></td>
                            <td><?php echo $row->full_name; ?></td>
                            <td><?php echo $row->email; ?></td>
                            <td><?php echo $row->username; ?></td>
                            <td><?php echo $row->department; ?></td>
                            <td>
                                <a href="<?= base_url(); ?>employee/viewemployee/<?php echo $row->user_id; ?>" title="View Employee"><span><i class="bi bi-folder2-open" style="color: #b69d74;"></i></span></a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>