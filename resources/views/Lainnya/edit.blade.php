@extends('layouts.admina')
@section('content')
					 <ol class="breadcrumb">
    <h4>
        <li><i class="fa fa-dashboard"></i> Ubah Data Lainnya</li>
    </h4>
      </ol>
    </section>
<br><br>
<div class="container">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
					{!! Form::model($Lainnya, ['url' => route('Lainnya.update', $Lainnya->id),
					'method' => 'put', 'files'=>'true', 'class'=>'form-horizontal']) !!}
					@include('Lainnya._form')
					{!! Form::close() !!}

@endsection