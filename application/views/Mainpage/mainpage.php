<!-- <div class="b-example-divider"></div> -->
<div class="p-3" style="background-color: #1f2839; min-height: 90vh;">
    <div class=" p-4" style="background-color: #f5f5ef; justify-content:center; min-height: 85vh;">
        <div class="btn-group">
            <a href="<?= base_url('mainpage/createtask') ?>">
                <button style="float: right; background-color: #b69d74; border: 5px; box-shadow: 2x 2px 5px dimgray;" class="px-4 py-2 m-3">
                    Assign New Task
                </button>
            </a>
        </div>
        <center>
            <h2>Task Management Section</h2>
        </center>
        <br>
        <div class="table-responsive">
            <table class="table table-codensed table-custom">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Task Title</th>
                        <th>Assigned To</th>
                        <th>Start Time</th>
                        <th>End Time</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Title</td>
                        <td>Employee 1</td>
                        <td>06-01-22</td>
                        <td>06-07-22</td>
                        <td>In Progress</td>
                        <td>
                            <a href="<?= base_url('mainpage/updatetask') ?>" title="Update Task"><span><i class="bi bi-pencil-square" style="color: #b69d74;"></i></span></a>&nbsp;&nbsp;
                            <a href="<?= base_url('mainpage/viewtask') ?>" title="View Task"><span><i class="bi bi-folder2-open" style="color: #b69d74;"></i></span></a>&nbsp;&nbsp;
                            <a href="#" title="Delete Task"><span><i class="bi bi-trash" style="color: #b69d74;"></i></span></a>&nbsp;&nbsp;
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>