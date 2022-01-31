
<?php
    include 'db_connection.php';
    $conn = OpenCon();
   
    if(isset($_POST['submit']) && isset($_FILES['my_image1'])){
      $sel = $_POST['name3'];
      $fn = $_FILES['my_image1']['name'];
      $ext = explode(".",$fn);
      $cn=count($ext);
      
      if($ext[$cn-1]=='jpg' || $ext[$cn-1]=='png' || $ext[$cn-1]=='jpeg'){
            $tm = $_FILES['my_image1']['tmp_name'];
            move_uploaded_file($tm,"../Banners/".$fn);
            $que = "Update Posters set Event_Image='$fn' where Posters.Event_Name='$sel'";
            $query_run = mysqli_query($conn,$que);
            session_start();
            $_SESSION['flash_message'] = "Event updated successfully....";
            header('Location: demo.php');
            
      }
      else{
        session_start();
        $_SESSION['flash_message'] = "Invalid Image Format";
        header('Location: demo.php');

    }
    }else{
      session_start();
      $_SESSION['flash_message'] = "There is a error!!!";
      header('Location: demo.php');
    }
    CloseCon($conn);
  ?>