









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
        
        $con = mysqli_connect("localhost","root","","eshopdb");
        $result= mysqli_query($con,"select * from productmaster");
        if(mysqli_num_rows($result)>0){
            echo"<table width='100%' border='1'>";
            echo"<tr>";
            echo"<th> Product Id</th>";
            echo"<th> Product Name</th>";
            echo"<th> Product Price</th>";
            echo"<th> Product Type</th>";
            echo"<th> Product Image</th>";
            echo"<th></th>";
            echo"<th></th>";
            
            echo"</tr>";
            
            
            while($row= mysqli_fetch_array($result))
            {
                echo"<tr>";
                echo"<td>$row[0]</td>";
                echo"<td>$row[1]</td>";
                echo"<td>$row[2]</td>";
                echo"<td>$row[3]</td>";
                echo"<td><img src='$row[4]' width='50px'height='50px'/></td>";
                $path="";
                if($row[3]=="Mobile")
                    $path="mobiledesc.php";
                else
                    $path="tvdesc.php";
                
                echo"<td><a href='$path'>add desc</a></td>";
                echo"<td><a href=''>del</a></td>";
                    
                
                
                echo"</tr>";
                
            
                
                
            }
            echo"</table>";
        }
            
          else
              echo "<h2>No Product Found</h2>";
            
        
        
        ?>
            
            
            
        </div>
            
        <div class="foot">
            <?php include 'foot.php';
            ?>
        </div>
        
       
    </body>
</html>
