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
    /* bacbackground-color: red; */
    /* background-image: url(bb.jpeg) ; */
    /* object-fit: contain; */
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
    height: 280px;
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
        <div id="header"><h2 style=" margin-left:30%;"><a href="#" style="text-decoration: none;color:white;">BLOOD BANK MANAGEMENT SYSTEM</a></h2></div>
        <div id="body">
            <br>
        
            <h1>BLOOD-STOCK</h1>     
           <center> <div id="form">
           <table>
            <tr>
                <td><center><b> <font color="blue">Name</font></b></center></td>
                <td><center><b><font color="blue">Qty</font></</b></center></td>
            </tr>
           
            
                 <tr>
                <td><center>A+</center></td>
                <td><center>
                    <?php
                    $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='A+'");
                    echo $row=$q->rowcount();
                    ?>
                </center></td>
            </tr>
            <tr>
                <td><center>B+</center></td>
                <td><center>
                <?php
                    $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='B+'");
                    echo $row=$q->rowcount();
                    ?>
                </center></td>
            </tr>
            <tr>
                <td><center>AB+</center></td>
                <td><center>
                <?php
                    $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='AB+'");
                    echo $row=$q->rowcount();
                    ?>
                </center></td>
            </tr>
            <tr>
                <td><center>AB-</center></td>
                <td><center>
                <?php
                    $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='AB-'");
                    echo $row=$q->rowcount();
                    ?>
                </center></td>
            </tr>
            <tr>
                <td><center>A-</center></td>
                <td><center>
                <?php
                    $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='A-'");
                    echo $row=$q->rowcount();
                    ?>
                </center></td>
            </tr>
            <tr>
                <td><center>B-</center></td>
                <td><center>
                <?php
                    $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='B-'");
                    echo $row=$q->rowcount();
                    ?>
                </center></td>
            </tr>
            <tr>
                <td><center>O+</center></td>
                <td><center>
                <?php
                    $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='O+'");
                    echo $row=$q->rowcount();
                    ?>
                </center></td>
            </tr>
            <tr>
                <td><center>O-</center></td>
                <td><center>
                <?php
                    $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='O-'");
                    echo $row=$q->rowcount();
                    ?>
                </center></td>
            </tr>
                
           
           </table>
            </div></center>     
        </div>
        <div id="footer"><h4 align="center">copyright@myproject</h4>
        
    </div>

    </div>
    </div>
</body>
</html>