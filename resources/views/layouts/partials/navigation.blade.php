<div class="header" id="ban">
		<div class="container">
		<!-- <div class="header_right wow fadeInLeft animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;"> -->
			<nav class="navbar navbar-default navbar-static-top">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
			  </div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

						<!-- <nav class="link-effect-7" id="link-effect-7"> -->
						<ul class="nav navbar-nav">
							<li class="{{Request::is('/')?"active":""}}"><a href="/">Home</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right" style="margin-left:5%; margin-right:auto">
							@if(Auth::check())
							<li class="dropdown ">
								<a href="/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-
								haspopup="true" aria-expanded="false"><small>{{Auth::user()->name}}</small> <span class="caret"></span></a>
									<ul class="dropdown-menu" >

										<li role="separator" class="divider"></li>
										<li><a href="{{ url('/logout') }}">Logout</a></li>
									</ul>
							</li>
							@else
							<a href="/login" class="btn btn-default">Login</a>
							@endif
						</ul>
				</div>
			</nav>
	</div>
</div>
