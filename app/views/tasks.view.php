<?php
        require('app/views/partials/main-navbar.php'); 
?>        

<div class="main">
<h1>Task of the day</h1>
<p>This is the first exercise on which a list of item is connected with a database</p>

<ul>
    <?php foreach ($tasks as $task) : ?>

        <li>
            <strong>Task:</strong> <?php echo $task->description ?>
            <br>
            <strong> Status: </strong>
            <?php
            if ($task->completed) {
                echo "Completed &#9989;";
            } else echo "Work in Progress..";
            ?>
        </li>
        <hr>

    <?php endforeach ?>
</ul>
</div>

<?php
require('app/views/partials/footer.php');
?>