<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
html,
body {
  height: 100%;
  padding: 0;
  margin: 0;
  text-align: center;
  
}
.center{
    box-sizing: border-box; 
    height:100%;
    width: 100%;
    font-size: larger;
  }
div {
  width: 50%;
  height: 50%;
  float: left;
  
}

#div1 {
  background: #DDD;
}

#div2 {
  background: #AAA;
}

#div3 {
  background: #777;
}

#div4 {
  background: #444;
}

</style>
</head>
<body>
<div id="div1"> 
  <button class="center" onclick="window.location.href='add.php'"> Add Banner</button>
</div>
<div id="div2">
  <button class="center" onclick="window.location.href='update.php'"> Update Banner</button>
</div>
<div id="div3">
  <button class="center" onclick="window.location.href='delete.php'"> Delete Banner</button>
</div>
<div id="div4">
  <button class="center" onclick="window.location.href='display.php'"> Display Banner</button>
</div>
</body>

<?php
  session_start();

  if(isset($_SESSION['flash_message'])) {
    $message = $_SESSION['flash_message'];
    unset($_SESSION['flash_message']);
    echo '<script type="text/javascript">';
    echo 'alert("',$message,'");';
    echo("</script>");
}
?>