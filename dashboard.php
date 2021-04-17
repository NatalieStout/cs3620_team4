<?php
require_once('./header.php');
require_once('./config.php');


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
                          <h5 class="card-header-title">' . $tasks[$x]->getTaskName() . '</h5>
                          <h6 class="subtitle is-6"><strong>Start: </strong>' . $tasks[$x]->getTaskStart() . '</h6>
                          <h6 class="subtitle is-6"><strong>End: </strong>' . $tasks[$x]->getTaskEnd() . '</h6>
                          <p class="content"><strong>Description: </strong>' . $tasks[$x]->getTaskDesc() . '</p>
                          
                          <a href="delete_task.php?task_id=' . $tasks[$x]->getTaskId() . '" class="card-footer-item">Delete Task</a>

                      </div>
                    </div>
                    <br />';
          }

?>




<?php
require_once('./footer.php');
?>