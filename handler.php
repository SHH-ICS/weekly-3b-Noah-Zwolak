<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <title>Welcome Page</title>
  </head>

  <body>
  <?php
    $myVariable = "";
    if ( isset( $_POST['myVariable'] ) ){
      $myVariable = $_POST['myVariable'];
    }
    echo "<h1>My Program</h1>\n";
    echo "<p>My Variable is = ".$myVariable."</p>\n";
    ?>
    if $myVariable=large ;
       print(Your large pizza is $6)
    elseif $myVariable= Extra large;
      print(Your extra large pizza is $10)

</body>
  
</html>
