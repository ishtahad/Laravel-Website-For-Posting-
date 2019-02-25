
<!-- extends means that there will be code from layouts.app.blade.php -->
@extends('layouts.app')

<!-- we wrap the section which should be included to the extended file-->
@section('content')
        
       <div class = "jumbotron text-center"
          <h1> Welcome To Laravel! </h1>
          <p> this is a laravel application</p>
          <p> 
             <a class= "btn btn-primary btn-lg" href="/login" role="button">Login</a> 
             <a class= "btn btn-success btn-lg" href="/register" role="button">Register</a>
          </p>  

@endsection        
   