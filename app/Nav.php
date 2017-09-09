<?php
/**
 * Created by PhpStorm.
 * User: KingXL
 * Date: 2017/8/23
 * Time: 14:17
 */

namespace App;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Nav extends  Authenticatable
{
    protected $table = 'nav';
    protected $primaryKey = 'nav_id';
    public $timestamps = false;
    protected $guarded = [];
}