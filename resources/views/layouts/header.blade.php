<header class="fixed-header">
	<div class="header-top">
		<div class="container">
			<div class="pull-left">
				<a href="#" class="logo">AlcaSoft</a>
			</div>
			<!-- /.pull-left -->
			<div class="pull-right">
				<div class="ico-item hidden-on-desktop">
					<button type="button" class="menu-button js__menu_button fa fa-bars waves-effect waves-light"></button>
				</div>
				<!-- /.ico-item hidden-on-desktop -->
				
				<!-- /.ico-item -->
				{{-- <div class="ico-item fa fa-arrows-alt js__full_screen"></div> --}}
				<!-- /.ico-item fa fa-fa-arrows-alt -->
				
				<!-- /.ico-item -->
				
				<!-- /.ico-item -->
				
				<!-- /.ico-item -->
				<div class="ico-item">
					<a href="#" class="ico-item fa fa-user js__toggle_open" data-target="#user-status"></a>
					<div id="user-status" class="user-status js__toggle">
						<a href="#" class="avatar"><img src="http://placehold.it/80x80" alt=""><span class="status online"></span></a>
						<h5 class="name"><a href="#">{{ Auth::user()->name }}</a></h5>
						<h5 class="position">{{ Auth::user()->email }}</h5>
						<!-- /.name -->
						<div class="control-items">
							<div class="control-item"><a href="#" title="Settings"><i class="fa fa-gear"></i></a></div>
							<div class="control-item"><a href="{{ route('logout') }}" class="fa fa-logout" title="Log out"><i class="fa fa-power-off"></i></a></div>
						</div>
						<!-- /.control-items -->
					</div>
					<!-- /#user-status -->
				</div>
				<!-- /.ico-item -->
			</div>
			<!-- /.pull-right -->
		</div>
		<!-- /.container -->
	</div>
	<!-- /.header-top -->
	@include('layouts.menu')
	<!-- /.nav-horizontal -->
</header>