<?php
require_once('./task/taskDAO.php');

class Task implements \JsonSerializable{

// Properties
private $task_id;
private $task_name;
private $task_start;
private $task_end;
private $task_description;
private $user_id;

// Methods
function __construct(){

}

function getTaskId(){
    return $this->task_id;
}
function setTaskId($task_id){
    $this->task_id = $task_id;
}
function getTaskName(){
    return $this->task_name;
}
function setTaskName($task_name){
    $this->task_name = $task_name;
}
function getTaskStart(){
    return $this->task_start;
}
function setTaskStart($task_start){
    $this->task_start = $task_start;
}
function getTaskEnd(){
    return $this->task_end;
}
function setTaskEnd($task_end){
    $this->task_end = $task_end;
}
function getTaskDesc(){
    return $this->task_description;
}
function setTaskDesc($task_description){
    $this->task_description = $task_description;
}
function getTaskUserId(){
    return $this->user_id;
}
function setTaskUserId($user_id){
    $this->user_id = $user_id;
}

// Methods for DAO



public function jsonSerialize(){
    $vars = get_object_vars($this);
    return $vars;
}

}


?>