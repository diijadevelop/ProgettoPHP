<?php
$calendar_view = '';
if (isset($_GET['calendar_view'])){
    $calendar_view = $_GET['calendar_view'];
}
else{
    $calendar_view = 'Day';
}
