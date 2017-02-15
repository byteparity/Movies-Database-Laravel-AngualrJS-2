@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Movies
        </h1>
    </section>
    <div class="content">
        @include('flash::message')
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'movies.store', 'enctype' => 'multipart/form-data']) !!}

                        @include('movies.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
