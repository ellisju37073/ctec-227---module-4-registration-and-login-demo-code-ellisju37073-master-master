<?php
// home.php
session_start();
$pageTitle = 'Home';
require 'inc/header.inc.php';
?>
<div class="container mt-3">
    <div class="row">
    <div class="col-12 col-md-12">

<a href="register.php">Register</a>
<?php 
    if(isset($_SESSION['loggedin'])){
        echo '<a href="logout.php" id="logout">Logout</a>&nbsp;';
    } else {
        echo '<a href="login.php" id="login">Login</a>&nbsp;';
    }

?>

<h1>Welcome to Temperature Convertor <?= isset($_SESSION['first_name']) ? $_SESSION['first_name'] : 'New User! Please register and login to use the convertor' ?></h1>
<?php 
if(!isset($_SESSION['loggedin'])){
    die();
}
?>
<h2>Temperature Convertor Application</h2>
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore dolores repudiandae perferendis quae. Vero incidunt vel sint fuga saepe! Consequatur, magnam sunt blanditiis libero magni inventore minima error dolores vero!</p>
<div id="message"></div>

</div> <!-- closing col -->
</div> <!-- closing row -->
</div> <!-- closing container div -->


<script defer src="js/script.js"></script>

<?php require 'inc/footer.inc.php' ?>