@extends('layouts.app')

@section('heading')
    Anamneseformular
     @if ($anamnesis !== null)
        <a href="{{ route('anamnesis.edit') }}" class="btn btn-danger">Bearbeiten</a>
    @endif   
@endsection

@section('content')

@if ($anamnesis === null) 
    <div>
        Sie haben Ihre Daten noch nicht eingegeben. <a href="{{ route('anamnesis.create') }}" class="btn btn-primary">Do it now!</a>
    </div>
@else

<div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Anamnese:</h4>
                                
                            </div>
                            <div class="content table-responsive table-full-width">
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
                                            <td>{{ $anamnesis->localisation }}</td>
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
@endif


@endsection

