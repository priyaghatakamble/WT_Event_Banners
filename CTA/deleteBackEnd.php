<?php
    include 'db_connection.php';
    $conn = OpenCon();
    $sel = $_GET['name2'];

    $que = "Delete from Posters where Event_Name='$sel'";
    $query_run = mysqli_query($conn,$que);
    CloseCon($conn);
    session_start();
    $_SESSION['flash_message'] = "Event Deleted Successfully......";
    header('Location: demo.php');
?>
