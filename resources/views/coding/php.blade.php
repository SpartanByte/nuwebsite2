@extends('layouts.default')
@section('description', 'General information about server-side language PHP and the Laravel framework')
@section('title', 'PHP Information')

@section('content')
<div class="static-content general-coding">
    <span class="page-header uppercase-shadow mid-size-font">PHP</span><hr />

    <img class="coding-logo" src="/images/logos/php-purple-block.png">
    <span class="section-header mid-size-font">PHP</span>
    <p>For aspiring web developers, PHP is often the first true server-side programming language that they work with, although this is not always the case. One of the reasons is the versatility of PHP in web environments because it was developed for web application programming. Therefore, even when writing in procedural PHP, it interacts with HTML and JavaScript very easily. Another reason is that the syntax if fairly easy to understand when beginning to learn, at least in procedural programming. Many programming practices, however, need to be implemented to ensure that secure PHP is being written rather than having many vulnerabilities such as SQL Injection.</p>

    <span class="page-header uppercase-shadow mid-size-font">Code Examples</span>
    <ul class="file-list med-size-font">
        <li>
            <a href="/files/php/alice-in-chains.php.txt">
                <img src="/icons/file-icons/txt-file.png"> "Band" class and instantiation example

            </a>
        </li>
    </ul>

    <div><br /><span class="page-header mid-size-font">PHP FRAMEWORKS</span><br /></div>
    <p>As with most, if not all, programming languages, there are many frameworks available for PHP and each seem to have their own unique pros and cons. Also, as technology moves forward, server-side frameworks in particular sometimes become entirely outdated due to new security practices, new programming paradigms and other reasons. </p>

    <img class="coding-logo" src="/images/logos/laravel-white-block-mini.png">
    <div><span class="page-header mid-size-font">Laravel</span></div>
    <p><a href="https://laravel.com" title="Laravel Documentation" target="_blank">Laravel</a> is an MVC PHP Framework that has certainly been creating a lot of attention and generating popularity. It was created in 2011 by <a href="https://github.com/taylorotwell" title="Taylor Otwell: GitHub">Taylor Otwell</a> as he wanted to provide a more advanced, flexible alternative to <a href="https://codeigniter.com/" title="Codeigniter" target="_blank">Codeigniter</a> (another PHP Framework)(<a href="https://en.wikipedia.org/wiki/Laravel" title="Laravel Wikipedia" target="_blank">Source</a>), specifically to have built in user authentication and authorization capabilities. With Laravel 2 (in late 2011), the template language <strong>Blade</strong> was added for Laravel views to give a simpler, cleaner syntax that is both minimal and easy to understand. Fastforwarding, Laravel 5.4 was released in January of 2017, with 5.5 potentially coming by the end of 2017. Components such as <strong>Artisan</strong> (Laravel's command line), <strong>Eloquent</strong> (Object Relational Mapping for Databases), <strong>Elixir</strong> (an API for managing tasks for pre-processors), and built in validation rules and now coming with Vue.js out of the box makes Laravel a very powerful choice. This is strengthened when considering its flexibility such as allowing developers to create and assign their own Service, Worker, Job and other types of classes.</p>
    <p>Many trends are showing that most PHP Frameworks are fading out, at least at this point, other than Laravel. Sitepoint published <a href="https://www.sitepoint.com/the-state-of-php-mvc-frameworks-in-2017/" title="The State of PHP MVC Frameworks in 2017" target="_blank">"The State of PHP MVC Frameworks in 2017"</a> stating that trends for previously popular frameworks such as <strong>Zen</strong>, <strong>CakePHP</strong>, <strong>CodeIgniter</strong> have all but phased out. The article still includes <a href="https://symfony.com/" title="Symfony PHP Framework" target="_blank">Symfony</a> in the running as Symfony 3 was still yet to be released (Symfony was released in August, 2017).</p>

    <img class="coding-logo" src="/images/logos/symfony-white-block.png">
    <div><span class="page-header mid-size-font">Symfony</span></div>
    <p>Originally concived by <a href="https://sensiolabs.com/" title="SensioLabs" target="_blank">SensioLabs</a>, the PHP framework Symfony was first published in 2005 (<cite>sympfony.com</cite>) under an Open-Source <a href="https://opensource.org/licenses/MIT" title="description of MIT license" target="_blank">MIT License</a>. It was inspired by Java's <a href="#" title="Java Spring Framework" target="_blank">Spring</a> Framework and took aim to be extremely customizable, building robust applications from small too enterprise levels, ability to reuse code to reduce repetative tasks, and have a low performance overhead (<cite>wikipedia.org/wiki/Symfony</cite>). It also included existing PHP tools such as <a href="http://www.doctrine-project.org/" title="The Doctrine Project" target="_blank">Doctrine</a> for database storage/object relational mapper (also cold <strong>ORM</strong>) and so on. Details can get very technical so to shorten, it quickly became very popular in still is used very often despite Laravel bundling many Symfony components with its framework.</p>

    <h4>Sources:</h4>
    <ul>
        <li><a href="https://symfony.com/about" title="Symfony Official Documentation" target="_blank">Symfony.com/about</a></li>
        <li><a href=="https://en.wikipedia.org/wiki/Symfony" title="Symfony Wiki" target="_blank">Symfony wiki</a></li>
    </ul>
    <hr />
</div>
@stop