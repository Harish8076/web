<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
           
            .c1{
                margin-left:100px;
                margin-right:60px;
                margin-bottom: 30px;
                 margin-top: 0px;
                font-size: 30px;
                color:yellow;
                
                
            }
            
            ul{
                list-style-type: none;
                overflow: hidden;
                
                height:50px;
                margin: 0px;
                margin-left: 0px;
                
                padding:0px;
                
            }
            li a{
                float:left;
                display:block;
                color:white;
                padding:8px 30px 10px 30px;
                
            }
            a{
                margin-top: 9px;
            }
            .c1:hover{
                background-color: black;
            }
            .active{
                background-color: yellow;
            }
            li a:hover:not(.active){
                background-color: rgb(90,90,90);
            }
            .active:hover{
                background-color: red;
            }
            .ty{
                background-color: black;
                
            }
            
            </style>
    </head>
    <body>
        
        <ul class="ty">
            <li><a class="c1">e-shop</a></li>
            <li><a class="active"href="home.php">Home</a></li>
            <li><a href="telivision.php">telivision</a></li>
            <li><a href="mobile.php">Mobile</a></li>
            
            <?php
             if(!isset($_SESSION['uname'])){
                        echo"<li><a href='signin.php'>signin</a></li>";
                        
                    }
                    ?>
            <li><a href="signup.php">signup</a></li>
            <li><a href="">cart</a></li>
            <li><a href="contactus1.php">contact us</a></li>
            
            
                            <li><a href='dell.php'>admin</a></li>
                        
            <li><a href="index.php">Logout</a></li>
            
            
        </ul>
        
    </body>
</html>
