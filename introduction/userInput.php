<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    
      <form action ="userInput.php" method="get">
         Name: <input type="text" name="inputName">
         <br>        
         Age: <input type="number" name="inputAge">
        
         <input type="submit">
        </form>
         <br>

    
          
        Your name is <?php echo $_GET["inputName"]?>
        <br>
        Your age is <?php echo $_GET["inputAge"]?> 

       
</body>
</html>