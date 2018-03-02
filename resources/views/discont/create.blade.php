@extends('layouts.admina')
@section('content')
						<ol class="breadcrumb">
    <h4>
        <li><i class="fa fa-dashboard"></i> Discont / Tambah Discont </li>
    </h4>
      </ol>
    </section>
						
<br><br>
<div class="container">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
	
				{!! Form::open(['url' => route('discont.store'),
					'method' => 'post', 'files'=>'true', 'class'=>'form-horizontal']) !!}
					@include('discont._form')
					{!! Form::close() !!}

				</div>
			</div>
		</div>
	</div>

@endsection