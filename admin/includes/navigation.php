<div class="header">
    <div class="header-left">
        <a href="" class="logo">
            <span>Admin</span>
        </a>
    </div>
    <a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
    <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
    <ul class="nav user-menu float-right">
        <li class="nav-item dropdown has-arrow">
            <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                <span class="user-img"><img class="rounded-circle" src="images/user.png" width="40" alt="Admin">
                    <span class="status online"></span></span>
                <span><?php echo $_SESSION['name']; ?></span>
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="../">Visit Site</a>
                <a class="dropdown-item" href="">My Profile</a>
                <a class="dropdown-item" href="includes/logout.php">Logout</a>
            </div>
        </li>
    </ul>
    <div class="dropdown mobile-user-menu float-right">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
        <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="">My Profile</a>
            <a class="dropdown-item" href="includes/logout.php">Logout</a>
        </div>
    </div>
</div>