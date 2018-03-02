@extends('layouts.admina')
@section('content')

						<ol class="breadcrumb">
    <h4>
        <li><i class="fa fa-dashboard"></i> Dicsont / Edit Dicsont </li>
    </h4>
      </ol>
    </section>
						
<br><br>
<div class="container">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
					{!! Form::model($discont, ['url' => route('discont.update', $discont->id),
					'method' => 'put', 'files'=>'true', 'class'=>'form-horizontal']) !!}
					@include('discont._form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>

@endsection