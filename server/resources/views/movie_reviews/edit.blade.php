@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Movie Reviews
        </h1>
   </section>
   <div class="content">
        @include('flash::message')
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($movieReviews, ['route' => ['movieReviews.update', $movieReviews->id], 'method' => 'patch']) !!}

                        @include('movie_reviews.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection