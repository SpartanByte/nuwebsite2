@extends('layouts.default')

    {{-- I am testing comments in Blade that should not be seen in inspect page --}}

@section('content')
        {{--<div class="title-container">
                 <header class="page-title">Title of Site</header>
            </div> --}}

        <div class="landing-image">
            <img src="/images/stock/laptop_time.jpg" />

        </div>

        <div id="right-home">
            <section>
            <h1>Brian Wardwell, Web Developer</h1>
            <p>Innovation With Focus on Aesthetics, User Experience and Functionality.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla varius pharetra dui, placerat ultricies magna lacinia nec. Nulla sollicitudin tempus purus, sit amet placerat erat volutpat a. Praesent molestie, orci sed lacinia efficitur, arcu ligula cursus quam, vitae lobortis lacus nulla ullamcorper ipsum. Integer et turpis orci. Suspendisse sed nisi ultrices, euismod velit eget, finibus eros. Duis scelerisque est id aliquam pulvinar. Nulla sit amet elit eleifend, scelerisque lectus vel, suscipit libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas quis quam feugiat, finibus tellus vitae, aliquet tortor. Ut aliquet id enim sed molestie. Cras a mi non orci malesuada molestie. Ut pretium, nisl non finibus sollicitudin, ligula massa tempor tortor, non tincidunt odio augue ut velit. Fusce elit felis, pulvinar id euismod ut, facilisis consequat sapien. </p>

                
                <p><img src="https://dummyimage.com/600x350/000/fff" /></p>
                {{--
                <img src="/images/icons/facebook.png" width="75" height="75" />
                <img src="/images/icons/linkedin.png" width="75" height="75" />
                <img src="/images/icons/twitter.png" width="75" height="75" />
                <img src="/images/icons/spotify.png" width="75" height="75" />
                --}}

            </section>

                </div>

            <div id="social-corner">
                

                <script>
                    image01 = new Image()
                    image01.src ="http://placehold.it/100x100"
                    image02 = new Image()
                    image02.src="https://dummyimage.com/100x100/000/fff"
                </script>
                {{-- This idea could be used for the new social media icons (or stick with the animation on the current site?) --}}
                <a href="{{ url('pages.about') }}" onmouseover="document.images['example'].src=image02.src" onmouseout="document.images['example'].src=image01.src">
                <img src="http://placehold.it/100x50" name="example"> </a>
            </div>

        
@stop