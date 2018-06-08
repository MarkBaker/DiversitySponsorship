<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Observers\UuidModelObserver;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * Disable auto-incrementing the primary key field for this model.
     *
     * @var bool $incrementing
     */
    public $incrementing = false;

    /**
     * Override the primary key type, setting it as a string.
     *
     * @var string $keyType
     */
    protected $keyType = 'string';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'verified',
    ];

    public function verifyUser()
    {
        return $this->hasOne('App\VerifyUser');
    }

    /**
     * Add UuidModelObserver to the boot method of the User model.
     */
    public static function boot()
    {
        parent::boot();
        self::observe(UuidModelObserver::class);
    }
}
