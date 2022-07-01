<div class="py-3 px-5" style="background-color: #1f2839; min-height: 90vh;">
    <div class="p-4" style="background-color: #f5f5ef; justify-content:center; min-height: 90vh;">
        <div class="btn-group">
            <a href="<?= base_url('mainpage') ?>">
                <button style="float: right; background-color: #b69d74; border: 5px; box-shadow: 2x 2px 5px dimgray;" class="px-3 py-2 m-1">
                    Back
                </button>
            </a>
        </div>
        <?php
        foreach ($viewtask->result() as $row) {
        ?>
            <center>
                <h2>Edit Task</h2>
            </center>
            <hr>
            <form action="<?php echo base_url('mainpage/updatetask') ?>" method="post">
                <!-- Hidden Task ID -->
                <input type="text" name="task_id" value="<?php echo $row->task_id; ?>" hidden>
                <!-- ADMIN -->
                <?php
                $role = $this->session->userdata('user_role');
                if ($role == 1) {
                ?>
                    <div class="row">
                        <div class="col-lg-4">
                            <label for="name">Task Title</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" name="title" placeholder="" value="<?php echo $row->title; ?>" required>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-4">
                            <label for="name">Task Description</label>
                        </div>
                        <div class="col-lg-8">
                            <textarea class="form-control fixed" id="exampleFormControlTextarea1" rows="3" name="description" style="resize: none;" required><?php echo $row->description; ?></textarea>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-4">
                            <label for="name">Deadline</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="datetime-local" class="form-control" name="deadline" value="<?php echo $row->deadline; ?>" required>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-4">
                            <label for="name">Assign To</label>
                        </div>
                        <div class="col-lg-8">

                            <select name='assigned_to' class="form-control" required>
                                <option value="<?php echo $row->assigned_to; ?>"><?php echo $row->full_name; ?></option>
                                <?php
                                foreach ($employee->result() as $row) {
                                ?>
                                    <option value='<?php echo $row->user_id; ?>'><?php echo $row->full_name; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-4">
                            <label for="name">Status</label>
                        </div>
                        <div class="col-lg-8">
                            <?php
                            foreach ($viewtask->result() as $row) {
                            ?>
                                <input type="text" name="status" class="form-control" value="<?php echo $row->status; ?>" readonly>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                <?php
                } else {
                ?>
                    <!-- ADMIN -->
                    <!-- EMPLOYEE -->
                    <div class="row">
                        <div class="col-lg-4">
                            <label for="name">Task Title</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" name="title" placeholder="" value="<?php echo $row->title; ?>" readonly>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-4">
                            <label for="name">Task Description</label>
                        </div>
                        <div class="col-lg-8">
                            <textarea class="form-control fixed" id="exampleFormControlTextarea1" rows="3" name="description" style="resize: none;" readonly><?php echo $row->description; ?></textarea>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-4">
                            <label for="name">Deadline</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="datetime-local" class="form-control" name="deadline" value="<?php echo $row->deadline; ?>" readonly>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-4">
                            <label for="name">Assign To</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" name="" value="<?php echo $row->full_name; ?>" readonly>
                            <input type="hidden" name="assigned_to" value="<?php echo $row->assigned_to; ?>">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-4">
                            <label for="name">Status</label>
                        </div>
                        <div class="col-lg-8">
                            <select name='status' class="form-control" required>
                                <option value='<?php echo $row->status; ?>'><?php echo $row->status; ?></option>
                                <option value='To Do'>To Do</option>
                                <option value='In Progress'>In Progress</option>
                                <option value='Done'>Done</option>
                            </select>
                        </div>
                    </div>
                <?php
                }
                ?>
                <!-- EMPLOYEE -->
                <br>
                <div class="card-button" style="width: 100%;">
                    <input type="submit" name="action" id="" value="Submit" style="float: right; background-color: #b69d74; border: none; border-radius: 10%;" class="px-4 py-2 mb-3">
                </div>
            </form>
        <?php
        }
        ?>
    </div>
</div>