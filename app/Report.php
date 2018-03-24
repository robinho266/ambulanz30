<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Report extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'file', 'user_id', 'hash'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function getUrl()
    {
        $user = $this->user;

        if (!$user->patientdata) {
            return false;
        }

        return asset('storage/' . $user->patientdata->firstname . '_' . $user->patientdata->lastname . '/' . $this->hash);
    }
}
