<?php 
$profile = auth()->user();

?>
@extends('layouts.app')

@section('header')

@section('title','Page Not Found • Instagram')
    <style>
      .error{
        margin-top: 100px;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
      }
      .error .row{
        display: flex;
        justify-content: center;
        align-items: center;     
        flex-direction: column;   
      }
      .error .row h2{
        text-align: center;
        font-size:22px;
      }
      .error .row p{
        font-size: 16px;
        text-align: center;
      }
      .error .row p a{
        color: black;
        text-decoration: none;
      }
    </style>
@endsection

@section('main')

    <div class="error">
      <div class="col-md-8 row">
        <h2>Sorry, this page isn't available.</h2>
        <p class="mt-4">The link you followed may be broken, or the page may have been removed. <a href="{{route('index')}}"> Go back to Instagram. </a></p>
      </div>
    </div>

@endsection

@section('footer')
    
@endsection