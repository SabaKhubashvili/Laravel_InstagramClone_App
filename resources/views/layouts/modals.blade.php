<div class="form-modal modal fade" id="formModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="image_post_header">
                <h6 class="">Create New Post</h6>  
                <div class="close-modal" data-bs-dismiss="modal"><img style="width: 30px;" src="{{asset('images/svg/icons/close.svg')}}" alt="" srcset=""></div>
            </div>
                <div class="add_post_content" >
                    {!! Form::open(['method'=>'POST','route'=>'post.store','files'=>true,'style'=>'height:100%','id'=>'storeForm']) !!}
                  
                        <div class="image_post_content" id="image_post_content">

                        <img src="{{asset('images/svg/icons/images.svg')}}" alt="" srcset="">
                        <div class="info">Drag photos and videos here</div>
                        
                        <div class="button">
                        
                                
                            <div class="button-wrap" id="button-wrap">
                                {!! Form::label('image','Select From Computer') !!}
                                {!! Form::file('image',[
                                    'onchange'=>'added_image();',
                                    'accept'=>"image/gif,image/jpeg,image/png,image/jpg",
                                ]) !!} 
                            </div>
                       
                    </div>
                </div>

                    <div class="info-post-content" id="info-post-content" style="display: none">
                        
                        <div class="form-components" style="flex-direction: column">
                            {!! Form::label('title','Enter Title') !!}
                            {!! Form::text('title',null,['class'=>'form-inputs','required']) !!}
                        </div>
                        <div class="form-components" style="flex-direction: column;">
                            {!! Form::label('content','Enter Description') !!}
                            {!! Form::textArea('content',null,['class'=>'form-inputs textarea','required']) !!}
                       
                    </div>


                    <div class="submit mx-auto" style="display: flex;justify-content:flex-end;">
                       {!! Form::submit('Post',['data-bs-dismiss'=>'modal']) !!}
                    </div>
                </div>
                    {!! Form::close() !!}
                    
                </div>
        </div>
    </div>
</div>
