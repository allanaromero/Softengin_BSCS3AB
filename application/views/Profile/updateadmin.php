<div class="py-3 px-5" style="background-color: #1f2839; min-height: 90vh;">
    <div class="p-4" style="background-color: #f5f5ef; justify-content:center; min-height: 80vh;">
        <div class="btn-group">
            <a href="<?= base_url('profile') ?>">
                <button style="float: right; background-color: #b69d74; border: 5px; box-shadow: 2x 2px 5px dimgray;" class="px-3 py-2 m-1">
                    Back
                </button>
            </a>
        </div>
        <?php
        foreach ($get_info->result() as $row) {
        ?>
            <center>
                <h2>Update Admin Information</h2>
            </center>
            <hr>
            <br>
            <form action="<?php echo base_url('profile/updateadmin') ?>" method="post">
                <!-- Hidden Employee ID -->
                <input type="text" name="user_id" value="<?php echo $row->user_id; ?>" hidden>
                <!-- Hidden Employee ID -->
                <div class="row">
                    <div class="col-lg-4">
                        <label for="name">Email</label>
                    </div>
                    <div class="col-lg-8">
                        <input type="email" class="form-control" name="email" value="<?php echo $row->email; ?>" required>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-4">
                        <label for="name">Username</label>
                    </div>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" name="username" placeholder="" value="<?php echo $row->username; ?>" required>
                    </div>
                </div>
                <br>
                <div class="card-button" style="width: 100%;">
                    <input type="submit" name="action" id="" value="Update" style="float: right; background-color: #b69d74; border: none;" class="px-4 py-2 mb-3">
                </div>
            </form>
        <?php
        }
        ?>
    </div>
</div>