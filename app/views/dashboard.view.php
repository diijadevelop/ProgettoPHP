<?php
require('app/views/partials/main-navbar.php');
?>

<div class="container">
    <div class="main">
        <div class="header">
            <div class="row">
                
                <div class="col-6">
                    <h1>Your Calendar</h1>
                </div>

                <div class=" col-6 d-flex justify-content-end">
                    <div class="dropdown">
                        <button class="btn btn-success dropdown-toggle" type="button" id="ViewMenu" data-bs-toggle="dropdown" aria-expanded="false" href="views">Views<i class="mx-2 far fa-clone"></i></button>
                        <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end" aria-labelledby="#ViewMenu">
                            <li><a href="#" class="dropdown-item">Single Day</a></li>
                            <li><a href="#" class="dropdown-item">Week</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Row End -->
        </div>
        <!-- Header End -->

    </div>
    <!-- Main End -->

</div>
<!-- Container End -->

</div>
<!-- Page End -->

<?php
require('app/views/partials/footer.php');
?>