<?php

$id = 0 ;

function setCurrentID($input){
    global $id;
    $id= $input; 
echo $id;
}
function getCurrentID(){
    global $id;
    return $id; 
}
?>