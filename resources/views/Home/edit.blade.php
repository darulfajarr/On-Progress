@extends('layouts.admina')
@section('content')


   
      <ol class="breadcrumb">
    <h4>
        <li><i class="fa fa-dashboard"></i> Ubah Halaman Beranda</li>
    </h4>
      </ol>
    </section>
     
<br><br>
<div class="container">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
					{!! Form::model($Home, ['url' => route('Home.update', $Home->id),
					'method' => 'put', 'files'=>'true', 'class'=>'form-horizontal']) !!}
					@include('Home._form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection