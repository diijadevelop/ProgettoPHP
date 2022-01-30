<?php
require('app/views/partials/main-navbar.php');
?>
<div class="main">
    <p>Thank you <?php echo $_POST['form-name'] ?> for having completed this form!
    <p>Here you can see your data:</p>
    <div class="p-4">
    <?php
        echo "<p>Name: ". $_POST['form-name']."</p>";
        echo "<p>Surname: ". $_POST['form-surname']."</p>";
        echo "<p>Email: ". $_POST['form-email']."</p>";
    ?>
    </div>
    <p>In the database, this is your row:</p>

    <table>
        <thead>
            <th>Name</th>
            <th>Surname</th>
            <th>Email</th>
        </thead>
        <tbody>
            <?php
            foreach($last_row as $row){
                echo '
                <td> '. $row->name .' </td>
                <td> '. $row->surname .' </td>
                <td> '. $row->email .' </td>
                ';
            }
            ?>
        </tbody>
    </table>

    <p>If you wanna turn back:</p>
    <a href="form">
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