<?php
require('app/views/partials/main-navbar.php');
use Core\Database\App;
?>

<h1>Table view from a database</h1>
<h3>Choose a table from the list below: </h3>
<ul>
    <?php
    foreach ($table_list as $table) : ?>
        <?php $table_name = $table->Tables_in_learnmysql ?>
        <li><a href="?table=<?php echo $table_name ?>"><?php echo $table_name ?></a></li>
    <?php endforeach ?>
</ul>


<?php

if(isset($_POST['clean_table'])){
    echo "The table has been cleaned up.";
}

if (isset($_GET['table'])) : ?>
    <?php $table_name = $_GET['table']; ?>
    <h4>Selected table: <?php echo $table_name ?></h4><br>
    <form action="table" method="POST">
    <!-- <button type="submit" value="true" onclick="return confirm('Are you sure?')?saveandsubmit(event):'';" name="clean_table">Clean up this table</button> -->
    </form>

<?php {

        if (count($table_data) > 0) {
            echo '<table> <thead>';
            for ($i = 0; $i < 1; $i++) {
                foreach ($table_data[$i] as $pro => $val) {
                    echo '
                    <th> ' . $pro . '</th>
                ';
                }
            }
            echo "</thead><tbody>";
            foreach ($table_data as $row) {
                echo "<tr>";
                foreach ($row as $pro => $value) {
                    echo "<td>$value</td>";
                }
            }
        } else{
            echo "This table is empty!";
        }
    }
else : {
        echo "<br> Select a table...";
    }
endif;
?>
</tbody>
</table>



<?php
require('app/views/partials/footer.php');
?>