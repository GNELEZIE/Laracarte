@extends('Layout.master',['title'=>'About'])
@section('contenair')
<div class="container">
<h2>What is laracarte ?</h2>
 <p>Laracarte est une partie de laravel <a href="http://laravel.com" target="_blank">laracarte.com</a> meilleur framework.</p>
 <div class="row">
     <div class="col-md-6">
         <p class="alert alert-warning">
                <strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> app has been built by @etsmo for learning purposes.</strong> </p>
                <p>Feel free to help to improve the source code.</p>
                <hr>
            <h2> What is Laramap?</h2>
                <p>Laramap is the website by which Laracarte was inspired :).</p>
                
                <p>More info <a href=""> here.</a></p>

                <h2>Which tools and services are used in Laracarte?</h2>
                <p>Basically it's built on Laravel & Bootstrap. But there's a bunch of services used for email and other sections.</p>
                <hr>
                <ul>
                        
                        
                        
                       
                        
                        
                       
                       
                       
                    <li>Laravel</li>
                    <li>Bootstrap</li>
                    <li>Amazon S3</li>
                    <li> Mandrill</li>
                    <li>Google Maps</li>
                    <li>Gravatar</li>
                    <li> Antony Martin s Geolocation Package</li>
                    <li> Michel Fortins Markdown Parser Package</li>
                    <li> Heroku</li>
                </ul>
     </div>
 </div>

</div>
@endsection
