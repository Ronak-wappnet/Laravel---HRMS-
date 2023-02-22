<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
  <title>Elite Admin - is a responsive admin template</title>
  <!-- Bootstrap Core CSS -->
  <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Menu CSS -->
  <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
  <!-- toast CSS -->
  <link href="../plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
  <!-- morris CSS -->
  <link href="../plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
  <!-- animation CSS -->
  <link href="css/animate.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="css/style.css" rel="stylesheet">
  <!-- color CSS -->
  <link href="css/colors/default.css" id="theme" rel="stylesheet">

  <!-- Preloader -->
  <div class="preloader">
    <div class="cssload-speeding-wheel"></div>
  </div>
  <div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top m-b-0">
      <div class="navbar-header">
        <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
        <div class="top-left-part"><a class="logo" href="index.html">
            <b><!--This is dark logo icon-->
              <img src="../plugins/images/eliteadmin-logo.png" alt="home" class="dark-logo" />
            </b></a>
        </div>
        <ul class="nav navbar-top-links navbar-left hidden-xs">
          <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
        </ul>
    </nav>
    <!-- Left navbar-header -->
    <div class="navbar-default sidebar" role="navigation">
      <div class="sidebar-nav navbar-collapse slimscrollsidebar">

        <div class="user-profile">
          <div class="dropdown user-pro-body">
            <div><img src="../plugins/images/users/varun.jpg" alt="user-img" class="img-circle"></div>
            <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Super Admin
              <span class="caret"></span></a>
            <ul class="dropdown-menu animated flipInY">
              <li><a href="#"><i class="ti-user"></i> Profile</a></li>
              <li><a href="#"><i class="ti-wallet"></i> Change Password</a></li>
              <li><a href="{{Route('signout')}}"><i class="fa fa-power-off"></i> Logout</a></li>
            </ul>
          </div>
        </div>
        <ul class="nav" id="side-menu">
          <li> <a href="{{Route('dashboard')}}" class="waves-effect active">
              <i class="linea-icon linea-basic fa-fw" data-icon="v"></i>
              <span class="hide-menu"> Dashboard </span></a>          
          </li>

          <li><a href="inbox.html" class="waves-effect">
            <i data-icon="6" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">General<span class="fa arrow"></span></span></a>
            <ul class="nav nav-second-level">
              <li><a href="chat.html"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i>Company</a></li>
              <li><a href="javascript:void(0)" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i>Department</a></li>
              <li><a href="javascript:void(0)" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="e"></i>Email Formet</a></li>
              <li><a href="javascript:void(0)" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="2"></i>Department</a></li>
              <li><a href="javascript:void(0)" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="2"></i>Role</a></li>
              <li><a href="javascript:void(0)" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="2"></i>Special Module permision</a></li>

          </li>
          
        </ul>
        </li>
        <li> <a href="#" class="waves-effect"><i data-icon="/" class="linea-icon linea-basic fa-fw"></i>
            <span class="hide-menu">Announcement</span></a>          
        </li>
        <li> <a href="forms.html" class="waves-effect"><i data-icon="&#xe00b;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Asset<span class="fa arrow"></span></span></a>
          <ul class="nav nav-second-level">
            <!-- asset pages -->
          </ul>
        </li>        
        <li> <a href="#" class="waves-effect"><i data-icon="&#xe008;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Attendance Menagment<span class="fa arrow"></span></span></a>
          <!-- attendance menagment pages -->
        </li>
        <li> <a href="#" class="waves-effect"><i data-icon="&#xe006;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Check Menagment<span class="fa arrow"></span></span></a>
          <ul class="nav nav-second-level">
            <!-- check menagment pages -->
          </ul>
        </li>
        <li> <a href="tables.html" class="waves-effect"><i data-icon="O" class="linea-icon linea-software fa-fw"></i>
        <span class="hide-menu">Company Document</span></span></a>          
        </li>
       
      </div>
    </div>    
</head>