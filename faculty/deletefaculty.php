<?php

    require_once '../classes/faculty.class.php';

    //resume session here to fetch session values
    session_start();
    /*
        if user is not login then redirect to login page,
        this is to prevent users from accessing pages that requires
        authentication such as the dashboard
    */
    if (!isset($_SESSION['logged-in'])){
        header('location: ../login/login.php');
    }
    //if the above code is false then code and html below will be executed
    $facultyobj = new Faculty;
    if(isset($_GET['id'])){
        if($facultyobj->delete($_GET['id'])){

            header('location: faculty.php');
        }
    }
?>