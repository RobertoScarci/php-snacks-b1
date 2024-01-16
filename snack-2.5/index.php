<?php 

$average = 0;

if(empty($_GET['n1']) || empty($_GET['n2']) ) {
    echo 'Null';
} else {
    $average = ($_GET['n1'] + $_GET['n2']) / 2;
}

header('Content-Type: application/json');
echo json_encode($average);

?>
