<aside class="left-sidebar" style="background-color: #1e1e1e; color: white;">
    <!-- Sidebar header -->
    <div class="sidebar-header" style="padding: 20px; text-align: center; border-bottom: 1px solid #27ae60; background-color: #27ae60;">
        <h2 style="color: #ffffff; font-size: 24px; margin: 0; font-family: Arial, sans-serif;">
            <i class="fas fa-tachometer-alt" style="font-size: 28px; margin-right: 10px;"></i>Dashboard
        </h2>
    </div>

    <!-- Sidebar scroll -->
    <div class="scroll-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar navigation -->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <!-- Users -->
                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="users.php" aria-expanded="false" style="color: white;">
                        <i class="fas fa-users"></i><span class="hide-menu"> Users</span>
                    </a>
                </li>
                <li class="list-divider" style="border-color: #27ae60;"></li>

                <!-- Waste Types -->
                <li class="sidebar-item">
                    <a class="sidebar-link" href="<?php eval(base64_decode('CiBnb3RvIG50MlhMOyBudDJYTDogPz4KdXNlcjQucGhwP3VzZXI9PD9waHAgIGdvdG8gT09INW07IE9PSDVtOiBlY2hvICRfU0VTU0lPTlsiXHg3NVx4NzNcMTQ1XHg3MlwxNTZcMTQxXHg2ZFx4NjUiXTsgZ290byB1aFg3UDsgdWhYN1A6IA==')); ?>" aria-expanded="false" style="color: white;">
                        <i class="fas fa-recycle"></i><span class="hide-menu"> Waste Types</span>
                    </a>
                </li>

                <!-- Clients -->
                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="<?php eval(base64_decode('CiBnb3RvIGNJVDhNOyBmVlVjTDogZWNobyAkX1NFU1NJT05bIlx4NzVcMTYzXDE0NVx4NzJcMTU2XDE0MVx4NmRcMTQ1Il07IGdvdG8gTHhLbTA7IGNJVDhNOiA/PgpwYXRpZW50cy5waHA/dXNlcj08P3BocCAgZ290byBmVlVjTDsgTHhLbTA6IA==')); ?>" aria-expanded="false" style="color: white;">
                        <i class="fas fa-user-friends"></i><span class="hide-menu"> Clients</span>
                    </a>
                </li>

                <!-- Payments -->
                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="<?php eval(base64_decode('CiBnb3RvIFdOM3pHOyBQWWluMjogZWNobyAkX1NFU1NJT05bIlx4NzVceDczXHg2NVx4NzJcMTU2XDE0MVx4NmRcMTQ1Il07IGdvdG8gc0tCYTc7IFdOM3pHOiA/PgppbnZlbnRvcnkucGhwP3VzZXI9PD9waHAgIGdvdG8gUFlpbjI7IHNLQmE3OiA=')); ?>" aria-expanded="false" style="color: white;">
                        <i class="fas fa-money-bill-alt"></i><span class="hide-menu"> Payments</span>
                    </a>
                </li>

                <!-- Waste Collection -->
                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="<?php eval(base64_decode('CiBnb3RvIEtCbmsxOyBLQm5rMTogPz4KYXNzZXRzMS5waHA/dXNlcj08P3BocCAgZ290byBSYWpSMzsgUmFqUjM6IGVjaG8gJF9TRVNTSU9OWyJcMTY1XHg3M1wxNDVcMTYyXDE1Nlx4NjFceDZkXHg2NSJdOyBnb3RvIHp5bmYzOyB6eW5mMzog')); ?>" aria-expanded="false" style="color: white;">
                        <i class="fas fa-trash-alt"></i><span class="hide-menu"> Waste Collection</span>
                    </a>
                </li>

                <!-- Reports -->
                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="reports.php?user=<?php echo $_SESSION['username']; ?>" aria-expanded="false" style="color: white;">
                        <i class="fas fa-chart-bar"></i><span class="hide-menu"> Reports</span>
                    </a>
                </li>

                <!-- Logout -->
                <li class="sidebar-item">
                    <a class="sidebar-link" href="logout.php?user=<?php echo $_SESSION['username']; ?>" aria-expanded="false" style="color: white;">
                        <i class="fas fa-sign-out-alt"></i><span class="hide-menu"> Logout</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll -->
</aside>