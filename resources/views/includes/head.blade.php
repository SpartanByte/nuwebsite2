<meta charset="utf-8">
<meta name="description" content="">
<meta name="author" content="BWardwell">
	

<title>BWardwell | @yield('title')</title>
{{-- Favicon --}}
<link rel="icon" type="image/png" href="/images/icons/bw-favicon.png" />
<link rel="icon" href="/images/icons/bw-favicon.png" type="image/png" />

{{-- Resetting browser defaults for CSS --}}
<link rel="stylesheet" href="{{ URL::asset('css/reset.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
{{-- Responsive design breakpoints (dedicated CSS file) --}}
<link rel="stylesheet" href="{{ URL::asset('css/responsive.css') }}" />
{{-- importing Proza Libre fonts via webkit --}}
<link rel="stylesheet" href="{{ URL::asset('css/proza-libre-webkit/stylesheet.css') }}" />

{{-- CDN for jQuery --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
{{-- CDN for Vue.JS --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.min.js"></script>

{{-- Loading Bootstrap from CDN --}} 
{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> --}}
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	{{-- Javascript scripts below --}}
	{{-- Slideshow.js --}}
	<script src="{{ URL::asset('js/slideshow.js') }}" /></script>
