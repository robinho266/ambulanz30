@extends('layouts.app')

@section('heading')
	Befund hochladen
@endsection

@section('content')

	{!! Form::model('App\Report', ['route' => 'report.store', 'files' => true]) !!}
		@include('report._form')
	{!! Form::close() !!}

@endsection
