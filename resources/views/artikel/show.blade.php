@extends('layouts.admina')
@section('content')
    <ol class="breadcrumb">
    <h4>
        <li><i class="fa fa-dashboard"></i>Detail Data Artikel</li>
    </h4>
      </ol>
<br><br><br><br>
@if(session()->has('flash_notification.message'))
<div class="container">
<div class="alert alert-{{ session()->get('flash_notification.level') }} alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
  {!! session()->get('flash_notification.message') !!}
</div>
</div>
@endif
<div class="container">
<div class="box">
  <div class="box-header" style="">
    <h3 class="box-title" ></h3>
  </div><br>
  
    <div class="box-body">
      <table id="data" class="table table-striped">
        <thead>
          <tr>
            
            <th>Gambar</th>
            <th>Judul</th>
            <th>Isi</th>
          </tr>
        </thead>
        <tbody>
         
          <tr>
            
            <td><img width="200" height="100" src="{{asset('/img/img7/'.$artikel->cover.'')}}" /></td>
            <td>{{$artikel->judul}}</td>
             <td>{!!$artikel->isi!!}</td>
            
          </tr>
        
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
