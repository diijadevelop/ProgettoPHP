<?php
require('app/views/partials/head.php');
require_once "helpers/calendar-view.php";

?>
<div class="container d-flex align-items-center min-vh-100">

    <div class="main text-center ">

        <div class="header-home mb-3">
                <img class="angry-animate mb-4" src="assets/icons/trash-bin.png" width="50px">
            <a class="navbar-brand ms-3">JoinTrash</a>
        </div>
    
        <h2>Waste Collection Calendar</h2>
        <p class="">Now you can check if it's your turn to take out the garbage &#128513;</p>
        <div class="card-wrapper container-fluid pt-4">
            <div class="row">
                <div class="col-md-3">
                    <div class="card mb-3">
                        <i class="mt-4 fas fa-tachometer-alt"></i>
                        <div class="card-body">
                            <h5 class="card-title">Dashboard</h5>
                            <p class="small card-text text-dark fw-bold">Get start and get a look to your calendar!</p>
                            <a href="dashboard?calendar_view=<?php echo $calendar_view?>" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <!-- Card Dashboard End -->
                <div class="col-md-3">
                    <div class="card mb-3">
                        <i class="mt-4 fas fa-users"></i>
                        <div class="card-body">
                            <h5 class="card-title">Your Crew</h5>
                            <p class="small card-text text-dark fw-bold">Add a new element to your family.</p>
                            <a href="family" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <!-- Card Edit Your Crew End -->
                <div class="col-md-3">
                    <div class="card mb-3">
                    <i class="mt-4 fas fa-calendar-plus"></i>
                        <div class="card-body">
                            <h5 class="card-title">Calendar</h5>
                            <p class="small card-text text-dark fw-bold">Assign members and garbage type.</p>
                            <a href="calendar" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <!-- Card Edit Your Calendar End -->
                <div class="col-md-3">
                    <div class="card mb-3">
                        <i class="mt-4 fas fa-info-circle"></i>
                        <div class="card-body">
                            <h5 class="card-title">Good Info</h5>
                            <p class="small card-text text-dark fw-bold">Some useful info about your garbage.</p>
                            <a href="info" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <!-- Card Good Info End -->
            </div>
            <!-- Row End -->
        </div>
        <!-- Card Container End -->
    </div>
</div>

<?php
require('app/views/partials/footer.php');
?>