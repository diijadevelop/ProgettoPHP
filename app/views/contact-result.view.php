<?php
require('app/views/partials/main-navbar.php');
?>
<div class="main">
    <p>Thank you <?php echo $_POST['name'] ?> for having completed this form!
    <p>If you want to read the list of suckers who did the same useless thing:</p>

    <a href="users">
        <button type="button">Click Here!</button>
    </a>    

    <p>..instead:</p>
    
    <a href="homepage">
        <button type="button">Come Back Home</button>
    </a>
</div>

<?php
require('app/views/partials/footer.php');
?>