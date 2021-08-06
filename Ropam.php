<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="Ropam.php" method="post">

      Enter your name :<br><br>
        <input  type="text" name="name">
        <input type="submit" name="req" value="Insert"><br><br>
    </form>
    <?php  

function Shortname($nameone)
{
    if (strlen($nameone) == 0)
        return;
    echo strtoupper($nameone[0]);
    for ($i = 1; $i < strlen($nameone) - 1; $i++)
        if ($nameone[$i] == ' ')
            echo " " . strtoupper($nameone[$i + 1]);

}

if(isset ($_POST["req"])){

    Shortname($_POST["name"]);
}
    ?>
</body>
</html>