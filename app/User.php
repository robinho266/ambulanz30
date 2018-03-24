<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Srmklive\Authy\Auth\TwoFactor\Authenticatable as TwoFactorAuthenticatable;
use Srmklive\Authy\Contracts\Auth\TwoFactor\Authenticatable as TwoFactorAuthenticatableContract;
use Zizaco\Entrust\Traits\EntrustUserTrait;


class User extends Authenticatable implements TwoFactorAuthenticatableContract
{
    use Notifiable, TwoFactorAuthenticatable, EntrustUserTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
        'two_factor_options'
    ];

    public function patientdata()
    {
        return $this->hasOne('App\Patientdata');
    }

    public function anamnesis()
    {
        return $this->hasMany('App\Anamnesis');
    }
}
