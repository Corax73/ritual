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
					<a class="navbar-brand" href="#">Ritual73</a>
					
				</div>
				
				<!-- ===== Navigation Menu ===== -->
				<div class="navbar-collapse collapse" id="onepage-navigation">
					<ul class="nav navbar-nav navbar-right main-navigation">
						<li><a href="#home">На главную</a></li>
						<li><a href="#section-about">Товары</a></li>
						<li><a href="#section-features">Наши услуги</a></li>
						<li><a href="#section-pricing">Цены</a></li>
						<li><a href="#section-portfolio">Наши работы</a></li>
						<li><a href="#section-testimonial">Отзывы</a></li>
						<li><a href="#section-contact">Обратная связь</a></li>
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
    @if (Auth::check())
	<div class="container">
    <div class="col-8">
        <h1>Добавить товар</h1>
        <form method="post" action="{{ route('home.store') }}" enctype="multipart/form-data">
        @csrf
            <div class="form-group">
                <label for="name">Название товара</label>
                <input type="text" class="form-control" id="title" name="title" >
                @if ($errors->has('title'))
                <span class="text-danger">{{ $errors->first('title') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="name">Цена</label>
                <input type="number" class="form-control" id="price" name="price" >
                @if ($errors->has('price'))
                <span class="text-danger">{{ $errors->first('price') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="body">Описание</label>
                <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                @if ($errors->has('description'))
                <span class="text-danger">{{ $errors->first('description') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="image">Фото</label>
                <input type="file" class="form-control-file" id="image" name="image[]" multiple accept="image/*">
                @if ($errors->has('image'))
                <span class="text-danger">{{ $errors->first('image') }}</span>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Добавить</button>
        </form>
    </div>
</div>
@endif
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