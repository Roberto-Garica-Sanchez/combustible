<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">                                                              
        <meta name="viewport" content="width=device-width, initial-scale=1.0">            
        <title>Control De Combustible</title>
    </head>
    <body>
        <form action="" method="post" id='formu1' onLoad='mueveReloj()'> 
            <?php 
                #include_once($_SERVER["DOCUMENT_ROOT"].'/combustible/body_combustible.php');
                include_once($_SERVER["DOCUMENT_ROOT"].'/combustible/body.php');
            ?>
        </form>
    </body>
</html>
