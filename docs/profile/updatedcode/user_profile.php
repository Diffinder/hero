<?php require_once("includes/connection.php"); ?>

<?php
if (!session_id()) session_start();
if(isset($_SESSION['userid']))
$uid=$_SESSION['userid'];
//added and changed wherever you find "$uname"
$uname=$_SESSION['name'];
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE | Data Tables</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- DATA TABLES -->
        <link href="css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <script src="js/jquery.reveal.js"></script>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <?php
    if(isset($_POST['submit_order'])){
        $oid = $_POST['orderID'];
        $con = mysql_connect("localhost", "root", "abc");
    mysql_select_db("hero");
    $query1 = "SELECT * FROM vendor_order WHERE O_ID='$oid'";
    $query3 = "SELECT service_price FROM price WHERE O_ID='$oid'";
    $query1_result = mysql_query($query1,$con)
    or die("Invalid query: " . mysql_error());
    $query3_result = mysql_query($query3,$con)
    or die("Invalid query: " . mysql_error());
    $rw1 = mysql_fetch_array($query1_result);

    $dd_vendor = $rw1['order_dd'];
    $custID = $rw1['CustID'];
    $Otime = $rw1['order_time'];
    $st = $rw1['ser_type'];
    $sm = $rw1['ser_mode'];
    $sc = $rw1['ser_cat'];
    $cdd = $rw1['dd'];
    $rd = $rw1['req_detail'];
    $addr = $rw1['addr'];
    $addInfo = $rw1['add_info'];
    $phone = $rw1['phone'];
    $email = $rw1['email'];
    $os = $rw1['order_status'];
    $ddd = $rw1['dd'];
    $rw3 = mysql_fetch_array($query3_result);
    $price = $rw3['service_price'];  
    }
   /* $con = mysql_connect("localhost", "root", "abc");
mysql_select_db("hero");
$uid = $_GET['userid'];
$query = "SELECT * FROM vendor_order WHERE phone='$uid' ORDER BY O_ID DESC";
$query_result = mysql_query($query)
or die("Invalid query: " . mysql_error());
$pwd = $_GET['password'];
$query = "SELECT * FROM user WHERE user_name='$uid' and pwd='$pwd'";
$query_result = mysql_query($query,$con)
or die("Invalid query: " . mysql_error());
$num = mysql_num_rows($query_result);
if($num<=0){
unset($_SESSION['auth']);

session_destroy();
$HTML =<<< HTML

<script type="text/javascript">
window.location.replace("http://localhost/hero/docs/profile/user_profile.php");
</script>

HTML;
print $HTML;
}*/
else{
$con = mysql_connect("localhost", "root", "abc");
    mysql_select_db("hero");
    $query1 = "SELECT * FROM vendor_order WHERE phone='$uid' ORDER BY O_ID DESC";
    $query1_result = mysql_query($query1,$con)
    or die("Invalid query: " . mysql_error());
        $rw1 = mysql_fetch_array($query1_result);
    $dd_vendor = $rw1['order_dd'];
    $custID = $rw1['CustID'];
    $Otime = $rw1['order_time'];
    $st = $rw1['ser_type'];
    $sm = $rw1['ser_mode'];
    $sc = $rw1['ser_cat'];
    $cdd = $rw1['dd'];
    $rd = $rw1['req_detail'];
    $addr = $rw1['addr'];
    $addInfo = $rw1['add_info'];
    $phone = $rw1['phone'];
    $email = $rw1['email'];
    $os = $rw1['order_status'];
    $ddd = $rw1['dd'];
    $oid = $rw1['O_ID'];
    $query3 = "SELECT service_price FROM price WHERE O_ID='$oid'";

    $query3_result = mysql_query($query3,$con)
    or die("Invalid query: " . mysql_error());



    $rw3 = mysql_fetch_array($query3_result);
    $price = $rw3['service_price'];  
}
    ?>
    <body class="skin-blue">
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
                                                    Hero Customer Care
                                                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                </h4>
                                                <p>You have got a final Mail</p>
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
                                <span><?php echo $uname;?> <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="img/avatar3.png" class="img-circle" alt="User Image" />
                                    <p>
                                    <?php echo $uname;?> User
                                        <small>Hero Services</small>
                                    </p>
                                </li>
                            
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
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

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                  <ul class="sidebar-menu">
                        <li >
                            <a href="login_index.php">
                                <i class="fa fa-dashboard"></i> <span>Order</span>
                            </a>
                        </li>
                         <li  class="active">
                            <a href="user_profile.php">
                                <i class="fa fa-magnet"></i> <span>Order Status</span>
                            </a>
                        </li>
                        <li>
                            <a href="pages/mailbox.html">
                                <i class="fa fa-envelope"></i> <span>Contact Us</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-user"></i> <span>Profile</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="pages/examples/login.html"><i class="fa fa-angle-double-right"></i> Order History</a></li>
                                <li><a href="pages/examples/register.html"><i class="fa fa-angle-double-right"></i> Feedback</a></li>
                                <li><a href="pages/examples/lockscreen.html"><i class="fa fa-angle-double-right"></i>Edit Profile</a></li>
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
                        <small>Order Details</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Hero Customer Care</a></li>
                        <li><a href="#">Dashboard</a></li>
                        <li class="active">Customer Order Details</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">    
                            <form action="user_profile.php?userid=<?php echo $uname?>" method="POST">                        
                           <select class="form-control" id="status_upd"  name="orderID" style="width:30%;text-align: center;
                                margin-top: -5px;float: left;">
                                <?php

                                $query = "SELECT * FROM vendor_order WHERE phone='$uid' ORDER BY O_ID DESC";
                                $query_result = mysql_query($query)
                                or die("Invalid query: " . mysql_error());
                                while($values = mysql_fetch_array($query_result))
                                {
                                    ?>
                                        <option value="<?php echo $values['O_ID']; ?>"> <?php echo($values['O_ID']); ?> </option>
                                    <?php
                                }
                                ?>
                          </select>
                            <button type="submit" name="submit_order" style="margin-left:10px;margin-bottom: 10px;" class="btn btn-primary btn-sm">View Order Status/Details</button>
                            </form>
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Order Details of   - <?php echo $uname; if(isset($_POST['submit_order'])){echo $oid;} ?></h3>
                                </div><!-- /.box-header -->
                                <div class="box-body no-padding">

                                    <table class="table table-striped table-bordered">
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th style="width: 200px">Index</th>
                                            <th>Details</th>
                                            <th style="width: 40px">Action</th>
                                        </tr>
                                        <tr>
                                            <td>1.</td>
                                            <td>Order ID</td>
                                            <td>
                                                <?php  echo $oid ?>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Customer ID</td>
                                            <td>
                                                <?php  echo $custID ?>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Customer Name</td>
                                            <td>
                                                <?php  echo $custID ?>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Ordered On</td>
                                            <td>
                                                 <?php  echo $Otime ?>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>Service Type</td>
                                            <td>
                                                <?php  echo $st ?>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>6.</td>
                                            <td>Service Mode</td>
                                            <td>
                                                <?php  echo $sm ?>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>7.</td>
                                            <td>Service</td>
                                            <td>
                                                <?php  echo $sc ?>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>8.</td>
                                            <td>Customer Deadline</td>
                                            <td>
                                                <?php  echo $cdd ?>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>9.</td>
                                            <td>Request Detail</td>
                                            <td>
                                                <?php  echo $rd ?>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>10.</td>
                                            <td>Address</td>
                                            <td>
                                            <?php  echo $addr ?>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>11.</td>
                                            <td>Other  Info</td>
                                            <td>
                                                <?php  echo $addInfo ?>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>12.</td>
                                            <td>Mobile No.</td>
                                            <td>
                                                <?php  echo $phone ?>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>13.</td>
                                            <td>e-mail ID</td>
                                            <td>
                                                <?php  echo $email ?>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>14.</td>
                                            <td>Status</td>
                                            <td>
                                                <?php  echo $os ?>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>15.</td>
                                            <td>Delivery Time</td><td>
                                            <?php  echo $ddd ?>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>16.</td>
                                            <td>Service Price</td><td>
                                            <?php  echo $price ?>
                                            </td>
                                            <td></td>
                                        </tr>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <!-- DATA TABES SCRIPT -->
        <script src="js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="js/AdminLTE/app.js" type="text/javascript"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="js/AdminLTE/demo.js" type="text/javascript"></script>
        <!-- page script -->
        <script type="text/javascript">
            $(function() {
                $("#example1").dataTable();
                $('#example2').dataTable({
                    "bPaginate": true,
                    "bLengthChange": false,
                    "bFilter": false,
                    "bSort": true,
                    "bInfo": true,
                    "bAutoWidth": false
                });
            });
        </script>
    </body>
</html>
<?php   

print '<script type="text/javascript">';
print 'alert("User added successfully")';
print '</script>'; 

?>
