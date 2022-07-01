<body>
    <?php
    $role = $this->session->userdata('user_role');
    if ($role == 1) {
    ?>
        <nav class="navbar sticky-top navbar-expand-md bg-dark navbar-dark py-3">
            <div class="container">
                <a href="<?= base_url('mainpage') ?>" class="navbar-brand">EMS</a>

                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                    <i class="bi bi-list"></i>
                </button>

                <div class="collapse navbar-collapse" id="navmenu">
                    <ul class="navbar-nav ms-auto"> -->
                        <!-- Task Management -->
                        <li class="nav-item">
                            <a href="<?= base_url('mainpage') ?>" class="nav-link text-light ms-4 pt-3">
                                <h6>Task Management</h6>
                            </a>
                        </li>
                        <!-- Attendance -->
                        <li class="nav-item">
                            <a href="<?= base_url('attendance') ?>" class="nav-link text-light ms-4 pt-3">
                                <h6>Attendance</h6>
                            </a>
                        </li>
                        <!-- Administration -->
                        <li class="nav-item">
                            <a href="<?= base_url('employee') ?>" class="nav-link text-light ms-4 pe-0 pt-3">
                                <h6>Administration</h6>
                            </a>
                        </li>
                        <!-- Profile -->
                        <li class="nav-item">
                            <a href="<?= base_url('profile') ?>" class="nav-link text-light ms-4 pe-0 pt-3">
                                <h6>Profile</h6>
                            </a>
                        </li>
                        <!-- Log Out -->
                        <li class="nav-item">
                            <a href="<?= base_url('logout') ?>" class="nav-link text-light ms-4 pe-0 pt-3">
                                <h6>Log Out</h6>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    <?php
    } 
    else {
    ?>
        <nav class="navbar sticky-top navbar-expand-md bg-dark navbar-dark py-3">
            <div class="container">
                <a href="<?= base_url('mainpage') ?>" class="navbar-brand">EMS</a>

                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                    <i class="bi bi-list"></i>
                </button>

                <div class="collapse navbar-collapse" id="navmenu">
                    <ul class="navbar-nav ms-auto"> -->
                        <!-- Task Management -->
                        <li class="nav-item">
                            <a href="<?= base_url('mainpage') ?>" class="nav-link text-light ms-4 pt-3">
                                <h6>Task Management</h6>
                            </a>
                        </li>
                        <!-- Attendance -->
                        <li class="nav-item">
                            <a href="<?= base_url('attendance') ?>" class="nav-link text-light ms-4 pt-3">
                                <h6>Attendance</h6>
                            </a>
                        </li>
                        <!-- Profile -->
                        <li class="nav-item">
                            <a href="<?= base_url('profile') ?>" class="nav-link text-light ms-4 pe-0 pt-3">
                                <h6>Profile</h6>
                            </a>
                        </li>
                        <!-- Log Out -->
                        <li class="nav-item">
                            <a href="<?= base_url('logout') ?>" class="nav-link text-light ms-4 pe-0 pt-3">
                                <h6>Log Out</h6>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    <?php
    }
    ?>