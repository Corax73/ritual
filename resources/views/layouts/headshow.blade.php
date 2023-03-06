<header id="home">

<!-- ===== Over color Image ===== -->
<div class="background-overlay">
	
	<div class="container-header">
		
		<!-- ===== Sticky Navigation ===== -->
		<div class="navbar navbar-inverse bs-docs-nav navbar-fixed-top sticky-navigation bgc-two">
			<div class="container">
				<div class="navbar-header">
					
					<!-- ===== Logo on Sticky Navigation Bar ===== -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#onepage-navigation">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="/">Ritual73</a>
					
				</div>
				
				<!-- ===== Navigation Menu ===== -->
				<div class="navbar-collapse collapse" id="onepage-navigation">
					<ul class="nav navbar-nav navbar-right main-navigation">
						<li><a href="/">На главную</a></li>
						<li><a href="/#section-about">Товары</a></li>
						<li><a href="/#section-features">Наши услуги</a></li>
						<li><a href="/#section-pricing">Цены</a></li>
						<li><a href="/#section-portfolio">Наши работы</a></li>
						<li><a href="/#section-testimonial">Отзывы</a></li>
						<li><a href="/#section-contact">Обратная связь</a></li>
					</ul>
				</div>
				
			</div>
			
		</div>
		<div class="side-images pull-right">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <p>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                        </a>
                    </p>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
		<!-- ===== End Sticky Navigation ===== -->
		
	</div>
	<!-- ===== Welcome ===== -->
	<div class="container">
		
		<div class="row">
			
			<div class="col-md-10 col-md-offset-1 distance-header">
				
				<h1>
                    <strong>Ritual73</strong>
				</h1>
				<div class="underline"></div>
				<h1>
                    Responsive HTML5 Template
				</h1>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>
                </div>
				
				
				<!-- ===== Call To Action Button ===== -->
				<div id="call_to_action-5" class="distance-button">
				
				<a href="#section-about" class="btn standard-button">()</a>
				
				</div>
				
			</div>

		</div>
		
	</div>
	<!-- ===== End Welcome ===== -->
	
</div>

</header>