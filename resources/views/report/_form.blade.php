<div>
    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    	{{ Form::label('name', 'Name *', ['class' => 'control-label']) }}
    	{{ Form::text('name', isset($report) ? $report->name : old('name'), ['class' => 'form-control']) }}
    </div>

    <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
    	{{ Form::label('file', 'Datei *', ['class' => 'control-label']) }}
    	{{ Form::file('file') }}
    </div>
</div>

{{ Form::submit('Befund hochladen', ['class' => 'btn btn-danger']) }}
