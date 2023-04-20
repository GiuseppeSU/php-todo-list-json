<?php

$todoList =[
    'andare a correre',
    'fare la spesa',
    'studiare',
    'imparare php senza bestemmiare',
    'leggere almeno 10 pagine'

];

if(isset($_POST['todoItem'])){
    $todoList[] = $_POST['todoItem'];
}

header('Content-Type: application/json');
echo json_encode($todoList);

?>


