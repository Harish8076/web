<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="post"enctype="multipart/form-data">
            <label> Select Files</label>
            <input type="file" name="myfile">
            <input type="submit" name="btn"value="get info">
            
        </form>
        
        <?php
        if(isset($_POST['btn']))
        {
            echo"name":.$_FILES['myfile']['name']."<br>";
            echo"name":".$_FILES['myfile']['size']"."<br>";
            echo"name":".$_FILES['myfile']['type']"."<br>";
            echo"name":".$_FILES['myfile']['error']"."<br>";
           // echo"name":".$_FILES['myfile']['']"."<br>";
            
            
        }
        ?>
    </body>
</html>
