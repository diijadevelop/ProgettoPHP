<?php
        require('app/views/partials/main-navbar.php'); 
?>        

<div class="main">
    <h1>Array Filtering</h1>
    <p>This is an exercise for filtering the arrays</p>
<?php
foreach($posts as $post): ?>
<h4>Title: <?php echo $post->title?></h4>
<ul>   
    <li>Author: <?php echo $post->author?></li>
    <li>Published:<?php echo($post->published)? 'Yes' : "Not" ?> </li>
</ul>
<?php endforeach?>
</div>


<?php
require('app/views/partials/footer.php');
?>