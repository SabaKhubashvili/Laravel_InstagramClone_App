@extends('layouts.app')
@section('header')
    <link rel="stylesheet" href="{{asset('css/profile.css')}}">

	@section('title',$profile->name .  ' (@' .$profile->username .')' . ' •  Instagram Photos And Videos')
@endsection


@section('main')
    


	<div class="container">

		<div class="profile">

			<div class="profile-image">

				<img style="width: 150px" src="{{asset($profile->profile_image)}}" alt="">

			</div>

			<div class="profile-user-settings">

			<div class="d-flex" style="align-items: center">
				<h1 class="profile-user-name">{{$profile->name }}</h1>

				@if(Auth::user()->id == $profile->id)
				<a href="{{route('profile.edit',$profile->id)}}" class="btn profile-edit-btn">Edit Profile</a>

				<button class="btn profile-settings-btn" aria-label="profile settings"><i class="fas fa-cog" aria-hidden="true"></i></button>

				@endif
				@if(isFollowing($profile->id) == 'following')
						{!! Form::model($profile,['method'=>'POST','route'=>'unfollow']) !!}
						 <button class="side-menu__suggestion-button mx-4" name="unfollow" value="{{$profile->id}}">Unfollow</button>
					{!! Form::close() !!}
				@else
						{!! Form::open(['method'=>'POST','route'=>'follow']) !!}
						  <button class="side-menu__suggestion-button mx-4" name="follow" value="{{$profile->id}}">Follow</button>
					{!! Form::close() !!}
				 @endif
				</div>
				
				<br>
				<h6>@ {{$profile->username}}</h6>
			</div>

			<div class="profile-stats">

				<ul>
					<li><span class="profile-stat-count">{{count($profile->posts)}}</span> posts</li>
					<li> <a data-bs-toggle="modal" href="#FollowersModal"><span class="profile-stat-count">{{count($profile->followers)}}</span> followers</a></li>
					<li> <a data-bs-toggle="modal" href="#FollowingModal"><span class="profile-stat-count">{{count($profile->following)}}</span> following </a></li>
				</ul>

			</div>

			<div class="profile-bio">

				<p><span class="profile-real-name">{{$profile->name}} </span>{{$profile->bio}}</p>

			</div>

		</div>
	

	</div>




	<div class="container">

		<div class="gallery">

			@foreach($profile->posts as $post)
			<div class="gallery-item" tabindex="0">

				<img src="{{asset($post->image_path)}}" class="gallery-image" alt="">

				<div class="gallery-item-info">

					{{-- <ul>
						<li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 56</li>
						<li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 2</li>
					</ul> --}}

				</div>

			</div>
			@endforeach


			{{-- <div class="gallery-item" tabindex="0">

				<img src="https://images.unsplash.com/photo-1498471731312-b6d2b8280c61?w=500&h=500&fit=crop" class="gallery-image" alt="">

				<div class="gallery-item-type">

					<span class="visually-hidden">Gallery</span><i class="fas fa-clone" aria-hidden="true"></i>

				</div>

				<div class="gallery-item-info">

					<ul>
						<li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 47</li>
						<li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 1</li>
					</ul>

				</div>

			</div> --}}

			{{-- <div class="gallery-item" tabindex="0">

				<img src="https://images.unsplash.com/photo-1423012373122-fff0a5d28cc9?w=500&h=500&fit=crop" class="gallery-image" alt="">

				<div class="gallery-item-type">

					<span class="visually-hidden">Video</span><i class="fas fa-video" aria-hidden="true"></i>

				</div>

				<div class="gallery-item-info">

					<ul>
						<li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart" aria-hidden="true"></i> 30</li>
						<li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i class="fas fa-comment" aria-hidden="true"></i> 2</li>
					</ul>

				</div>

			</div> --}}

		</div>
		<!-- End of gallery -->

		{{-- <div class="loader"></div> --}}

	</div>

		<div class="Followers-modal modal fade" id="FollowersModal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="container">

								<div class="modal-body">
									<!-- Project details-->
									<div class="head">
									<h2 class="text-uppercase">Followers</h2>
									<div class="button-wrap-close">
										<div class="close-modal" data-bs-dismiss="modal"><i class="fa-solid fa-x"></i></div>
									</div>
									</div>

									<div class="followers" style="overflow-y: auto">
										@foreach($profile->followers as $follower)
										<div class="button-wrap"> 
											<div class="profile_image">
												<img src="{{asset($follower->profile_image)}}" alt="" srcset="">
											</div>
											<div class="info">
												
												<div class="username">{{$follower->username}} &#x2022
													@if(isFollowing($follower->id) == 'following')
													{!! Form::model($follower,['method'=>'POST','route'=>'unfollow']) !!}
													  <button class="side-menu__suggestion-button" name="unfollow" value="{{$follower->id}}">Unfollow</button>
													{!! Form::close() !!}
													@else
													{!! Form::open(['method'=>'POST','route'=>'follow']) !!}
													   <button class="side-menu__suggestion-button" name="follow" value="{{$follower->id}}">Follow</button>
													{!! Form::close() !!}
													  @endif
													
													
													</div>
												<div class="name">{{$follower->name}}</div>
											</div>
										</div>										
								
								@endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="Following-modal modal fade" id="FollowingModal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="container">

								<div class="modal-body">
									<!-- Project details-->
									<div class="head">
									<h2 class="text-uppercase">Following</h2>
									<div class="button-wrap-close">
										<div class="close-modal" data-bs-dismiss="modal"><i class="fa-solid fa-x"></i></div>
									</div>
									</div>

									<div class="following">
										@foreach($profile->following as $following)
										<div class="button-wrap"> 
											<div class="profile_image">
												<img src="{{$following->profile_image}}" alt="" srcset="">
											</div>
											<div class="info">
												
												<div class="username">{{$following->username}} &#x2022
													@if(isFollowing($following->id) == 'following')
													{!! Form::model($following,['method'=>'POST','route'=>'unfollow']) !!}
													  <button class="side-menu__suggestion-button" name="unfollow" value="{{$following->id}}">Unfollow</button>
													{!! Form::close() !!}
													@else
													{!! Form::open(['method'=>'POST','route'=>'follow']) !!}
													   <button class="side-menu__suggestion-button" name="follow" value="{{$following->id}}">Follow</button>
													{!! Form::close() !!}
													  @endif
													
													
													</div>
												<div class="name">{{$following->name}}</div>
											</div>
										</div>										
								
								@endforeach
							</div>
							</div>
							</div>
				</div>
			</div>
		</div>
 

@endsection


@section('footer')
    
@endsection