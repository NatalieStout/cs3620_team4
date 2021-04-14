<?php
require 'config.php';
require 'utilities/connection.php';

$msg = "";
$err = false;
$success = "";

if (isset($_GET['msg'], $_GET['err'])) {
    $msg = $_GET['msg'];
    $err = $_GET['err'];
}


if (isset($_POST['first_name'], $_POST['last_name'], $_POST['username'], $_POST['password'])){
    
    if ($stmt = $conn->prepare('SELECT user_id, password FROM user WHERE username = ?')) {
        
        $stmt->bind_param('s', $_POST['username']);
        $stmt->execute();
        $stmt->store_result();
        
        if ($stmt->num_rows() > 0) {
            
            message('Username exists, please choose another!', 'register.php', true);
        } else {
            
            if ($stmt = $conn->prepare('INSERT INTO user (first_name, last_name, username, password) VALUES (?, ?, ?, ?)')) {
                
                $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $uniqid = uniqid();
                $stmt->bind_param('ssss', $_POST['first_name'], $_POST['last_name'], $_POST['username'], $password);
                $stmt->execute();
                message("Account successfully created!", 'register.php', false);
        $stmt->close();
    } else {
        message('Error: Could not prepare statement!', 'register.php', true);
    }
    $conn->close();
}}}

?>

<?= template_header('Register') ?>
<?= template_nav(isset($_SESSION['loggedIn'])) ?>

    <!-- START PAGE CONTENT -->
    <?php if ($msg && !$err) : ?>
        <div class="notification is-success is-light py-2">
            <p><strong><?php echo $msg; ?></strong></p>
        </div>
    <?php elseif ($msg && $err) : ?>
        <div class="notification is-danger is-light py-2">
            <p><strong><?php echo $msg; ?></strong></p>
        </div>
    <?php endif; ?>
    <h1 class="title">Register</h1>
    <form action="register.php" method="POST">
        <div class="field">
            <p class="control has-icons-left">
                <input name="first_name" class="input" type="text" placeholder="First Name" required>
                <span class="icon is-small is-left">
                    <i class="fas fa-user"></i>
                </span>
            </p>
            </div>
        
            <div class="field">
            <p class="control has-icons-left">
                <input name="last_name" class="input" type="text" placeholder="Last Name" required>
                <span class="icon is-small is-left">
                    <i class="fas fa-user"></i>
                </span>
            </p>
        </div>

        <div class="field">
            <p class="control has-icons-left">
                <input name="username" class="input" type="text" placeholder="Username" required>
                <span class="icon is-small is-left">
                    <i class="fas fa-user"></i>
                </span>
            </p>
            </div>

            <div class="field">
            <p class="control has-icons-left">
                <input name="password" class="input" type="password" placeholder="Password" required>
                <span class="icon is-small is-left">
                    <i class="fas fa-lock"></i>
                </span>
            </p>
            </div>
            <div class="field">
            <p class="control">
                <button class="button is-success">
                Register
                </button>
            </p>
        </div>
    </form>
    <!-- END PAGE CONTENT -->

<?= template_footer() ?>