@extends('layouts.admina')
@section('content')
						 <ol class="breadcrumb">
    <h4>
        <li><i class="fa fa-dashboard"></i> Ubah Halaman Profil</li>
    </h4>
      </ol>
    </section>

<br><br>
<div class="container">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
	
					{!! Form::model($About, ['url' => route('About.update', $About->id),
					'method' => 'put', 'files'=>'true', 'class'=>'form-horizontal']) !!}
					@include('About._form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection