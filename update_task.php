<?php
require_once('./header.php');
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('./sessioncheck.php');

require_once('./task/task.php');

$task = new task();
$tasks = $task->updateTask($_GET["task_id"], $_SESSION["user_id"]);  



?>

<div style="margin: 150px; margin-top: 25px;">
<h1 class="title" >Task Update</h1>
<form action="" method="POST">
            <div class="field">
                <label class="label">Task Name</label>
                <div class="control">
                <input type="text" class="form-control" name="task_name" placeholder="Task Name"/>
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
                <textarea width="50pxpx" class="textarea" name="task_description" placeholder="Task description"></textarea>
                </div>
            </div>
            <div class="field">
                <div class="control">
                    <input type="submit" class="button is-success" value="Update Task">
                </div>
            </div>
        </form>
</div>
<?= require_once('./footer.php') ?>

