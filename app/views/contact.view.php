<?php
        require('app/views/partials/main-navbar.php'); 
?>        

<div class="main">
<h1>Contact Us</h1>
<form method="POST" action="result">

    <label for="name">Name:</label>
    <input name="name" type="text" >

   <input type="submit" value="Submit">

</form>
</div>

<?php
require('app/views/partials/footer.php');
?>