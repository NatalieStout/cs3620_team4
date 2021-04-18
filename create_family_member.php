<?php
require 'config.php';
require_once('./utilities/connection.php')

?>


<?= template_header('Create Contact') ?>
<?= template_nav(isset($_SESSION['loggedin'])) ?>


        <h1 class="title">Create Family member</h1>

        <!-- <form action="" method="POST">
            <div class="field">
                <label class="label">Name</label>
                <div class="control">
                    <input class="input" type="text" name="family_member_name" placeholder="Name" required>
                </div>
            </div>
             COLOR
            <div class="field">
            <div class="dropdown">
                <div class="dropdown-trigger">
                    <button class="button" aria-haspopup="true" aria-controls="dropdown-menu3">
                    <span>Color</span>
                    <span class="icon is-small">
                        <i class="fas fa-angle-down" aria-hidden="true"></i>
                    </span>
                    </button>
                </div>
                <div class="dropdown-menu" id="dropdown-menu3" role="menu">
                    <div class="dropdown-content">
                    <a href="#" class="dropdown-item">
                        Red
                    </a>
                    <a href="#" class="dropdown-item">
                        Orange
                    </a>
                    <a href="#" class="dropdown-item">
                        Yellow
                    </a>
                    <a href="#" class="dropdown-item">
                        Green
                    </a>
                    <a href="#" class="dropdown-item">
                        Blue
                    </a>
                    <a href="#" class="dropdown-item">
                        Purple
                    </a>
                    <hr class="dropdown-divider">
                    <a href="#" class="dropdown-item">
                        More
                    </a>
                    </div>
                </div>
                </div>
                </div>

            <br>


            <div class="field">
                <div class="control">
                    <button class="button is-link">Submit</button>
                </div>
            </div>
        </form> -->
    <!-- END PAGE CONTENT -->



    <div class="dropdown">
  <div class="dropdown-trigger">
    <button class="button" aria-haspopup="true" aria-controls="dropdown-menu">
      <span>Dropdown button</span>
      <span class="icon is-small">
        <!--fontawesome required for the icon-->
        <i class="fa fa-angle-down" aria-hidden="true"></i>
      </span>
    </button>
  </div>
  <div class="dropdown-menu" id="dropdown-menu" role="menu">
    <div class="dropdown-content">
      <a href="#" class="dropdown-item">
        Dropdown item
      </a>
      <a class="dropdown-item">
        Other dropdown item
      </a>
      <a href="#" class="dropdown-item is-active">
        Active dropdown item
      </a>
      <a href="#" class="dropdown-item">
        Other dropdown item
      </a>
      <hr class="dropdown-divider">
      <a href="#" class="dropdown-item">
        With a divider
      </a>
    </div>
  </div>
</div>

<?= template_footer() ?>