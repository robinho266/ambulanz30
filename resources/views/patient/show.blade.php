@extends('layouts.app')

@section('heading')
    <!-- {{ $patient->patientdata->firstname }} {{ $patient->patientdata->lastname }} -->

@endsection

@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="header">
					<h4 class="title">Patientendaten:</h4>

				</div>
				<div class="content table-responsive table-full-width">
					<table class="table table-striped">
						<tbody>
							<tr>
								<td>Vorname:</td>
								<td>{{ $patient->patientdata->firstname }}</td>

							</tr>
							<tr>
								<td>Nachname:</td>
								<td>{{ $patient->patientdata->lastname }}</td>

							</tr>
							<tr>
								<td>Adresse:</td>
								<td>{{ $patient->patientdata->address }}</td>

							</tr>
							<tr>
								<td>Telefonnummer:</td>
								<td>{{ $patient->patientdata->mobilenumber }}</td>

							</tr>
							<tr>
								<td>Geschlecht:</td>
								<td>{{ $patient->patientdata->sex }}</td>

							</tr>
							<tr>
								<td>SVNR:</td>
								<td>{{ $patient->patientdata->svnr }}</td>

							</tr>
							
							
						</tbody>
					</table>

				</div>
			</div>
		

@endsection