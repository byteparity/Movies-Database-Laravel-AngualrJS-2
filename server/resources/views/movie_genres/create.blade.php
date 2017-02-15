@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Movie Genres
        </h1>
    </section>
    <div class="content">
        @include('flash::message')
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'movieGenres.store']) !!}

                        @include('movie_genres.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
