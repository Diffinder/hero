<?php require_once("includes/connection.php"); ?>
<?php
    $con = mysql_connect("localhost", "root", "");
    mysql_select_db("hero");
    if(!isset($_POST['status_update'])){
    $oid = $_GET['oid'];
    $query = "UPDATE vendor_order SET view_status='0' WHERE O_ID='$oid'";
    $query_result = mysql_query($query,$con)
    or die("Invalid query: " . mysql_error());
    $query = "SELECT * FROM vendor_order WHERE O_ID='$oid'";
    $query_result = mysql_query($query,$con)
    or die("Invalid query: " . mysql_error());
    $O_row=" ";
    while ($rw1 = mysql_fetch_array($query_result)) {

    $O_row.="<select class='form-control'  id='status' disabled>";                         
    $O_row.="<option>";
    $O_row.="$rw1[order_status]";
    $O_row.="Check";
    $O_row.="</option>";
    $O_row.="</select>";
    }  
    }
    
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
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-tasks"></i>
                                <span class="label label-warning">10</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have  notifications</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-people info"></i> 5 new members joined today
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-warning danger"></i> Very long description here that may not fit into the page and may cause design problems
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users warning"></i> 5 new members joined
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-cart success"></i> 25 sales made
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-person danger"></i> You changed your username
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">View all</a></li>
                            </ul>
                        </li>
                       
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>Satheesh <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="img/avatar3.png" class="img-circle" alt="User Image" />
                                    <p>
                                        Rishi Motors - Hero
                                        <small>Thubarahalli, Whitefield</small>
                                    </p>
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
                            <p>Hello, Satheesh</p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a href="vendor_index.php">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="calendar.php">
                                <i class="fa fa-calendar"></i> <span>Calendar</span>
                                <small class="badge pull-right bg-red">3</small>
                            </a>
                        </li>
                        <li>
                            <a href="../mailbox.html">
                                <i class="fa fa-envelope"></i> <span>Mailbox</span>
                                <small class="badge pull-right bg-yellow">12</small>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-folder"></i> <span>Others</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../examples/invoice.html"><i class="fa fa-angle-double-right"></i> Invoice</a></li>
                                <li><a href="../examples/login.html"><i class="fa fa-angle-double-right"></i> Login</a></li>
                                <li><a href="../examples/register.html"><i class="fa fa-angle-double-right"></i> Register</a></li>
                                <li><a href="../examples/lockscreen.html"><i class="fa fa-angle-double-right"></i> Lockscreen</a></li>
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
                        Rishi Motors
                        <small>Customer Orders</small>
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
                            
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Order Details of Rakesh   </h3>
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
                                                XYZ Details
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>1.</td>
                                            <td>Customer ID</td>
                                            <td>
                                                XYZ Details
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>1.</td>
                                            <td>Customer Name</td>
                                            <td>
                                                XYZ Details
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>1.</td>
                                            <td>Ordered On</td>
                                            <td>
                                                XYZ Details
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>1.</td>
                                            <td>Service Type</td>
                                            <td>
                                                XYZ Details
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>1.</td>
                                            <td>Service Mode</td>
                                            <td>
                                                XYZ Details
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>1.</td>
                                            <td>Service</td>
                                            <td>
                                                XYZ Details
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>1.</td>
                                            <td>Customer Deadline</td>
                                            <td>
                                                XYZ Details
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>1.</td>
                                            <td>Request Detail</td>
                                            <td>
                                                XYZ Details
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>1.</td>
                                            <td>Address</td>
                                            <td>
                                                XYZ Details Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>1.</td>
                                            <td>Other  Info</td>
                                            <td>
                                                XYZ Details
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>1.</td>
                                            <td>Mobile No.</td>
                                            <td>
                                                XYZ Details
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>1.</td>
                                            <td>e-mail ID</td>
                                            <td>
                                                XYZ Details
                                            </td>
                                            <td></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>1.</td>
                                            <td>Order ID</td>
                                            <td>
                                                XYZ Details
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>1.</td>
                                            <td>Status</td>
                                            <form >
                                            <td>
                                            
                                            
                                            <div >
                                            </div>
                                            <select class="form-control" id="status_upd" action="vendor_detail.php" method="POST" name="status" style="display:none;">
                                                <option selected>option 1</option>
                                                <option>option 2</option>
                                                <option>option 3</option>
                                                <option>option 4</option>
                                                <option>option 5</option>
                                            </select>
                                            </td>
                                            <td><span class="badge bg-red" onclick="status_update();" style="cursor:pointer;" id="status_edit">Edit</span><button class="badge bg-red" onclick="status_update();" style="cursor:pointer;display:none;" id="status_update" name="status_update" type="submit">Update</button></td>
                                            </form>
                                            
                                        </tr>
                                        <tr>
                                            <td>1.</td>
                                            <td>Delivery Time</td><td>
                                            <div>
                                            <input type="datetime-local" class="form-control " name="dd" id="dd_" placeholder="27/07/2014" style="display:none;">
                                            <input type="text" class="form-control " name="dd" id="dd_old" placeholder="27/07/2014" disabled>
                                            </div>
                                            </td>
                                            <td><span class="badge bg-red" onclick="dd_update();" style="cursor:pointer;" id="dd_edit">Edit</span><span class="badge bg-red" onclick="dd_update();" style="cursor:pointer;display:none;" id="dd_update">Update</span></td>
                                        </tr>
                                        <tr>
                                            <td>1.</td>
                                            <td>Price</td>
                                            <td>
                                                XYZ Details
                                            </td>
                                            <td><span class="badge bg-red">Edit</span></td>
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
        <script type="text/javascript">
           function status_update(){
            alert("blah");
            if(document.getElementById('status').disabled){
                document.getElementById('status').disabled=false;
            document.getElementById('status_edit').style.display="none";
            document.getElementById('status_upd').style.display="block";
            document.getElementById('status').style.display="none";
            document.getElementById('status_update').style.display="block";
            }
            else{
            document.getElementById('status').disabled=true;
            document.getElementById('status_edit').style.display="block";
            document.getElementById('status').style.display="block";
            document.getElementById('status_upd').style.display="none";
            document.getElementById('status_update').style.display="none";}
           }
           function dd_update(){
            alert("blah");
            if(document.getElementById('dd_old').disabled && document.getElementById('dd_').style.display=="none"){
                document.getElementById('dd_').style.display="block";
                document.getElementById('dd_old').style.display="none";
            document.getElementById('dd_edit').style.display="none";
            document.getElementById('dd_update').style.display="block";
            }
            else{
                document.getElementById('dd_').style.display="none";
                document.getElementById('dd_old').style.display="block";
            document.getElementById('dd_edit').style.display="block";
            document.getElementById('dd_update').style.display="none";}
           }
        </script>
    </body>
</html>
<?php   
  if(isset($_POST['status_update'])){
    print '<script type="text/javascript">';
print 'alert("Update added successfully")';
print '</script>'; 
  }
print '<script type="text/javascript">';
print 'alert("User added successfully")';
print '</script>'; 

?>
