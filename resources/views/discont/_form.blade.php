
<div class="form-group{{ $errors->has('atas') ? ' has-error' : '' }}">
	{!! Form::label('atas', 'Atas', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-8">
		{!! Form::text('atas', null, ['class'=>'form-control']) !!}
		{!! $errors->first('atas', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<br>
<div class="form-group{{ $errors->has('tengah') ? ' has-error' : '' }}">
	{!! Form::label('tengah', 'Tengah', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-8">
		{!! Form::text('tengah', null, ['class'=>'form-control']) !!}
		{!! $errors->first('tengah', '<p class="help-block">:message</p>') !!}
	</div>
</div>
<br>
<div class="form-group{{ $errors->has('bawah') ? ' has-error' : '' }}">
	{!! Form::label('bawah', 'Bawah', ['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-8">
		{!! Form::text('bawah', null, ['class'=>'form-control']) !!}
		{!! $errors->first('bawah', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<br>
<div class="form-group">
	<div class="col-md-8 col-md-offset-2">
		{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
	</div>
</div>