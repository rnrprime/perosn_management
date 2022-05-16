<nav class="nav nav-pills flex-column flex-sm-row">
    <a class="flex-sm-fill text-sm-center nav-link {{Route::currentRouteName() == 'home' ? 'active' : ''}}"
        href="{{route('home')}}">
        My Profile
    </a>
    <a class="flex-sm-fill text-sm-center nav-link {{Route::currentRouteName() == 'basicInfo' ? 'active' : ''}}"
        href="{{route('basicInfo',Auth::user()->id)}}">Basic Info</a>
    <a class="flex-sm-fill text-sm-center nav-link {{Route::currentRouteName() == 'education' ? 'active' : ''}}"
        href="{{route('education',Auth::user()->id)}}">Education</a>
    <a class="flex-sm-fill text-sm-center nav-link {{Route::currentRouteName() == 'training' ? 'active' : ''}}"
        href="{{route('training',Auth::user()->id)}}">Training</a>
    <a class="flex-sm-fill text-sm-center nav-link {{Route::currentRouteName() == 'work' ? 'active' : ''}}"
        href="{{route('work',Auth::user()->id)}}">Work</a>
    <a class="flex-sm-fill text-sm-center nav-link {{Route::currentRouteName() == 'family' ? 'active' : ''}}"
        href="{{route('family',Auth::user()->id)}}">Family</a>

</nav>
