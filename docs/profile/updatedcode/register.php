<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title>New User | Registration Page</title>
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
            <div class="header">Register New Membership</div>
            <form role="form" action ="register.php" method="POST">
                <div class="body bg-gray">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Full name"/>
                    </div>
		    <div class="form-group">
                        <input type="text" name="phone" class="form-control" placeholder="Phone Number"/>
                    </div>
		    <div class="form-group">
                        <input type="text" name="addr" class="form-control" placeholder="Address"/>
                    </div>
                    
		    <div class="form-group">
                        <input type="text" name="email" class="form-control" placeholder="Email Id"/>
                    </div>
                     <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password"/>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password2" class="form-control" placeholder="Retype password"/>
                    </div>
                </div>
                <div class="footer">                    

                    <button type="submit" name="submit" class="btn bg-olive btn-block">Sign me up</button>

                    <a href="login.php" class="text-center">I already have a membership</a>
                </div>
            </form>

        </div>


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="../../js/bootstrap.min.js" type="text/javascript"></script>

    </body>
</html>
<?php

function debug_to_console( $data ) {

    if ( is_array( $data ) )
        $output = "<script>console.log( 'Debug Objects: " . implode( ',', $data) . "' );</script>";
    else
        $output = "<script>console.log( 'Debug Objects: " . $data . "' );</script>";

    echo $output;
}

if(isset($_POST['submit']))
{

$ph = $_POST['phone'];
$mail = $_POST['email'];
$name = $_POST['name'];
$addr = $_POST['addr'];
$p = $_POST['password'];
$p2 = $_POST['password2'];

$con = mysql_connect("localhost", "root", "abc");
mysql_select_db("hero");
$fail=0;
if($ph<999999999 or $ph>9999999999){
$fail=1;
print '<script type="text/javascript">alert("Enter a valid Number");</script>';
}

if($p!=$p2){
$fail=1;
print '<script type="text/javascript">alert("Passwords don\'t match");</script>';
}

if($fail==0){
$sql="INSERT INTO user(
user_name,
pwd,
contact,email,add_info)
VALUES
('$name',
'$p',
'$ph',
'$mail',
'$addr'
)";
$result = mysql_query($sql)
or die("Invalid query: " . mysql_error());
print '<script type="text/javascript">';
print 'alert("User added successfully")';
print '</script>'; 
}
}
?>
