@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Movie Peoples
        </h1>
   </section>
   <div class="content">
        @include('flash::message')
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($moviePeoples, ['route' => ['moviePeoples.update', $moviePeoples->id], 'method' => 'patch']) !!}

                        @include('movie_peoples.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection