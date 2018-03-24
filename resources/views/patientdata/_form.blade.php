<div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
    	{{ Form::label('firstname', 'Vorname', ['class' => 'control-label']) }}
    	{{ Form::text('firstname', isset($patientdata) ? $patientdata->firstname : old('firstname'), ['class' => 'form-control']) }}
    </div>

    <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
    	{{ Form::label('lastname', 'Nachname', ['class' => 'control-label']) }}
    	{{ Form::text('lastname', isset($patientdata) ? $patientdata->lastname : old('lastname'), ['class' => 'form-control']) }}
    </div>

    <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
    	{{ Form::label('address', 'Adresse', ['class' => 'control-label']) }}
    	{{ Form::textarea('address', isset($patientdata) ? $patientdata->address : old('address'), ['class' => 'form-control']) }}
    </div>

    <div class="form-group{{ $errors->has('mobilenumber') ? ' has-error' : '' }}">
    	{{ Form::label('mobilenumber', 'Telefonnummer', ['class' => 'control-label']) }}
    	{{ Form::text('mobilenumber', isset($patientdata) ? $patientdata->mobilenumber : old('mobilenumber'), ['class' => 'form-control']) }}
    </div>

	<div class="form-group{{ $errors->has('sex') ? ' has-error' : '' }}">
    	{{ Form::label('sex', 'Geschlecht', ['class' => 'control-label']) }}
    	<div class="radio">
			<label>
    			<input type="radio" name="sex" value="f" @if(old('sex') === 'f' || (isset($patientdata) && $patientdata->sex === 'f'))checked="true"@endif>
    			Weiblich
    		</label>
    	</div>
    	<div class="radio">
    		<label>
    			<input type="radio" name="sex" value="m" @if(old('sex') === 'm' || (isset($patientdata) && $patientdata->sex === 'm'))checked="true"@endif>
    			Männlich
    		</label>
    	</div>
    </div>

    <div class="form-group{{ $errors->has('svnr') ? ' has-error' : '' }}">
    	{{ Form::label('svnr', 'SVNR', ['class' => 'control-label']) }}
    	{{ Form::text('svnr', isset($patientdata) ? $patientdata->svnr : old('svnr'), ['class' => 'form-control']) }}
    </div>

</div>

    {{ Form::submit('Ändern', ['class' => 'btn btn-danger']) }}