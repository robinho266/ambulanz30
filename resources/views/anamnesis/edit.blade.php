@extends('layouts.app')

@section('heading')
Daten ändern
@endsection

@section('content')

<div class="col-lg-12 col-md-7">
    <div class="card">
        <div class="header">
            <h4 class="title">Anamneseformular</h4>
        </div>
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    {!! Form::model($anamnesis, ['route' => 'anamnesis.update']) !!}
                    @include('anamnesis.anamnesisform')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection