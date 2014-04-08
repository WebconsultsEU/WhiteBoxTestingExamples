<?php


for($i=0; $i<=19; $i++) {
    if ($i<0) {
        echo "not a valid id";
        break;
    }
    echo "line".$i;
}


$id = $_GET['id'];
$entry = $db->getEntry($id);

$entry = $db->getEntry(5);


