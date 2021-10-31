<?php
//$email = $data->userid;
$name = $data->name;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once(PATH_INC . 'styles.php'); ?>
    <title>Dashboard</title>
</head>

<body>
    <?php include_once(PATH_INC . 'header.php'); ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="d-flex justify-content-center"">
                    <h3>Hola bienvenido al dashboard. <?php echo $name; ?></h3>
                </div>
            </div>
        </div>
    </div>
    <?php include_once(PATH_INC . 'footer.php'); ?>
    <?php include_once(PATH_INC . 'scrypts.php'); ?>
</body>

</html>