@extends('layouts.app')


@section('header')

@section('title','Instagram • Direct')
    <style>
        .content{
            margin-top: 60px;
        }
         #ig_header
        {
        padding-top: 15px;
        padding-bottom: 15px;
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
        }

        .base-container {
        width: 70%;
        overflow-y:auto;
        height: 70vh;
        
        }
        .friend-text-div {
        display: flex;
        margin-left: 0.5rem;
        }

        .friend-text-div > img {
        height: 2rem;
        align-self: flex-end;
        }

        .friend-text-container {
        width: 10rem;
        display: flex;
        flex-direction: column;
        }

        .friend-text {
        background: #fff;
        border-radius: 0.5rem;
        color: black;
        font-weight: 300;
        border: 1px solid #EFEFEF;
        height: fit-content;
        width: fit-content;
        padding: 0.5rem 1rem;
        margin: 0.12rem 0.5rem;
        }

        .my-text-div {
        display: flex;
        justify-content: flex-end;
        }
        .my-text-container {
        display: flex;
        flex-direction: column;
        align-items: flex-end;
        }

        .my-text {
        background-color:#EFEFEF;
        background-attachment: fixed;
        color: rgb(0, 0, 0);
        border-radius: 0.5rem 0.2rem 0.2rem 0.5rem;
        font-weight: 300;
        height: fit-content;
        width: fit-content;
        padding: 0.5rem 1rem;
        margin: 0.12rem 0.5rem;
        }

        .my-text-container > div:first-child {
        border-radius: 0.5rem 1rem 0.2rem 0.5rem;
        }
        .my-text-container > div:last-child {
        border-radius: 0.5rem 0.2rem 1rem 0.5rem;
        }
        .friend-text-container > div:first-child {
        border-radius: 1rem 0.5rem 0.2rem 0.5rem;
        }
        .friend-text-container > div:last-child {
        border-radius: 0.5rem 0.2rem 0.5rem 1rem;
        }

        .send-message .send-message-input{
            width: 90%;
            border-radius: 30px;
            padding: 10px 0;
        }

        @media screen and (max-width:411px){
            .content{
                width: 100%;
            }
            .content #ig_header ,.content .base-container{
                margin: 0 !important;
                width: 100%;
            }
            .content #ig_header {
                flex: 0 0 100%;
                max-width: 100%;
                margin: 0;

            }
            .content{
            margin-top: 50px;
            }
        }


    </style>
@endsection



@section('main')

<div class="content ">
<section id="ig_header" class="col-8 mx-auto">

    <div class="row">
    <div class="col-2">
    <a href="{{route('index')}}" style="color:black;"><i class="fa fa-arrow-left"></i></a>
    </div>
    <div class="col-6 username">
    khubashvili.saba12
    </div>
    </div>
    
    </section>

<div class="text">
<div class="base-container mx-auto mt-5" id="dm-container">
    <div class="friend-text-div">
      <img src='https://avataaars.io/?avatarStyle=Circle&topType=LongHairStraight&accessoriesType=Blank&hairColor=BrownDark&facialHairType=Blank&clotheType=BlazerShirt&eyeType=Default&eyebrowType=Default&mouthType=Default&skinColor=Light' />
      <div class="friend-text-container">
        <div class="friend-text">Yay!</div>
        <div class="friend-text">You should get a new laptop keyboard cover</div>
        <div class="friend-text">Yay!</div>
      </div>
    </div>
    <div class="my-text-div">
      <div class="my-text-container">
        <div class="my-text">Yeah</div>
        <div class="my-text">You are right</div>
        <div class="my-text">Maybe tomorrow</div>
      </div>
    </div>
    <div class="friend-text-div">
      <img src='https://avataaars.io/?avatarStyle=Circle&topType=LongHairStraight&accessoriesType=Blank&hairColor=BrownDark&facialHairType=Blank&clotheType=BlazerShirt&eyeType=Default&eyebrowType=Default&mouthType=Default&skinColor=Light' />
      <div class="friend-text-container">
        <div class="friend-text">Yay!</div>
        <div class="friend-text">You should get a new laptop keyboard cover</div>
        <div class="friend-text">Yay!</div>
      </div>
    </div>
    <div class="my-text-div">
      <div class="my-text-container">
        <div class="my-text">Yeah</div>
        <div class="my-text">You are right</div>
        <div class="my-text">Maybe tomorrow</div>
        <div class="my-text">Yeah</div>
        <div class="my-text">You are right</div>
        <div class="my-text">Maybe tomorrow</div>
        <div class="my-text">Yeah</div>
        <div class="my-text">You are right</div>
        <div class="my-text">Maybe tomorrow</div>
        <div class="my-text">Yeah</div>
        <div class="my-text">You are right</div>
        <div class="my-text">Maybe tomorrow</div>
        <div class="my-text">Yeah</div>
        <div class="my-text">You are right</div>
        <div class="my-text">Maybe tomorrow</div>
        <div class="my-text">Yeah</div>
        <div class="my-text">You are right</div>
        <div class="my-text">Maybe tomorrow</div>
        <div class="my-text">Yeah</div>
        <div class="my-text">You are right</div>
        <div class="my-text">Maybe tomorrow</div>
      </div>
    </div>
  </div>
</div>

    <div class="send-message mx-auto col-8 mt-2">
        <input type="text" class="send-message-input">
        <i class="fa-solid fa-paper-plane ml-4" style="font-size: 25px;cursor:pointer;"></i>
    </div>
</div>
@endsection


@section('footer')
    <script src="{{asset('js/dm.js')}}"></script>
@endsection