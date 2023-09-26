<!DOCTYPE html>

<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Template</title>

        <?php include "resources/partials/styles.php" ?>

    </head>

<body>

    <div id="main-wrapper">

        <?php include "resources/shared/topbar.php" ?>

        <?php include "resources/shared/sidebar.php" ?>

        <div class="content-body">

            <div class="container-fluid">

                <?php

                    if(isset($_GET['route'])){
                        include 'resources/views/' . $_GET['route']. '.php';
                    }else{
                        include 'resources/views/inicio.php';
                    }
                
                ?>

            </div>

        </div>

        <?php include "resources/shared/footer.php" ?>

    </div>

    <?php include "resources/partials/scripts.php" ?>

</body>

</html>