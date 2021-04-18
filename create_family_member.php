<?php
require 'config.php';
require_once('./header.php');


?>

<div class = "columns">

    <div class = "column" >
        <!-- START PAGE CONTENT -->
        <div style="margin: 150px; margin-top: 25px;">
        <h1 class="title">Create Contact</h1>

        <form action="" method="POST">
            <div class="field">
                <label class="label">Name</label>
                <div class="control">
                    <input class="input" type="text" name="name" placeholder="Name" required>
                </div>
            </div>
            
            <div class="control">
                <div class="select">
                    <select>
                    <option>Family Member Color</option>
                    <option>Red</option>
                    <option>Orange</option>
                    <option>Yellow</option>
                    <option>Green</option>
                    <option>Blue</option>
                    <option>Purple</option>
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
