<?php
use Core\Database\App;
require('app/views/partials/main-navbar.php');
?>

<div class="container">
    <div class="main mt-4">

        <h1 class="text-center mb-4">Your Calendar:</h1>

        <div id="calendar_container">

            <!-- Hidden Form For Update -->
            <div class="updateRecordForm my-4">
                <form class="d-flex justify-content-end">
                    <div class="form-group me-2 col-4">
                        <select class="form-select" name="assigned_user" id="assigned_user">
                            <option selected value="">User</option>
                            <?php
                            $user_list = App::get('family')->read();
                                while($row = $user_list->fetch(PDO::FETCH_ASSOC)){
                                    extract($row);
                                        echo "
                                        <option>$name</option>
                                        ";
                                }
                            ?>
                        </select>
                    </div>
                    <!-- Form Group End -->
                    <div class="form-group me-2 col-4">
                        <select class="form-select" name="assigned_garbage[]" multiple id="assigned_garbage">
                            <option value= ''>Garbage</option>
                            <?php
                            $garbage_list = App::get('garbage')->read();
                                while($row = $garbage_list->fetch(PDO::FETCH_ASSOC)){
                                    extract($row);
                                        echo "
                                        <option>$name</option>
                                        ";
                                }
                            ?>

                        </select>
                    </div>
                    <!-- Form Group End -->
                    <div class="">
                        <button type="submit" id="ConfirmBtn" onclick="" class="btn btn-success"><i class="m-1 fas fa-check"></i></button>
                        <button class="btn btn-danger" onclick="closeForm_update();event.preventDefault();"><i class="m-1 fas fa-times"></i></button>
                    </div>
                    <!-- Button Group End -->
                </form>
            </div>

        </div>
        <!-- Table Container End -->
    </div>
    <!-- Main End -->
</div>
<!-- Container End -->


<script src="assets/js/calendar.js"></script>

<?php
require('app/views/partials/footer.php');
?>