<div class="p-3" style="background-color: #1f2839; min-height: 90vh;">
    <div class="p-3" style="background-color: #f5f5ef; justify-content:center; min-height: 85vh;">
        <?php
        $role = $this->session->userdata('user_role');
        if ($role == 1) {
        ?>
            <div class="btn-group">
                <a href="<?= base_url('mainpage/createtask') ?>">
                    <button style="float: right; background-color: #b69d74; border: 5px; box-shadow: 2x 2px 5px dimgray;" class="px-4 py-2 m-3">
                        Assign New Task
                    </button>
                </a>
            </div>
        <?php
        }
        ?>
        <center>
            <h2>Task Management Section</h2>
        </center>
        <hr>
        <br>
        <div class="table-responsive">
            <table class="table table-codensed table-custom">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Task Title</th>
                        <th>Assigned To</th>
                        <th>Created At</th>
                        <th>Deadline</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($get_tasks->num_rows() > 0) {
                        foreach ($get_tasks->result() as $row) {
                    ?>
                        <tr>
                            <td><?php echo $row->task_id; ?></td>
                            <td><?php echo $row->title; ?></td>
                            <td><?php echo $row->full_name; ?></td>
                            <td><?php echo $row->date_created; ?></td>
                            <td><?php echo $row->deadline; ?></td>
                            <td><?php echo $row->status; ?></td>
                            <td>
                                <a href="<?= base_url(); ?>mainpage/updatetaskview/<?php echo $row->task_id; ?>" title="Update Task"><span><i class="bi bi-pencil-square" style="color: #b69d74;"></i></span></a>&nbsp;&nbsp;
                                <a href="<?= base_url(); ?>mainpage/viewtask/<?php echo $row->task_id; ?>" title="View Task"><span><i class="bi bi-folder2-open" style="color: #b69d74;"></i></span></a>&nbsp;&nbsp;
                                <?php
                                $role = $this->session->userdata('user_role');
                                if ($role == 1) {
                                ?>
                                    <a href="#" class="delete_data" id="<?php echo $row->task_id; ?>"><span><i class="bi bi-trash" style="color: #b69d74;"></i></span></a>&nbsp;&nbsp;
                                <?php
                                }
                                ?>
                            </td>
                        </tr>
                    <?php
                        }
                    } else {
                    ?>
                </tbody>
            </table>
            <p>No tasks available.</p>
        <?php
                    }
        ?>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('.delete_data').click(function(){
            var task_id = $(this).attr("id");
            if(confirm("Are you sure you want to delete this?"))
            {
                window.location="<?php echo base_url(); ?>mainpage/deletetask/"+task_id;
            }
            else
            {
                return false;
            }
        });
    });
</script>