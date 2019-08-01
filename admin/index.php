<?php
include '../class.php';
if(empty($_SESSION['admin'])) echo "<script>alert('You need to log in first');location='login.php'</script>";
?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Pendaftaran DNCC</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="../assets/css/vendor.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/flat-admin.css">

  <!-- Theme -->
  <link rel="stylesheet" type="text/css" href="../assets/css/theme/blue-sky.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/theme/blue.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/theme/red.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/theme/yellow.css">

</head>
<body>
  <div class="app app-default">

    <aside class="app-sidebar" id="sidebar">
      <div class="sidebar-header">
        <a class="sidebar-brand" href="#"><span class="highlight">DNCC</span> COM</a>
        <button type="button" class="sidebar-toggle">
          <i class="fa fa-times"></i>
        </button>
      </div>
      <div class="sidebar-menu">
        <ul class="sidebar-nav">
          <li class="active">
            <a href="../">
              <div class="icon">
                <i class="fa fa-tasks" aria-hidden="true"></i>
              </div>
              <div class="title">Dashboard</div>
            </a>
          </li>
        </ul>
      </div>
      <div class="sidebar-footer">
        <ul class="menu">
          <li>
            <a href="/" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-cogs" aria-hidden="true"></i>
            </a>
          </li>
          <li><a href="#"><span class="flag-icon flag-icon-th flag-icon-squared"></span></a></li>
        </ul>
      </div>
    </aside>

    <script type="text/ng-template" id="sidebar-dropdown.tpl.html">
      <div class="dropdown-background">
        <div class="bg"></div>
      </div>
      <div class="dropdown-container">
        {{list}}
      </div>
    </script>
    <div class="app-container">

      <nav class="navbar navbar-default" id="navbar">
        <div class="container-fluid">
          <div class="navbar-collapse collapse in">
            <ul class="nav navbar-nav navbar-mobile">
              <li>
                <button type="button" class="sidebar-toggle">
                  <i class="fa fa-bars"></i>
                </button>
              </li>
              <li class="logo">
                <a class="navbar-brand" href="#"><span class="highlight">DITYARA</span> COM</a>
              </li>
              <li>
                <button type="button" class="navbar-toggle">
                  <img class="profile-img" src="../assets/images/profile.png">
                </button>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-left">
              <li class="navbar-title">DIAN NUSWANTORO COMPUTER CLUB</li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <a href="./?logout" class="btn btn-danger">Logout</a>
            </ul>
          </div>
        </div>
      </nav>

      <div class="btn-floating" id="help-actions">
        <div class="btn-bg"></div>
        <button type="button" class="btn btn-default btn-toggle" data-toggle="toggle" data-target="#help-actions">
          <i class="icon fa fa-info"></i>
          <span class="help-text">Shortcut</span>
        </button>
        <div class="toggle-content">
          <ul class="actions">
            <li><a href="#"><small><i>Licensed for:</i></small></a></li>
            <li><a href="#">Dian Nuswantoro Computer Club</a></li>
          </ul>
        </div>
      </div>

      <?php if(empty($_GET['page']))
      {
        $anggota = $use->getAnggotas();
        ?>
        <div class="row">

          <div class="col-md-12">
            <h3>Devisi Dian Nuswantor Computer Club</h3>

          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <a class="card card-banner card-green-light" href="./?page=devisi&id=Mobile">
              <div class="card-body">
                <i class="icon fa fa-mobile fa-4x"></i>
                <div class="content">
                  <div class="title">Mobile</div>
                  <div class="value"><span class="sign"></span><?php echo count($use->getAnggotaDevisi('Mobile')) ?></div>
                </div>
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <a class="card card-banner card-yellow-light" href="./?page=devisi&id=Web">
              <div class="card-body">
                <i class="icon fa fa-chrome fa-4x"></i>
                <div class="content">
                  <div class="title">Web</div>
                  <div class="value"><span class="sign"></span><?php echo count($use->getAnggotaDevisi('Web')) ?></div>
                </div>
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <a class="card card-banner card-green-light" href="./?page=devisi&id=Multimedia">
              <div class="card-body">
                <i class="icon fa fa-camera fa-4x"></i>
                <div class="content">
                  <div class="title">Multimedia</div>
                  <div class="value" style="font-size: 46px;"><span class="sign"></span><?php echo count($use->getAnggotaDevisi('Multimedia')) ?></div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <a class="card card-banner card-yellow-light" href="./?page=devisi&id=Jaringan">
              <div class="card-body">
                <i class="icon fa fa-signal fa-4x"></i>
                <div class="content">
                  <div class="title">Jaringan</div>
                  <div class="value"><span class="sign"></span><?php echo count($use->getAnggotaDevisi('Jaringan')) ?></div>
                </div>
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <a class="card card-banner card-green-light" href="./?page=devisi&id=Dekstop">
              <div class="card-body">
                <i class="icon fa fa-desktop fa-4x"></i>
                <div class="content">
                  <div class="title">Dekstop</div>
                  <div class="value"><span class="sign"></span><?php echo count($use->getAnggotaDevisi('Dekstop')) ?></div>
                </div>
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <a class="card card-banner card-yellow-light" href="./?page=devisi&id=Broadcast">
              <div class="card-body">
                <i class="icon fa fa-bullhorn fa-4x"></i>
                <div class="content">
                  <div class="title">Broadcast</div>
                  <div class="value" style="font-size: 46px;"><span class="sign"></span><?php echo count($use->getAnggotaDevisi('Broadcast')) ?></div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <?php
      } 
      else{
        if(file_exists("module/".$_GET['page'].".php"))
        {
          include "module/".$_GET['page'].".php";
        }
        else{
          ?>
          <div class="row">
            <div class="flex-center">
              <div class="app-header"></div>
              <div class="app-body">
                Pages not found
              </div>
            </div>
          </div>
          <?php
        }
      }
      ?>
    <?php  
    if (isset($_GET['logout'])) {
      session_destroy();
      echo "<meta http-equiv='refresh' content='0'>";
    }
    ?>


      <footer class="app-footer"> 
        <div class="row">
          <div class="col-xs-12">
            <div class="footer-copyright">
              Copyright &copy; 2019 <b>@haidityara</b>. All rights reserved. Risk for all content that showed is on license owner.
            </div>
          </div>
        </div>
      </footer>
    </div>

  </div>
  
  <script type="text/javascript" src="../assets/js/vendor.js"></script>
  <script type="text/javascript" src="../assets/js/app.js"></script>

</body>
</html>