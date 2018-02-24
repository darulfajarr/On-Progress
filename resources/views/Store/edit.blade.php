@extends('layouts.admina')
@section('content')

						
   
      
    <ol class="breadcrumb">
    <h4>
        <li><i class="fa fa-dashboard"></i>  Ubah Halaman Detail</li>
    </h4>
      </ol>
    </section>
   
<br><br>
<div class="container">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">

					{!! Form::model($Store, ['url' => route('Store.update', $Store->id),
					'method' => 'put', 'files'=>'true', 'class'=>'form-horizontal']) !!}
					@include('Store._form')
					{!! Form::close() !!}


@endsection