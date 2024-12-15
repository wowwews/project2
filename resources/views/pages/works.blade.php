@extends('layouts.app-pages')

@section('title', 'Портфолио')

@section('content')

	<div id="content">
		<div class="inner">
			<div class="container_12">
				<div class="wrapper">
					<div class="grid_12">
						<div class="block">
							<div class="info-block">
								{{ \App\Models\Fielder::ff('slogan') }}
							</div>
							<a href="https://t.me/mazaretto" class="button" rel="nofollow">Заказать</a>
						</div>
					</div>
				</div>
				<div class="wrapper">
					<div class="grid_12">
						<h2 class="h-pad1">My Works</h2>
						<ul class="wrapper works">
							<li class="grid_4 alpha">
								<figure><img src="/images/works1.jpg" alt=""></figure>
								<p><a href="#" class="link">Project 1</a></p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, seiusmod tempor incididunt ut labore et dolore magna.
								<p><a href="#" class="button">Read more</a></p>
							</li>
							<li class="grid_4">
								<figure><img src="/images/works2.jpg" alt=""></figure>
								<p><a href="#" class="link">Project 2</a></p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, seiusmod tempor incididunt ut labore et dolore magna.
								<p><a href="#" class="button">Read more</a></p>
							</li>
							<li class="grid_4 omega">
								<figure><img src="/images/works3.jpg" alt=""></figure>
								<p><a href="#" class="link">Project 3</a></p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, seiusmod tempor incididunt ut labore et dolore magna.
								<p><a href="#" class="button">Read more</a></p>
							</li>
							<li class="grid_4 alpha">
								<figure><img src="/images/works4.jpg" alt=""></figure>
								<p><a href="#" class="link">Project 4</a></p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, seiusmod tempor incididunt ut labore et dolore magna.
								<p><a href="#" class="button">Read more</a></p>
							</li>
							<li class="grid_4">
								<figure><img src="/images/works5.jpg" alt=""></figure>
								<p><a href="#" class="link">Project 5</a></p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, seiusmod tempor incididunt ut labore et dolore magna.
								<p><a href="#" class="button">Read more</a></p>
							</li>
							<li class="grid_4 omega">
								<figure><img src="/images/works6.jpg" alt=""></figure>
								<p><a href="#" class="link">Project 6</a></p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, seiusmod tempor incididunt ut labore et dolore magna.
								<p><a href="#" class="button">Read more</a></p>
							</li>
						</ul>
					</div>
				</div>
			</div>			
		</div>
	</div>

@endsection