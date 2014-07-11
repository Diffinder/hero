<?php 
session_start();
?>
<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title>Hero | Log in</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
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
            <div class="header">Sign In</div>
            <form action="login.php" method="post">
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
                    
                    <p><a href="#">I forgot my password</a></p>
                    
                    <a href="register.html" class="text-center">Register a new membership</a>
                </div>
            </form>

            <div class="margin text-center">
                <span>Sign in using social networks</span>
                <br/>
                <button class="btn bg-light-blue btn-circle"><i class="fa fa-facebook"></i></button>
                <button class="btn bg-aqua btn-circle"><i class="fa fa-twitter"></i></button>
                <button class="btn bg-red btn-circle"><i class="fa fa-google-plus"></i></button>

            </div>
        </div>


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>        

    </body>
</html>
<?php
if(isset($_POST['signIN'])){
     $con = mysql_connect("localhost", "root", "abc");
mysql_select_db("hero");
$uid = $_POST['userid'];
$query = "SELECT * FROM user WHERE contact='$uid'";
$query_result = mysql_query($query)
or die("Invalid query: " . mysql_error());
$pwd = $_POST['password'];
$rw1 = mysql_fetch_array($query_result);
if (!session_id()) session_start();
if($rw1['contact'] == $uid && $rw1['pwd'] == $pwd)
{
        $_SESSION['userid']=$uid;
        //added
        $_SESSION['name']=$rw1['user_name'];
     header("location:user_profile.php");

}
$num = mysql_num_rows($query_result);
/*if($num<=0){
unset($_SESSION['auth']);

session_destroy();
$HTML =<<< HTML

<script type="text/javascript">
window.location.replace("http://localhost/hero/docs/profile/user_profile.php");
</script>

HTML;
print $HTML;
}
else{
    print '<script type="text/javascript">';
print 'alert("User added successfully")';
print '</script>'; 
}*/
}
?>
