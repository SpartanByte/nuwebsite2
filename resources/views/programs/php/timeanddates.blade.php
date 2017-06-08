 @extends('layouts.default')

 @section('title', 'Time and Dates')

 @section('content')

<div class="static-content general-coding">

        <span class="page-header uppercase-shadow small-header-font">Coding > PHP > Time and Dates Example</span>

        <hr />
        <img class="quarter-img" src="/images/logos/php.png"/>

        <span class="section-header uppercase-shadow mid-size-font">PHP: Time and Dates</span>
        <article>
          <p>Time and date retrieving and formatting is easy in PHP. </p>
          
          {{-- standard PHP for example --}}
          <span class="code-gen-text">
              <?php $central = date_default_timezone_set("America/Chicago"); 

              
              echo '<p>'."For example, you loaded this page at " . date("h:i") . " Central Time. It is the " 
                  . date('d') . " of " . date("F") . " and the year is " . date("Y") . '.</p>'; ?>
          </span>
          <p>All of the bold text was actually printed onto the screen using PHP rather than markup, such as HTML. In all programming languages, you can also return 
              the number of days from a certain date. This can be fun and very useful in the case of special events among other things.</p>
              <span class="code-gen-text">
              <?php 
                    $july4th=strtotime("July 04");
                    $halloween=strtotime("October 31");

                    $july4th=ceil(($july4th-time())/60/60/24);
                    $halloween=ceil(($halloween-time())/60/60/24);

                    $nextYear = date('Y', strtotime('+1 year'));
                    $newYearsDay = strtotime("December 31");
                    $newYearsDay = ceil(($newYearsDay-time())/60/60/24);

                    echo "<p>There are " . $july4th ." days until 4th of July. Additionally, there are " . $halloween . " days until Halloween. </p>";
                    echo "<p>How many days until next year? Well, next year will be " . $nextYear . " and New Year's Eve is " . $newYearsDay . " days away!</p>";
                ?> 
                </span>
                <p>This is all being calculated based on the given date, year, or time that was generated by your computer. It can be set to use a default timezone or retrieve the timezone based on your location if functionality, and obviously security, is built in.</p>

                <p>With <a href="https://laravel.com">Laravel</a>, programming code can be further minimized and organized by processing all this retrieving and formatting within classes and functions and passing only the variable to this page, which is the <strong>View</strong>. Directly from a Controller, this View is fed the data.</p>

                {{-- <span class="code-gen-text"><p>Today is {{ $currentDate }} at {{ $timestamp }}. This time, the data is being produced from Laravel and Blade.</p></span> --}}

                <p>In addition to standard PHP, <strong>Laravel</strong> is a framework that boasts MVC (Model-View-Controller), which is a very long topic on its own, it also has its own template language: <strong>Blade</strong>. This makes it easy to reference the variables in very little code and more readability so long as those variables and/or data are passed to the View appropriately.</p>

                <hr />

                {{-- @foreach($holidays as list($holiday, $date)) --}}
                <span class="uppercase-shadow mid-size-font center-text" style="display:block;">PHP Holidays - "Days Until" Table</span>
                  <table class="full-table med-size-font">
                <tr class="table-header"><td>Holiday</td><td>Date of Holiday</td><td>Days Remaining</td></tr>
              {{--  @foreach($holidaysArray as list($holiday, $date))
                    <tr><td>{{ $holiday }}</td><td>{{ $date }}</td> --}}

                      @foreach($daysRemaining as $remainingDay)
                      <td>{{ $remainingDay }}</td></tr>
                      @endforeach
                  {{-- @endforeach --}}


                  
                  </table>

        </article>
    </div>
    <div class="bottom-spacer"></div>
    


@stop


