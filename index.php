<!DOCTYPE html>
<html>
    <head>
        <title> Лабораторная работа 6. Блочная верстка сайта</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
        <div id="categories"> 
            Категории
            <ul id="list">
                <li><a href="index.php?C=1">Категория 1</a></li>
                <li><a href="index.php?C=2">Категория 2</a></li>
                <li><a href="index.php?C=3">Категория 3</a></li>
                <li><a href="index.php">Домой</a></li>
                <li><a href="index.php?O=99">Форма</a></li>
            </ul>
        </div>
        <div id="container">
            <div id="objects">
           <?php 
                $C = $_GET["C"];
                switch ($C) {
                    case "1": echo(file_get_contents("objects1.html")); break;
                    case "2": echo(file_get_contents("objects2.html")); break;
                    case "3": echo(file_get_contents("objects3.html")); break;
                    default: echo (file_get_contents("about.html"));}
            ?>
              </div>
            <div id="content">
               <?php
                $O = $_GET["O"];
                switch ($O) {
                    case "1-1": echo (file_get_contents("object1-1.html")); break;
                    case "1-2": echo (file_get_contents("object1-2.html")); break;
                    case "1-3": echo (file_get_contents("object1-3.html")); break;
                    case "2-1": echo (file_get_contents("object2-1.html")); break;
                    case "2-2": echo (file_get_contents("object2-2.html")); break;
                    case "2-3": echo (file_get_contents("object2-3.html")); break;
                    case "3-1": echo (file_get_contents("object3-1.html")); break;
                    case "3-2": echo (file_get_contents("object3-2.html")); break;
                    case "3-3": echo (file_get_contents("object4.html")); break;
                    case "99": include ("form_LAB6.php"); break;
                    default: echo (file_get_contents("applicate.html"));}   
                ?>

            </div>
        </div>
        </body>
</html>
