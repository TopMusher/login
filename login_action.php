<?php


include_once "C:/xampp/htdocs/Task-2-logan/log_in.php";


$email = $_POST["email"];
$password = $_POST["password"];

$details = array(
    $email,
    $password,
    $account_type
);

$logged_in = check_login($email, $password);


//check if user wants to be remembered
if (isset($_POST["remember_me"]) && $_POST["remember_me"] == "Yes")
{
    setcookie("remember_me", serialize($details), time() + 60*60*24*7*4*2 ); //two months cookie
}

//if login successful as student
if ($logged_in == "student")
{
    
    session_start();
    $_SESSION['user'] = serialize($details);
    header("Location: studentDashboard.php");
    
}

//if login successful as teacher
else if ($logged_in == "teacher")
{
    
    session_start();
    $_SESSION['user'] = serialize($details);
    header("Location: teacher_dashboard.php");
    
}

//if can't log in
else
{
    session_start();
    $err = $logged_in;  
    $_SESSION['login_err'] = $err;
    header("Location: log_in.php");

}

?>