<html>
    <head>
        <title>Pagina de prueba en PHP</title>
    </head>
    <body>
        <h1>Welcome to the matrix <?=$_SERVER['REMOTE_ADDR'];?></h1>
        <br>
        <h2>Or did you mean <?=$_SERVER['HTTP_X_FORWARDED_FOR'];?><h2>
        <br>
        <br><h3>Hello I'm <?=$_SERVER['UNIQUE_ID'];?></h3>
        <br>
        <br><?=print_r($_SERVER);?>
    </body>
</html>
