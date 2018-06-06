
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Unicoin-Mining</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/3.0.0/css/font-awesome.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/3.0.0/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/skins/skin-blue.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="Unicoin-Mining.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>U</b>cn</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Unicoin-Mining</b></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="PageUnicoin/Account.html" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs">Ferri Suryadi</span>
            </a>
          </li>
		  <li >
		  <a href="login.html" >Sign out</a>
		  </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
       <li class="active">
          <a href="unicoin-mining.html">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <!-- Optionally, you can add icons to the links -->
        <li><a href="PageUnicoin/PayoutList.html"><i class="fa fa-bitcoin"></i> <span>Payout</span></a></li>
        <li><a href="PageUnicoin/ListOfOrder.html"><i class="fa fa-shopping-cart"></i> <span>Orders</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-book"></i> <span>Account</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
			<li><a href="PageUnicoin/Account.html"><i class="fa fa-gears"></i> <span>Settings</span></a></li>
            <li><a href="PageUnicoin/Wallet.html"><i class="fa fa-list-ul"></i> <span>Wallets</span></a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
		<div class="callout callout-info">
			<h4>Update: 21 Nov 2017!</h4>
			Due to Bitcoin wallets charging enormous fees on small payouts and some exchanges raising their minimum deposit thresholds we’ve changed the minimum payout threshold for Bitcoin (Sha256) contracts from 0.0015 BTC to 0.002 BTC. You can see a complete list of all minimum payout thresholds here.
		</div>
      <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Payout Balance</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>Currency</th>
                    <th>Net Payout</th>
                    <th>Balance</th>
					<th>Withdraw</th>
					<th>Wallet</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>BTC</a></td>
                    <td>0.00404503</td>
                    <td>0.00204503</td>
                    <td>0.00200000</td>
					<td><a target="_blank" href="https://blockchain.info/address/1iKXHrDQiLbAFTzoi8WdtzjkQvkFfJGMs">1iKXHrDQiLbAFTzoi8WdtzjkQvkFfJGMs</td>
                  </tr>
                  <tr>
                    <td>BCH</a></td>
                    <td>0.00405705</td>
                    <td>0.00204503</td>
                    <td>0.00201202</td>
					<td><a target="_blank" href="https://blockchain.info/address/16RvxsKXed2i1rdZKQoicq9Navjeh3dTpM">16RvxsKXed2i1rdZKQoicq9Navjeh3dTpM</td>
                  </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix" style="">
              <a href="PageUnicoin/NewOrder.html" class="btn btn-sm btn-info btn-flat pull-left">New Order</a>
            </div>
            <!-- /.box-footer -->
          </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2018 <a href="#">Unicoin-Mining</a>.</strong> All rights reserved.
  </footer>


  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script
  src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
  crossorigin="anonymous"></script>
  <!-- Bootstrap 3.3.7 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/js/adminlte.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>
