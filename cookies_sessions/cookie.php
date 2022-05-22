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
    session_start();

    if(!isset($_SESSION['pizza']))
    {
        echo("<p>Session is empty.</p>\n");
        $_SESSION['pizza']=0;
    }
    else if($_SESSION['pizza']<3)
    {
        $_SESSION['pizza']=$_SESSION['pizza']+1;;
        echo("<p> Added 1</p>\n");
    }
    else{
        session_destroy();
        session_start();
        session_regenerate_id(TRUE);
        echo("<p>Session Restarted.</p>\n");
    }
    ?>
    <p><a href="cookie.php">CLick me!</a></p>
    <p>Our session id is : <?php echo(session_id());?></p>
    <pre>
        <?php print_r($_SESSION); ?>
    </pre>
</body>
</html>