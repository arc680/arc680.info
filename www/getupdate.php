<?php
function getupdate($filename, $limit)
{
    $fp = fopen($filename, 'r');

    $cnt = 0;
    while($field_array = fgetcsv($fp)) {
        if($limit != 0 && $cnt >= $limit) break;
        $date = htmlspecialchars($field_array[0], ENT_QUOTES);
        $detail = htmlspecialchars($field_array[1], ENT_QUOTES);
        //$output = "<p>" . $date . "　" . $detail . "</p>\n";
        $output = $date . "　" . $detail . "<br />\n";
        echo $output;
        $cnt++;
    }
    if($limit != 0) {
        echo "<p><a href=\"./update.php\">過去の更新 &raquo;</a></p>";
    }
}
?>
