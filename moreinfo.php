<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
        require_once "assets/php/function.php";
        $add_id=$_GET['add_id'];
        $infoline = getline($add_id);
    ?>
    <link rel="stylesheet" href="assets\css\moreStyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
    <title>More info</title>
</head>
<body>
<?php
$add_id=$_GET['add_id'];
echo '<header>'.$add_id.' Поколение (Дополнительная информация)</header>';
echo '<div class="add_text_div">
<div class="imgdiv"><img src="assets/img/'.$add_id.'more.jpg" width="100%" height="100%" float="right"> </div>
<p class=add_text> '.$infoline["add_text"].' </p>
</div>';
echo '<a id="back_a" href=index.php>Назад</a>'
?> 
</body>
</html>