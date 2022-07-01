<div class="p-3" style="background-color: #1f2839; min-height: 87vh;">
    <div class="p-4" style="background: #f5f5ef; justify-content:center; min-height: 80vh; align-items:center; text-align: center;">
        <h2>Profile</h2>
        <hr><br>
        
            <?php
            foreach ($get_info->result() as $row) {
            ?>
                <h1><?php echo $row->full_name; ?></h1>
                <b>
                    <p><?php echo $row->department; ?></p>
                </b>
                <p><?php echo $row->email; ?></p>
                <p><?php echo $row->username; ?></p>
                <br><br><br>
            <?php
            }
            ?>
            <?php
            $role = $this->session->userdata('user_role');
            if ($role == 1) {
            ?>
                <div class="btn-group">
                    <a href="<?= base_url('profile/editadmin') ?>">
                        <button style="float: right; background-color: #b69d74; border: 5px; box-shadow: 2x 2px 5px dimgray;" class="px-4 py-2 m-3">
                            Update Info
                        </button>
                    </a>
                    <a href="<?= base_url('profile/changeadminpassword') ?>">
                        <button style="float: right; background-color: #b69d74; border: 5px; box-shadow: 2x 2px 5px dimgray;" class="px-4 py-2 m-3">
                            Change Password
                        </button>
                    </a>
                </div>
            <?php
            }
            ?>
        
    </div>
</div>