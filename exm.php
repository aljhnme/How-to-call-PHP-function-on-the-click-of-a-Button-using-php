<!DOCTYPE html>
<html>
  
<head>
  <title>
   Run a function when the submit button is clicked
  </title>
</head>

<body style="text-align:center;">
  <h1 style="color:green;">
    beapopro
  </h1>
  <?php
    if(array_key_exists('read', $_POST)) {
      button1();
     }

    function button1() {
      echo "Yes, welcome to beapopro";
     }
  ?>
  <form method="post">
    <input type="submit" name="read" value="click" />
  </form>
</head>
</html>
