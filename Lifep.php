<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Lifep.php" method="post">
        Enter the numbers with (','): <br><br>
        <input type="text"  name="numon"><br><br>
        <input type="submit" name = "insert" value="Insert"><br><br>
    </form>

    <?php  
    
       function work($numopen){

        $container= explode(",", $numopen);
        $secondcontain=array_unique($container);
        $fourthcontain=implode(",",$secondcontain);
        echo $fourthcontain;

       }

       if(isset ($_POST["insert"])){

            work($_POST["numon"]);
       }

    ?>
</body>
</html>