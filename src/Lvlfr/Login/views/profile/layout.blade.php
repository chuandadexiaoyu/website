@extends('base.layout')

@section('content')
<div class="container" id="pageProfile">

    <div class="sidebar">
        <h3>Mon profil</h3>
        <ul>
            <li><a href="{{ action('Lvlfr\Login\Controller\ProfileController@avatar') }}">Modifier mon avatar</a></li>
            <li><a href="{{ action('Lvlfr\Login\Controller\ProfileController@pseudo') }}">Modifier mon pseudo</a></li>
        </ul>
        
        
        
        @if(Auth::user()->hasRole('Forums'))
        <h3>Forums</h3>
        <ul>
            <li>
                <a href="{{ action('Lvlfr\Login\Controller\Admin\ForumsController@categories') }}">Catégories</a>
            </li>
        </ul>
        @endif
    </div>

    <div class="profileContentSection">
        @yield('profile_content')
    </div>

</div>
@endsection
