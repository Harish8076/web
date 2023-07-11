
             
             
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
            *{
                margin:0px;
                //border:2px solid black;
                
            }
            body{
                display:flex;
                flex-direction: column;
                
            }
            
             
             
           
            
            
            .header{
              overflow: hidden;
              
                
                flex:4;
                
            }
            
               
                
            
            .menu{
                height:46px;
                
                
                
            }
            .con1{
                min-height:580px;
               
               flex:8;
            }
            
            .foot{
                
                background-color: greenyellow;
                
            }
            .sub2{
                display:flex;
                flex-direction: row;
                
            }
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
        </style>
    </head>
    <body>
        
            
        

         
        <div class="header">
            <?php include 'b1.php';
            ?>
        </div>
            
        
       <div class="menu">
          <?php include 'b2.php';
            ?>
        </div>
        
        <div class="con1">
           
            
        </div>
            
        <div class="foot">
            <?php include 'foot.php';
            ?>
        </div>
        
       
    </body>
</html>
