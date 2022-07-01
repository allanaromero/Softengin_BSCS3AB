<div class="py-3 px-5" style="background-color: #1f2839; min-height: 90vh;">
    <div class="p-4" style="background-color: #f5f5ef; justify-content:center; min-height: 85vh;">
        <div class="btn-group">
            <a href="<?= base_url('employee') ?>">
                <button style="float: right; background-color: #b69d74; border: 5px; box-shadow: 2x 2px 5px dimgray;" class="px-3 py-2 m-1">
                    Back
                </button>
            </a>
        </div>
        <center>
            <h1 class="mb-4">Add New Employee</h1>
        </center>
        <hr>
        <form action="<?php echo base_url('employee/addnewemployee') ?>" method="post">
            <div class="row">
                <div class="col-lg-4">
                    <label for="name">Full Name</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="full_name" placeholder="" value="<?php echo set_value('full_name'); ?>" required>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-4">
                    <label for="department">Department</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="department" placeholder="" value="<?php echo set_value('department'); ?>" required>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-4">
                    <label for="name">Email Address</label>
                </div>
                <div class="col-lg-8">
                    <input type="email" class="form-control" name="email" placeholder="" value="<?php echo set_value('email'); ?>" required>
                    <span class="text-danger"><?php echo form_error('email'); ?></span>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-4">
                    <label for="name">Username</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="username" placeholder="" value="<?php echo set_value('username'); ?>" required>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-4">
                    <label for="name">Password</label>
                </div>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="password" placeholder="" value="<?php echo random_string('numeric', 6); ?>" readonly>
                </div>
            </div>
            <br>
            <div class="card-button" style="width: 100%;">
                <input type="submit" name="action" id="" value="Submit" style="float: right; background-color: #b69d74; border: none; border-radius: 10%;" class="px-4 py-2 mb-3">
            </div>
        </form>
    </div>
</div>