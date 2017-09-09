<?php
/**
 * Created by PhpStorm.
 * User: 深信不疑
 * Date: 2017/7/6
 * Time: 15:39
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

class IndexController extends  Controller
{
  public function index(){
       return view('admin.index');
  }
}