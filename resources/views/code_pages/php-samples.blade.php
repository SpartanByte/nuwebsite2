    @extends('layouts.default')

    @section('title', 'PHP Examples')

    @section('content')
    <div class="static-content" id="code-content">

        {{-- Current CSS isn't showing anything above the following H1, will need to fix this  --}}
       {{--  <h1 class="page-header">PHP Code Samples</h1> --}}
        <hr />

        <img src="/images/logos/php.png" />
        <h1>PHP Code Samples</h1>
            <p><a href="#">Concert Ticket Ordering Program</a></p>
            <p><a href="#">Business Travel Expenses Calculator</a></p>
            <p><a href="#">Airline Arrival Program</a></p>
            {{-- additional projects will continue like this. -- will be easy to advance into a model returning a request for files related to PHP samples --}}

        <hr />

   
    </div>
@stop