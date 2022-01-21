<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
        require_once "assets/php/function.php";
        $info = getInfo (5); 
    ?>
    <link rel="stylesheet" href="assets\css\Style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
    <script src="assets\js\slowScroll.js"></script>
    
    <title>History of computer</title>
</head>
<body>
    <header>История ЭВМ</header>
    <p class="text1">
        Электронно-вычислительная машина — комплекс технических, аппаратных и программных средств,
        предназначенных для автоматической обработки информации, вычислений, автоматического управления.
        При этом основные функциональные элементы (логические, запоминающие, индикационные и др.)
        выполнены на электронных элементах.
    </p>
    <h2> Поколения ЭВМ </h2>
    <script id="slowScroll">src = "assets/js/slowScrroll" </script>
    <div class="navblock">
    <p class="navhead"> Навигация </p>
    <button class="navbut" onclick="slowScroll ('#1gen')" >1 поколение</button>
    <button class="navbut" onclick="slowScroll ('#2gen')" >2 поколение</button>
    <button class="navbut" onclick="slowScroll ('#3gen')" >3 поколение</button>
    <button class="navbut" onclick="slowScroll ('#4gen')" >4 поколение</button>
    <button class="navbut" onclick="slowScroll ('#5gen')" >5 поколение</button> 
    </div>

   <?php
    for($i = 0; $i < count($info); $i++){
        echo '<div class ="divgen" id = '.$info[$i]["id"].'gen>
        <p class="headgen"> '.$info[$i]["title"].'</p>
        <div class="imgdiv"><img src="assets/img/'.$info[$i]["id"].'.jpg" width="100%" height="100%"> </div>';
        echo '<ol class="specsgen"> ';
            $scesc = $info[$i]["specs_text"];
            $specarray = explode (";", $scesc, 20);
            for ($j = 0; $j < count($specarray); $j++ )
                echo '<li>'.$specarray[$j].' </li>';
        echo '</ol>';
        $add_id = $info[$i]["id"];
        echo '<a class="add" href="moreinfo.php?add_id='.$add_id.'">Подробнее</a>';
    echo '</div>';
    }?> 
   <footer>Практическая работа по дисциплине "Веб-программирование"
        студента группы ФТТ-307 Фролова Николая Анатольевича.<br> <a id="repos" href="https://github.com/EviLLorD-dot/WebSite">Просмотр репозитория на GitHub.com</a> </footer>
</body>
</html>