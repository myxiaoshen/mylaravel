<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Config extends Authenticatable
{




    protected $table = 'config';
    protected $primaryKey = 'config_id';
    public $timestamps = false;
    protected $guarded = [];



}
