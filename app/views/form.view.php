<?php
require('app/views/partials/main-navbar.php');
?>
<h1>Compile this Form</h1>
<form action="form-result" method="POST">

    <label for="name">Name</label>
    <input type="text" name="form-name" id="name">

    <label for="surname">Surname</label>
    <input type="text" name="form-surname" id="surname">

    <label for="email">Email</label>
    <input type="email" name="form-email" id="email">

    <input type="submit" value="Submit">

</form>

<?php
require('app/views/partials/footer.php');
?>