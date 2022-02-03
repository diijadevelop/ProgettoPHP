<?php
require('app/views/partials/main-navbar.php');
?>

<div class="container">
    <div class="main mt-4">
        <h1 class="text-center mb-4">This is your Crew:</h1>
        <div id="table_container">
            <div class="mb-4 d-flex justify-content-end">
                <button class="btn-success btn p-2" id="new_row" onclick="openForm_insert()">Add New <i class="m-1 fas fa-user-plus"></i></button>
                <button class="btn-danger btn mx-2 p-2" id="deleteAllBtn" onclick="deleteAllRecord()">Delete All <i class="m-1 fas fa-user-times"></i></button>
            </div>
            <!-- Hidden Form For Insert -->
            <div id="new_row_form" class="my-4">
                <form class="d-flex justify-content-end">
                    <div class="form-group mx-3">
                        <input type="text" class="form-control" id="name" placeholder="Enter the name">
                    </div>
                    <div>
                        <button id="insert_btn" class="btn btn-success"><i class="m-1 fas fa-check"></i></button>
                        <button class="btn btn-danger" onclick="closeForm_insert()"><i class="m-1 fas fa-times"></i></button>
                    </div>
                </form>
            </div>
            <div class="updateRecordForm my-4">
                <form class="d-flex justify-content-end">
                    <div class="form-group mx-3">
                        <input type="text" class="form-control" id="new_name" placeholder="Enter the new name">
                    </div>
                    <div>
                        <button type="submit" id="updateConfirmBtn" class="btn btn-success"><i class="m-1 fas fa-check"></i></button>
                        <button class="btn btn-danger" onclick="closeForm_update()"><i class="m-1 fas fa-times"></i></button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
</div>


<script src="assets/js/family_crud.js"></script>

<?php
require('app/views/partials/footer.php');
?>