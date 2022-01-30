<?php
require('app/views/partials/main-navbar.php');
?>

<div class="main">
    <h1>List of all of the names:</h1>

    <ol>
        <?php
        foreach ($names as $name) :
        ?>
            <li><?php echo $name->name ?></li>
        <?php endforeach ?>
    </ol>

    <a href="homepage">
        <button type="button">Come Back Home</button>
    </a>
</div>

<?php
require('app/views/partials/footer.php');
?>