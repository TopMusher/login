<?php

include_once "C:/xampp/htdocs/Task-2-logan/signup.php";
include_once "C:/xampp/htdocs/Task-2-logan/db.php";

$email = $_POST['email'];
$password = $_POST['password'];
$fname = $_POST['fname'];
$sname = $_POST['sname'];
$account_type = $_POST['account_type'];

$conn = get_conn();


$details = array(
    $email,
    $password,
    $account_type
);

//insert user into db
if (sign_up($conn, $email, $password, $fname, $sname, $account_type))
{   
    if ($account_type == "student")
    {
        session_start();
        $_SESSION['user'] = serialize($details);
        header("Location: studentDashboard.php");
    }
    else
    {
        session_start();
        $_SESSION['user'] = serialize($details);
        header("Location: teacher_dashboard.php");
    }
}
else
{   
    //inserting failed...
    $err = sign_up($conn, $email, $password, $fname, $sname, $account_type);
    session_start();
    $_SESSION['sign_up_err'] = $err;
    header("Location: sign-up.php");
}

?>