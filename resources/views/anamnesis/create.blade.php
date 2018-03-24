@extends('layouts.app')

@section('heading')
	Anamneseformular
@endsection

@section('content')

	{!! Form::model('App\Anamnesis', ['route' => 'anamnesis.store']) !!}
		@include('anamnesis.anamnesisform')
	{!! Form::close() !!}

@endsection