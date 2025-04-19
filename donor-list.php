<?php
include ('connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="s1.css">
    <title>Admin login</title>
    <style>
    .full{
    width:100%;
    height: auto;
}
#inner_full{
    width: 80%;
    margin: auto;
    height: auto;
    align-items: center;
    justify-content: center;
    
}
#header{
    width: 100%;
    height: 50px;
    background-color: red;
    color: white;
    border-radius: 10px;
}
#body{
    width: 100%;
    height: 550px;
    border-radius: 10px;
    background-color: rgb(237, 200, 136);  
    margin-top:20px
}
#footer{
    width: 100%;
    height: 70px;
    background-color: red;
    color: white;
    border-radius: 10px;
}
#h21{
    margin-left:30%;
}
#par{
text-align: center;
}
li{
        width: 20%;
        height: 50px;
        line-height: 50px;
        margin-left: 85px;
        background: red;
        color: white;
        float: left;
        border-radius: 10px;
        list-style: none;
        text-align: center;
}
ul li a{
    text-decoration: none;
    color: white;
}
#form{
    width: 80%;
    height: 400px;
    background-color: red;
    color: white;
    border-radius: 10px;
}
td{
    width:200px;
    height:25px;
}

</style>
    
</head>
<body>
    <div class="full">
    <div id="inner_full">
        <div id="header"><h2 style=" margin-left:30%;"><a href="admin-home.php" style="text-decoration: none;color:white;">BLOOD BANK MANAGEMENT SYSTEM</a></h2></div>
        <div id="body">
            <br>
            <?php
             
             $un=$_SESSION['un'];
           
             if(!$un){
                header("Location:index.php");
             }
            ?>
            <h1>DONOR LIST</h1>     
           <center> <div id="form">
           <table>
            <tr>
                <td><center><b> <font color="blue"> Name</font></b></center></td>
                <td><center><b><font color="blue">Father</font></</b></center></td>
                <td><center><b><font color="blue">adress</font></</b></center></td>
                <td><center><b><font color="blue">city</font></</b></center></td>
                <td><center><b><font color="blue">age</font></</b></center></td>
                <td><center><b><font color="blue">Blood Group</font></</b></center></td>
                <td><center><b><font color="blue">Mobile no</font></</b></center></td>
                <td><center><b><font color="blue">E-mail</font></</b></center></td>
            </tr>
            <?php
            $q=$db->query("SELECT * FROM donor_registration");
            while($r1=$q->fetch(PDO::FETCH_OBJ))
            {
                ?>
                 <tr>
                <td><center><?=$r1->name; ?></center></td>
                <td><center><?=$r1->fname; ?></center></td>
                <td><center><?=$r1->address; ?></center></td>
                <td><center><?=$r1->city; ?></center></td>
                <td><center><?=$r1->age; ?></center></td>
                <td><center><?=$r1->bgroup; ?></center></td>
                <td><center><?=$r1->mno; ?></center></td>
                <td><center><?=$r1->email; ?></center></td>
            </tr>
                <?php
            }
            ?>
           
           </table>
            </div></center>     
        </div>
        <div id="footer"><h4 align="center">copyright@myproject</h4>
        <p  id="par"><a href="logout.php"> <font color="white">Logout</a></p>
    </div>

    </div>
    </div>
</body>
</html>