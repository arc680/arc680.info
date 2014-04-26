<?php
$cd = dirname($_SERVER['SCRIPT_NAME']);
echo $cd;
$num = substr_count($cd, "/");

$cd = "";
for($i = 0; $i < $num; $i++) {
    $cd = "../" . $cd;
    //echo $i;
}
echo $cd;
?>
