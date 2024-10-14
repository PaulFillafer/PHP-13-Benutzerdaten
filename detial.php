<?php

require 'func.php';

$allData=getAllData();
for($i = 0; $i < count($allData); $i++){
    $tableData=$allData[$i];
    global $gloId;
    $gloId=$tableData["id"];
    echo '<tr>'.'<td>'.$tableData['firstname'].'</td>'.'<td>'.$tableData['lastname'].'</td>'.'<td>'.$tableData['birthdate'].'</td>'.'</tr>';
}

?>