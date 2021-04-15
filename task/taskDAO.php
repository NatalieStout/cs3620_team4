<?php
class TaskDAO{

function getAllTasks(){
    require_once('./utilities/connection.php');
    
    $sql = "SELECT task_name, task_start, task_end, task_description, task_id FROM task WHERE task_id =" . $task->getTaskId();
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $task->setTaskName($row["task_name"]);
        $task->setTaskStart($row["task_start"]);
        $task->setTaskEnd($row["task_end"]);
        $task->setTaskDesc($row["task_description"]);
    }
    } else {
        echo "0 results";
    }
    $conn->close();


}

function createTask($task, $user_id){
    require_once('./utilities/connection.php');

    // prepare and bind
    $stmt = $conn->prepare("INSERT INTO team4project.task (`task_name`,
    `task_start`,
    `task_end`,
    `task_description`,
    'user_id') VALUES (?, ?, ?, ?, ?)");

    $name = $task->getTaskName();
    $start = $task->getTaskStart();
    $end = $task->getTaskEnd();
    $desc = $task->getTaskDesc();
    $task->setTaskUserId();


    $stmt->bind_param("sssss", $name, $start, $end, $desc, $user_id);
    $stmt->execute();
   
    $stmt->close();
    $conn->close();
    echo "Task Created";
  }

  function deleteTask($task_id, $user_id){
    require_once('./utilities/connection.php');
    
    $sql = "DELETE FROM team4projet.task WHERE task_id = " . $task_id . "AND user_id = " . $user_id .";";
    
    if($conn->query($sql) == TRUE){
        echo "Task Deleted";
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
  }


  function getTaskByUserId($user_id){
        require_once('./utlities/connection.php');
        require_once('./task/task/php');

        $sql = "SELECT task_id, task_name, task_start, task_end, task_description FROM team4project.task where user_id =" . $user_id;
        $result = $conn->query($sql);

        $tasks = [];
        $index = 0;

        if ($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $task = new task();

                $task->setTaskId($row["task_id"]);
                $task->setTaskName($row["task_name"]);
                $task->setTaskStart($row["task_start"]);
                $task->setTaskEnd($row["task_end"]);
                $task->setTaskDesc($row["task_description"]);
                $tasks[$index] = $task;
                $index++;
            }
        }
        $conn->close();
        return $tasks;
    }

    function updateTask($task_id){
        require_once('./utlities/connection.php');
        require_once('./task/task/php');
        

        $sql = "UPDATE task_name, task_start, task_end, task_description, familey_member_id FROM team4project.task WHERE task_id =" . $task_id;
        
        if($conn->query($sql) == TRUE){
            echo "Task Updated";
        }else{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
        $conn->close();
        
    }

  

}





?>