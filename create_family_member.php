<?php
require 'config.php';
require_once('./header.php');


?>

<div class = "columns">

    <div class = "column" >
        <!-- START PAGE CONTENT -->
        <div style="margin: 150px; margin-top: 25px;">
        <h1 class="title">Add Family Member</h1>

        <form action="insert_family_member.php" method="POST">
            <div class="field" style="width: 350px;">
                <label class="label">Name</label>
                <div class="control">
                    <input class="input" type="text" name="name" placeholder="Name" required>
                </div>
            </div>
            
            <div class="control">
                <div class="select">
                    <select name="color">
                    <option>Family Member Color</option>
                    <option value='FF0000'>Red</option>
                    <option value='FFA500'>Orange</option>
                    <option value='FFFF00'>Yellow</option>
                    <option value='00ff00'>Green</option>
                    <option value='0000FF'>Blue</option>
                    <option value='800080'>Purple</option>
                    </select>
                </div>
                </div>

                <br>

               <div class="field">
                <div class="control">
                    <button class="button is-success">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
    <!-- END PAGE CONTENT -->

<?= template_footer() ?>
