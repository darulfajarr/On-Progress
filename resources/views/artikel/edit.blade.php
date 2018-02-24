@extends('layouts.admina')
@section('content')

						<ol class="breadcrumb">
    <h4>
        <li><i class="fa fa-dashboard"></i>Artikel / Edit Data Artikel </li>
    </h4>
      </ol>
    </section>
						
<br><br>
<div class="container">

<div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
					{!! Form::model($artikel, ['url' => route('artikel.update', $artikel->id),
					'method' => 'put', 'files'=>'true', 'class'=>'form-horizontal']) !!}
					@include('artikel._form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>

@endsection