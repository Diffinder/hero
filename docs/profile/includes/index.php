<?php require_once("includes/connection.php"); ?>
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE | Dashboard</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
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
    </head>
    <body class="skin-blue" style="min-height:768px;">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="index.html" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                Hero Customer Care
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
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope"></i>
                                <span class="label label-success">1</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 1 message</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- start message -->
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="img/avatar3.png" class="img-circle" alt="User Image"/>
                                                </div>
                                                <h4>
                                                    Wanna Make it more Easy?
                                                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                </h4>
                                                <p>Why not you Register?</p>
                                            </a>
                                        </li><!-- end message -->
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">See All Messages</a></li>
                            </ul>
                        </li>
                      
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>Guest<i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="img/avatar3.png" class="img-circle" alt="User Image" />
                                    <p>
                                       Guest User
                                        <small>Hero Services</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Orders</a>
                                    </div>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-default btn-flat">Sign out</a>
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
                            <p>Hello, Guest</p>
                        </div>
                    </div>
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a href="index.html">
                                <i class="fa fa-dashboard"></i> <span>Order</span>
                            </a>
                        </li>
                        <li>
                            <a href="pages/mailbox.html">
                                <i class="fa fa-envelope"></i> <span>Contact Us</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-user"></i> <span>Register/Login</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="pages/examples/login.html"><i class="fa fa-angle-double-right"></i> Login</a></li>
                                <li><a href="pages/examples/register.html"><i class="fa fa-angle-double-right"></i> Register</a></li>
                                <li><a href="pages/examples/lockscreen.html"><i class="fa fa-angle-double-right"></i> Lockscreen</a></li>
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
                        Guest
                        <small>Order Details</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Guest Order</li>
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
                                    <h3 class="box-title">Order Details</h3>
                                </div><!-- /.box-header -->
                                <!-- form start -->
                                <form role="form" action ="index.php" method="POST">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label>Showroom  Branch</label>
                                            <select class="form-control" name="shwrum">
                                                <option>Rishi  Hero - Whitefield</option>
                                                <!-- <option>option 2</option>
                                                <option>option 3</option>
                                                <option>option 4</option>
                                                <option>option 5</option> -->
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Bike Model</label>
                                            <select class="form-control" name="bike">
                                                <option selected="true">--Select--</option>
                                                <option>KARIZMA ZMR</option>
                                                <option>KARIZMA</option>
                                                <option>XTREME</option>
                                                <option>HUNK</option>
                                                <option>IMPULSE</option>
                                                <option>ACHIEVER</option>
                                                <option>IGNITOR</option>
                                                <option>GLAMOUR PROGRAMMED FI</option>
                                                <option>GLAMOUR</option>
                                                <option>SUPER SPLENDOR</option>
                                                <option>MAESTRO</option>
                                                <option>PLEASURE</option>
                                                <option>PASSION XPRO</option>
                                                <option>PASSION PRO</option>
                                                <option>SPLENDOR ISMART</option>
                                                <option>SPLENDOR PRO(BLACK ALLOYS)</option>
                                                <option>SPLENDOR PRO</option>
                                                <option>SPLENDOR NXG</option>
                                                <option>SPLENDOR +</option>
                                                <option>HF DELUXE ECO</option>
                                                <option>HF DELUXE</option>
                                                <option>HF DAWN</option>
                                            </select>
                                        </div>
                                         <div class="form-group"> 
                                         <label style="float:left;">Service Type :</label>
                                            <div class="radio" style="float:left;margin-top: -1px;margin-left: 10px;">
                                                <label>
                                                    <input type="radio" name="serType" id="optionsRadios1" value="Free">Free
                                                </label>
                                            </div>
                                            <div class="radio" style="float: left;margin-left: 10px;margin-top: 0.25px;">
                                                <label>
                                                    <input type="radio" name="serType" id="optionsRadios2" value="Paid" checked>
                                                    Paid
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group" style="clear:both;">
                                            <label>Service Category</label>
                                            <select class="form-control" name="servicing">
                                                <option selected="true">--Select--</option>
                                                <option>Periodic Servicing</option>
                                                <option>Oil Servicing</option>
                                                <option>Water Servicing</option>
                                                <option>Repair</option>
                                                <option>Accessories</option>
                                            </select>
                                        </div>
                                          <div class="form-group" style="clear:both;">
                                            <label for="exampleInputPassword1">Request In-Detail</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1" name="reqDetail" placeholder="Brief your Request">
                                        </div>
                                         <div class="form-group">
                                            <label for="exampleInputPassword1">Mobile Number</label>
                                            <input type="text" class="form-control" name="phNum" id="exampleInputPassword1" placeholder="10 Digit Mobile Number">
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <textarea class="form-control" rows="3" name="addr" placeholder="Your Address Details"></textarea>
                                        </div>
                                         <!--  <div class="form-group">
                                        <label>Likely Servicing Date:</label>
                                        <div class="input-group" style="float:right;">
                                            <button class="btn btn-default pull-right" id="daterange-btn">
                                                <i class="fa fa-calendar"></i> Select Date Range
                                                <i class="fa fa-caret-down"></i>
                                            </button>
                                        </div>
                                         </div> -->
                                       <div class="form_elem">
                                        <label>Deadline Date&nbsp;:</label>
                                        <input type="datetime-local" class="form-control " name="dd" placeholder="27/07/2014" ></br>
                                        </div>
                                         
                                       
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Additional Info</label>
                                            <input type="text" class="form-control" name="addInfo" id="exampleInputPassword1" placeholder="Any other Info you would  like to share...">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Your Valid  email">
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="pickUp"> Need Home Pick-Up
                                            </label>
                                        </div>
                                    </div><!-- /.box-body -->

                                    <div class="box-footer">
                                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
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
                                                <img src="http://placehold.it/900x500/39CCCC/ffffff&text=I+Love+Hero" alt="First slide">
                                                <div class="carousel-caption">
                                                    First Slide
                                                </div>
                                            </div>
                                            <div class="item">
                                                <img src="http://placehold.it/900x500/3c8dbc/ffffff&text=I+Love+Hero" alt="Second slide">
                                                <div class="carousel-caption">
                                                    Second Slide
                                                </div>
                                            </div>
                                            <div class="item">
                                                <img src="http://placehold.it/900x500/f39c12/ffffff&text=I+Love+Hero" alt="Third slide">
                                                <div class="carousel-caption">
                                                    Third Slide
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
                                    <h3 class="box-title">Free Service</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <p>
                                        Your Bike will be Serviced for free for the first Six times after your Purchase. It is advisable for you to get servicing done for every 5000kms run of the bike.
                                    </p>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                               <div class="box box-solid box-info">
                                <div class="box-header">
                                    <h3 class="box-title">Home Pick-Up Service</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <p>
                                        Hero offers Home Pick-Up Service on charge basis with respect to the distance(in Kms) ranging from 0-15km on a charge range of (70-150 INR).
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

if(isset($_POST['submit']))
{

$ph = $_POST['phNum'];
$mail = $_POST['email'];
$sr = $_POST['shwrum'];
$b = $_POST['bike'];
$sc = $_POST['servicing'];
$rd = $_POST['reqDetail'];
$adr = $_POST['addr'];
$st = $_POST['serType'];
$ai = $_POST['addInfo'];
$dd = $_POST['dd'];
if (isset($_POST['pickUp'])) 
{ 
    $sm = "Home Pick Up";
}
else
    $sm = "NONE";
$con = mysql_connect("localhost", "root", "");
$query = "SELECT * FROM user WHERE contact = '$ph'";
$query_result = mysql_query($query,$con)
or die("Invalid query: " . mysql_error());
$num = mysql_num_rows($query_result);
if($num <= 0){
// COMMIT ADD
$sql = "INSERT INTO user(
user_name,
pwd,
contact,email)
VALUES
('GUEST',
'password',
'$ph',
'$mail'
)";
$result = mysql_query($sql)
or die("Invalid query: " . mysql_error());

$t = "GUEST_".$ph;
$add_usr = "CREATE TABLE $t(
O_ID int(100) NOT NULL AUTO_INCREMENT,
Showroom varchar(255) NOT NULL,
Bike varchar(255) NOT NULL,
ser_type varchar(255) NOT NULL,
ser_mode varchar(255) NOT NULL,
ser_cat varchar(255) NOT NULL,
order_time DATETIME NOT NULL,
req_detail varchar(255) NOT NULL,
dd DATETIME NOT NULL,
add_info varchar(255) NOT NULL,
email varchar(255) NOT NULL,
phone BIGINT(10) NOT NULL,
addr varchar(255) NOT NULL,
order_status varchar(255) NOT NULL,
PRIMARY KEY (O_ID)
)";


$results = mysql_query($add_usr) or die (mysql_error());

$t = "GUEST_".$ph;
    $sql = "INSERT INTO $t(Showroom,Bike,ser_cat,ser_type,order_time,req_detail,add_info,email,phone,addr,ser_mode,dd) VALUES('$sr','$b','$sc','$st',CURRENT_TIMESTAMP,'$rd','$ai','$mail','$ph','$adr','$sm','$dd')";
    $result = mysql_query($sql)
    or die("Invalid query: " . mysql_error());
}
else
{
    $t = "GUEST_".$ph;
    $sql = "INSERT INTO $t(Showroom,Bike,ser_cat,ser_type,order_time,req_detail,add_info,email,phone,addr,ser_mode,dd) VALUES('$sr','$b','$sc','$st',CURRENT_TIMESTAMP,'$rd','$ai','$mail','$ph','$adr','$sm','$dd')";
    $result = mysql_query($sql)
    or die("Invalid query: " . mysql_error());
}


print '<script type="text/javascript">';
print 'alert("User added successfully")';
print '</script>'; 
}
?>