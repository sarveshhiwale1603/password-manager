<?php
$page=substr($_SERVER['SCRIPT_NAME'],strrpos($_SERVER['SCRIPT_NAME'],"/")+1);
?>
<!-- elevation-4 -->
<aside class="main-sidebar sidebar-dark-primary ">
    <!-- Brand Logo -->
    <div class=" mt-3 pb-3">
        <a href="#" style="text-decoration: none" class="brand-link">
            <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"style="opacity: .8">
            <span class="brand-text font-weight-light text-dark">Tectignis</span>
        </a>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
     
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="index.php" class="nav-link <?= $page == 'index.php' ? 'active':'' ?>">
                        <div class="dash-micon mr-1 shadow">
                            <!-- <i class="nav-icon fa fa-tachometer-alt"></i> -->
                            <i class='nav-icon bx bx-home'></i>
                        </div>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="companies.php"
                        class="nav-link <?= $page == 'companies.php' || $page == 'company-details.php' ? 'active':'' ?>">
                        <div class="dash-micon mr-1 shadow">
                            <!-- <i class="nav-icon fas fa-th"></i> -->
                            <i class='nav-icon bx bx-table'></i>
                        </div>
                        <p>Companies</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="changepassword.php" class="nav-link <?= $page == 'changepassword.php' ? 'active':'' ?>">
                        <div class="dash-micon mr-1 shadow">
                            <!-- <i class="nav-icon fas fa-solid fa-key"></i> -->
                            <i class='nav-icon bx bx-key'></i>
                        </div>
                        <p>Change Password</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>