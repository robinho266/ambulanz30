<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'file'
    ];

    public function anamnesis()
    {
        return $this->belongsTo('App\Anamnesis');
    }

}
