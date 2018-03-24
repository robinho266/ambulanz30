@extends('layouts.app')

@section('heading')
    Patienten
@endsection

@section('content')

@if (count($patients) > 0)
	<ul>
	@foreach ($patients as $patient)
		<li>
			{{ $patient->patientdata->firstname }} {{ $patient->patientdata->lastname }}
			<a href="{{ route('patient.show', $patient) }}">Show</a>
		</li>
	@endforeach
	
	
@else
	Keine Patienten gefunden.
@endif

@endsection