<?php

use LDAP\Result;

session_start();
function get_conn(){
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "loginsystem";   

    $conn = mysqli_connect($hostname, $username, $password, $dbname) or die ("Could not connect to database.");
    return $conn;
}

function get_id(){

    $email = unserialize($_SESSION["user"])[0];    
    $user_id = current(get_conn()->query("SELECT id FROM students WHERE email = '".$email."'")->fetch_assoc());
    return $user_id;
}

function get_id_teacher(){

    $email = unserialize($_SESSION["user"])[0];    
    $user_id = current(get_conn()->query("SELECT teacherId FROM teachers WHERE email = '".$email."'")->fetch_assoc());
    return $user_id;
}


function get_reward_points(){

    $email = unserialize($_SESSION["user"])[0];
    $reward_points = mysqli_query(get_conn(), "SELECT rewardPoints FROM students WHERE email = '".$email."'");

    while ($row = $reward_points->fetch_assoc()) {
        echo $reward_points_new = $row['rewardPoints'];
    }
  
    return $reward_points_new;
}

function my_details(){

    $conn = get_conn();
    $user_id = get_id();
    
    $query = "SELECT * FROM students WHERE studentId = '".$user_id."'";

    $result = mysqli_query($conn, $query);

    while ($row = $result->fetch_assoc()) {
        echo 'Email: '.$row['email'].'</br>';
        echo 'First Name: '.$row['fname'].'</br>';
        echo 'Second Name: '.$row['sname'].'</br>';
    }
    
}

function get_courses(){

    $conn = get_conn();
    $user_id = get_id();
    
    $query = "SELECT courseId FROM enrols WHERE studentId = '".$user_id."'";

    $result = mysqli_query($conn, $query);

    $course_id_arr = array();

    while ($row = $result->fetch_assoc()) {
        array_push($course_id_arr, $row['courseId']);
    }

    //for each courseId, search for coursename
    $course_arr = array();
    foreach ($course_id_arr as $item){
        $result = mysqli_query($conn, "SELECT courseName FROM courses WHERE courseId = '".$item."'");
        array_push($course_arr, $result->fetch_assoc());
    }

    //find a way to print them cleanly
    foreach ($course_arr as $course){

        print_r ($course);
    }

}


function get_quizzes(){

    $conn = get_conn();
    $user_id = get_id();
    
    $query = "SELECT quizResultId, quizResult FROM quizresults WHERE studentId = '".$user_id."'";

    $result = mysqli_query($conn, $query);

    $quizresults = array();
    while ($row = $result->fetch_assoc()) {
        
        array_push($quizresults, $row);
    }

    print_r($quizresults);

    
}

?>