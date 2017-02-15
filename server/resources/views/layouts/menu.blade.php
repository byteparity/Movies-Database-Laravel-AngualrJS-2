<li class="header">MAIN NAVIGATION</li>

<li class="{{ Request::is('home*') ? 'active' : '' }}">
    <a href="{!! route('home') !!}"><i class="fa fa-home"></i><span>Dashboard</span></a>
</li>

<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-user"></i><span>Users</span></a>
</li>

<li class="{{ Request::is('movies*') ? 'active' : '' }}">
    <a href="{!! route('movies.index') !!}"><i class="fa fa-camera"></i><span>Movies</span></a>
</li>

<li class="{{ Request::is('peoples*') ? 'active' : '' }}">
    <a href="{!! route('peoples.index') !!}"><i class="fa fa-users"></i><span>People</span></a>
</li>

<li class="{{ Request::is('proffessions*') ? 'active' : '' }}">
    <a href="{!! route('proffessions.index') !!}"><i class="fa fa-flag-o"></i><span>Proffessions</span></a>
</li>

<li class="{{ Request::is('genres*') ? 'active' : '' }}">
    <a href="{!! route('genres.index') !!}"><i class="fa fa-align-justify"></i><span>Genres</span></a>
</li>

<li class="{{ Request::is('moviePeoples*') ? 'active' : '' }}">
    <a href="{!! route('moviePeoples.index') !!}"><i class="fa fa-angellist"></i><span>MoviePeople</span></a>
</li>

<li class="{{ Request::is('movieGenres*') ? 'active' : '' }}">
    <a href="{!! route('movieGenres.index') !!}"><i class="fa fa-youtube-play"></i><span>MovieGenres</span></a>
</li>

<li class="{{ Request::is('movieReviews*') ? 'active' : '' }}">
    <a href="{!! route('movieReviews.index') !!}"><i class="fa fa-edit"></i><span>MovieReviews</span></a>
</li>


<li class="{{ Request::is('movieLanguages*') ? 'active' : '' }}">
    <a href="{!! route('movieLanguages.index') !!}"><i class="fa fa-edit"></i><span>MovieLanguages</span></a>
</li>

