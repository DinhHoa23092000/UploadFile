<?php 
require "databaseImage.php";

$sql = "SELECT * from image";
$result = $db->query($sql)->fetch_all();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            .image{
                margin-left: 10px;
                margin-right: 10px;
                width: 250px;
                height: 250px;
            }
        </style>
    </head>
    <body>
    
    <?php for($i = 0; $i < count($result); $i++){  ?>
        <img class="image" src="<?php echo $result[$i][1] ?>" alt="Image">
    <?php }?>
    </body>
</html>