<?php 

include "../../app.php";


// die($_SESSION['email']);

?>
 <!--  Header Start -->
 <header class="app-header">
     <nav class="navbar navbar-expand-lg navbar-light">
         <ul class="navbar-nav">
             <li class="nav-item d-block d-xl-none">
                 <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                     <i class="ti ti-menu-2"></i>
                 </a>
             </li>
             <li class="nav-item">
                 <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                     <i class="ti ti-bell-ringing"></i>
                     <div class="notification bg-primary rounded-circle"></div>
                 </a>
             </li>
         </ul>
         <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
             <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">

                 <li class="nav-item dropdown">
                     <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                         aria-expanded="false">
                         <!-- <img src="../../templates/assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle"> -->
                     </a><i class="ti ti-user-circle fs-6"></i>
                     <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                         <div class="message-body">
                             <a href="../account/index.php" class="d-flex align-items-center gap-2 dropdown-item">
                                 <i class="ti ti-user-check fs-6"></i>
                                 <p class="mb-0 fs-3"><?= $_SESSION['username'] ?> </p>
                             </a>
                             <a href="../../action/account/logout.php" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                         </div>
                     </div>
                 </li>
             </ul>
         </div>
     </nav>
 </header>
 <!--  Header End -->