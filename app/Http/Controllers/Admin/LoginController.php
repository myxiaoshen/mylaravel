<?php

/**
 * Created by PhpStorm.
 * User: 深信不疑
 * Date: 2017/7/3
 * Time: 15:45
 */
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Input;
include 'code/Code.class.php';

class LoginController extends  Controller
{
   public function  Login()
   {

           $code = new \Code;
           $_code = $code->get();
           $Input =Input::all();
           $User = User::first();
           if($Input){
               if(strtoupper($Input['code']) != $_code) {
                    return  "<script>alert('验证码错误');history.go(-1);</script>";
               }else{

                   if( $User->user_name != $Input['user_name']|| $Input['pass_word'] != Crypt::decrypt($User->pass_word) ){
                       return  "<script>alert('密码错误');history.go(-1);</script>";
                   }else{
                       return view('admin.index');
                   }
               }
   }
    return view('admin.login');
   }




  public function  Code(){

   $code = new \Code();
   $code ->make();

 }

    public function cs()
    {


        $jiemi=123;
        echo    Crypt::enCrypt($jiemi);

    }


}