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
           
            
            
            <?php
        
        $con= mysqli_connect("localhost","root","","eshopdb");
        $result= mysqli_query($con,"select * from contactus");
       
        
        if(mysqli_num_rows($result)>0){
            
            echo"<table border='1' width='100%'>";
            echo"<tr>";
            echo"<th>Query_ID</th>";
            echo"<th>Name</th>";
            echo"<th>E-Mail</th>";
            echo"<th>Phone No</th>";
            echo"<th>Message</th>";
            echo"<th>Date</th>";
           echo "</tr>";
            
            
            
            
            while($r= mysqli_fetch_row($result)){
            echo"<tr>";
            echo"<td>$r[0]";
            echo"<td>$r[1]";
            echo"<td>$r[2]";
            echo"<td>$r[3]";
            echo"<td>$r[4]";
            echo"<td>$r[5]";
            
            
        }
        echo"</table>";
        }
        else{
            echo"No Querys";
        
        
        }
        
        
        
        
        
        
        
        
        
        
        
        
        
        ?>
            
            
            
        </div>
            
        <div class="foot">
            <?php include 'foot.php';
            ?>
        </div>
        
       
    </body>
</html>
