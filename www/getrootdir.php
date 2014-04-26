<?php
function getrootdir($filename)
{
    $cd = dirname($filename);
    //echo $cd;
    if($cd == "/") {
        return "";
    }
    $num = substr_count($cd, "/");
    $cd = "";
    for($i = 0; $i < $num; $i++) {
        $cd = "../" . $cd;
    }
    //echo "aaa\n";
    //echo $cd;
    return $cd;
}
?>

