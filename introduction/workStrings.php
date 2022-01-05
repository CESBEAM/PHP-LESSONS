<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
      $phrase = "Griffe Academy";
      
      echo "Length of the strings is: ",strlen($phrase); 
      echo "<br>";
      echo str_replace("ffe", "Panda", $phrase);

      echo "<br>";
      echo substr($phrase, 7, 4);
    ?>

</body>
</html>