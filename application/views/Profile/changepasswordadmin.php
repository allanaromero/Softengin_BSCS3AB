<div class="section">
    <div class="container  ">
        <div class="row m-4 justify-content-center">
            <div class="card">
                <div class="card-front mt-5 ">
                    <h2 class="text-center">Change Admin Passsword</h2>
                    <hr style="color: #1f2839;">
                    <form action="<?php echo base_url('profile/changepass') ?>" method="post">
                        <div class="mx-5 mb-3 mt-5">
                            <label for="exampleInewPassword1" class="form-label">New Password</label>
                            <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                            <span class="text-danger"><?php echo form_error('password'); ?></span>
                        </div>
                        <div class="mx-5 mb-3">
                            <label for="exampleInewPassword1" class="form-label">Confirm New Password</label>
                            <input type="password" class="form-control" name="conf_password" id="exampleInputPassword1">
                            <span class="text-danger"><?php echo form_error('conf_password'); ?></span>
                        </div>
                        <div class="d-grid gap-2 mt-5 d-md-flex justify-content-md-center">
                            <input type="submit" name="action" id="" value="Change" style="background-color: #b69d74; border: none;" class="px-4 py-2">
                            <input type="submit" name="action" id="" value="Cancel" style="background-color: #b69d74; border: none;" class="px-4 py-2">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    body {
        background-color: #1f2839;
        overflow-x: hidden;
    }

    p {
        line-height: 1.7;
    }

    .form-label {
        color: #1f2839;
    }

    .card h2 {
        padding: 0 20px;
        font-weight: bold;
        color: #1f2839;
    }

    .card {
        position: relative;
        width: 700px;
        max-width: 100%;
        height: 70vh;
        background-color: #f5f5ef;
        margin: 15px;
    }
</style>