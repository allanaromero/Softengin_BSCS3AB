<div class="py-3 px-5" style="background-color: #1f2839; min-height: 90vh;">
    <div class="p-4" style="background-color: #f5f5ef; justify-content:center; min-height: 85vh;">
        <div class="btn-group">
            <a href="<?= base_url('mainpage') ?>">
                <button style="float: right; background-color: #b69d74; border: 5px; box-shadow: 2x 2px 5px dimgray;" class="px-3 py-2 m-1">
                    Back
                </button>
            </a>
        </div>
        <center>
            <h1 class="mb-4">Assign New Task</h1>
        </center>
        <hr>
        <form action="<?php echo base_url('mainpage/addtask') ?>" method="post">
            <div class="row">
                <div class="col-lg-4">
                    <label for="name">Task Title</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="title" placeholder="" value="" required>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-4">
                    <label for="name">Task Description</label>
                </div>
                <div class="col-lg-8">
                    <textarea class="form-control fixed" value="" id="exampleFormControlTextarea1" rows="3" name="description" style="resize: none;" required></textarea>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-4">
                    <label for="name">Deadline</label>
                </div>
                <div class="col-lg-8">
                    <input type="datetime-local" class="form-control" name="deadline" placeholder="" value="" required>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-4">
                    <label for="name">Assign To</label>
                </div>
                <div class="col-lg-8">
                    <select name='assigned_to' class="form-control" required>
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
            <div class="card-button" style="width: 100%;">
                <input type="submit" name="action" id="" value="Submit" style="float: right; background-color: #b69d74; border: none; border-radius: 10%;" class="px-4 py-2 mb-3">
            </div>
        </form>
    </div>
</div>