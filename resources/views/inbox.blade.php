@extends('layouts.app')

@section('header')
    @section('title','Instagram • Direct')

    <style>
        a{
            text-decoration: none !important;
        }
        #ig_app{
        padding-top: 85px;
        }
        #ig_header
        {
        
        top: 0;
        padding-top: 15px;
        padding-bottom: 15px;
        color: var(--app-primary-text-color);
        background-color: #fff;
        z-index: 10;
        font-size: 24px;
        font-weight: 700;
        border-bottom: 1px solid rgba(0,0,0,.05);
        }

        #ig_header .col-4
        {
        font-size: 28px;
        }#ig_header .row .username{
            font-size: 20px;
            border-right: 1px solid black;
        }

        #ig-msg-tabs-content{
            background-color: #fff;
        }

        #ig-msg-tabs-content span
        {
        display: block;
        font-size: 18.5px;
        font-weight: 500;
        letter-spacing: 0.15px;
        }

        #ig-msg-tabs-content span.msg-user-name
        {
        color: black;
        }


        #ig-msg-tabs-content i
        {
        font-size: 22px;
        }
        #ig-msg-tabs-content a .row
        {
        margin-bottom: 20px;
        border-bottom: 1px solid #DBDBDB ;
        padding: 20px 0;
        }
        #ig-msg-tabs-content .image img{
            width: 70px;
            height: 70px;
            border-radius: 50%;
        }#ig-msg-tabs-content .camera {
            display: flex;
            justify-content: flex-end;
            color: black;
        }
        @media screen and (max-width:1039px){
            #ig_app .tab-content, #ig_app #ig_header{
                flex: 0 0 100%;
                 max-width: 100%;
            }
            #ig-msg-tabs-content .image img{
            width: 60px;
            height: 60px;
        }
        }
        @media screen and (max-width:603px){
            #ig-msg-tabs-content .camera {
                display: none;
            }
            #ig-msg-tabs-content .image{
                flex: 0 0 33.33%;
                max-width: 33.33%;
            }
        }
    </style>
@endsection

@section('main')
<div class="container-fluid">
    <div id="ig_app" class="row">
        <section id="ig_header" class="col-7 mx-auto">

            <div class="row">
            <div class="col-2">
            <a href="{{route('index')}}" style="color:black;"><i class="fa fa-arrow-left"></i></a>
            </div>
            <div class="col-6 username">
            @ {{$profile->username}}
            </div>
            <div class="col-4 text-right">
            <i class="fa fa-ellipsis-h mr-3"></i>
            <i class="fa fa-pencil-square-o"></i>
            </div>
            </div>
            
            </section>
            
            <div class="tab-content col-7 mx-auto" id="ig-msg-tabs-content">
                <div class="tab-pane fade active show p-3" id="primary" role="tabpanel" aria-labelledby="primary-tab">
                <a href="{{route('dm')}}">
                    <div class="row">
                    <div class="col-2 text-center image">
                    <img src="{{asset('images/user/default-user.png')}}" alt="">
                    </div>
                    <div class="col-8 justify-content-center align-self-center">
                    <span class="msg-user-name">CodeFrog</span>
                    <p class="last-msg-time" style="color:#bdb3b3">see you soon! </p>
                    </div>
                    <div class="col-2  align-self-center camera">
                    <i class="fa fa-camera"></i>
                    </div>
                
                    </div>
            </a>
                <a href="{{route('dm')}}">
                    <div class="row">
                    <div class="col-2 text-center image">
                        <img src="{{asset('images/user/default-user.png')}}" alt="">
                    </div>
                    <div class="col-8 justify-content-center align-self-center">
                        <span class="msg-user-name">CodeFrog</span>
                        <p class="last-msg-time" style="color:#bdb3b3">see you soon! </p>
                    </div>
                    <div class="col-2  align-self-center camera">
                        <i class="fa fa-camera"></i>
                    </div>
                </div>
            </a>

                
                </div>
             </div>
       </div>
    </div>
@endsection

@section('footer')
    
@endsection