@extends('layouts.app')
<link rel="stylesheet" href="{{asset('css/edit_profile.css')}}">
@section('header')

@section('title','Edit profile • Instagram')
@endsection

@section('main')

    <section id="edit_main">

        <div class="fluid">


            <div class="info" style="width:240px;margin:30px 20px 0 0; display:flex; justify-content:space-between;align-items:center;">
             <div class="img-container"><img src="{{asset($profile->profile_image)}}" style="width:38px; border-radius:50px; margin-bottom:15px;" alt="" srcset=""></div>
             
             <div class="name">Xubashvili.saba12 <br>
                
                @if($profile->profile_image !== 'images/user/default-user.png')<a  data-bs-toggle="modal" href="#imageModal"> <p  class="change_image"> Change Profile Image </p> </a>
            
            @else
            {!! Form::model($profile,['method'=>'Put','route'=>['profile.update',$profile->id],'files'=>true]) !!}
                {!! Form::label('image','Change Profile Image',['class'=>'change_image','style'=>'cursor:pointer']) !!}
                {!! Form::file('image',['onchange'=>'form.submit()','style'=>'display:none']) !!}
            {!! Form::close() !!}

             @endif
            </div>
            
            </div>

            
            <div class="form">
                {!! Form::model($profile,['method'=>'Put','route'=>['profile.update',$profile->id]]) !!}

                <div class="edit_form_element" style="margin: 0;">
                {!! Form::label('name','Name') !!}
                {!! Form::text('name',$profile->name,['class'=>'edit_input ']) !!}
            </div>

                <div class="edit_form_element">
                {!! Form::label('username','Username') !!}
                {!! Form::text('username',$profile->username,['class'=>'edit_input']) !!}
            </div>

                <div class="edit_form_element">
                {!! Form::label('email','Email') !!}
                {!! Form::text('email',$profile->email,['class'=>'edit_input']) !!}
            </div>
                <div class="edit_form_element">
                {!! Form::label('bio','Bio') !!}
                {!! Form::textArea('bio',null,['class'=>'edit_input edit_textarea']) !!}
            </div>
                {!! Form::submit('Submit',['class'=>'btn btn-primary edit_submit']) !!}
                {!! Form::close() !!}
            </div>
        </div>

    </section>



    <div class="image-modal modal fade" id="imageModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Change Profile Image</h2>

                                
                                    
                                    <div class="button-wrap"> 
                                        {!! Form::model($profile,['method'=>'Put','route'=>['profile.update',$profile->id],'files'=>true]) !!}
                                            {!! Form::label('image','Change Profile Image',['class'=>'button my-2']) !!}
                                            {!! Form::file('image',['onchange'=>'form.submit()','accept'=>"image/gif,image/jpeg,image/png,image/jpg"    ]) !!}
                                        {!! Form::close() !!}
                                    </div>
                                    <div class="button-wrap">
                                        {!! Form::model($profile,['method'=>'Put','route'=>['profile.update',$profile->id]]) !!}
                                            {!! Form::submit('Remove Image',['name'=>'remove_image','class'=>'remove_button my-2']) !!}
                                        {!! Form::close() !!}
                                    </div>
                                    <div class="button-wrap">
                                        <div class="close-modal" data-bs-dismiss="modal">Cancel</div>
                                    </div>
                                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('footer')

@endsection