<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="Rema.php" method="post">
       Enter the numbers with (','):
        <input type="number" name="num" ><br><br>
        <input type="submit" name="plus" value="Summation" ><br><br>
    </form>

    <?php 

       function add($arr){

            $numones=explode(",", $arr);

            $sum=0;

            foreach($numones as $numw){

                $sum+=$numw;
            }
            echo $sum;
       }
    
       if(isset ($_POST["plus"])){

          add($_POST["num"]);
       }
     
    ?>
</body>
</html>