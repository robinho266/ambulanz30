<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anamnesis extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'spine_op', 'medicine', 'localisation', 'pain_intensity', 'pain_duration', 'additional_pain_location', 'walking_distance'                
    ];

    protected $table = 'anamnesis';

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function reports()
    {
        return $this->hasMany('App\Report');
    }
}
