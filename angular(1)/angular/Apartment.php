<?php
session_start();
date_default_timezone_set("Africa/Cairo");
/*
if(!isset($_SERVER['HTTP_REFERER'])){
// redirect them to your desired location
header('location: destroy.php');
exit;

}*/


if(!isset($_SESSION['logindata']))
{
 header('location: destroy.php');
exit;

}


// 10 mins in seconds
$inactive = 2700;
if( !isset($_SESSION['timeout']) )
$_SESSION['timeout'] = time() + $inactive;

$session_life = time() - $_SESSION['timeout'];

if($session_life > $inactive)
{  session_destroy(); header("Location:destroy.php");     }

$_SESSION['timeout']=time();

?>

<?php
$seg= $_SESSION['logindata'];

$PhoneNumber =$_POST['PhoneNumber'];



$date=date("Y/m/d") ;
$time=date("h:i:sa") ;
$Response = $_POST['Response'];

$Note = $_POST['Note'];
$Note2 = $_POST['Note2'];

$FollowedBy =  $_POST['FollowedBy'];

$Req_Serial= $_POST['Req_Serial'];
$Apartment= $_POST['Apartment'];
$Response_Comment = $_POST['Response_Comment'];

$CallType  = $_POST['CallType'];

$CallStatus  = $_POST['CallStatus'];
$CallRank  = $_POST['CallRank'];
$FollowStatus  = $_POST['FollowStatus'];

$FollowSchedule  = $_POST['FollowSchedule'];

$Out1  = $_POST['Out1'];


$PhoneNumber1 =$_POST['PhoneNumber1'];



$date=date("Y/m/d") ;
$time=date("h:i:sa") ;
$Response = $_POST['Response'];




$Req_Serial= $_POST['Req_Serial'];
$Apartment= $_POST['Apartment'];
$Response_Comment = $_POST['Response_Comment'];


$localhost="localhost";
$user_db="estasm5_yousry";
$pass_db="4562008";
$db="estasm5_sales";


$connect=mysql_connect("$localhost","$user_db","$pass_db");
mysql_set_charset('utf8');
if ($connect) {
mysql_set_charset('utf8');
mysql_select_db($db) or die("db selction error ");


if($_POST['send']){

$sql2="INSERT INTO `customerfollow`(PhoneNumber,Reg_By,Time,Date,FollowedBy,CallType,CallStatus,CallRank,FollowStatus,FollowSchedule,Out1,Note) VALUES ('$PhoneNumber','$seg','$time','$date','$FollowedBy','$CallType','$CallStatus','$CallRank','$FollowStatus','$FollowSchedule','$Out1','$Note')";


mysql_query($sql2);


echo "<script type='text/javascript'>alert('Your data has been sent successfully! ');</script>";

}





if($_POST['send1']){

$sql3="INSERT INTO `requestfollow`(PhoneNumber,Reg_By,Time,Date,Req_Serial,Apartment,Response,Response_Comment,Note) VALUES ('$PhoneNumber1','$seg','$time','$date','$Req_Serial','$Apartment','$Response','$Response_Comment','$Note2')";


mysql_query($sql3);
$sql2="INSERT INTO `customerfollow`(PhoneNumber,Reg_By,Time,Date,FollowedBy,CallType,CallStatus,CallRank,FollowStatus,FollowSchedule,Out1,Note) VALUES ('$PhoneNumber','$seg','$time','$date','$FollowedBy','$CallType','$CallStatus','$CallRank','$FollowStatus','$FollowSchedule','$Out1','$Note')";
mysql_query($sql2);


echo "<script type='text/javascript'>alert('Your data has been sent successfully! ');</script>";

}





}else{

  mysql_error();
}



?>













<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- META SECTION -->
        <title>Joli Admin - Responsive Bootstrap Admin Template</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->

        <!-- CSS INCLUDE -->
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>

          <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>



        <!-- EOF CSS INCLUDE -->
    </head>
    <body>
          <!-- START PAGE CONTAINER -->



        <!-- aly 3la shmal -->
        <div class="page-container">

            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="index.php"><?php   session_start();
	echo "welcom ". $seg= $_SESSION['logindata']         ?></a>






                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-profile">
                        <a href="#" class="profile-mini">
                            <img src="assets/images/users/avatar.jpg" alt="John Doe"/>
                        </a>
                        <div class="profile">
                            <div class="profile-image">
                                <img src="assets/images/users/avatar.jpg" alt="John Doe"/>
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name">John Doe</div>
                                <div class="profile-data-title">Web Developer/Designer</div>
                            </div>
                            <div class="profile-controls">
                                <a href="pages-profile.html" class="profile-control-left"><span class="fa fa-info"></span></a>
                                <a href="pages-messages.html" class="profile-control-right"><span class="fa fa-envelope"></span></a>
                            </div>
                        </div>
                    </li>
                    <li class="xn-title">Navigation</li>
                    <li class="active">
                        <a href="index.html"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>
                    </li>

                    <!--<li class="xn-openable">
                        <a href="#"><span class="fa fa-files-o"></span> <span class="xn-text">Pages</span></a>
                        <ul>
                            <li><a href="pages-gallery.html"><span class="fa fa-image"></span> Gallery</a></li>
                            <li><a href="pages-profile.html"><span class="fa fa-user"></span> Profile</a></li>
                            <li><a href="pages-address-book.html"><span class="fa fa-users"></span> Address Book</a></li>
                            <li class="xn-openable">
                                <a href="#"><span class="fa fa-clock-o"></span> Timeline</a>
                                <ul>
                                    <li><a href="pages-timeline.html"><span class="fa fa-align-center"></span> Default</a></li>
                                    <li><a href="pages-timeline-simple.html"><span class="fa fa-align-justify"></span> Full Width</a></li>
                                </ul>
                            </li>
                            <li class="xn-openable">
                                <a href="#"><span class="fa fa-envelope"></span> Mailbox</a>
                                <ul>
                                    <li><a href="pages-mailbox-inbox.html"><span class="fa fa-inbox"></span> Inbox</a></li>
                                    <li><a href="pages-mailbox-message.html"><span class="fa fa-file-text"></span> Message</a></li>
                                    <li><a href="pages-mailbox-compose.html"><span class="fa fa-pencil"></span> Compose</a></li>
                                </ul>
                            </li>
                            <li><a href="pages-messages.html"><span class="fa fa-comments"></span> Messages</a></li>
                            <li><a href="pages-calendar.html"><span class="fa fa-calendar"></span> Calendar</a></li>
                            <li><a href="pages-tasks.html"><span class="fa fa-edit"></span> Tasks</a></li>
                            <li><a href="pages-content-table.html"><span class="fa fa-columns"></span> Content Table</a></li>
                            <li><a href="pages-faq.html"><span class="fa fa-question-circle"></span> FAQ</a></li>
                            <li><a href="pages-search.html"><span class="fa fa-search"></span> Search</a></li>
                            <li class="xn-openable">
                                <a href="#"><span class="fa fa-file"></span> Blog</a>

                                <ul>
                                    <li><a href="pages-blog-list.html"><span class="fa fa-copy"></span> List of Posts</a></li>
                                    <li><a href="pages-blog-post.html"><span class="fa fa-file-o"></span>Single Post</a></li>
                                </ul>
                            </li>
                            <li class="xn-openable">
                                <a href="#"><span class="fa fa-sign-in"></span> Login</a>
                                <ul>
                                    <li><a href="pages-login.php">App Login</a></li>
                                    <li><a href="pages-login-website.html">Website Login</a></li>
                                    <li><a href="pages-login-website-light.html"> Website Login Light</a></li>
                                </ul>
                            </li>
                            <li class="xn-openable">
                                <a href="#"><span class="fa fa-warning"></span> Error Pages</a>
                                <ul>
                                    <li><a href="pages-error-404.html">Error 404 Sample 1</a></li>
                                    <li><a href="pages-error-404-2.html">Error 404 Sample 2</a></li>
                                    <li><a href="pages-error-500.html"> Error 500</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>-->
                   <!-- <li class="xn-openable">
                        <a href="#"><span class="fa fa-file-text-o"></span> <span class="xn-text">Layouts</span></a>
                        <ul>
                            <li><a href="layout-boxed.html">Boxed</a></li>
                            <li><a href="layout-nav-toggled.html">Navigation Toggled</a></li>
                            <li><a href="layout-nav-top.html">Navigation Top</a></li>
                            <li><a href="layout-nav-right.html">Navigation Right</a></li>
                            <li><a href="layout-nav-top-fixed.html">Top Navigation Fixed</a></li>
                            <li><a href="layout-nav-custom.html">Custom Navigation</a></li>
                            <li><a href="layout-frame-left.html">Frame Left Column</a></li>
                            <li><a href="layout-frame-right.html">Frame Right Column</a></li>
                            <li><a href="layout-search-left.html">Search Left Side</a></li>
                            <li><a href="blank.html">Blank Page</a></li>
                        </ul>
                    </li>
                    <li class="xn-title">Components</li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-cogs"></span> <span class="xn-text">UI Kits</span></a>
                        <ul>
                            <li><a href="ui-widgets.html"><span class="fa fa-heart"></span> Widgets</a></li>
                            <li><a href="ui-elements.html"><span class="fa fa-cogs"></span> Elements</a></li>
                            <li><a href="ui-buttons.html"><span class="fa fa-square-o"></span> Buttons</a></li>
                            <li><a href="ui-panels.html"><span class="fa fa-pencil-square-o"></span> Panels</a></li>
                            <li><a href="ui-icons.html"><span class="fa fa-magic"></span> Icons</a><div class="informer informer-warning">+679</div></li>
                            <li><a href="ui-typography.html"><span class="fa fa-pencil"></span> Typography</a></li>
                            <li><a href="ui-portlet.html"><span class="fa fa-th"></span> Portlet</a></li>
                            <li><a href="ui-sliders.html"><span class="fa fa-arrows-h"></span> Sliders</a></li>
                            <li><a href="ui-alerts-popups.html"><span class="fa fa-warning"></span> Alerts & Popups</a></li>
                            <li><a href="ui-lists.html"><span class="fa fa-list-ul"></span> Lists</a></li>
                            <li><a href="ui-tour.html"><span class="fa fa-random"></span> Tour</a></li>
                        </ul>
                    </li>
                    -->
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-pencil"></span> <span class="xn-text">Forms</span></a>
                        <ul>
                            <li>
                                <a href="form-layouts-two-column.html"><span class="fa fa-tasks"></span> Forms </a>
                                <div class="informer informer-danger">New</div>
                                <ul>
                                    <li><a href="form-layouts-one-column.php"><span class="fa fa-align-justify"></span> Customer</a></li>

                                     <li><a href="Customer_Calls.php"><span class="fa fa-align-justify"></span> Customer_Calls</a></li>

                                        <li><a href="request.php"><span class="fa fa-align-justify"></span> Request</a></li>

                                         <li><a href="woner.php"><span class="fa fa-align-justify"></span> Owners</a></li>

                                   <li><a href="Building.php"><span class="fa fa-download"></span> Building</a></li>


                                   <li><a href="customer-follow.php"><span class="fa fa-download"></span>Customer-Follow</a></li>


                                    <li><a href="form-layouts-tabbed.html"><span class="fa fa-table"></span> Tabbed</a></li>
                                    <li><a href="form-layouts-separated.html"><span class="fa fa-th-list"></span> Separated Rows</a></li>
                                </ul>
                            </li>
                            <li><a href="form-elements.html"><span class="fa fa-file-text-o"></span> Elements</a></li>
                            <li><a href="form-validation.html"><span class="fa fa-list-alt"></span> Validation</a></li>
                            <li><a href="form-wizards.html"><span class="fa fa-arrow-right"></span> Wizards</a></li>
                            <li><a href="form-editors.html"><span class="fa fa-text-width"></span> WYSIWYG Editors</a></li>
                            <li><a href="form-file-handling.html"><span class="fa fa-floppy-o"></span> File Handling</a></li>
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="tables.php"><span class="fa fa-table"></span> <span class="xn-text">Tables</span></a>
                        <ul>
                            <li><a href="table-basic.html"><span class="fa fa-align-justify"></span> Basic</a></li>
                            <li><a href="Customer-Calls.php"><span class="fa fa-sort-alpha-desc"></span>Customer-Calls</a></li>
                            <li><a href="table-export.php"><span class="fa fa-download"></span> Customer</a></li>

                             <li><a href="Building-show.php"><span class="fa fa-download"></span> Building</a></li>


                                <li><a href="request-show.php"><span class="fa fa-download"></span> Request</a></li>

                                  <li><a href="owner-show.php"><span class="fa fa-download"></span> Owner</a></li>
                                  <li><a href=" customer-follow-show.php"><span class="fa fa-download"></span>  customer-follow Show</a></li>

                                   <li><a href=" requestfollowshow.php"><span class="fa fa-download"></span>  Request Follow Show</a></li>







                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-bar-chart-o"></span> <span class="xn-text">Charts</span></a>
                        <ul>
                            <li><a href="charts-morris.html"><span class="xn-text">Morris</span></a></li>
                            <li><a href="charts-nvd3.html"><span class="xn-text">NVD3</span></a></li>
                            <li><a href="charts-rickshaw.html"><span class="xn-text">Rickshaw</span></a></li>
                            <li><a href="charts-other.html"><span class="xn-text">Other</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="maps.html"><span class="fa fa-map-marker"></span> <span class="xn-text">Maps</span></a>
                    </li>
                    <!--
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-sitemap"></span> <span class="xn-text">Navigation Levels</span></a>
                        <ul>
                            <li class="xn-openable">
                                <a href="#">Second Level</a>
                                <ul>
                                    <li class="xn-openable">
                                        <a href="#">Third Level</a>
                                        <ul>
                                            <li class="xn-openable">
                                                <a href="#">Fourth Level</a>
                                                <ul>
                                                    <li><a href="#">Fifth Level</a></li>-->
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->

            <div class="page-content">

                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->
                    <!-- SEARCH -->
                    <li class="xn-search">
                        <form role="form">
                            <input type="text" name="search" placeholder="Search..."/>
                        </form>
                    </li>
                    <!-- END SEARCH -->
                    <!-- SIGN OUT -->
                    <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>
                    </li>
                    <!-- END SIGN OUT -->
                    <!-- MESSAGES -->
                    <li class="xn-icon-button pull-right">
                        <a href="#"><span class="fa fa-comments"></span></a>
                        <div class="informer informer-danger">4</div>
                        <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="fa fa-comments"></span> Messages</h3>
                                <div class="pull-right">
                                    <span class="label label-danger">4 new</span>
                                </div>
                            </div>
                            <div class="panel-body list-group list-group-contacts scroll" style="height: 200px;">
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-online"></div>
                                    <img src="assets/images/users/user2.jpg" class="pull-left" alt="John Doe"/>
                                    <span class="contacts-title">John Doe</span>
                                    <p>Praesent placerat tellus id augue condimentum</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-away"></div>
                                    <img src="assets/images/users/user.jpg" class="pull-left" alt="Dmitry Ivaniuk"/>
                                    <span class="contacts-title">Dmitry Ivaniuk</span>
                                    <p>Donec risus sapien, sagittis et magna quis</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-away"></div>
                                    <img src="assets/images/users/user3.jpg" class="pull-left" alt="Nadia Ali"/>
                                    <span class="contacts-title">Nadia Ali</span>
                                    <p>Mauris vel eros ut nunc rhoncus cursus sed</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-offline"></div>
                                    <img src="assets/images/users/user6.jpg" class="pull-left" alt="Darth Vader"/>
                                    <span class="contacts-title">Darth Vader</span>
                                    <p>I want my money back!</p>
                                </a>
                            </div>
                            <div class="panel-footer text-center">
                                <a href="pages-messages.html">Show all messages</a>
                            </div>
                        </div>
                    </li>
                    <!-- END MESSAGES -->
                    <!-- TASKS -->
                    <li class="xn-icon-button pull-right">
                        <a href="#"><span class="fa fa-tasks"></span></a>
                        <div class="informer informer-warning">3</div>
                        <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="fa fa-tasks"></span> Tasks</h3>
                                <div class="pull-right">
                                    <span class="label label-warning">3 active</span>
                                </div>
                            </div>
                            <div class="panel-body list-group scroll" style="height: 200px;">
                                <a class="list-group-item" href="#">
                                    <strong>Phasellus augue arcu, elementum</strong>
                                    <div class="progress progress-small progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">50%</div>
                                    </div>
                                    <small class="text-muted">John Doe, 25 Sep 2014 / 50%</small>
                                </a>
                                <a class="list-group-item" href="#">
                                    <strong>Aenean ac cursus</strong>
                                    <div class="progress progress-small progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">80%</div>
                                    </div>
                                    <small class="text-muted">Dmitry Ivaniuk, 24 Sep 2014 / 80%</small>
                                </a>
                                <a class="list-group-item" href="#">
                                    <strong>Lorem ipsum dolor</strong>
                                    <div class="progress progress-small progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">95%</div>
                                    </div>
                                    <small class="text-muted">John Doe, 23 Sep 2014 / 95%</small>
                                </a>
                                <a class="list-group-item" href="#">
                                    <strong>Cras suscipit ac quam at tincidunt.</strong>
                                    <div class="progress progress-small">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">100%</div>
                                    </div>
                                    <small class="text-muted">John Doe, 21 Sep 2014 /</small><small class="text-success"> Done</small>
                                </a>
                            </div>
                            <div class="panel-footer text-center">
                                <a href="pages-tasks.html">Show all tasks</a>
                            </div>
                        </div>
                    </li>
                    <!-- END TASKS -->
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->

                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Forms Stuff</a></li>
                    <li><a href="#">Form Layout</a></li>
                    <li class="active">New Client</li>
                </ul>
                <!-- END BREADCRUMB -->

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">

                    <div class="row">
                        <div class="col-md-12">

                            <form class="form-horizontal" method="post" action='Building.php' >
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Request/</strong> Form</h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                                <div class="panel-body">
                                    <p>This is non libero bibendum, scelerisque arcu id, placerat nunc. Integer ullamcorper rutrum dui eget porta. Fusce enim dui, pulvinar a augue nec, dapibus hendrerit mauris. Praesent efficitur, elit non convallis faucibus, enim sapien suscipit mi, sit amet fringilla felis arcu id sem. Phasellus semper felis in odio convallis, et venenatis nisl posuere. Morbi non aliquet magna, a consectetur risus. Vivamus quis tellus eros. Nulla sagittis nisi sit amet orci consectetur laoreet. Vivamus volutpat erat ac vulputate laoreet. Phasellus eu ipsum massa.</p>
                                </div>

                                   <div class="panel-body">
























                                                                          <!---------------another form------------------->




  <?php
                                     include('db_config.php');
                                     $sql= "SELECT * FROM `Customer`";
                                     $query = $db->query($sql);
                                     $data = $query->fetch_assoc();

                                     ?>


                                             <p>   <div class="form-group">
                                                                           <label class="col-md-3 col-xs-12 control-label">Phone Number</label>
                                                                           <div class="col-md-6 col-xs-12">

                                     <select class="form-control " name="PhoneNumber"  id="n1" onclick="sync()"  required>
                                     <option> </option>
                                     <?php while($row = $query->fetch_assoc()) { ?>
                                     <option  value="<?php echo $row['Mobile01']; ?>"><?php echo $row['Mobile01']; ?> </option>
                                     <?php } ?>
                                     </select>
                                     </div>
                                     </div></p>

                                     <br>









  <?php
                                     include('db_config.php');
                                     $sql= "SELECT * FROM `Customer`";
                                     $query = $db->query($sql);
                                     $data = $query->fetch_assoc();

                                     ?>


                                             <p>   <div class="form-group">
                                                                           <label class="col-md-3 col-xs-12 control-label">Building</label>
                                                                           <div class="col-md-6 col-xs-12">

                                     <select class="form-control " name="Building"  id="n1" onclick="sync()"  required>
                                     <option> </option>
                                     <?php while($row = $query->fetch_assoc()) { ?>
                                     <option  value="<?php echo $row['Mobile01']; ?>"><?php echo $row['Mobile01']; ?> </option>
                                     <?php } ?>
                                     </select>
                                     </div>
                                     </div></p>

                                     <br>












                                                                              <div class="form-group">
                                                                             <label class="col-md-3 col-xs-12 control-label">Known From</label>
                                                                             <div class="col-md-6 col-xs-12">
                                                                                 <select class="form-control " name="KnownFrom" required  >
                                                                                     <option> </option>
                                                                                   

   <option value="Ext. Websites">Ext. Websites</option>
   <option value="External Source">External Source</option>
    <option value="Friend">Friend</option>
   <option value="Internal source">Internal source</option>
   <option value="Newspaper">Newspaper</option>
   <option value="Other">Other</option>
   <option value="SMS">SMS</option>
   <option value="Social Media">Social Media</option>
   <option value="Website">Website</option>
   <option value="Sourcing IN">Sourcing IN</option>
   <option value="Sourcing OUT">Sourcing OUT</option>


                                                                                 </select>
                                                                                 <span  class ="error">Select box example</span>
                                                                             </div>
                                                                         </div>


                                                                          <div class="form-group">
                                                                             <label class="col-md-3 col-xs-12 control-label">Deal Type</label>
                                                                             <div class="col-md-6 col-xs-12">
                                                                                 <select class="form-control " name="DealType" required >
                                                                                     <option> </option>
                                                                                     <option value="Sell"> Sell
</option>
                                                                                         <option value="Rent"> Rent
</option>
                                                                                        


                                                                                 </select>
                                                                                 <span  class ="error">Select box example</span>
                                                                             </div>
                                                                         </div>


                                                                            <div class="form-group">
                                                                             <label class="col-md-3 col-xs-12 control-label">AptType</label>
                                                                             <div class="col-md-6 col-xs-12">
                                                                                 <select class="form-control " name="AptType" required id='AptType' >
                                                                                     <option> </option>
                                                                                     <option value="شقة"> شقة</option>
                                                                                        



                                                                                 </select>
                                                                                 <span  class ="error">Select box example</span>
                                                                             </div>
                                                                         </div>










                                                                              <div class="form-group">
                                                                             <label class="col-md-3 col-xs-12 control-label"> Source BY</label>
                                                                             <div class="col-md-6 col-xs-12">
                                                                                 <select class="form-control " name=" SourceBY" required id='CallStatus' >
                                                                                     <option> </option>
                                                                                     
<option value="Ahmed Hani"> Ahmed Hani</option>
<option value="Raghda Ahmed">Raghda Ahmed</option>
<option value="Social Media">Social Media</option>
<option value="Other">Other</option>



                                                                                 </select>
                                                                                 <span  class ="error">Select box example</span>
                                                                             </div>
                                                                         </div>







                                                                         <div class="form-group">
                                                                             <label class="col-md-3 col-xs-12 control-label"> Apt.View</label>
                                                                             <div class="col-md-6 col-xs-12">
                                                                                 <select class="form-control " name=" AptView" required>
                                                                                     <option> </option>
 <option value="قبلي">قبلي</option>
 <option value="بحري">بحري</option>
 <option value="كلاهما">كلاهما</option>

                                                                                       

                                                                                 </select>
                                                                                 <span  class ="error">Select box example</span>
                                                                             </div>
                                                                         </div>


                                                                         <div class="form-group">
                                                                             <label class="col-md-3 col-xs-12 control-label">Apartments m2</label>
                                                                             <div class="col-md-6 col-xs-12">
                                                                                 <select class="form-control " name="Apartmentsm2" id='FollowStatus' required >
                                                                                     <option> </option>

                                                                                             
 <option value="50"> 50</option>
 <option value="60">60</option>
 <option value="70">70</option>
 <option value="80">80</option>
 <option value="90">90</option>
 <option value="100">100</option>
 <option value="110">110</option>
 <option value="120">120</option>
 <option value="130">130</option>
 <option value="140">140</option>
 <option value="150">150</option>
 <option value="160">160</option>
 <option value="170">170</option>
 <option value="180">180</option>
 <option value="190">190</option>
 <option value="200">200</option>
 <option value="210">210</option>
 <option value="220">220</option>
 <option value="230">230</option>
 <option value="240">240</option>
 <option value="250">250</option>
 <option value="260">260</option>
 <option value="270">270</option>
 <option value="280">280</option>
 <option value="290">290</option>
 <option value="300">300</option>
 <option value="310">310</option>
 <option value="320">320</option>
 <option value="330">330</option>
 <option value="340">340</option>
 <option value="350">350</option>
 <option value="360">360</option>
 <option value="370">370</option>
 <option value="380">380</option>
 <option value="390">390</option>
 <option value="400">400</option>
 <option value="410">410</option>
 <option value="420">420</option>
 <option value="430">430</option>
 <option value="440">440</option>
 <option value="450">450</option>
 <option value="460">460</option>
 <option value="470">470</option>
 <option value="480">480</option>
 <option value="490">490</option>
 <option value="500">500</option>
 <option value="more 500 m2">more 500 m2</option>


                                                                                 </select>
                                                                                 <span  class ="error">Select box example</span>
                                                                             </div>
                                                                         </div>
                                                                           </div>




                                                                         <div class="form-group">
                                                                             <label class="col-md-3 col-xs-12 control-label">Rooms no</label>
                                                                             <div class="col-md-6 col-xs-12">
                                                                                 <select class="form-control " name=" Roomsno" id='FollowSchedule' required >
                                                                                     <option> </option>

                                                                                          <option value="1"> 1</option>
                                                <option value="2"> 2</option>
                                                <option value="3"> 3</option>
                                                <option value="4"> 4</option>
                                                <option value="5"> 5</option>
                                                <option value="6"> 6</option>
                                                <option value="7"> 7</option>
                                                <option value="8"> 8</option>
                                                <option value="9"> 9</option>
                                              
                                                <option value="10"> 10</option>
                                                <option value="11"> 11</option>
                                                <option value="12"> 12</option>
                                                <option value="13"> 13</option>
                                                <option value="14"> 14</option>
                                                <option value="15"> 15</option>
                                                <option value="16"> 16</option>
                                                 <option value="17"> 17</option>
                                                  <option value="18"> 18</option>
                                                   <option value="19"> 19</option>
                                                    <option value="20"> 20</option>



                                                                                 </select>
                                                                                 <span  class ="error">Select box example</span>
                                                                             </div>
                                                                         </div>
                                                                         
                                                                         
                                                                          <div class="form-group">
                                                                             <label class="col-md-3 col-xs-12 control-label">Rooms View/Street</label>
                                                                             <div class="col-md-6 col-xs-12">
                                                                                 <select class="form-control " name=" RoomsView/Street" id='FollowSchedule' required >
                                                                                     <option> </option>

                                                                                                                                             <option value="1"> 1</option>
                                                <option value="2"> 2</option>
                                                <option value="3"> 3</option>
                                                <option value="4"> 4</option>
                                                <option value="5"> 5</option>
                                                <option value="6"> 6</option>
                                                <option value="7"> 7</option>
                                                <option value="8"> 8</option>
                                                <option value="9"> 9</option>
                                              
                                                <option value="10"> 10</option>
                                                <option value="11"> 11</option>
                                                <option value="12"> 12</option>
                                                <option value="13"> 13</option>
                                                <option value="14"> 14</option>
                                                <option value="15"> 15</option>
                                                <option value="16"> 16</option>
                                                 <option value="17"> 17</option>
                                                  <option value="18"> 18</option>
                                                   <option value="19"> 19</option>
                                                    <option value="20"> 20</option>





                                                                                 </select>
                                                                                 <span  class ="error">Select box example</span>
                                                                             </div>
                                                                         </div>

   
                                                                       
                                                                          <div class="form-group">
                                                                             <label class="col-md-3 col-xs-12 control-label">Reception no</label>
                                                                             <div class="col-md-6 col-xs-12">
                                                                                 <select class="form-control " name="Receptionno." id='FollowSchedule' required >
                                                                                     <option> </option>
                                                  <option value="1"> 1</option>
                                                <option value="2"> 2</option>
                                                <option value="3"> 3</option>
                                                <option value="4"> 4</option>
                                                <option value="5"> 5</option>
                                                <option value="6"> 6</option>
                                                <option value="7"> 7</option>
                                                <option value="8"> 8</option>
                                                <option value="9"> 9</option>
                                              
                                                <option value="10"> 10</option>
                                                <option value="11"> 11</option>
                                                <option value="12"> 12</option>
                                                <option value="13"> 13</option>
                                                <option value="14"> 14</option>
                                                <option value="15"> 15</option>
                                                <option value="16"> 16</option>
                                                 <option value="17"> 17</option>
                                                  <option value="18"> 18</option>
                                                   <option value="19"> 19</option>
                                                    <option value="20"> 20</option>





                                                                                 </select>
                                                                                 <span  class ="error">Select box example</span>
                                                                             </div>
                                                                         </div>                
                                                                         
                                                                         
                                                                         
                                                                           <div class="form-group">
                                                                             <label class="col-md-3 col-xs-12 control-label">Reception View/Street</label>
                                                                             <div class="col-md-6 col-xs-12">
                                                                                 <select class="form-control " name="ReceptionView/Street" id='FollowSchedule' required >
                                                                                     <option> </option>

                                                                                       <option value="1"> 1</option>
                                                <option value="2"> 2</option>
                                                <option value="3"> 3</option>
                                                <option value="4"> 4</option>
                                                <option value="5"> 5</option>
                                                <option value="6"> 6</option>
                                                <option value="7"> 7</option>
                                                <option value="8"> 8</option>
                                                <option value="9"> 9</option>
                                              
                                                <option value="10"> 10</option>
                                                <option value="11"> 11</option>
                                                <option value="12"> 12</option>
                                                <option value="13"> 13</option>
                                                <option value="14"> 14</option>
                                                <option value="15"> 15</option>
                                                <option value="16"> 16</option>
                                                 <option value="17"> 17</option>
                                                  <option value="18"> 18</option>
                                                   <option value="19"> 19</option>
                                                    <option value="20"> 20</option>






                                                                                 </select>
                                                                                 <span  class ="error">Select box example</span>
                                                                             </div>
                                                                         </div>                
                                                                         
                                                                         
                                                                         
                                                                           <div class="form-group">
                                                                             <label class="col-md-3 col-xs-12 control-label">Bathroom no</label>
                                                                             <div class="col-md-6 col-xs-12">
                                                                                 <select class="form-control " name="Bathroomno" id='FollowSchedule' required >
                                                                                     <option> </option>
 <option value="1"> 1</option>
                                                <option value="2"> 2</option>
                                                <option value="3"> 3</option>
                                                <option value="4"> 4</option>
                                                <option value="5"> 5</option>
                                                <option value="6"> 6</option>
                                                <option value="7"> 7</option>
                                                <option value="8"> 8</option>
                                                <option value="9"> 9</option>
                                              
                                                <option value="10"> 10</option>
                                                <option value="11"> 11</option>
                                                <option value="12"> 12</option>
                                                <option value="13"> 13</option>
                                                <option value="14"> 14</option>
                                                <option value="15"> 15</option>
                                                <option value="16"> 16</option>
                                                 <option value="17"> 17</option>
                                                  <option value="18"> 18</option>
                                                   <option value="19"> 19</option>
                                                    <option value="20"> 20</option>





                                                                                 </select>
                                                                                 <span  class ="error">Select box example</span>
                                                                             </div>
                                                                         </div>                
                                                                         
                                                                         
                                                                         
                                                                           <div class="form-group">
                                                                             <label class="col-md-3 col-xs-12 control-label">Floor</label>
                                                                             <div class="col-md-6 col-xs-12">
                                                                                 <select class="form-control " name="Floor" id='FollowSchedule' required >
                                                                                     <option> </option>
 <option value="1"> 1</option>
                                                <option value="2"> 2</option>
                                                <option value="3"> 3</option>
                                                <option value="4"> 4</option>
                                                <option value="5"> 5</option>
                                                <option value="6"> 6</option>
                                                <option value="7"> 7</option>
                                                <option value="8"> 8</option>
                                                <option value="9"> 9</option>
                                              
                                                <option value="10"> 10</option>
                                                <option value="11"> 11</option>
                                                <option value="12"> 12</option>
                                                <option value="13"> 13</option>
                                                <option value="14"> 14</option>
                                                <option value="15"> 15</option>
                                                <option value="16"> 16</option>
                                                 <option value="17"> 17</option>
                                                  <option value="18"> 18</option>
                                                   <option value="19"> 19</option>
                                                    <option value="20"> 20</option>





                                                                                 </select>
                                                                                 <span  class ="error">Select box example</span>
                                                                             </div>
                                                                         </div>                
                                                                         
                                                                         
                                                                         
                                                                           <div class="form-group">
                                                                             <label class="col-md-3 col-xs-12 control-label">Rooms View/Street</label>
                                                                             <div class="col-md-6 col-xs-12">
                                                                                 <select class="form-control " name=" RoomsView/Street" id='FollowSchedule' required >
                                                                                     <option> </option>

                                                                                   <option value="1"> 1</option>
                                                <option value="2"> 2</option>
                                                <option value="3"> 3</option>
                                                <option value="4"> 4</option>
                                                <option value="5"> 5</option>
                                                <option value="6"> 6</option>
                                                <option value="7"> 7</option>
                                                <option value="8"> 8</option>
                                                <option value="9"> 9</option>
                                              
                                                <option value="10"> 10</option>
                                                <option value="11"> 11</option>
                                                <option value="12"> 12</option>
                                                <option value="13"> 13</option>
                                                <option value="14"> 14</option>
                                                <option value="15"> 15</option>
                                                <option value="16"> 16</option>
                                                 <option value="17"> 17</option>
                                                  <option value="18"> 18</option>
                                                   <option value="19"> 19</option>
                                                    <option value="20"> 20</option>






                                                                                 </select>
                                                                                 <span  class ="error">Select box example</span>
                                                                             </div>
                                                                         </div>                
                                                                         
                                                                         
                                                                         
                                                                           <div class="form-group">
                                                                             <label class="col-md-3 col-xs-12 control-label">Finishing Type</label>
                                                                             <div class="col-md-6 col-xs-12">
                                                                                 <select class="form-control " name="FinishingType" id='FollowSchedule' required >
                                                                                     <option> </option>

                                                                                              
<option value="تحت الأنشاء<">تحت الأنشاء</option>
<option value="على الطوب<">على الطوب</option>
<option value="عادي">عادي</option>
<option value="نصف تشطيب<">نصف تشطيب</option>
<option value="لوكس">لوكس</option>
<option value="سوبر لوكس</">سوبر لوكس</option>
<option value="الترا لوكس<">الترا لوكس</option>




                                                                                 </select>
                                                                                 <span  class ="error">Select box example</span>
                                                                             </div>
                                                                         </div>                
                                                                         
                                                                         
                                                                         
                                                                           <div class="form-group">
                                                                             <label class="col-md-3 col-xs-12 control-label">Electric meter</label>
                                                                             <div class="col-md-6 col-xs-12">
                                                                                 <select class="form-control " name="Electricmeter" id='FollowSchedule' required >
                                                                                     <option> </option>

                                                                                              <option value="Yes"> Yes</option>
                                                                                     <option value="No"> No</option>





                                                                                 </select>
                                                                                 <span  class ="error">Select box example</span>
                                                                             </div>
                                                                         </div>                
                                                                         
                                                                         
                                                                         
                                                                           <div class="form-group">
                                                                             <label class="col-md-3 col-xs-12 control-label">Rooms View/Street</label>
                                                                             <div class="col-md-6 col-xs-12">
                                                                                 <select class="form-control " name=" RoomsView/Street" id='FollowSchedule' required >
                                                                                     <option> </option>

                                                                                                                     <option value="1"> 1</option>
                                                <option value="2"> 2</option>
                                                <option value="3"> 3</option>
                                                <option value="4"> 4</option>
                                                <option value="5"> 5</option>
                                                <option value="6"> 6</option>
                                                <option value="7"> 7</option>
                                                <option value="8"> 8</option>
                                                <option value="9"> 9</option>
                                              
                                                <option value="10"> 10</option>
                                                <option value="11"> 11</option>
                                                <option value="12"> 12</option>
                                                <option value="13"> 13</option>
                                                <option value="14"> 14</option>
                                                <option value="15"> 15</option>
                                                <option value="16"> 16</option>
                                                 <option value="17"> 17</option>
                                                  <option value="18"> 18</option>
                                                   <option value="19"> 19</option>
                                                    <option value="20"> 20</option>






                                                                                 </select>
                                                                                 <span  class ="error">Select box example</span>
                                                                             </div>
                                                                         </div>                
                                                                         
                                                                         
                                                                         
                                                                           <div class="form-group">
                                                                             <label class="col-md-3 col-xs-12 control-label">Gas meter</label>
                                                                             <div class="col-md-6 col-xs-12">
                                                                                 <select class="form-control " name="Gasmetr" id='FollowSchedule' required >
                                                                                     <option> </option>

                                                                                              <option value="Yes"> Yes</option>
                                                                                     <option value="No"> No</option>




                                                                                 </select>
                                                                                 <span  class ="error">Select box example</span>
                                                                             </div>
                                                                         </div>                
                                                                         
                                                                         
                                                                         
                                                                           <div class="form-group">
                                                                             <label class="col-md-3 col-xs-12 control-label">Water meter</label>
                                                                             <div class="col-md-6 col-xs-12">
                                                                                 <select class="form-control " name="Watermeter" id='FollowSchedule' required >
                                                                                     <option> </option>

                                                                                              <option value="yes"> yes</option>
                                                                                     <option value="No"> No</option>






                                                                                 </select>
                                                                                 <span  class ="error">Select box example</span>
                                                                             </div>
                                                                         </div>                
                                                                         
                                                                         
                                                                         
                                                                           <div class="form-group">
                                                                             <label class="col-md-3 col-xs-12 control-label">License</label>
                                                                             <div class="col-md-6 col-xs-12">
                                                                                 <select class="form-control " name="License" id='FollowSchedule' required >
                                                                                     <option> </option>

                                                                                              <option value="Yes"> Yes</option>
                                                                                     <option value="No"> No</option>




                                                                                 </select>
                                                                                 <span  class ="error">Select box example</span>
                                                                             </div>
                                                                         </div>                
                                                                         
                                                                         
                                                                         
                                                                           <div class="form-group">
                                                                             <label class="col-md-3 col-xs-12 control-label">Paid Type</label>
                                                                             <div class="col-md-6 col-xs-12">
                                                                                 <select class="form-control " name="PaidType" id='FollowSchedule' required >
                                                                                     <option> </option>
<option value="Cash">Cash</option>
<option value="Instalment">Instalment</option>
<option value="Both">Both</option>



                                                                                 </select>
                                                                                 <span  class ="error">Select box example</span>
                                                                             </div>
                                                                         </div>                
                                                                         
                                                                         
                                                                         
                                                                           <div class="form-group">
                                                                             <label class="col-md-3 col-xs-12 control-label">Price EGP (Cash)</label>
                                                                             <div class="col-md-6 col-xs-12">
                                                                                 <select class="form-control " name="PriceEGP(Cash)" id='FollowSchedule' required >
                                                                                     <option> </option>

<option value='100,000'> 100,000</option>
<option value='150,000'>150,000</option>
<option value='200,000'>200,000</option>
<option value='250,000'>250,000</option>
<option value='300,000'>300,000</option>
<option value='350,000'>350,000</option>
<option value='400,000'>400,000</option>
<option value='450,000'>450,000</option>
<option value='500,000'>500,000</option>
<option value='550,000'>550,000</option>
<option value='600,000'>600,000</option> 
<option value='6500,000'>650,000</option> 
<option value='700,000'>700,000</option> 
<option value='750,000'>750,000</option> 
<option value='800,000'>800,000</option> 
<option value='850,000'>850,000</option> 
<option value='900,000'>900,000</option> 
<option value='950,000'>950,000</option> 
<option value='1,000,000'>1,000,000</option> 
<option value='1,050,000'>1,050,000</option> 
<option value='1,100,000'>1,100,000</option> 
<option value='1,150,000'>1,150,000</option> 
<option value='1,200,000'>1,200,000</option> 
<option value='1,250,000'>1,250,000</option> 
<option value='1,300,000'>1,300,000</option> 
<option value='1,350,000'>1,350,000</option> 
<option value='1,400,000'>1,400,000</option> 
<option value='1,450,000'>1,450,000</option> 
<option value='1,450,000'>1,500,000</option> 

<option value='1,550,000'>1,550,000</option> 
<option value='1,600,000'>1,600,000</option> 
<option value='1,650,000'>1,650,000</option> 
<option value='1,700,000'>1,700,000</option> 
<option value='1,750,000'>1,750,000</option> 
<option value='1,800,000'>1,800,000</option> 
<option value='1,800,000'>1,850,000</option> 
<option value='1,900,000'>1,900,000</option> 
<option value='1,950,000'>1,950,000</option> 
<option value='2,000,000'>2,000,000</option> 
<option value='2,050,000'>2,050,000</option> 
<option value='2,100,000'>2,100,000</option> 
<option value='2,150,000'>2,150,000</option> 
<option value='2,200,000'>2,200,000</option> 
<option value='2,250,000'>2,250,000</option> 
<option value='2,300,000'>2,300,000</option> 
<option value='2,350,000'>2,350,000</option> 
<option value='2,400,000'>2,400,000</option> 
<option value='2,450,000'>2,450,000</option> 
<option value='2,500,000'>2,500,000</option> 
<option value='2,550,000'>2,550,000</option> 
<option value='2,600,000'>2,600,000</option> 
<option value='2,6500,000'>2,650,000</option> 
<option value='2,700,000'>2,700,000</option> 
<option value='2,750,000'>2,750,000</option> 
<option value='2,800,000'>2,800,000</option> 
<option value='2,850,000'>2,850,000</option> 
<option value='2,900,000'>2,900,000</option> 
<option value='2,950,000'>2,950,000</option> 
<option value='3,000,000'>3,000,000</option> 
<option value='3,050,000'>3,050,000</option> 
<option value='3,100,000'>3,100,000</option> 
<option value='3,150,000'>3,150,000</option> 
<option value='3,200,000'>3,200,000</option> 
<option value='3,250,000'>3,250,000</option> 
<option value='3,300,000'>3,300,000</option> 
<option value='3,350,000'>3,350,000</option> 
<option value='3,400,000'>3,400,000</option> 
<option value='3,450,000'>3,450,000</option> 
<option value='3,500,000'>3,500,000</option> 
<option value='3,550,000'>3,550,000</option> 

<option value='3,600,000'>3,600,000</option> 
<option value='3,650,000'>3,650,000</option> 
<option value='3,700,000'>3,700,000</option> 
<option value='3,750,000'>3,750,000</option>
<option value='3,800,000'>3,800,000</option> 
<option value='3,850,000'>3,850,000</option> 
<option value='3,900,000'>3,900,000</option> 
<option value='3,950,000'>3,950,000</option> 
<option value='4,000,000'>4,000,000</option> 
<option value='4,050,000'>4,050,000</option> 
<option value='4,100,000'>4,100,000</option> 
<option value='4,150,000'>4,150,000</option> 
<option value='4,200,000'>4,200,000</option> 
<option value='4,250,000'>4,250,000</option> 
<option value='4,300,000'>4,300,000</option> 
<option value='4,350,000'>4,350,000</option> 
<option value='4,400,000'>4,400,000</option> 
<option value='4,450,000'>4,450,000</option> 
<option value='4,500,000'>4,500,000</option> 
<option value='4,550,000'>4,550,000</option> 
<option value='4,600,000'>4,600,000</option> 
<option value='4,650,000'>4,650,000</option> 
<option value='4,700,000'>4,700,000</option> 
<option value='4,700,000'>4,750,000</option> 
<option value='4,800,000'>4,800,000</option> 
<option value='4,850,000'>4,850,000</option> 
<option value='4,900,000'>4,900,000</option> 
<option value='4,950,000'>4,950,000</option> 
<option value='5,000,000'>5,000,000</option> 
<option value='more 5,000,0000'>more 5,000,0000</option> 
                             


                                                                                 </select>
                                                                                 <span  class ="error">Select box example</span>
                                                                             </div>
                                                                         </div>                
                                                                         
                                                                         
                                                                         
                                                                           <div class="form-group">
                                                                             <label class="col-md-3 col-xs-12 control-label">Price EGP (Inst.)</label>
                                                                             <div class="col-md-6 col-xs-12">
                                                                                 <select class="form-control " name="PriceEGP(Inst.)" id='FollowSchedule' required >
                                                                                     <option> </option>

                                                                                              <option value="Day"> Day</option>
                                                                                     <option value="Two Days"> Two Days</option>


                                                                                     <option value="Three Days"> Three Days</option>
                                                                                      <option value="Week">Week</option>
                                                                                       <option value="Two Week">Two Week</option>
                                                                                        <option value="Three Week">Three Week</option>
                                                                                         <option value="Month">Month</option>
                                                                                          <option value="Two Month">Two Month</option>
                                                                                           <option value="Three Month">Three Month</option>
                                                                                            <option value="Six Month">Six Month</option>
                                                                                             <option value="Year">Year</option>





                                                                                 </select>
                                                                                 <span  class ="error">Select box example</span>
                                                                             </div>
                                                                         </div>                
                                                                         
                                                                         
                                                                         
                                                                           <div class="form-group">
                                                                             <label class="col-md-3 col-xs-12 control-label">Deposit</label>
                                                                             <div class="col-md-6 col-xs-12">
                                                                                 <select class="form-control " name="Deposit" id='FollowSchedule' required >
                                                                                     <option> </option>

                                                                                              <option value="Day"> Day</option>
                                                                                     <option value="Two Days"> Two Days</option>


                                                                                     <option value="Three Days"> Three Days</option>
                                                                                      <option value="Week">Week</option>
                                                                                       <option value="Two Week">Two Week</option>
                                                                                        <option value="Three Week">Three Week</option>
                                                                                         <option value="Month">Month</option>
                                                                                          <option value="Two Month">Two Month</option>
                                                                                           <option value="Three Month">Three Month</option>
                                                                                            <option value="Six Month">Six Month</option>
                                                                                             <option value="Year">Year</option>





                                                                                 </select>
                                                                                 <span  class ="error">Select box example</span>
                                                                             </div>
                                                                         </div>                
                                                                         
                                                                         
                                                                         
                                                                           <div class="form-group">
                                                                             <label class="col-md-3 col-xs-12 control-label">Instalment Seq.</label>
                                                                             <div class="col-md-6 col-xs-12">
                                                                                 <select class="form-control " name="InstalmentSeq" id='FollowSchedule' required >
                                                                                     <option> </option>

                                                                                              <option value="Day"> Day</option>
                                                                                     <option value="Two Days"> Two Days</option>


                                                                                     <option value="Three Days"> Three Days</option>
                                                                                      <option value="Week">Week</option>
                                                                                       <option value="Two Week">Two Week</option>
                                                                                        <option value="Three Week">Three Week</option>
                                                                                         <option value="Month">Month</option>
                                                                                          <option value="Two Month">Two Month</option>
                                                                                           <option value="Three Month">Three Month</option>
                                                                                            <option value="Six Month">Six Month</option>
                                                                                             <option value="Year">Year</option>





                                                                                 </select>
                                                                                 <span  class ="error">Select box example</span>
                                                                             </div>
                                                                         </div>                
                                                                         
                                                                         
                                                                         
                                                                           <div class="form-group">
                                                                             <label class="col-md-3 col-xs-12 control-label">Out-POS</label>
                                                                             <div class="col-md-6 col-xs-12">
                                                                                 <select class="form-control " name="Out-POS" id='FollowSchedule' required >
                                                                                     <option> </option>

                                                                                              <option value="Day"> Day</option>
                                                                                     <option value="Two Days"> Two Days</option>


                                                                                     <option value="Three Days"> Three Days</option>
                                                                                      <option value="Week">Week</option>
                                                                                       <option value="Two Week">Two Week</option>
                                                                                        <option value="Three Week">Three Week</option>
                                                                                         <option value="Month">Month</option>
                                                                                          <option value="Two Month">Two Month</option>
                                                                                           <option value="Three Month">Three Month</option>
                                                                                            <option value="Six Month">Six Month</option>
                                                                                             <option value="Year">Year</option>





                                                                                 </select>
                                                                                 <span  class ="error">Select box example</span>
                                                                             </div>
                                                                         </div>                
                                                                         
                                                                         
                                                                         
                                                                               
                                                                           <div class="form-group">
                                                                             <label class="col-md-3 col-xs-12 control-label">Duration of Rent</label>
                                                                             <div class="col-md-6 col-xs-12">
                                                                                 <select class="form-control " name="DurationofRent" id='FollowSchedule' required >
                                                                                     <option> </option>

                                                                                              <option value="Day"> Day</option>
                                                                                     <option value="Two Days"> Two Days</option>


                                                                                     <option value="Three Days"> Three Days</option>
                                                                                      <option value="Week">Week</option>
                                                                                       <option value="Two Week">Two Week</option>
                                                                                        <option value="Three Week">Three Week</option>
                                                                                         <option value="Month">Month</option>
                                                                                          <option value="Two Month">Two Month</option>
                                                                                           <option value="Three Month">Three Month</option>
                                                                                            <option value="Six Month">Six Month</option>
                                                                                             <option value="Year">Year</option>





                                                                                 </select>
                                                                                 <span  class ="error">Select box example</span>
                                                                             </div>
                                                                         </div>                
                                                                         
                                                                               
                                                                           <div class="form-group">
                                                                             <label class="col-md-3 col-xs-12 control-label">Price EGP (Cash)</label>
                                                                             <div class="col-md-6 col-xs-12">
                                                                                 <select class="form-control " name="PriceEGP(Cash)" id='FollowSchedule' required >
                                                                                     <option> </option>

                                                                                              <option value="Day"> Day</option>
                                                                                     <option value="Two Days"> Two Days</option>


                                                                                     <option value="Three Days"> Three Days</option>
                                                                                      <option value="Week">Week</option>
                                                                                       <option value="Two Week">Two Week</option>
                                                                                        <option value="Three Week">Three Week</option>
                                                                                         <option value="Month">Month</option>
                                                                                          <option value="Two Month">Two Month</option>
                                                                                           <option value="Three Month">Three Month</option>
                                                                                            <option value="Six Month">Six Month</option>
                                                                                             <option value="Year">Year</option>





                                                                                 </select>
                                                                                 <span  class ="error">Select box example</span>
                                                                             </div>
                                                                         </div>                
                                                                         
                                                                               
                                                                           <div class="form-group">
                                                                             <label class="col-md-3 col-xs-12 control-label">Insurance</label>
                                                                             <div class="col-md-6 col-xs-12">
                                                                                 <select class="form-control " name="Insurance" id='FollowSchedule' required >
                                                                                     <option> </option>

                                                                                              <option value="Day"> Day</option>
                                                                                     <option value="Two Days"> Two Days</option>


                                                                                     <option value="Three Days"> Three Days</option>
                                                                                      <option value="Week">Week</option>
                                                                                       <option value="Two Week">Two Week</option>
                                                                                        <option value="Three Week">Three Week</option>
                                                                                         <option value="Month">Month</option>
                                                                                          <option value="Two Month">Two Month</option>
                                                                                           <option value="Three Month">Three Month</option>
                                                                                            <option value="Six Month">Six Month</option>
                                                                                             <option value="Year">Year</option>





                                                                                 </select>
                                                                                 <span  class ="error">Select box example</span>
                                                                             </div>
                                                                         </div>                
                                                                         
                                                                         
                                                                         
                                                                         
                                                                         
                                                                              
                                                                           <div class="form-group">
                                                                             <label class="col-md-3 col-xs-12 control-label">Out-POS</label>
                                                                             <div class="col-md-6 col-xs-12">
                                                                                 <select class="form-control " name="Out-POS1" id='FollowSchedule' required >
                                                                                     <option> </option>

                                                                                              <option value="Day"> Day</option>
                                                                                     <option value="Two Days"> Two Days</option>


                                                                                     <option value="Three Days"> Three Days</option>
                                                                                      <option value="Week">Week</option>
                                                                                       <option value="Two Week">Two Week</option>
                                                                                        <option value="Three Week">Three Week</option>
                                                                                         <option value="Month">Month</option>
                                                                                          <option value="Two Month">Two Month</option>
                                                                                           <option value="Three Month">Three Month</option>
                                                                                            <option value="Six Month">Six Month</option>
                                                                                             <option value="Year">Year</option>





                                                                                 </select>
                                                                                 <span  class ="error">Select box example</span>
                                                                             </div>
                                                                         </div>                
                                                                         
                                                                         
                                                                              
                                                                           <div class="form-group">
                                                                             <label class="col-md-3 col-xs-12 control-label">Contracting</label>
                                                                             <div class="col-md-6 col-xs-12">
                                                                                 <select class="form-control " name="Contracting" id='FollowSchedule' required >
                                                                                     <option> </option>

                                                                                              <option value="Day"> Day</option>
                                                                                     <option value="Two Days"> Two Days</option>


                                                                                     <option value="Three Days"> Three Days</option>
                                                                                      <option value="Week">Week</option>
                                                                                       <option value="Two Week">Two Week</option>
                                                                                        <option value="Three Week">Three Week</option>
                                                                                         <option value="Month">Month</option>
                                                                                          <option value="Two Month">Two Month</option>
                                                                                           <option value="Three Month">Three Month</option>
                                                                                            <option value="Six Month">Six Month</option>
                                                                                             <option value="Year">Year</option>





                                                                                 </select>
                                                                                 <span  class ="error">Select box example</span>
                                                                             </div>
                                                                         </div>                
                                                                         
                                                                  
                                                                             <div class="form-group">
                                                                                 <label class="col-md-2 control-label">Note</label>
                                                                                 <div class="col-md-10">
                                                                                     <textarea class="form-control" name='Note' rows="5" placeholder="Something about you"></textarea>
                                                                                 </div>
                                                                             </div>
                                                                             
                                                                             
                                                                           <div class="form-group">
                                                                             <label class="col-md-3 col-xs-12 control-label">Picture Type</label>
                                                                             <div class="col-md-6 col-xs-12">
                                                                                 <select class="form-control " name="PictureType" id='FollowSchedule' required >
                                                                                     <option> </option>

                                                                                              <option value="Day"> Day</option>
                                                                                     <option value="Two Days"> Two Days</option>


                                                                                     <option value="Three Days"> Three Days</option>
                                                                                      <option value="Week">Week</option>
                                                                                       <option value="Two Week">Two Week</option>
                                                                                        <option value="Three Week">Three Week</option>
                                                                                         <option value="Month">Month</option>
                                                                                          <option value="Two Month">Two Month</option>
                                                                                           <option value="Three Month">Three Month</option>
                                                                                            <option value="Six Month">Six Month</option>
                                                                                             <option value="Year">Year</option>





                                                                                 </select>
                                                                                 <span  class ="error">Select box example</span>
                                                                             </div>
                                                                         </div>                
                                                                         
                                                                         
                                                                              
                                                                           <div class="form-group">
                                                                             <label class="col-md-3 col-xs-12 control-label">Picture</label>
                                                                             <div class="col-md-6 col-xs-12">
                                                                                 <select class="form-control " name="Picture" id='FollowSchedule' required >
                                                                                     <option> </option>

                                                                                              <option value="Day"> Day</option>
                                                                                     <option value="Two Days"> Two Days</option>


                                                                                     <option value="Three Days"> Three Days</option>
                                                                                      <option value="Week">Week</option>
                                                                                       <option value="Two Week">Two Week</option>
                                                                                        <option value="Three Week">Three Week</option>
                                                                                         <option value="Month">Month</option>
                                                                                          <option value="Two Month">Two Month</option>
                                                                                           <option value="Three Month">Three Month</option>
                                                                                            <option value="Six Month">Six Month</option>
                                                                                             <option value="Year">Year</option>





                                                                                 </select>
                                                                                 <span  class ="error">Select box example</span>
                                                                             </div>
                                                                         </div>                
                                                                         
                                                                         
                                                                              
                                                                           <div class="form-group">
                                                                             <label class="col-md-3 col-xs-12 control-label">Validation Date</label>
                                                                             <div class="col-md-6 col-xs-12">
                                                                                 <select class="form-control " name="ValidationDate" id='FollowSchedule' required >
                                                                                     <option> </option>

                                                                                              <option value="Day"> Day</option>
                                                                                     <option value="Two Days"> Two Days</option>


                                                                                     <option value="Three Days"> Three Days</option>
                                                                                      <option value="Week">Week</option>
                                                                                       <option value="Two Week">Two Week</option>
                                                                                        <option value="Three Week">Three Week</option>
                                                                                         <option value="Month">Month</option>
                                                                                          <option value="Two Month">Two Month</option>
                                                                                           <option value="Three Month">Three Month</option>
                                                                                            <option value="Six Month">Six Month</option>
                                                                                             <option value="Year">Year</option>





                                                                                 </select>
                                                                                 <span  class ="error">Select box example</span>
                                                                             </div>
                                                                         </div>                
                                                                         
                                                                         
                                                                         
                                                                         
                                                                         
                                                                         








                                                                             <div id='send' >
                                                                             <center>
                                     <input type='submit' value='send' name='send' >
                                     </center>
                                                                         </div>
</div>






















































































                                                                     </div>
                                                                     </form>
                                                                 </div>
                                                                 <!-- END WIZARD WITH SUBMIT BUTTON -->



                                                             </div>

                                                         </div>

                                                     </div>
                                                     <!-- PAGE CONTENT WRAPPER -->
                                                 </div>
                                                 <!-- END PAGE CONTENT -->
                                             </div>
                                             <!-- END PAGE CONTAINER -->








                            </div>
                            </form>

                        </div>
                    </div>

                </div>
                <!-- END PAGE CONTENT WRAPPER -->
            </div>
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>


























































                                <div class="panel-footer">
                                    <button class="btn btn-default">Clear Form</button>
                                    <input type="submit" name="send" class="btn btn-primary pull-right" value='Submit'>
                                </div>
                            </div>
                            </form>

                        </div>
                    </div>

                </div>
                <!-- END PAGE CONTENT WRAPPER -->
            </div>
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="destroy.php" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->

    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
        <!-- END PLUGINS -->

        <!-- THIS PAGE PLUGINS -->
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>

        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-file-input.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-select.js"></script>
        <script type="text/javascript" src="js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
        <!-- END THIS PAGE PLUGINS -->

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="js/settings.js"></script>

        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/actions.js"></script>
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->
    </body>
</html>