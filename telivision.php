<?php
session_start();
?>
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
            
               
        .row{
              display:flex;
              flex-direction: row;
              height:250px;
        }
        .column{
            width:25%;
            min-height:250px;
        }
        .row1{
            display: flex;
            flex-direction: column;
            min-height: 50px;
        }
        .datacolumn{
            width: 100%;
        }
        .product{
            box-shadow:1px 1px 4px grey;
            margin:5px;
            padding:5px;
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
        $qry="select * from productmaster where ptype='tv'";
        $result=mysqli_query($con,$qry);
         if(mysqli_num_rows($result)>0)
                {
                    $count = 0;
                    while($r = mysqli_fetch_assoc($result)){
                        if($count==0)
                            echo "<div class='row'>";
                                $count++;
                        echo "<div class='column' align='center'>";
                            echo "<div class='product'>";
                                echo "<div class='row1'>";
                                    echo "<div class='datacolumn'><img src='$r[pimage]' width='280px' height='180px' /></div>";
                                echo "</div>";
                                echo"<div class='row1'>";
echo "<div class='datacolumn'>Rs. $r[pprice]<br><br>
                                  $r[pname]
                     </div>";
                                echo "</div>";
                            echo "</div>";
                        echo "</div>";
                        
                        if($count==4){
                            echo "</div>";
                            $count=0;
                        }
                    }
                }
                else{
                    echo "<h2>No Product Found!!!</h2>";
                }
mysqli_close($con);
        ?>
        
           
            
            
            
            
            
            
        </div>
            
        <div class="foot">
            <?php include 'foot.php';
            ?>
        </div>
        
       
    </body>
</html>
