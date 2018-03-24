@extends('layouts.app')

@section('heading')
Daten ändern
@endsection

@section('content')

<div class="col-lg-12 col-md-7">
    <div class="card">
        <div class="header">
            <h4 class="title">Patientendaten</h4>
        </div>
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    {!! Form::model($patientdata, ['route' => 'patientdata.update']) !!}
                    @include('patientdata._form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection