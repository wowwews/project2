<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8"><link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic' rel='stylesheet' type='text/css'>

    <meta name="og:title" content="@yield('title')" />

    <link rel="stylesheet" href="/css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="/css/grid.css" type="text/css" media="screen">
    <link rel="stylesheet" href="/css/camera.css" type="text/css" media="screen">
    <link rel="stylesheet" href="/css/style.css" type="text/css" media="screen">
    <script type="text/javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" src="/js/jquery-migrate-1.1.1.js"></script>
    <script type="text/javascript" src="/js/camera.js"></script>
    <script type="text/javascript" src="/js/jquery.easing.1.3.js"></script>
    <script>
        jQuery(function(){      
        jQuery('#camera_wrap_1').camera({
            height: '317px',
            loader: false,
            pagination: false,
            thumbnails: false
        });
        });
    </script>

    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"
    />
</head>

<body>
	<header>
		<div class="container_12">
			<div class="grid_12">
				<div class="wrapper">
					<a href="/">
                        <img src="/images/logo.gif" width="170" />
                    </a>
					<nav>
						<ul class="menu">
							<li class="active"><a href="/">Главная</a></li>
							<li><a href="{{ route('pages', 'works') }}">Портфолио</a></li>
							<li><a href="{{ route('pages', 'clients') }}">Клиенты</a></li>
							<li><a href="{{ route('pages', 'blog') }}">Блог</a></li>
							<li><a href="{{ route('pages', 'contacts') }}">Контакты</a></li>

                            @auth 
                                <li><a href="{{ route('login') }}">✅ Профиль</a></li>
                            @else 
                                <li><a href="{{ route('login') }}">✅ Логин</a></li>
                            @endauth
                            
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>

    @yield('content');

    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script>
        Fancybox.bind("[data-fancybox]", {
            // Your custom options
        });
    </script>
</body>
</html>
