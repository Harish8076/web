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
            body{
                display:flex;
                flex-direction: column;
            }
            .div1{
                background-color: red;
                height: 50px;
            }
            .hd1{
                flex-direction: column;
                height: 20px;
                background-color: red;
                width:100%;
                
            }
            .ad1{
                border: 2px solid black;
                height:500px;
                background-color: powderblue;
                width:250px;
                height:100%;
                flex-direction: column;
                
            }
            .ad2{
                background-color:whitesmoke;
                height:640px;
                flex:8;
                border:5px solid black;
                margin:0px;
                
            }
            ul{
                display:block;
                color:aqua;
                list-style-type: none;
              
               padding:0px;
               
               
               
               border:2px solid black;
               
              
            }
            li{
                border: 2px solid white
                     
            }
            li{
                background-color:green;
                padding:5px;
            }
            li a{
                 text-decoration: none;
                 padding:20px;
                 color:white;
               font-family: Monospace;
            }
            
            .c1{
                background-color:red;
                height: 100px;
                flex-direction: column;
                
            }

        .c2{
                
                flex-direction:row;
                display: flex;
                height:100px;
                background-color: powderblue;
                
            }
            .c3{
                background-color:green;
                margin-left: 30px;
                border:5px solid black;
                
            }
            
            
            
             *{
                margin:0px;
                padding:0px;
            }
            body{
                display:flex;
                flex-direction: column;
            }
            .header{
                background-color: tomato;
                text-align: center;
                height:100px;
            }
            .navbar{
                background-color: blue;
                text-align: center;
                height:100px;
            }
            .con{
              
                background-color: tomato;
                text-align: center;
                height:400px;
                flex:2;
            
            }
            .footer{
                background-color: aqua;
                text-align: center;
                height:150px;
            }
            .sub{
                display:flex;
                flex-direction: row;
            }
            .left{
                flex:1;
                background-color: black;
            }
        
        .right{
                flex:1;
                background-color: black;
            }
            
            

        </style>
    </head>
    <body>
        <div class="c1">
            <center> <h1>Welcome you are Admin here</h1></center>
            
        </div>
            
        <div class="c2">
            
            <div class="c4">
           
                
                
                
                 <div class="ad1">
            
            <ul>
                <li><a href="addnewuser.php">Add New User</a></li>
                 <li><a href="viewallusers.php">View All User</a></li>
                  <li><a href="addnewproduct.php">Add New Product</a></li>
                   <li><a href="viewallproduct.php">View All Products</a></li>
                    <li><a href="">Orders</a></li>
                     <li><a href="queryresult.php">Query/Feedback</a></li>
                
                
                
            </ul>
        </div> 
                
                
                
                
                
                
                
            </div>
            
            
        
            <div class="ad2">
              
               
            </div>
        </div>
        
    </body>
</html>
