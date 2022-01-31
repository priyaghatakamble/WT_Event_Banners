<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>Add Banner</title>
</head>
<?php
    include 'db_connection.php';
    $conn = OpenCon();

    $que = "Select * from Posters";
    $query_run = mysqli_query($conn,$que);
    ?>
    <body class="bg">
    <div class="container">
    <form action="updateBackEnd.php" method="post" enctype="multipart/form-data">
        <label for="name3">Select Event Name</label>
        <select name="name3">
        <?php
            if(mysqli_num_rows($query_run)>0){
                while($row=mysqli_fetch_assoc($query_run)){
        ?>
        <option><?php echo $row['Event_Name']; ?>
        <?php
                }

            }
            CloseCon($conn);
        ?>
        </select>
        <br/>
        <input type="file" name="my_image1"><br />
        <input type="button" value="Back" class="back" onclick="window.location.href='demo.php'">
        <input type="submit" name="submit" class="back" value="Update">
    </form>
</div>
</body>
</html>




