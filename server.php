<?php

$json_string = file_get_contents('to-do-list.json');



$list = json_decode($json_string);

if(isset($_POST['todoItem'])){
  $newTask= [
    "text" => $_POST['todoItem'] ,
    "done" => false,
  ];
  $list[] = $newTask;
  filePut($list);
};


function filePut($list){
  file_put_contents('to-do-list.json', json_encode($list));
};


header('Content-Type: application/json');

echo json_encode($list);