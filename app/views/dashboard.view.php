<?php
require('app/views/partials/main-navbar.php');
require_once "helpers/calendar-view.php";
?>

<div class="container-fluid">
    <div class="main mt-4">
        <div class="header">
            <div class="row">

                <div class="col-6">
                    <h1>Your Calendar</h1>
                </div>

                <div class=" col-6 d-flex justify-content-end">
                    <div class="dropdown">
                        <button class="btn btn-success dropdown-toggle" type="button" id="ViewMenu" data-bs-toggle="dropdown" aria-expanded="false" href="views">Views<i class="mx-2 far fa-clone"></i></button>
                        <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end" aria-labelledby="#ViewMenu">
                            <form method="GET">
                                <li><input type="submit" value="Day" name="calendar_view" href="#" class="dropdown-item"></li>
                                <li><input type="submit" value="Week" name="calendar_view" href="#" class="dropdown-item"></li>
                            </form>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Row End -->
        </div>
        <!-- Header End -->


        <?php if ($calendar_view === 'Day') : ?>
            <div class="container w-50 p-5 mt-4 border border-4 border-light text-center rounded-pillow">
                <h3 class=" fw-bold"><?php echo getdate()['weekday']; ?></h3>
                <p class=" small">We'll going to recycle: </p>
                <h3 class=" fw-bold"><?php echo "Plastic"; ?></h3>
                <p class="small">It's the turn of:</p>
                <h3 class=" fw-bold"><?php echo "Ester"; ?></h3>
                <p class="small muted mt-4"><i class="me-2 fas fa-info-circle"></i>Click on the waste type for get more informations</p>
            </div>
        <?php endif ?>
        <?php
        if ($calendar_view === 'Week') : ?>
            <div class="mt-4 w-100 d-flex justify-content-center row seven-cols text-small week-row">
                <div class="col-md-1 p-2 g-0 border border-2 border-light text-center">
                    <h5 class=" fw-bold"><?php echo getdate()['weekday']; ?></h5>
                    <p class=" small">We'll going to recycle: </p>
                    <h5 class=" fw-bold"><?php echo "Plastic"; ?></h5>
                    <p class="small">It's the turn of:</p>
                    <h5 class=" fw-bold"><?php echo "Ester"; ?></h5>
                    <p class=" d-md-none small muted mt-4"><i class="me-2 fas fa-info-circle"></i>Click on the waste type for get more informations</p>
                </div>
                <!-- Col End -->                
                <div class="col-md-1 p-2 g-0 border border-2 border-light text-center">
                    <h5 class=" fw-bold"><?php echo getdate()['weekday']; ?></h5>
                    <p class=" small">We'll going to recycle: </p>
                    <h5 class=" fw-bold"><?php echo "Plastic"; ?></h5>
                    <p class="small">It's the turn of:</p>
                    <h5 class=" fw-bold"><?php echo "Ester"; ?></h5>
                    <p class=" d-md-none small muted mt-4"><i class="me-2 fas fa-info-circle"></i>Click on the waste type for get more informations</p>
                </div>
                <!-- Col End -->                
                <div class="col-md-1 p-2 g-0 border border-2 border-light text-center">
                    <h5 class=" fw-bold"><?php echo getdate()['weekday']; ?></h5>
                    <p class=" small">We'll going to recycle: </p>
                    <h5 class=" fw-bold"><?php echo "Plastic"; ?></h5>
                    <p class="small">It's the turn of:</p>
                    <h5 class=" fw-bold"><?php echo "Ester"; ?></h5>
                    <p class=" d-md-none small muted mt-4"><i class="me-2 fas fa-info-circle"></i>Click on the waste type for get more informations</p>
                </div>
                <!-- Col End -->                
                <div class="col-md-1 p-2 g-0 border border-2 border-light text-center">
                    <h5 class=" fw-bold"><?php echo getdate()['weekday']; ?></h5>
                    <p class=" small">We'll going to recycle: </p>
                    <h5 class=" fw-bold"><?php echo "Plastic"; ?></h5>
                    <p class="small">It's the turn of:</p>
                    <h5 class=" fw-bold"><?php echo "Ester"; ?></h5>
                    <p class=" d-md-none small muted mt-4"><i class="me-2 fas fa-info-circle"></i>Click on the waste type for get more informations</p>
                </div>
                <!-- Col End -->                
                <div class="col-md-1 p-2 g-0 border border-2 border-light text-center">
                    <h5 class=" fw-bold"><?php echo getdate()['weekday']; ?></h5>
                    <p class=" small">We'll going to recycle: </p>
                    <h5 class=" fw-bold"><?php echo "Plastic"; ?></h5>
                    <p class="small">It's the turn of:</p>
                    <h5 class=" fw-bold"><?php echo "Ester"; ?></h5>
                    <p class=" d-md-none small muted mt-4"><i class="me-2 fas fa-info-circle"></i>Click on the waste type for get more informations</p>
                </div>
                <!-- Col End -->                
                <div class="col-md-1 p-2 g-0 border border-2 border-light text-center">
                    <h5 class=" fw-bold"><?php echo getdate()['weekday']; ?></h5>
                    <p class=" small">We'll going to recycle: </p>
                    <h5 class=" fw-bold"><?php echo "Plastic"; ?></h5>
                    <p class="small">It's the turn of:</p>
                    <h5 class=" fw-bold"><?php echo "Ester"; ?></h5>
                    <p class=" d-md-none small muted mt-4"><i class="me-2 fas fa-info-circle"></i>Click on the waste type for get more informations</p>
                </div>
                <!-- Col End -->                
                <div class="col-md-1 p-2 g-0 border border-2 border-light text-center">
                    <h5 class=" fw-bold"><?php echo getdate()['weekday']; ?></h5>
                    <p class=" small">We'll going to recycle: </p>
                    <h5 class=" fw-bold"><?php echo "Plastic"; ?></h5>
                    <p class="small">It's the turn of:</p>
                    <h5 class=" fw-bold"><?php echo "Ester"; ?></h5>
                    <p class=" d-md-none small muted mt-4"><i class="me-2 fas fa-info-circle"></i>Click on the waste type for get more informations</p>
                </div>
                <!-- Col End -->
            </div>
            <!-- Row End -->
            <p class="text-center w-100 display-none display-md-inline small muted mt-4"><i class="me-2 fas fa-info-circle"></i>Click on the waste type for get more informations</p>
        <?php endif ?>

    </div>
    <!-- Main End -->

</div>
<!-- Container End -->

</div>
<!-- Page End -->

<?php
require('app/views/partials/footer.php');
?>