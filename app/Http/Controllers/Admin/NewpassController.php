<?php
/**
 * Created by PhpStorm.
 * User: KingXL
 * Date: 2017/8/8
 * Time: 16:07
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Input;

class NewpassController extends Controller
{
    public function index()
    {

        $Input=Input::all();//获取用户输入
        $User=User::first();//获取数据库前几条信息
        if($Input){
            if($Input['password'] != Crypt::deCrypt($User->pass_word)){
                //不等于数据库的密码则返回密码错误并跳转上一个网页
                return "<script language=javascript>alert('原密码错误');window.history.back(-1);</script>";
            }
            if($Input['newpassword'] != $Input['newpassword1']){
                return  "<script language=javascript>alert('2次密码确认错误');</script>";
            }else{
                $User->pass_word= Crypt::enCrypt($Input['newpassword']);
                $User->update();//保存数据
                echo  "<script language=javascript>alert('修改密码成功！');</script>";

            }
        }



//修改密码界面
        return view('admin.pass');

 }
}