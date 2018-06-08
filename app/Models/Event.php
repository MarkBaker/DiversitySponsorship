<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Observers\UuidModelObserver;

class Event extends Model
{
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
        'name', 'url', 'start_date', 'duration',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_by', 'verified',
    ];

    /**
     * Add UuidModelObserver to the boot method of the User model.
     */
    public static function boot()
    {
        parent::boot();
        self::observe(UuidModelObserver::class);
    }
}
