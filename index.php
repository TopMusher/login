<!DOCTYPE html>
<?php
include_once 'db.php';
include_once 'user.php';

session_start();

$logged_in = false;
if (isset($_SESSION['user'])){
    $logged_in = true;
    $user = unserialize(($_SESSION['user']));
}

?>
<html>
    <head>
        <title>

        </title>

    </head>
    <body>

<?php 
if ($logged_in):
?>
<p>
    hello <?= $user->email; ?>
</p>
<?php
else: 
?>
<p>
    <a href="log_in.php">Log In</a>
</p>
<p>
    <a href="sign_up.php">Sign up for an account</a>
</p>
<?php endif ?>

</body>
</html>