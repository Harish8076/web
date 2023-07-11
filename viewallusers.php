












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
        $result=mysqli_query($con,"select * from usermaster");
        if(mysqli_num_rows($result)>0){
            
            echo"<table width='1' border='1'>";
            echo"<tr>";
            echo"<th>User_id</th>";
            echo"<th>User_Name</th>";
            echo"<th>User_email</th>";
            echo"<th>User_password</th>";
            echo"<th>User_gender</th>";
            echo"<th>User_moblie</th>";
            echo"<th>User_DOB</th>";
            echo"<th>Role</th>";
            echo"<th></th>";
            echo"</tr>";
            
            
            while($row= mysqli_fetch_array($result))
            {
                echo"<tr>";
                echo"<td>$row[0]</td>";
                 echo"<td>$row[1]</td>";
                  echo"<td>$row[2]</td>";
                   echo"<td>$row[3]</td>";
                    echo"<td>$row[4]</td>";
                     echo"<td>$row[5]</td>";
                      echo"<td>$row[6]</td>";
                       echo"<td>$row[7]</td>";
                       echo"<td><a href='deleteuser.php?uid=$row[0]'>DELETE</a></td>";
                       echo"</tr>";
                       
                    }
                    echo"</table>";
                
                        }
                        else{
                            echo"<h2>No user Found</h2>";
                        }

            
            
            
            
        
        
        
        ?>
           
            
        </div>
            
        <div class="foot">
            <?php include 'foot.php';
            ?>
        </div>
        
       
    </body>
</html>
