<?php
require_once('./header.php');

require_once('./task/task.php');

$task = new task();

$task->setTaskName($_POST["task_name"]);
//echo "name: " . $_POST["task_name"];

$task->setTaskStart($_POST["task_start"]);
//echo " Start: " . $_POST["task_start"];

$task->setTaskEnd($_POST["task_end"]);
//echo " End: " . $_POST["task_end"];

//$user_id = $_SESSION["user_id"];
//echo " user id: " . $_SESSION["user_id"];


$task->setUserId($_SESSION["user_id"]);

$task->setTaskDesc($_POST["task_description"]);
//echo " desc: " . $_POST["task_description"];

$tasks = $task->updateTask($task);  

header("Location: ./dashboard.php");
?>