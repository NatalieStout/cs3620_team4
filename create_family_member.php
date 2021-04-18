<?php
require 'config.php';


?>

<?= template_header('Create Family Member') ?>
<?= template_nav(isset($_SESSION['loggedin'])) ?>

<div class = "columns">

    <div class = "column" >
        <!-- START PAGE CONTENT -->
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
                    <button class="button is-link">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
    <!-- END PAGE CONTENT -->

<?= template_footer() ?>