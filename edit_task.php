
<?php
require_once('./header.php');

require_once('./task/task.php');
//echo $_GET["task_id"];

$task = new task();
$tasks = $task->getTaskById($_GET["task_id"]);  
$task->__toString();


$arrlength = count($tasks);

  
for($x = 0; $x < $arrlength; $x++) {
    echo ' <div style="margin: 150px; margin-top: 25px;">
    <h1 class="title" >Edit Task</h1> 
    <form action="update_task.php" method="POST">
        <div class="field">
            <label class="label">Task Name</label>
            <div class="control">
                <input type="text" class="form-control" name="task_name" value="' . $tasks[$x]->getTaskName() . '"  placeholder="Task Name"/>
            </div>
        </div>
        <div class="field">
            <label class="label">Start Date</label>
            <div class="control">
                <input type="datetime-local" class="form-control" name="task_start"/>
            </div>
        </div>
        <div class="field">
            <label class="label">End Date</label>
            <div class="control">
                <input type="datetime-local" class="form-control" name="task_end"/>
            </div>
        </div>
        <div class="field">
            <label class="label">Task Description</label>
            <div class="control">
                <textarea width="50pxpx" class="textarea" name="task_description" placeholder="Task description">' . $tasks[$x]->getTaskDesc() . '</textarea>
            </div>
        </div>
        <div class="field">
            <div class="control">
                 <input type="submit" class="button is-success" value="Update Task">
            </div>
        </div>
    </form>
    </div>';
}
    require_once('./footer.php');

    ?>