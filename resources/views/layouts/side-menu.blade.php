
    <div class="side-menu__user-profile">
      <a
        href="{{route('profile')}}"
        target="_blank"
        class="side-menu__user-avatar"
      >
        <img src="{{asset($profile->profile_image)}}" alt="User Picture" />
      </a>
      <div class="side-menu__user-info">
        <a href="{{route('profile')}}" target="_blank"
          >{{$profile->name}}</a
        >
        <span>@ {{$profile->username}}</span>
      </div>
      {!! Form::open(['method'=>'POST','route'=>'logout']) !!}
        {!! Form::submit('Switch',['class'=>'side-menu__user-button']) !!}
      {!! Form::close() !!}
    </div>

    <div class="side-menu__suggestions-section">
      <div class="side-menu__suggestions-header">
        <h2>Suggestions for You</h2>
        <button>See All</button>
      </div>
      <div class="side-menu__suggestions-content">
        @foreach($users as $user)
          <div class="side-menu__suggestion">
            <a href="{{route('profile.show',$user->id)}}" class="side-menu__suggestion-avatar">
              <img src="{{asset($user->profile_image)}}" alt="User Picture" />
            </a>
            <div class="side-menu__suggestion-info">
              <a href="{{route('profile.show',$user->id)}}">{{$user->name}}</a>
              <span>  @if(count($user->followers->where('id', '!=', $profile->id)) > 0) @foreach($user->followers as $follower) Followed By {{$follower->name}}@endforeach @else Suggested For You @endif  </span>
            </div>
            
            @if(isFollowing($user->id) == 'following')
            {!! Form::model($user,['method'=>'POST','route'=>'unfollow']) !!}
              <button class="side-menu__suggestion-button" name="unfollow" value="{{$user->id}}">Unfollow</button>
            {!! Form::close() !!}
            @else
            {!! Form::open(['method'=>'POST','route'=>'follow']) !!}
               <button class="side-menu__suggestion-button" name="follow" value="{{$user->id}}">Follow</button>
            {!! Form::close() !!}
              @endif
            
          </div>
        @endforeach
        </div>
      </div>
    </div>

    <div class="side-menu__footer">
      <div class="side-menu__footer-links">
        <ul class="side-menu__footer-list">
          <li class="side-menu__footer-item">
            <a class="side-menu__footer-link" href="#">About</a>
          </li>
          <li class="side-menu__footer-item">
            <a class="side-menu__footer-link" href="#">Help</a>
          </li>
          <li class="side-menu__footer-item">
            <a class="side-menu__footer-link" href="#">Press</a>
          </li>
          <li class="side-menu__footer-item">
            <a class="side-menu__footer-link" href="#">API</a>
          </li>
          <li class="side-menu__footer-item">
            <a class="side-menu__footer-link" href="#">Jobs</a>
          </li>
          <li class="side-menu__footer-item">
            <a class="side-menu__footer-link" href="#">Privacy</a>
          </li>
          <li class="side-menu__footer-item">
            <a class="side-menu__footer-link" href="#">Terms</a>
          </li>
          <li class="side-menu__footer-item">
            <a class="side-menu__footer-link" href="#">Locations</a>
          </li>
          <li class="side-menu__footer-item">
            <a class="side-menu__footer-link" href="#">Top Accounts</a>
          </li>
          <li class="side-menu__footer-item">
            <a class="side-menu__footer-link" href="#">Hashtag</a>
          </li>
          <li class="side-menu__footer-item">
            <a class="side-menu__footer-link" href="#">Language</a>
          </li>
        </ul>
      </div>

      <span class="side-menu__footer-copyright"
        >&copy; 2021 instagram from facebook</span
      >
    </div>