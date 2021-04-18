
<?php
require_once('./header.php');
require_once('./config.php');

echo '<h1 class="title" style="margin-top: 10px; margin-left: 50px;">Tasks</h1>';

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
              echo '<div class="card" style="width: 18rem; padding: 30px; margin-top: 20px; margin-left: 50px;">
                      <div class="card-body">
                          <h5 class="card-title" style="font-size: 20px; font-weight: bold;">' . $tasks[$x]->getTaskName() . '</h5>
                          <h6 class="card-subtitle mb-2 text-muted">Start: ' . $tasks[$x]->getTaskStart() . '</h6>
                          <h6 class="card-subtitle mb-2 text-muted">End: ' . $tasks[$x]->getTaskEnd() . '</h6>
                          <p class="card-text">' . $tasks[$x]->getTaskDesc() . '</p>
                          <br>
                          <a style="color: red;" href="delete_task.php?task_id=' . $tasks[$x]->getTaskId() . '" class="card-link">Delete</a>
                          <a style="padding: 10px; color: #23d160;" href="edit_task.php?task_id=' . $tasks[$x]->getTaskId() . '" class="card-link">Edit</a>

                      </div>
                    </div>
                    <br />';
          }

?>



<?php
require_once('./footer.php');
?>