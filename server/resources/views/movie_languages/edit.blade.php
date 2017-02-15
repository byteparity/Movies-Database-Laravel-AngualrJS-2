@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Movie Language
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($movieLanguage, ['route' => ['movieLanguages.update', $movieLanguage->id], 'method' => 'patch']) !!}

                        @include('movie_languages.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection