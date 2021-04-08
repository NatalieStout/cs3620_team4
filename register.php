<?php
    //require 'setenv.php';
    require './utilities/connection.php';
?>  


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
     <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>

<form method="POST" action="./user_insert.php" >
    Username:<input class="input is-normal" type="text" name="username" placeholder="Username" required/><br />
    First Name:<input class="input is-normal" type="text" name="firstName" placeholder="First Name" required/><br />
    Last Name:<input class="input is-normal" type="text" name="lastName" placeholder="Last Name" required/><br />
    Password:<input class="input is-normal" type="password" name="password" placeholder="*****" required/><br /><br />
    <input class="button is-info" type="submit" value="Create User" />
</form>

<a href="login.html">
    <span>Back to Login</span>
</a>
