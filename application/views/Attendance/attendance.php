<div class="p-3" style="background-color: #1f2839; min-height: 90vh;">
    <div class="p-3" style="background-color: #f5f5ef; justify-content:center; min-height: 85vh;">
        <?php
        $role = $this->session->userdata('user_role');
        if ($role == 2) {
        ?>
            <div class="btn-group">
                <?php
                if ($check_timein == TRUE) {
                ?>
                    <a href="<?= base_url(); ?>attendance/timein">
                        <button style="float: right; background-color: #b69d74; border: 5px; box-shadow: 2x 2px 5px dimgray;" class="px-4 py-2 m-3">
                            Time In
                        </button>
                    </a>
                <?php
                } 
                ?>
            </div>
        <?php
        }
        ?>
        <center>
            <h2>Attendance Management</h2>
        </center>
        <hr>
        <br>
        <div class="table-responsive">
            <table class="table table-codensed table-custom">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Time In</th>
                        <th>Time Out</th>
                        <th>Duration</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($get_attendance->result() as $row) {
                    ?>
                        <tr>
                            <td><?php echo $row->atd_id; ?></td>
                            <td><?php echo $row->full_name; ?></td>
                            <td><?php echo $row->time_in; ?></td>
                            <td><?php echo $row->time_out; ?></td>
                            <td><?php
                                if($row->duration == NULL) {
                                    $date = new DateTime('now', new DateTimeZone('Asia/Manila'));
                                    $current_time = $date->format('d-m-Y H:i:s');    

                                    $start = new DateTime($row->time_in);
                                    $end = new DateTime($current_time);
                                    $datediff = $start->diff($end);
                                    echo $datediff->format("%H:%I:%S");  
                                }
                                else {
                                    echo $row->duration;
                                }
                            ?></td>
                            <td><?php echo $row->status; ?></td>
                            <td>
                                <?php
                                if ($row->time_out == NULL) {
                                ?>
                                    <form action="<?php echo base_url('attendance/timeout') ?>" method="post">
                                        <input type="hidden" name="time_in" value="<?php echo $row->time_in; ?>">
                                        <input type="submit" name="action" value="Time Out" style="background-color: #b69d74; border: none;" class="px-4 py-2">
                                    </form>
                                <?php
                                }
                                ?>
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