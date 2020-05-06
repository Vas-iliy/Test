<?php
//дата
//echo time()/60/60/24/365 . "<br/>";
//echo microtime() . "<br/";
//echo date('h:i:s A');
//echo date('H:i:s A');
//echo date('l j');
//echo date('n F');
//echo date('Y');
//echo date('r');
//}
echo "<pre>";
    print_r($_GET);
echo "</pre>";
$id = (int)($_GET['id'] ?? '');
echo $id;


?>






