<?php
/**
 * Created by PhpStorm.
 * User: qhoi
 * Date: 8/15/19
 * Time: 10:22 AM
 */


$data = "Wanyama*1999-2-12*Bungoma*Webuye*Kiongozi";
//Extract the items
$items = explode("*",$data);
//var_dump($items);
echo "<br>";
foreach ($items as $x){
    echo $x."<br>";
}

?>