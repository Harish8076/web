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
            ul{
                list-style-type: none;
                 margin:0px;
                 padding:0px;
                 
                
                overflow: hidden;
                 color:white;
                 
                
               
                 
            }
            .bc1{
                background-color: green;
            }
               
            li{
                float:left;
            }  
                
                
            
            li a{
                
                
                
                padding:15px 50px 15px 50px;
                display:block;
                margin:0px;
                
                text-decoration: none;
                
            }
            .active{
                background-color: red;
                margin-left: 40px;
            }
            .active:hover{
                background-color: darkorange;
            }
            li a:hover:not(.active){
                background-color: black;
                color:white;
            }
            .v1{
                margin-left:0px;
                background-color: greenyellow;
                overflow: hidden;
            }
        </style>
    </head>
    <body>
        
        
        <ul class="bc1">
            <li><a class="active"herf="">About us</a></li>
            <li><a herf="">privacy</a></li>
            <li><a herf="">FAQ</a></li>
            <li><?php
            
                    if(isset($_SESSION['uname'])){
                        echo"(Welcome $_SESSION[uname])";
                    }
            
            ?>
            
            
                    </li>
        </ul>
        
    </body>
</html>
