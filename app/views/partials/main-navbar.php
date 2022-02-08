<?php
require "head.php";
require_once "helpers/calendar-view.php";
?>

<body>
        <nav class=" navbar navbar-expand-md " role="navigation">
            <div class="container">
                <a class="navbar-brand navbar-logo" href="homepage">
                    <img src="assets/icons/trash-bin.png" width="50px">
                    JoinTrash</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapsed">
                    <i class="fas fa-bars text-white"></i>
                </button>
                <div class="collapse navbar-collapse text-end justify-content-end" id="navbarCollapsed">
                    <ul class="navbar-nav nav">
                        <li class="nav-item">
                            <a class="nav-link" href="homepage"><i class="mx-2 fas fa-home"></i></i>Homepage</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="dashboard?calendar_view=<?php echo $calendar_view;?>"><i class="mx-2 fas fa-tachometer-alt"></i></i>Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="family"><i class="mx-2 fas fa-user-edit"></i>Your Crew</a>
                        </li>                        
                        <li class="nav-item">
                            <a class="nav-link" href="calendar"><i class="mx-2 fas fa-user-edit"></i>Edit Calendar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>