<!DOCTYPE html>
<!-- saved from url=(0051)http://getbootstrap.com/examples/starter-template/# -->
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--link rel="shortcut icon" href="http://getbootstrap.com/assets/ico/favicon.ico"-->

        <title>Arrange subsystem</title>
    <script src="js_2/jquery.min.js"></script>
    <script src="js_2/bootstrap.min.js"></script>
    <script src="js_2/scripts.js"></script>
  

    <!-- Bootstrap core CSS -->
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://getbootstrap.com/examples/starter-template/starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  <link rel="stylesheet" href="http://getbootstrap.com/csshide1.css">
<link rel="stylesheet" href="http://getbootstrap.com/csshide2.css">
<link rel="stylesheet" href="http://getbootstrap.com/csshide3.css">
<link rel="stylesheet" href="http://getbootstrap.com/csshide4.css">
<style></style>
<link rel="stylesheet" href="http://getbootstrap.com/abprule.css">
<style></style>
<style></style>
<link href="css_2/bootstrap.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="css_2/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="theme.css" rel="stylesheet">
    <link href="signin.css" rel="stylesheet">
</head>

  <body>
     <!--topbar-->
           <!-- Fixed navbar -->
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="../welcome.php">Teaching Service Subsystem</a>
      </div><!--navbar-header-->
      
      <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="dropdown">
                <a href="" class="dropdown-toggle" data-toggle="dropdown">Other Subsystem<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li class="dropdown-header" style="font-size:18px">The portals:</li>
                  <li style="height:3px"><br/></li>
                  <li><a href="">Information Management System</a></li>
                  <li class="divider"></li>
                  <li><a href="">Automatic Course Arrangement Subsystem</a></li>
                  <li class="divider"></li>
                  <li><a href="">Course Selection Subsystem</a></li>
                  <li class="divider"></li>
                  <li><a href="">Discussion Forum Subsystem</a></li>
                  <li class="divider"></li>
                  <li><a href="">Online Testing Subsystem</a></li>
                  <li class="divider"></li>
                  <li><a href="">Score Management Subsystem</a></li>
                </ul>
              </li>
            </ul><!--nav navbar-nav-->
            <a href="../logout.php"><button id="logout" type="button" class="btn btn-success navbar-btn navbar-right">Log out</button> </a>
      <button  id="logout" style="#8A2BE2" class="btn navbar-btn navbar-right" ><?php echo $_SESSION["user_name"]; ?></button><!--User's name is here-->
          </div><!--/.nav-collapse -->
        </div><!--container-fluid-->
        </div><!--navbar navbar-inverse navbar-fixed-top-->
     <hr style="border:3 dotted #ff0033" width="100%" SIZE=3>


        <div class="col-lg-12">
            <h1 style="margin:10px;text-align:center;">Teaching Resource Management</h1>
        </div>


      <div class="container">
        <div class="row">

        <div class="col-md-2">

        <a href="1.html" target="_top">
          <button type="button" class="btn btn-lg btn-block btn-default" style="font-size: 1em"><b>Teaching Resource<br> Management</b></button>
        </a>

        <a href="2.html" target="_top">
          <button type="button" class="btn btn-lg btn-block btn-primary" style="font-size: 1em"><b>Automatically Course<br> Scheduling</b></button>
        </a>

        <a href="3.html" target="_top">
          <button type="button" class="btn btn-lg btn-block btn-success" style="font-size: 1em"><b>Manually Course<br> Adjustment</b></button>
        </a>

        <a href="4.html" target="_top">
          <button type="button" class="btn btn-lg btn-block btn-info" style="font-size: 1em"><b>Teacher Course<br>Search</b></button>
        </a>

        <a href="5.html" target="_top">
          <button type="button" class="btn btn-lg btn-block btn-warning" style="font-size: 1em"><b>Classroom <br>Inquiry</b></button>
        </a>
        </div>

<div class="col-lg-10" style="background-color: #fafafa;  min-width:800px;">
        
    <div class="col-md-10 column">
      <div class="tabbable" id="tabs-12518">
      <div style="width:350px; height:50px;">
        <ul class="nav nav-tabs">
          <li class="active">
            <a href="#panel-303742" data-toggle="tab">Add</a>
          </li>
          <li>
            <a href="#panel-393776" data-toggle="tab">Delete</a>
          </li>
          <li>
            <a href="#panel-303748" data-toggle="tab">Modify</a>
          </li>
        </ul>
      </div>
        <div class="tab-content">
          <div class="tab-pane active" id="panel-303742">
            <br/>
            <div class="jumbotron well">
              <form action="add_cr.php" method="post" class="form-signin" role="form">
                   <h2 class="form-signin-heading">Basic information</h2><br>
                     <input name="cr_ID" type="text" class="form-control" placeholder="Classroom ID" required autofocus>
                     <input name="cr_Name" type="text" class="form-control" placeholder="Classroom Name" required>
                     <!--input name="cr_Type" type="text" class="form-control" placeholder="Classroom Type" required-->
                     <select name="cr_Type" class="form-control" required>
                       <option value="Classroom" selected="selected">Classroom</option>
                       <option value="Playground">Playground</option>
                       <option value="Electrical Lab">Electrical Lab</option>
                       <option value="Computer Lab">Computer Lab</option>
                       <option value="Language Classroom">Language Classroom</option>
                     </select>
                     <hr>
                    <input name="cr_capa" type="text" class="form-control" placeholder="Capacity" required>
                    <!--input name="cr_camp" type="text" class="form-control" placeholder="Campus" required-->
                    <select name="cr_camp" class="form-control" required>
                       <option value="Zijin'gang" selected="selected">Zijin'gang</option>
                       <option value="Yuquan">Yuquan</option>
                       <option value="Xixi">Xixi</option>
                       <option value="Huajiachi">Huajiachi</option>
                       <option value="Zhijiang">Zhijiang</option>
                     </select>
                    <br/>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Add</button>
              </form>
            </div><!--jumbotron well-->
          </div><!--tab-pane-->
          <div class="tab-pane" id="panel-393776">
            <br/>
            <div class="jumbotron well">
              <form action="del_cr.php" method="post" class="form-signin" role="form">
                   <h2 class="form-signin-heading">Basic information</h2><br>
                     <input name="cr_ID" type="text" class="form-control" placeholder="Classroom ID" required autofocus>
                     
                     <hr>
                    
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Delete</button>
              </form>
            </div><!--jumbotron well-->
          </div><!--tabpane active class-->
          <div class="tab-pane" id="panel-303748">
            <br/>
            <div class="jumbotron well">
              <form action="mod_cr.php" method="post" class="form-signin" role="form">
                   <h2 class="form-signin-heading">Basic information</h2><br>
                     <input name="cr_ID" type="text" class="form-control" placeholder="Classroom ID" required autofocus>
                     
                     <hr>
                    <input name="cr_capa" type="text" class="form-control" placeholder="Capacity" required>
                     <br/>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Modify</button>
              </form>
            </div><!--jumbotron well-->
          </div><!--tab-pane-->
        </div><!--tab content-->
      </div><!--tabbable-->
    </div><!--col-md-10 column-->
  </div><!--col-lg-10-->
    
    </div><!-- /row -->
    </div><!-- /container -->
  </body>
  </html>
<?php

session_start();
if($_SESSION['user_name']=="")
{
  echo "<script> alert('Please login first!'); window.location.href='../Login.php'; </script>";
  exit(0);
}

if($_SESSION['user_type']!=1)
{
  echo "<script>alert('You do not have the right!'); window.location.href='main.html'; </script>";
  exit(0);
}
  @ $cr_ID=$_POST['cr_ID'];
  @ $cr_capa=$_POST['cr_capa'];
  if (!$cr_ID) {
       echo "<p><center>输入出错，请重新输入<center><br /></p>";
       exit();
    }

    if (!get_magic_quotes_gpc()){
        $cr_ID=addslashes($cr_ID);
        $cr_capa=doubleval($cr_capa);
    }
 @ $con = new mysqli("218.244.137.223","ddpse","zjuddpse2014","SEproject");
if (mysqli_connect_error())
{
printf("Connect failed: %s\n", mysqli_connect_error());
}
else{
      $sql6="select * from acaRoom where room_id='".$cr_ID."'";
      $res6=mysqli_query($con,$sql6);
      $newArray6 = mysqli_fetch_array($res6, MYSQLI_ASSOC);
  
  if($res6 == True && $newArray6)
  {
      $sql="update acaRoom set room_cap='".$cr_capa."'where room_id='".$cr_ID."'";
      $res=mysqli_query($con,$sql);
     if($res)
     {
      echo "<script>alert('Modify Successfully')</script>";
     }
    else{
        echo "<script>alert('Modify Failed, Please try again')</script>";
   }
 }
 else
 {
    echo "<script>alert('We do not have this classroom, Please try again')</script>";
 }
  Mysqli_close($con);
}
?>

