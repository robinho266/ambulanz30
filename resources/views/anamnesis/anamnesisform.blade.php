
    <div class="form-group{{ $errors->has('spine_op') ? ' has-error' : '' }}">
        {{ Form::label('spine_op', 'Wirbelsäulen OP', ['class' => 'control-label']) }}
        <div class="radio">
            <label>
                <input type="radio" name="spine_op" value="ja" @if(old('spine_op') === 'ja' || (isset($anamnesis) && $anamnesis->spine_op === 'ja'))checked="true"@endif>
                Ja
            </label>
        </div>
        <div class="radio">
            <label>
                <input type="radio" name="spine_op" value="nein" @if(old('spine_op') === 'nein' || (isset($anamnesis) && $anamnesis->spine_op === 'nein'))checked="true"@endif>
                Nein
            </label>
        </div>
    </div>

   
    <div class="form-group{{ $errors->has('medicine') ? ' has-error' : '' }}">
        {{ Form::label('medicine', 'Welche Medikamente nehmen Sie derzeit gegen die Schmerzen?', ['class' => 'control-label']) }}
        {{ Form::text('medicine', isset($anamnesis) ? $anamnesis->medicine : old('medicine'), ['class' => 'form-control']) }}
    </div>
    <div class="form-group{{ $errors->has('localisation') ? ' has-error' : '' }}">
        {{ Form::label('localisation', 'Beschreiben Sie die Schmerzlokalisation.', ['class' => 'control-label']) }}
        {{ Form::hidden('localisation', isset($anamnesis) ? $anamnesis->localisation : old('localisation'), ['class' => 'form-control']) }}
        <div>
            @include('anamnesis.human_body')
        </div>

    </div>
    
  <!--   <div class="form-group{{ $errors->has('pain_intensity') ? ' has-error' : '' }}">
        {{ Form::label('pain_intensity', 'Beschreiben Sie die Stärke des Schmerzes(1=schwach, 10=stark).', ['class' => 'control-label']) }}
        {{ Form::text('pain_intensity', isset($anamnesis) ? $anamnesis->pain_intensity : old('pain_intensity'), ['class' => 'form-control']) }}
    </div>
 -->
    
    <div class="form-group{{ $errors->has('pain_intensity') ? ' has-error' : '' }}">

        {{ Form::label('pain_intensity', 'Schmerzskala', ['class' => 'control-label']) }}
        <div class="pain-intensity-scale">
            <i class="ti-face-smile"></i>
            @for ($i = 1; $i <= 5; $i++)
            <div class="radio">
                <label>
                    <input type="radio" name="pain_intensity" value="{{ $i }}" @if(old('pain_intensity') === $i || (isset($anamnesis) && $anamnesis->pain_intensity === $i))selected="true"@endif>
                    {{ $i }}
                </label>
            </div>
            @endfor
            <i class="ti-face-sad"></i>
        </div>

    </div>

    <div class="form-group{{ $errors->has('pain_duration') ? ' has-error' : '' }}">
        {{ Form::label('pain_duration', 'Wie lange haben Sie schon diese Beschwerden?', ['class' => 'control-label']) }}
        {{ Form::text('pain_duration', isset($anamnesis) ? $anamnesis->pain_duration : old('pain_duration'), ['class' => 'form-control']) }}
    </div>
    
    <div class="form-group{{ $errors->has('additional_pain_location') ? ' has-error' : '' }}">
        {{ Form::label('additional_pain_location', 'Gibt es weitere Schmerzzonen, strahlt der Schmerz aus?', ['class' => 'control-label']) }}
        {{ Form::text('additional_pain_location', isset($anamnesis) ? $anamnesis->additional_pain_location : old('additional_pain_location'), ['class' => 'form-control']) }}
    </div>
    
    <div class="form-group{{ $errors->has('walking_distance') ? ' has-error' : '' }}">
        {{ Form::label('walking_distance', 'Gangstrecke in 10 Sekunden?', ['class' => 'control-label']) }}
        {{ Form::text('walking_distance', isset($anamnesis) ? $anamnesis->walking_distance : old('walking_distance'), ['class' => 'form-control']) }}
    </div>

    {{ Form::submit('Ändern', ['class' => 'btn btn-danger']) }}