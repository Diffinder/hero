<?php 
session_start();
?>
<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title>Rishi Motors - Hero</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
                <link rel="shortcut icon" href="img/icons/favicon.ico" type="image/x-icon">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="bg-black">

        <div class="form-box" id="login-box">
            <div class="header">Admin Sign In</div>
            <form action="login_vendor.php" method="post">
                <div class="body bg-gray">
                    <div class="form-group">
                        <input type="text" name="userid" class="form-control" placeholder="User ID"/>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password"/>
                    </div>          
                    <div class="form-group">
                        <input type="checkbox" name="remember_me"/> Remember me
                    </div>
                </div>
                <div class="footer">                                                               
                    <button type="submit" class="btn bg-olive btn-block" name="signIN">Sign me in</button>  
                    
                  
                </div>
            </form>

            
        </div>


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>        

    </body>
</html>
<?php
if(isset($_POST['signIN'])){
$uid = $_POST['userid'];
$pwd = $_POST['password'];


if (!session_id()) session_start();
if ($uid=='admin' and $pwd=='admin123') 
{
    $_SESSION['userid']=$uid;
     header("location:vendor_index.php");

}
//added code
elseif($pwd=="" and $uid==""){
$msg="Please enter the Username and Password";
}
elseif($pwd=="")
{
$msg="Please enter the Password";
}
elseif($uid==""){
$msg="Please enter the Username";
}

else{
$msg="Invalid credentials !!";
}
print '<script type="text/javascript">';
print 'alert("'.$msg.'")';
print '</script>'; 



}
?>
