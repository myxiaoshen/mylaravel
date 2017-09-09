<?php
/**
 * Created by PhpStorm.
 * User: 深信不疑
 * Date: 2017/7/6
 * Time: 15:39
 */

namespace App\Http\Controllers\Admin;


use App\Config;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class ConfigController extends  Controller
{
  public function index(){

        $shuju = Config::all();
        return view('admin.config')->with('lr',$shuju);


  }

  public function update($config_id){
      $input = Input::excpet('token');
      dd($input);
      $re = Config::where('config_id' ,$config_id)->update($input);
      if($re){
          return "<script>alert('更新成功');history.go(-1);</script>";
      }else{

          return "<script>alert('更新失败');history.go(-1);</script>";
      }

  }
}
