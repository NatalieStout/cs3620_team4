<?php
require_once('./header.php');


if(isset($_GET["del"]) AND $_GET["del"] == "true"){
    echo "<script>alert('task was deleted!');</script>";
  }
          ini_set('display_errors', 1);
          ini_set('display_startup_errors', 1);
          error_reporting(E_ALL);
  
          require_once('./task/task.php');
  
          $task = new task();
          $tasks = $task->getTasks($_SESSION["user_id"]);  
  
          $arrlength = count($tasks);
  
          for($x = 0; $x < $arrlength; $x++) {
              echo '<div class="card" style="width: 18rem;">
                      <div class="card-body">
                          <h5 class="card-title">' . $tasks[$x]->getTaskName() . '</h5>
                          <h6 class="card-subtitle mb-2 text-muted">Start: ' . $tasks[$x]->getTaskStart() . '</h6>
                          <h6 class="card-subtitle mb-2 text-muted">End: ' . $tasks[$x]->getTaskEnd() . '</h6>
                          <p class="card-text">' . $tasks[$x]->getTaskDesc() . '</p>
                          <a href="delete_task.php?task_id=' . $tasks[$x]->getTaskId() . '" class="card-link">Delete Task</a>

                      </div>
                    </div>
                    <br />';
          }

?>




<?php
require_once('./footer.php');
?>