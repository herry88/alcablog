<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Alca</title>
    <link rel="stylesheet" href="/ninja/light/assets/styles/style.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <!-- mCustomScrollbar -->
    <link rel="stylesheet" href="/ninja/light/assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.min.css">

    <!-- Waves Effect -->
    <link rel="stylesheet" href="/ninja/light/assets/plugin/waves/waves.min.css">

  
    <!-- Color Picker -->
    <link rel="stylesheet" href="/ninja/light/assets/color-switcher/color-switcher.min.css">


    <link rel="stylesheet" href="/ninja/light/assets/plugin/datatables/media/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="/ninja/font-awesome/css/all.css" />

    <link rel="stylesheet" href="/ninja/light/assets/dataTables1.css">
    <link rel="stylesheet" href="/ninja/light/assets/dataTables2.css">
    <link rel="stylesheet" type="text/css" href="/ninja/assets/custom.css">

    <!-- Main Styles -->
    <link rel="stylesheet" href="/ninja/light/assets/styles/style.min.css">

    <!-- mCustomScrollbar -->
    <link rel="stylesheet" href="/ninja/light/assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.min.css">

    <!-- Waves Effect -->
    <link rel="stylesheet" href="/ninja/light/assets/plugin/waves/waves.min.css">

    
    <!-- Percent Circle -->
    <link rel="stylesheet" href="/ninja/light/assets/plugin/percircle/css/percircle.css">

    <!-- Chartist Chart -->
    <link rel="stylesheet" href="/ninja/light/assets/plugin/chart/chartist/chartist.min.css">

    <!-- FullCalendar -->
    <link rel="stylesheet" href="/ninja/light/assets/plugin/fullcalendar/fullcalendar.min.css">
    <link rel="stylesheet" href="/ninja/light/assets/plugin/fullcalendar/fullcalendar.print.css" media='print'>

    <!-- Color Picker -->
    <link rel="stylesheet" href="/ninja/light/assets/color-switcher/color-switcher.min.css">
</head>

<body>
<div class="main-menu">
    <header class="header">
        <a href="index.html" class="logo">Admin</a>
        <button type="button" class="button-close fa fa-times js__menu_close"></button>
        <div class="user">

        <?php 
            $name = \App\User::where('id', Auth::user()->id)->first();
         ?>
            <a href="#" class="avatar"><img src="/ninja/admin.jpg" alt=""><span class="status online"></span></a>
            <h5 class="name"><a href="profile.html">{{$name->name}}</a></h5>
            <h5 class="position">Admin</h5>
            <!-- /.name -->
            <div class="control-wrap js__drop_down">
                <i class="fa fa-caret-down js__drop_down_button"></i>
                <div class="control-list">
                    <div class="control-item"><a href="profile.html"><i class="fa fa-user"></i> Profile</a></div>
                    <div class="control-item"><a href="#"><i class="fa fa-gear"></i> Settings</a></div>

                    <div class="control-item"><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i>{{ __('Logout') }}</a></div>
                                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                </div>
                <!-- /.control-list -->
            </div>
            <!-- /.control-wrap -->
        </div>
        <!-- /.user -->
    </header>
    <!-- /.header -->
    <div class="content">

        <div class="navigation">
            <h5 class="title">Navigation</h5>
            <!-- /.title -->
            <ul class="menu js__accordion">
                <li class="current">
                    <a class="waves-effect" href="/home"><i class="menu-icon fa fa-home"></i><span>Dashboard</span></a>
                </li>
            </ul>
            <!-- /.menu js__accordion -->
            
            <!-- /.title -->
            @include('layouts.menu')
            <!-- /.menu js__accordion -->
        </div>
        <!-- /.navigation -->
    </div>
    <!-- /.content -->
</div>
<!-- /.main-menu -->

<div class="fixed-navbar">
    <div class="pull-left">
        <button type="button" class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
        <h1 class="page-title">Home</h1>
        <!-- /.page-title -->
    </div>
    <!-- /.pull-left -->
    <div class="pull-right">
        <div class="ico-item">
            <a href="#" class="ico-item fa fa-search js__toggle_open" data-target="#searchform-header"></a>
            <form action="#" id="searchform-header" class="searchform js__toggle"><input type="search" placeholder="Search..." class="input-search"><button class="fa fa-search button-search" type="submit"></button></form>
            <!-- /.searchform -->
        </div>
        <!-- /.ico-item -->
        <div class="ico-item fa fa-arrows-alt js__full_screen"></div>
        <!-- /.ico-item fa fa-fa-arrows-alt -->
        <div class="ico-item toggle-hover js__drop_down ">
            <span class="fa fa-th js__drop_down_button"></span>
            <div class="toggle-content">
                <ul>
                    <li><a href="#"><i class="fa fa-github"></i><span class="txt">Github</span></a></li>
                    <li><a href="#"><i class="fa fa-bitbucket"></i><span class="txt">Bitbucket</span></a></li>
                    <li><a href="#"><i class="fa fa-slack"></i><span class="txt">Slack</span></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i><span class="txt">Dribbble</span></a></li>
                    <li><a href="#"><i class="fa fa-amazon"></i><span class="txt">Amazon</span></a></li>
                    <li><a href="#"><i class="fa fa-dropbox"></i><span class="txt">Dropbox</span></a></li>
                </ul>
                <a href="#" class="read-more">More</a>
            </div>
            <!-- /.toggle-content -->
        </div>
        <!-- /.ico-item -->
        <a href="#" class="ico-item fa fa-envelope notice-alarm js__toggle_open" data-target="#message-popup"></a>
        <a href="#" class="ico-item pulse"><span class="ico-item fa fa-bell notice-alarm js__toggle_open" data-target="#notification-popup"></span></a>
        <a href="{{ route('logout') }}" class="ico-item fa fa-power-off" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" ></a>
    </div>
    <!-- /.pull-right -->
</div>
<!-- /.fixed-navbar -->
<!-- #color-switcher -->
@include('sweet::alert')
@yield('content')
<!--/#wrapper -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="/ninja/light/assets/script/html5shiv.min.js"></script>
        <script src="/ninja/light/assets/script/respond.min.js"></script>
    <![endif]-->
    <!-- 
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/ninja/light/assets/scripts/jquery.min.js"></script>
    <script src="/ninja/light/assets/scripts/modernizr.min.js"></script>
    <script src="/ninja/light/assets/plugin/bootstrap/js/bootstrap.min.js"></script>
    <script src="/ninja/light/assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/ninja/light/assets/plugin/nprogress/nprogress.js"></script>
    <script src="/ninja/light/assets/plugin/waves/waves.min.js"></script>
    <!-- Full Screen Plugin -->
    <script src="/ninja/light/assets/plugin/fullscreen/jquery.fullscreen-min.js"></script>

    <!-- Percent Circle -->
    <script src="/ninja/light/assets/plugin/percircle/js/percircle.js"></script>

    <!-- Google Chart -->
    <script type="text/javascript" src="/ninja/light/assets/loader.js"></script>

    <!-- Chartist Chart -->
    <script src="/ninja/light/assets/plugin/chart/chartist/chartist.min.js"></script>
    <script src="/ninja/light/assets/scripts/chart.chartist.init.min.js"></script>

    <!-- FullCalendar -->
    <script src="/ninja/light/assets/plugin/moment/moment.js"></script>
    <script src="/ninja/light/assets/plugin/fullcalendar/fullcalendar.min.js"></script>
    <script src="/ninja/light/assets/scripts/fullcalendar.init.js"></script>

    <script src="/ninja/light/assets/scripts/main.min.js"></script>
    <script src="/ninja/light/assets/color-switcher/color-switcher.min.js"></script>

    
    <script src="/ninja/light/assets/1.js"></script>
    <script src="/ninja/light/assets/2.js"></script>
    <script src="/ninja/light/assets/3.js"></script>
    <script src="/ninja/light/assets/4.js"></script>
    <script src="/ninja/light/assets/5.js"></script>
    <script src="/ninja/light/assets/6.js"></script>
    <script src="/ninja/light/assets/7.js"></script>
    <script src="/ninja/light/assets/8.js"></script>
    <script src="/ninja/light/assets/9.js"></script>



    <script src="/ninja/light/assets/plugin/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="/ninja/light/assets/plugin/datatables/media/js/dataTables.bootstrap.min.js"></script>
    <script src="/ninja/light/assets/plugin/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
    <script src="/ninja/light/assets/plugin/datatables/extensions/Responsive/js/responsive.bootstrap.min.js"></script>
    <script src="/ninja/light/assets/scripts/datatables.demo.min.js"></script>




    <script src="/ninja/light/assets/scripts/jquery.min.js"></script>
    <script src="/ninja/light/assets/scripts/modernizr.min.js"></script>
    <script src="/ninja/light/assets/plugin/bootstrap/js/bootstrap.min.js"></script>
    <script src="/ninja/light/assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/ninja/light/assets/plugin/nprogress/nprogress.js"></script>
    <script src="/ninja/light/assets/plugin/waves/waves.min.js"></script>
    <!-- Full Screen Plugin -->
    <script src="/ninja/light/assets/plugin/fullscreen/jquery.fullscreen-min.js"></script>
    @yield('js')
</body>
</html>

