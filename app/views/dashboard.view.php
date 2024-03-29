<?php
require('app/views/partials/main-navbar.php');
require_once "helpers/views.php";

use Core\Database\App;
$select=App::get('calendar')->read();

?>

<div class="container-fluid">
    <div class="main-dashboard mt-4">
        <div class="header">
            <div class="row">

                <div class="col-6">
                    <h1>Your Dashboard</h1>
                </div>

                <div class=" col-6 d-flex justify-content-end">
                    <div class="dropdown">
                        <button class="btn btn-dark dropdown-toggle" type="button" id="ViewMenu" data-bs-toggle="dropdown" aria-expanded="false" href="views">Views<i class="mx-2 far fa-clone"></i></button>
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
            <div class="dashboard-daily container py-4 mt-4 text-center">
                <h2 class=" fw-bold mb-4">
                <?php echo getdate()['weekday']; ?></h2>
                <hr>
                <p class=" small">We'll going to recycle: </p>
                <?php 
                while($row = $select->fetch(PDO::FETCH_ASSOC)){
                    extract($row);
                    if ($day == getdate()['weekday']){
                        echo "
                        <h3 class=\" fw-bold\">$assigned_garbage</h3>

                        ";
                    }
                }
                ?>
                <p class="small">It's the turn of:</p>
                <?php 
                $select=App::get('calendar')->read();
                while($row = $select->fetch(PDO::FETCH_ASSOC)){
                    extract($row);
                    if ($day == getdate()['weekday']){
                        echo "
                        <h3 class=\" fw-bold\">$assigned_user</h3>

                        ";
                    }
                }
                ?>
            </div>
        <?php endif ?>
        <?php
        if ($calendar_view === 'Week') : ?>
            <div class="mt-4 dashboard-week row seven-cols text-small week-row">
                <?php 
                while($row = $select->fetch(PDO::FETCH_ASSOC)){
                    extract($row);
                    echo "
                    <div class=\"col-md-1 week-block\">
                    <h5 class=\" fw-bold\">$day</h5>
                    <hr>
                    <p class=\" small\">We'll going to recycle: </p>
                    <h5 class=\" pb-3 fw-bold\">$assigned_garbage</h5>
                    <p class=\"small\">It's the turn of:</p>
                    <h5 class=\" fw-bold\">$assigned_user</h5>
                </div>
                    ";
                }
                ?>
                <!-- Col End -->                
            </div>
            <!-- Row End -->
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