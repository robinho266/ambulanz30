<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patientdata extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'lastname', 'address', 'mobilenumber', 'sex', 'svnr'
    ];

    protected $table = 'patientdata';

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

}
