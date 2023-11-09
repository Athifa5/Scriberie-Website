@extends('layouts.app')
  

  
@section('contents')
  <div class="row">
  <marquee><h1>Welcome Back!!! Dear {{ auth()->user()->name }}</h1></marquee>
  <img src="https://clickup.com/blog/wp-content/uploads/2020/01/note-taking.png" height="460px" width="1900px"></img>
  </div>
@endsection