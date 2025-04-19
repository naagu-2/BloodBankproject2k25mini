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
    <title>home</title>
<style>
    .full{
    width:100%;
    height: auto;
}
#inner_full{
    width: 80%;
    margin: auto;
    height: auto;
}
#header{
    width: 100%;
    height: 50px;
    /* background-color: red; */
    background-color:rgb(105,105,105);
    color: white;
    border-radius: 10px;

}
#body{
    width: 100%;
    height: 550px;
    border-radius: 10px;
    
    
    /* background-image:url(bag3.jpeg);  */
    /* background-color: #333; */
    /* background: transparent; */
    /* background-repeat: no-repeat; */
    /* background-repeat: no-repeat; */
    margin-top:20px
}
#footer{
    width: 100%;
    height: 70px;
    background-color: red;
    color: white;
    border-radius: 10px;
}
</style>
    
</head>
<body>
    <div class="full">
    <div id="inner_full">
        <div id="header"><h2 style="  margin-left:30% ;  margin-top:2% ;">BLOOD BANK MANAGEMENT SYSTEM</h2></div>
        <div id="body">
            <br><br><br><br><br>

            <form action="" method="post">
            <table align="center">

                <tr>
                    <td width="200px" height="70px" ><b>Enter username</b></td>
                    <td width="100px" height="70px"><input type="text" name="un" placeholder="Enter user name " style=" width:180px; height:30px; border-radius:10px;" ></td>
                </tr>
                <tr>
                <td width="200px" height="70px" ><b>Enter Password</b></td>
                <td width="200px" height="70px"><input type="text" name="ps" placeholder="Enter password " style=" width:180px; height:30px; border-radius:10px;"></td>
                </tr>
                <tr>
                        
                   <td> <input type="submit" name="sub" value="Login" style=" width:60px; height:30px; border-radius:3px;"></td>
                </tr>
            </table>

            </form>
            <?php
            if(isset($_POST['sub']))
            {
                 $un=$_POST['un'];
                 $ps=$_POST['ps'];
                 $q=$db->prepare("SELECT*FROM admin WHERE uname='$un' && pass='$ps'");
                 $q->execute();
                 $res=$q->fetchAll(PDO::FETCH_OBJ);
               if($res)
               {
                $_SESSION['un']=$un;
                // FOR CHROME @@@@@@ 
               // header("Location:../admin-home.php");
                //   FOR EDGE && MF @@@@@@@@
                header("Location:admin-home.php");
               }
               else{
               echo "<script>alert('wrong user')</script>";
               }
            }

            ?>

        </div>
        <div id="footer"><h4 align="center">copyright@myproject</h4>
    </div>

    </div>
    </div>
</body>
</html>