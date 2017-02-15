@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Peoples
        </h1>
   </section>
   <div class="content">
        @include('flash::message')
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($peoples, ['route' => ['peoples.update', $peoples->id], 'method' => 'patch', 'enctype' => 'multipart/form-data']) !!}

                        @include('peoples.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection