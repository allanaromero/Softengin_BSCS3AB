<div class="py-3 px-5" style="background-color: #1f2839; min-height: 90vh;">
    <div class="p-4" style="background-color: #f5f5ef; justify-content:center; min-height: 90vh;">
        <div class="btn-group">
            <a href="<?= base_url('mainpage') ?>">
                <button style="float: right; background-color: #b69d74; border: 5px; box-shadow: 2x 2px 5px dimgray;" class="px-3 py-2 m-1">
                    Back
                </button>
            </a>
        </div>
        <center>
            <h2>Task Details</h2>
        </center>
        <hr>
        <br>
        <?php
        foreach ($viewtask->result() as $row) {
        ?>
            <div class="row">
                <div class="col-lg-4">
                    <label>Task Title</label>
                </div>
                <div class="col-lg-8">
                    <p><?php echo $row->title; ?></p>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-4">
                    <label>Task Description</label>
                </div>
                <div class="col-lg-8">
                    <p><?php echo $row->description; ?></p>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-4">
                    <label>Created At</label>
                </div>
                <div class="col-lg-8">
                    <p><?php echo $row->date_created; ?></p>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-4">
                    <label>Deadline</label>
                </div>
                <div class="col-lg-8">
                    <p><?php echo $row->deadline; ?></p>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-4">
                    <label>Assigned To</label>
                </div>
                <div class="col-lg-8">
                    <p><?php echo $row->full_name; ?></p>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-4">
                    <label>Status</label>
                </div>
                <div class="col-lg-8">
                    <p><?php echo $row->status; ?></p>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>