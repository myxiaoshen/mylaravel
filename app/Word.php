<?php
/**
 * Created by PhpStorm.
 * User: KingXL
 * Date: 2017/8/7
 * Time: 20:39
 */

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Word extends  Authenticatable
{


    protected $table = 'list';
    protected $primaryKey = 'art_id';
    public $timestamps = false;
    protected $guarded = [];


}