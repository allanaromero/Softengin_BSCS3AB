<body style="background-color: #1f2839;">
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6" style="background-color: #f5f5ef; border-radius: 3%; margin-top: 8%; margin-bottom: 8%; padding: 4%; box-shadow: 3px 3px 10px black;">
                    <div class="mb-5">
                        <center>
                            <h2><b>Employee Management System</b></h2>
                            <h5>Admin</h5>
                        </center>
                    </div>
                    <?php
                        if ($this->session->flashdata('message')) {
                            echo '<div class="alert alert-danger">' . $this->session->flashdata("message") . '</div>';
                        }
                    ?>
                    <form action="<?php echo base_url('login/adminvalidation') ?>" method="post">
                        <div class="mb-3">
                            <label for="exampleInputusername1" class="form-label">Username</label>
                            <input type="text" name="username" id="exampleusername1" class="form-control mb-1" aria-describedby="emailHelp" />
                        </div>
                        <div class="mb-3">
                            <label for="exampleInewPassword1" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control mb-1" id="exampleInputPassword1" />
                        </div>
                        <input type="submit" name="action" value="Log In" style="float: right; background-color: #b69d74; border: none; border-radius: 10%; box-shadow: 2px 2px 5px dimgray;" class="px-4 py-2 m-3">
                    </form>
                    <br><br>
                    <a href="<?= base_url('login') ?>">
                        Log In as Employee
                    </a>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
    </section>