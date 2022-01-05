<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 

     <form action="BasicCalculator.php" method="get">
         <input type="number" name="inputNum1">
         <input type="number" name="inputNum2">
         
        <input type="submit">
     </form>
       
     <br>
     Answer: <?php echo $_GET["inputNum1"] + $_GET["inputNum2"]?>
    
</body>
</html>