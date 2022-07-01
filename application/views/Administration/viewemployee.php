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
            <h2>Employee Information</h2>
        </center>
        <hr>
        <br>
        <?php
        foreach ($viewemployee->result() as $row) {
        ?>
            <div class="row">
                <div class="col-lg-4">
                    <label>Full Name</label>
                </div>
                <div class="col-lg-8">
                    <p><?php echo $row->full_name; ?></p>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-4">
                    <label>Department</label>
                </div>
                <div class="col-lg-8">
                    <p><?php echo $row->department; ?></p>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-4">
                    <label>Email</label>
                </div>
                <div class="col-lg-8">
                    <p><?php echo $row->email; ?></p>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-4">
                    <label>Password</label>
                </div>
                <div class="col-lg-8">
                    <p>******</p>
                </div>
            </div>
            <br>
        <?php
        }
        ?>
        <hr>
        <center>
            <div class="btn-group">
                <a href="<?= base_url(); ?>employee/editemployee/<?php echo $row->user_id; ?>">
                    <button style="float: right; background-color: #b69d74; border: 5px; box-shadow: 2x 2px 5px dimgray;" class="px-3 py-2 m-1">
                        Update
                    </button>
                </a>
                <a href="#" class="delete_data" id="<?php echo $row->user_id; ?>">
                    <button style="float: right; background-color: #b69d74; border: 5px; box-shadow: 2x 2px 5px dimgray;" class="px-3 py-2 m-1">
                        Delete
                    </button>
                </a>
            </div>
        </center>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('.delete_data').click(function(){
            var user_id = $(this).attr("id");
            if(confirm("Are you sure you want to delete this?"))
            {
                window.location="<?php echo base_url(); ?>employee/deleteemployee/"+user_id;
            }
            else
            {
                return false;
            }
        });
    });
</script>