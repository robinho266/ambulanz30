@extends('layouts.app')

@section('heading')
	<strong>Patient:</strong> {{ $patient->patientdata->firstname }} {{ $patient->patientdata->lastname }}
@endsection

@section('content')
	<div class="container-fluid">
		<ul class="nav nav-tabs">
		  <li class="active"><a data-toggle="tab" href="#patientdata">Patientendaten</a></li>
		  <li><a data-toggle="tab" href="#anamnesis">Anamnese</a></li>
		</ul>

		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="content table-responsive table-full-width tab-content">
						<div class="tab-pane fade in active" id="patientdata">
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

						<div class="tab-pane fade" id="anamnesis">
							<table class="table table-striped">
								<tbody>
									<tr>
										<td>Wirbelsäulen OP:</td>
										<td>{{ $anamnesis->spine_op }}</td>
									</tr>
									<tr>
										<td>Medikamente:</td>
										<td>{{ $anamnesis->medicine }}</td>
									</tr>
									<tr>
										<td>Lokalisation:</td>
										<td>
											<div class="localisation">
												<input name="localisation" id="localisation" type="hidden" value="{{ $anamnesis->localisation }}">
												<div class="immutable">
													@include('anamnesis.human_body')
												</div>
												{{ $anamnesis->localisation }}
											</div>
										</td>
									</tr>
									<tr>
										<td>Schmerz:</td>
										<td>{{ $anamnesis->pain_intensity }}</td>
									</tr>
									<tr>
										<td>Schmerzdauer:</td>
										<td>{{ $anamnesis->pain_duration }}</td>
									</tr>
									<tr>
										<td>Weitere Schmerzzonen:</td>
										<td>{{ $anamnesis->additional_pain_location }}</td>
									</tr>
									<tr>
										<td>Gehstrecke</td>
										<td>{{ $anamnesis->walking_distance }}</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
