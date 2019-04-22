<?php 
$admin = $this->db->where('id',$this->session->userdata('id_admin'))->get('admin')->result();
?>
<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
  <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="PIXINVENT">
  <title><?php echo $title ?></title>
  <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url('backassets/assets/') ?>app-assets/images/ico/apple-icon-60.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('backassets/assets/') ?>app-assets/images/ico/apple-icon-76.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url('backassets/assets/') ?>app-assets/images/ico/apple-icon-120.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url('backassets/assets/') ?>app-assets/images/ico/apple-icon-152.png">
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('backassets/assets/') ?>app-assets/images/ico/favicon.ico">
  <link rel="shortcut icon" type="image/png" href="<?php echo base_url('backassets/assets/') ?>app-assets/images/ico/favicon-32.png">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-touch-fullscreen" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="default">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('backassets/assets/') ?>app-assets/css/bootstrap.css">
  <!-- font icons-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('backassets/assets/') ?>app-assets/fonts/icomoon.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('backassets/assets/') ?>app-assets/fonts/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('backassets/assets/') ?>app-assets/vendors/css/extensions/pace.css">
  <!-- END VENDOR CSS-->
  <!-- BEGIN ROBUST CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('backassets/assets/') ?>app-assets/css/bootstrap-extended.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('backassets/assets/') ?>app-assets/css/app.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('backassets/assets/') ?>app-assets/css/colors.css">
  <!-- END ROBUST CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('backassets/assets/') ?>app-assets/css/core/menu/menu-types/vertical-menu.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('backassets/assets/') ?>app-assets/css/core/menu/menu-types/vertical-overlay-menu.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('backassets/assets/') ?>app-assets/css/core/colors/palette-gradient.css">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('backassets/assets/') ?>assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('backassets/assets/') ?>css/dropify.css">
  <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url('backassets/assets/') ?>data-table/bootstrap.css"> -->
  <!-- <link rel="stylesheet" type="text/css" href="http://localhost/adhimix-vendor-new/public/backend/data-table/bootstrap.css"> -->

  <style type="text/css">
  html body{
    overflow-x: hidden;
  }
  .hide{
    display: none;
  }
  .alert{
    color:white!important;
  }
</style>
</head>
<body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout  vertical-menu 2-columns  fixed-navbar">

  <!-- navbar-fixed-top-->
  <nav class="header-navbar navbar navbar-with-menu navbar-fixed-top navbar-semi-dark navbar-shadow ">
    <div class="navbar-wrapper">
      <div class="navbar-header">
        <ul class="nav navbar-nav">
          <li class="nav-item mobile-menu hidden-md-up float-xs-left"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5 font-large-1"></i></a></li>
          <li class="nav-item"><a href="index.html" class="navbar-brand nav-link"><img alt="branding logo" src="<?php echo base_url('backassets/assets/') ?>vmd.png" data-expand="<?php echo base_url('backassets/assets/') ?>vmd.png" data-collapse="<?php echo base_url('backassets/assets/') ?>logo2.png" class="brand-logo"></a></li>
          <li class="nav-item hidden-md-up float-xs-right"><a data-toggle="collapse" data-target="#navbar-mobile" class="nav-link open-navbar-container"><i class="icon-ellipsis pe-2x icon-icon-rotate-right-right"></i></a></li>
        </ul>
      </div>
      <div class="navbar-container content container-fluid">
        <div id="navbar-mobile" class="collapse navbar-toggleable-sm">
          <ul class="nav navbar-nav">
            <li class="nav-item hidden-sm-down"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5"></i></a></li>
            <li class="nav-item hidden-sm-down"><a href="#" class="nav-link nav-link-expand"><i class="ficon icon-expand2"></i></a></li>
          </ul>
          <ul class="nav navbar-nav float-xs-right">
            <li class="dropdown dropdown-user nav-item"><a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link dropdown-user-link"><span class="avatar avatar-online"><img src="<?php echo base_url('backassets/assets/') ?>app-assets/images/portrait/small/avatar-s-1.png" alt="avatar"><i></i></span><span class="user-name"><?php echo $admin[0]->fullname ?></span></a>
              <div class="dropdown-menu dropdown-menu-right"><a href="#" data-toggle="modal" data-target="#ganti" class="dropdown-item"><i class="icon-head"></i> Ganti Password</a>
                <div class="dropdown-divider"></div><a href="<?php echo base_url('back/logout') ?>" class="dropdown-item"><i class="icon-power3"></i> Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <div class="modal fade text-xs-left" id="ganti" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title" id="myModalLabel1">Ganti Password</h4>
        </div>
        <form method="post" action="<?php echo base_url('back/gantiPass') ?>">
          <div class="modal-body">
            <!-- <div class="form-group">
              <label for="timesheetinput1">Password Lama</label>
              <div class="position-relative has-icon-right">
                <input type="password" id="lama" onkeyup="cek()" required="" class="form-control" placeholder="Masukan Password lama" name="">
                <div class="form-control-position">
                  <i class="icon-eye4"  data-toggle="tooltip" data-placement="top" onmousedown="liat()" onmouseup="tutup()"></i>
                </div>
              </div>
              <small class="btn-danger hide" id="msgpassword">Password salah</small>
            </div> -->
            <div class="form-group">
              <label for="timesheetinput1">Password Baru</label>
              <div class="position-relative has-icon-right">
                <input type="password" id="baru" onkeyup="sama()" required="" class="form-control" placeholder="Password baru" name="">
                <div class="form-control-position">
                  <i class="icon-eye4"  data-toggle="tooltip" data-placement="top" onmousedown="liat2()" onmouseup="tutup2()"></i>
                </div>
              </div>
              <small class="btn-danger hide" id="msg2">Password tidak cocok</small>
            </div>
            <div class="form-group">
              <label>Password Baru</label>
              <input type="password" onkeyup="sama()" id="baru2" class="form-control" required="" placeholder="Password baru" name="password">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
            <button type="submit" id="btnganti" class="btn btn-outline-primary">Ganti</button>
          </div>
        </form>
      </div>
    </div>
  </div>


  <!-- main menu-->
  <div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow">
    <!-- main menu header-->
    <div class="main-menu-header">
      <!-- <input type="text" placeholder="Search" style="width: 100%" class="menu-search form-control"/> -->
    </div>
    <!-- / main menu header-->
    <!-- main menu content-->
    <div class="main-menu-content">
      <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
        <li class=" nav-item"><a href="<?php echo base_url('back/dashboard') ?>"><i class="icon-home3"></i><span data-i18n="nav.dash.main" class="menu-title">Dashboard</span></a>
        </li>
        <li class=" nav-item"><a href="<?php echo base_url('back/list') ?>"><i class="icon-list2"></i><span data-i18n="nav.dash.main" class="menu-title">Client List</span></a>
        </li><!-- 
        <li class=" nav-item"><a href="<?php echo base_url('back/photo') ?>"><i class="icon-photo"></i><span data-i18n="nav.dash.main" class="menu-title">Project's Photos</span></a>
        </li> -->
        <li class=" nav-item"><a href="<?php echo base_url('back/project') ?>"><i class="icon-list"></i><span data-i18n="nav.dash.main" class="menu-title">Data Project</span></a>
        </li>
        <li class=" nav-item"><a href="<?php echo base_url('back/location') ?>"><i class="icon-map-marker"></i><span data-i18n="nav.dash.main" class="menu-title">User location <?php echo $this->session->userdata('id_admin') ?></span></a>
        </li>
        
        
          <!-- <ul class="menu-content">
            <li><a href="#" data-i18n="nav.menu_levels.second_level" class="menu-item">Second level</a>
            </li>
            <li><a href="#" data-i18n="nav.menu_levels.second_level_child.main" class="menu-item">Second level child</a>
              <ul class="menu-content">
                <li><a href="#" data-i18n="nav.menu_levels.second_level_child.third_level" class="menu-item">Third level</a>
                </li>
                <li><a hr<li class=" nav-item"><a href="#"><i class="icon-android-funnel"></i><span data-i18n="nav.menu_levels.main" class="menu-title">Menu levels</span></a>ef="#" data-i18n="nav.menu_levels.second_level_child.third_level_child.main" class="menu-item">Third level child</a>
                  <ul class="menu-content">
                    <li><a href="#" data-i18n="nav.menu_levels.second_level_child.third_level_child.fourth_level1" class="menu-item">Fourth level</a>
                    </li>
                    <li><a href="#" data-i18n="nav.menu_levels.second_level_child.third_level_child.fourth_level2" class="menu-item">Fourth level</a>
                    </li> -->
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </li>
      </ul>
    </div>  
  </div>
  <!-- / main menu-->

  <div class="app-content content container-fluid">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body"><!-- Statistics -->
        <script>
          function cek() {
            if ($("#lama").val()!=='') {
              $.ajax({
                type: "GET",
                url: "<?php echo base_url('back/carilama/') ?>"+$("#lama").val(),
                success: function (data) {
                  var dataa = data;
                  if (dataa==1) {
                    $("#btnganti").prop('disabled',true);
                    $("#msgpassword").removeClass('hide');
                  }else{
                    $("#btnganti").prop('disabled',false);
                    $("#msgpassword").addClass('hide');
                  }
                  alert(data);
                }
              }); 
            }else{
              $("#msgpassword").addClass('hide');
              $("#btnganti").prop('disabled',false);
            }
          }

          function sama() {
            if ($("#baru").val()!=='' && $("#baru2").val()!=='') {
             if ($("#baru").val()===$("#baru2").val()) {
              $("#msg2").addClass('hide');
              $("#btnganti").prop('disabled',false);
            }else{
              $("#msg2").removeClass('hide');
              $("#btnganti").prop('disabled',true);
            }
          }else{
            $("#msg2").addClass('hide');
            $("#btnganti").prop('disabled',false);
          }
        }

        function liat() {
          $("#lama").attr('type','text');
          // alert('haha');
        }
        function tutup() {
          $("#lama").attr('type','password');
          // alert('haha');
        }
        function liat2() {
          $("#baru").attr('type','text');
          // alert('haha');
        }
        function tutup2() {
          $("#baru").attr('type','password');
          // alert('haha');
        }
      </script>