<?php

require 'userdata.php';
include 'detial.php';



function getAllData()
{
  global $data;
  return $data;

}

function getDataPerID($id)
{
    global $data;
    for($i = 0; $i < count($data); $i++){
        $idFilter=$data[$i];
    }
    if ($id == $idFilter['id']){
        return $idFilter;
    } else {
        echo 'fehler'.$id.$idFilter['id'];
    }
}


function getFilteredData($filter)
{
    
}