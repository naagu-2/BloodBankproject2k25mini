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
    height: 250px;
    background-color: red;
    color: white;
    border-radius: 10px;
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
            <h1>DONOR REGISTRATION</h1>     
           <center> <div id="form">
            <form action="" method="post">
            <table>
                <tr>
                    <td width="200px" height="50px">Enter name</td>
                    <td  width="200px" height="50px" ><input type="text" name="name" placeholder="Enter name"></td>
                    <td width="200px" height="50px">Enter Fathers name</td>
                    <td  width="200px" height="50px" ><input type="text" name="fname" placeholder="Enter Father name"></td>
                    
                </tr>
                <tr>
                    <td width="200px" height="50px">Enter address</td>
                    <td  width="200px" height="50px" ><textarea name="address"></textarea></td>
                    <td width="200px" height="50px">Enter City</td>
                    <td  width="200px" height="50px" ><input type="text" name="city" placeholder="Enter City"></td>
                    
                </tr>
                <tr>
               
                    <td width="200px" height="50px">Enter age</td>
                    <td  width="200px" height="50px" ><input type="text" name="age" placeholder="Enter age"></td>
                    <td width="200px" height="50px">Select Blood Group</td>
                    <td  width="200px" height="50px" >
                        <select name="bgroup" >
                            <option>A+</option>
                            <option>B+</option>
                            <option>AB+</option>
                            <option>AB-</option>
                            <option>B-</option>
                            <option>O+</option>
                            <option>O-</option>
                            <!-- <option>B+</option> -->
                        </select>
                    </td>
                    
                </tr>
                <tr>
                    <td width="200px" height="50px">Enter E-mail</td>
                    <td  width="200px" height="50px" ><input type="text" name="email" placeholder="Enter E-mail"></td>
                    <td width="200px" height="50px">Enter Mobile NO</td>
                    <td  width="200px" height="50px" ><input type="text" name="mno" placeholder="Enter mobile no"></td>
                    
                </tr>
                <tr>
                    <td><input type="submit" name="sub" value="save"></td>
                </tr>
            </table>
            </form>
            <?php
                if(isset($_POST['sub']))
                {
                    $name=$_POST['name'];
                    $fname=$_POST['fname'];
                    $address=$_POST['address'];
                    $city=$_POST['city'];
                    
                    $age=$_POST['age'];
                    $bgroup=$_POST['bgroup'];
                    $mno=$_POST['mno'];
                    $email=$_POST['email'];
                    $q=$db->prepare("INSERT INTO donor_registration (name,fname,address,city,age,bgroup,mno,email) VALUES
                    (:name,:fname,:address,:city,:age,:bgroup,:mno,:email)");
                    $q->bindValue('name',$name);
                    $q->bindValue('fname',$fname);
                    $q->bindValue('address',$address);
                    $q->bindValue('city',$city);
                    $q->bindValue('age',$age);
                    $q->bindValue('bgroup',$bgroup);
                   
                    
                    $q->bindValue('mno',$mno);
                    $q->bindValue('email',$email);
                    if($q->execute())
                    {
                        echo "<script>alert('Donor Registration Successfull')</script>";
                    }
                    else{
                        echo "<script>alert('Donor Registration fail')</script>";
                    }
                }
            ?>
            </div></center>     
        </div>
        <div id="footer"><h4 align="center">copyright@myproject</h4>
        <p  id="par"><a href="logout.php"> <font color="white">Logout</a></p>
    </div>

    </div>
    </div>
</body>
</html>