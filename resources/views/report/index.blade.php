@extends('layouts.app')

@section('heading')
    Meine Befunde
@endsection

@section('content')

@if (count($reports) > 0)
	<ul>
	@foreach ($reports as $report)
		<li>
			{{ $report->name }}:
			<a href="{{ $report->getUrl() }}" target="_blank">{{ $report->file }}</a>
		</li>
	@endforeach
    </ul>

@else
	Noch keine Befunde hochgeladen.
@endif

<a class="btn btn-default" href="{{ route('report.create') }}">Befund hochladen</a>

@endsection
