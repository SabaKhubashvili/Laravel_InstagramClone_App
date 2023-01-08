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

				<h1 class="profile-user-name">{{$profile->name }}</h1>

				@if(Auth::user()->id == $profile->id)
				<a href="{{route('profile.edit',$profile->id)}}" class="btn profile-edit-btn">Edit Profile</a>

				<button class="btn profile-settings-btn" aria-label="profile settings"><i class="fas fa-cog" aria-hidden="true"></i></button>
				@endif
				<br>
				<h6>@ {{$profile->username}}</h6>
			</div>

			<div class="profile-stats">

				<ul>
					<li><span class="profile-stat-count">{{count($profile->posts)}}</span> posts</li>
					<li><span class="profile-stat-count">188</span> followers</li>
					<li><span class="profile-stat-count">206</span> following</li>
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


@endsection


@section('footer')
    
@endsection