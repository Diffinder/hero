<?php require_once("includes/connection.php"); ?>

<?php
if (!session_id()) session_start();
if(isset($_SESSION['userid']))
$uid=$_SESSION['userid'];
//added and changed wherever you find "$uname"
$uname=$_SESSION['name'];

$con = mysql_connect("localhost", "root", "");
mysql_select_db("hero");
$query1 = "SELECT * FROM user WHERE user_name='$uname'";
    $query1_result = mysql_query($query1,$con)
    or die("Invalid query: " . mysql_error());
    $rw1 = mysql_fetch_array($query1_result);
    $ph = $rw1['contact'];
    $email = $rw1['email'];
    $addr = $rw1['add_info'];
?>

    <head>
        <meta charset="UTF-8">
        <title>Rishi Motors - Hero</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
                <link rel="shortcut icon" href="img/icons/favicon.ico" type="image/x-icon">
        <!-- Morris chart -->
        <link href="css/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- fullCalendar -->
        <link href="css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />
                <link href="css/timepicker/bootstrap-timepicker.min.css" rel="stylesheet"/>
            <link href="css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
	<!-- Error style Added -->
	<style>
	.error {color: #FF0000;}
	</style>
    </head>
    <body class="skin-blue" style="min-height:768px;">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="#" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                Rishi Motors 
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                       <!--  -->
                      
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span><?php echo $uname;?><i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="img/avatar3.png" class="img-circle" alt="User Image" />
                                    <p>
                                       <?php echo $uname;?>
                                        <small>Rishi Motor Services</small><!-- Changed -->
                                    </p>
                                </li>
                                <!-- Menu Body -->
                              <li class="user-body">
                                    <div class="col-xs-4 text-center">
                                        <a href="user_profile.php">Orders</a>
                                    </div>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="edit_profile.php" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="img/avatar3.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hello, <?php echo $uname;?></p>
                        </div>
                    </div>
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a href="login_index.php">
                                <i class="fa fa-dashboard"></i> <span>Order</span>
                            </a>
                        </li>
                        <li>
                            <a href="http://rishihero.heromotocorpdealers.com/HMC/contact_us.aspx"><!-- Changed -->
                                <i class="fa fa-envelope"></i> <span>Contact Us</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-user"></i> <span>Register/Login</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="login.php"><i class="fa fa-angle-double-right"></i> Login</a></li><!-- Changed -->
                                <li><a href="register.php"><i class="fa fa-angle-double-right"></i> Register</a></li><!-- Changed -->
                            </ul>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        <?php echo $uname;?>
                        <small>Profile Details</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Edit Profile</li>
                    </ol>
                </section>

                <!-- Main content -->
                 <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-6">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Edit Profile Details</h3>
                                </div><!-- /.box-header -->
                                <!-- form start -->
                                <form role="form" action ="edit_profile.php" method="POST">
                                    <div class="box-body">
                                      
                                            <a href="#" onclick="getBox();">Update Password</a>
                                            <div id="activity_name"></div>
                                            <script type="text/javascript">
                                            function getBox() { // Call to ajax function
                                                //var prjct_name = $('#prjct_name').val();
                                                var dataString = "prjct_name";
                                                $.ajax({
                                                    type: "POST",
                                                    url: "update.php", // Name of the php files
                                                    data: dataString,
                                                    success: function(html)
                                                    {
                                                        $("#activity_name").html(html);
                                                    }
                                                });
                                            }
                                            </script>
                                    </div><!-- /.box-body -->
                                    
                                </form>
                            </div><!-- /.box -->
                             <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Order Details of   - </h3>
                                </div><!-- /.box-header -->
                                <div class="box-body no-padding">

                                    <table class="table table-striped table-bordered">
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th style="width: 200px">Index</th>
                                            <th>Details</th>
                                            <th>Action</th>
                                          
                                        </tr>
                                        <tr>
                                            <td>1.</td>
                                            <td>Mobile</td>
                                            <td id="ph_upd">
                                                <?php  echo $ph; ?>
                                            </td>
                                            <td><a style="cursor:pointer;" href="#" onclick="getph();">Update</a></td>
                                            <script type="text/javascript">
                                            function getph() { 
                                                var dataString = "prjct_name";
                                                $.ajax({
                                                    type: "POST",
                                                    url: "update_ph.php", // Name of the php files
                                                    data: dataString,
                                                    success: function(html)
                                                    {
                                                        $("#ph_upd").html(html);
                                                    }
                                                });
                                            }
                                            </script>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>E-mail</td>
                                            <td id="mail_upd">
                                                <?php  echo $email; ?>
                                            </td>
                                            <td><a style="cursor:pointer;" href="#" onclick="getmail();">Update</a></td>
                                            <script type="text/javascript">
                                            function getmail() { // Call to ajax function
                                                //var prjct_name = $('#prjct_name').val();
                                                var dataString = "prjct_name";
                                                $.ajax({
                                                    type: "POST",
                                                    url: "update_mail.php", // Name of the php files
                                                    data: dataString,
                                                    success: function(html)
                                                    {
                                                        $("#mail_upd").html(html);
                                                    }
                                                });
                                            }
                                            </script>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Address</td>
                                            <td id="addr_upd">
                                                <?php  echo $addr; ?>
                                            </td>
                                              <td><a style="cursor:pointer;" href="#" onclick="getaddr();">Update</a></td>
                                            <script type="text/javascript">
                                            function getaddr() { // Call to ajax function
                                                //var prjct_name = $('#prjct_name').val();
                                                var dataString = "prjct_name";
                                                $.ajax({
                                                    type: "POST",
                                                    url: "update_addr.php", // Name of the php files
                                                    data: dataString,
                                                    success: function(html)
                                                    {
                                                        $("#addr_upd").html(html);
                                                    }
                                                });
                                            }
                                            </script>
                                        </tr>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                            </div>
                   
                            <div class="col-md-6">
                            <!-- general form elements disabled -->
                            <div class="box box-primary">
                              <div class="box box-solid">
                                <div class="box-header">
                                    <h3 class="box-title">Info Details</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="item active">
                                                <img src="../../img/hero_cover.jpg" alt="First slide"  style="width:600px;height:300px;"><!-- Changed -->
                                                <div class="carousel-caption">
                                                    <h4 style="color: #Fff;">Welcome</h4><!-- Changed -->
                                                </div>
                                            </div>
                                            <div class="item">
                                                <img src="../../img/goodlife.jpg" alt="Second slide" style="width:600px;height:300px;"><!-- Changed -->
                                                <div class="carousel-caption">
                                                    <h4 style="color: #Fff;">Hero's GoodLife</h4><!-- Changed -->
                                                </div>
                                            </div>
                                            <div class="item">
                                                <img src="../../img/hero_latest3.jpg" alt="Third slide" style="width:600px;height:300px;"><!-- Changed -->
                                                <div class="carousel-caption">
                                                   <h4 style="color: #Fff;"> What's New ?</h4><!-- Changed -->
                                                </div>
                                            </div>
                                             <div class="item">
                                                <img src="../../img/hero_cover1.jpg" alt="Third slide" style="width:600px;height:300px;"><!-- Changed -->
                                                <div class="carousel-caption">
                                                   <h4 style="color: #Fff;"> What's New ?</h4><!-- Changed -->
                                                </div>
                                            </div>
                                        </div>
                                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left"></span>
                                        </a>
                                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right"></span>
                                        </a>
                                    </div>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                            <!-- Info box -->
                            <div class="box box-solid box-info">
                                <div class="box-header">
                                    <h3 class="box-title">Home Pick-Up Service</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <p><!-- Changed -->
                                        Rishi Motors offers Home Pick-Up Service on charge basis with respect to the distance(in Kms) ranging from 0-15km on a charge range of (70-150 INR).
                                    </p>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                            <div class="box box-solid box-info">
                                <div class="box-header">
                                    <h3 class="box-title">Hero's GoodLife Program</h3><!-- Changed -->
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <p><!-- Changed -->
                                       The Hero MotoCorp GoodLife Program is designed to compliment your good life in every way. It brings you an easy to use privilege card packed with special rewards and benefits. And it doesn’t end here. It also provides you with a free riders’ insurance worth 1 Lakh to ensure your peace of mind. What’s more, your Hero MotoCorp GoodLife Program membership rewards you with points on all your spends. So make the best use of your card and redeem your points for fabulous rewards!
                                        <br>For More details, visit <a href="http://goodlife.heromotocorp.com/goodlife_main.aspx" style="text-decoration:underline">GoodLife - Hero</a>
                                    </p>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                               
                              <div class="box box-solid box-info">
                                <div class="box-header">
                                    <h3 class="box-title">Hero Login</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <p>
                                        Your Order ID will be sent to your mobile ,once you submit the Order request.Please Login with your Mobile number as the Login ID and Order ID as the Password(Intial Login). Change your password once you login for the first time. </br>Hurray! Your Registration is Done &nbsp;:-) </br>Next time onwards, you can place the service order from your profile directly.
                                    </p>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->

                                    </form>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!--/.col (right) -->
                    </div>
                   </section>     
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Morris.js charts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="js/plugins/morris/morris.min.js" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
        <script src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <!-- fullCalendar -->
        <script src="js/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>

        <!-- AdminLTE App -->
        <script src="js/AdminLTE/app.js" type="text/javascript"></script>
        
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="js/AdminLTE/dashboard.js" type="text/javascript"></script>     
        
    
    </body>
<?php

function debug_to_console( $data ) {

    if ( is_array( $data ) )
        $output = "<script>console.log( 'Debug Objects: " . implode( ',', $data) . "' );</script>";
    else
        $output = "<script>console.log( 'Debug Objects: " . $data . "' );</script>";

    echo $output;
}
if(isset($_POST['submit_ph']))
{
    $ph = $_POST['update'];
    if($ph<999999999 or $ph>9999999999){
$fail=1;
print '<script type="text/javascript">document.getElementById("ph_upd").innerHTML=" *Enter a valid Number";</script>';  
}
    else{
        $sql1 = "UPDATE user SET contact = '$ph' WHERE user_name = '$uname'";
        $result = mysql_query($sql1)
        or die("Invalid query: " . mysql_error());
        $HTML =<<< HTML

<script type="text/javascript">
window.location.replace("http://localhost/hero/docs/profile/edit_profile.php");
</script>

HTML;
print $HTML;
    }
}
if(isset($_POST['submit_mail']))
{
    $mail = $_POST['update'];
        $sql1 = "UPDATE user SET email = '$mail' WHERE user_name = '$uname'";
        $result = mysql_query($sql1)
        or die("Invalid query: " . mysql_error());
        $HTML =<<< HTML

<script type="text/javascript">
window.location.replace("http://localhost/hero/docs/profile/edit_profile.php");
</script>

HTML;
print $HTML;
}
if(isset($_POST['submit_addr']))
{
    $addr = $_POST['update'];
        $sql1 = "UPDATE user SET add_info = '$addr' WHERE user_name = '$uname'";
        $result = mysql_query($sql1)
        or die("Invalid query: " . mysql_error());
        $HTML =<<< HTML

<script type="text/javascript">
window.location.replace("http://localhost/hero/docs/profile/edit_profile.php");
</script>

HTML;
print $HTML;
}
if(isset($_POST['submit_pwd']))
{
    $pwd = $_POST['update'];
        $sql1 = "UPDATE user SET pwd = '$pwd' WHERE user_name = '$uname'";
        $result = mysql_query($sql1)
        or die("Invalid query: " . mysql_error());
print '<script type="text/javascript">';
print 'alert("Password Updated successfully")';
print '</script>'; 

}
?>
