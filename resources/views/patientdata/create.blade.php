@extends('layouts.app')

@section('heading')
	Create Patientdata
@endsection

@section('content')

	{!! Form::model('App\Patientdata', ['route' => 'patientdata.store']) !!}
		@include('patientdata._form')
	{!! Form::close() !!}

@endsection