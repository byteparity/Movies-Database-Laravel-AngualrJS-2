@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Proffessions
        </h1>
   </section>
   <div class="content">
        @include('flash::message')
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($proffessions, ['route' => ['proffessions.update', $proffessions->id], 'method' => 'patch']) !!}

                        @include('proffessions.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection