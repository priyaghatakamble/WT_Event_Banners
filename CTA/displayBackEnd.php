<?php
    include 'db_connection.php';
    $conn = OpenCon();
    $sel = $_GET['name1'];
    
    $que = "Select * from Posters where Event_Name='$sel'";
    $query_run = mysqli_query($conn,$que);
    if($sel != 'Default'){
    if(mysqli_num_rows($query_run)>0){
        while($row=mysqli_fetch_assoc($query_run)){
            ?>
            <input type="button" value="Back" class="back" onclick="window.location.href='demo.php'">
            <p style="text-align:center; height:100%; width:100%; padding-top:0px; font-size: 32px;">
               <?php echo $row['Event_Name']; ?><br />
                <br />
                <?php 
                $Image="../Banners/".$row['Event_Image'];
                echo "<img style=width:60%; height:90%; src='$Image'>"; ?>
                </p>
                <?php

      }
    }
    else{
        echo '<h1> No Data Available </h1>';
    }
}
else{
    echo '<h1> No Data Available </h1>';
}

  ?>
  