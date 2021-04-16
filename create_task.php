<?php
require_once('./header.php')
?>

<main role="main" class="container">
<h1 class="mt-5">Create Task</h1>


<form method="POST" action="insert_task.php"> 

    <div class="input-group flex-nowrap">
        <span class="input-group-text" id="addon-wrapping">Task Name</span>
        <input type="text" class="form-control" name="task_name" placeholder="Task Name"/>
    </div>
    <div class="input-group">
        <span class="input-group-text" id="addon-wrapping">Start Date</span>
        <input type="datetime-local" class="form-control" name="task_start"/>
    </div>
    <div class="input-group">
        <span class="input-group-text" id="addon-wrapping">End Date</span>
        <input type="datetime-local" class="form-control" name="task_end"/>
    </div>
    <label class="input-group-text">Task Description</label>
    <div class="input-group">
        
        <textarea cols=50 rows=10 class="form-control" name="task_description"></textarea>
    </div>
    <div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Add Task</button>
    </div>
</form>




<?php
require_once('./footer.php')
?>