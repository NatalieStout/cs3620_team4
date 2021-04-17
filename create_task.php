<?php
require_once('./header.php');

?>
<link href="~bulma-calendar/dist/css/bulma-calendar.min.css" rel="stylesheet">
<div style="margin: 150px; margin-top: 25px;">
<h1 class="title" >Create Task</h1>
<form action="insert_task.php" method="POST">
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
                    <input type="submit" class="button is-success" value="Add Task">
                </div>
            </div>
        </form>
</div>
<?php
require_once('./footer.php')
?>