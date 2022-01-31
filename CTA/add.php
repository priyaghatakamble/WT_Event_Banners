<html>
    <head>
    <link rel="stylesheet" href="style.css">
        <title>Add Banner</title>
        <style>

        </style>
    </head>
    <body class="bg">
        <div class="container">
        
        <form name="form" method="post" enctype="multipart/form-data" >
            Event Name<input type="text" name="event_name" required> <br />
            <label for="category">Choose category</label>
            <select name="category" required>
                <option>Technical</option>
                <option>Non-technical</option>
                <option>Seminar</option>
            </select>
            <br />
            <input type="file" name="my_image" required><br />
            <input type="button" value="Back" class="back" onclick="window.location.href='demo.php'">
            <input type="submit" name="submit" class="back" value="Upload">
        </form>
</div>
    </body>
    
</html>

<?php
    include 'db_connection.php';
    $conn = OpenCon();
    if(isset($_POST['submit']) && isset($_FILES['my_image'])){
          $eventName = $_POST['event_name'];
          $category = $_POST['category'];
          $fn = $_FILES['my_image']['name'];
          $ext = explode(".",$fn);
          $cn=count($ext);

          if($ext[$cn-1]=='jpg' || $ext[$cn-1]=='png' || $ext[$cn-1]=='jpeg'){
            $tm = $_FILES['my_image']['tmp_name'];
            move_uploaded_file($tm,"../Banners/".$fn);
            $ins = "INSERT INTO POSTERS SET event_name='$eventName',category='$category',event_image='$fn'";
            $conn -> query($ins);
            
            session_start();
            $_SESSION['flash_message'] = "Event added successfully";
            header('Location: demo.php');
            
          }else{
            session_start();
            $_SESSION['flash_message'] = "Invalid Image Format";
            header('Location: demo.php');
          }

          
    }
    CloseCon($conn);
?>