<?php
/**
 * Created by PhpStorm.
 * User: KingXL
 * Date: 2017/8/23
 * Time: 14:14
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Nav;
use Dotenv\Validator;
use Illuminate\Support\Facades\Input;

class NavController   extends  Controller
{
    //get.admin/navs  自定义首页
    public function index()
    {
        $Nav= Nav::all();
        return view('admin.navs')->with('lr',$Nav);
    }
    //修改页面
    public function create(){
        return view('admin.nav');
  }

    public function store()
    {
         $input =Input::except('_token');
         $re = Nav::create($input);
         //验证Valid
//         $tiaojian = ['nav_name' =>'required','nav_url'=> 'required'];
//         $fanhui   = ['nav_name.required' => '导航名称不能为空', 'nav_url'=>'导航地址不能为空'];
//         $yanzheng = Validator::make($input,$tiaojian,$fanhui);
        if($re){

           return view('admin.nav'
           );
        }else{

            return "<script>alert('添加失败');history.go(-1);</script>";
        }
  }


    public function edit($nav_id)
    {
        $date = Nav::find($nav_id);
        return view('admin.naveidt',compact('date'));
  }

    public function update($nav_id)
    {

        $Input = Input::except('_token','_method');
        $re = Nav::where('nav_id',$nav_id)->update($Input);
        if ($re){
            return redirect('nav');
        }else{
            return "<script>alert('更新导航失败');history.go(-1);</script>";
        }
     }

    public function  show($nav_id)
    {
        $re = Nav::where('nav_id',$nav_id)->delete(); //删除那一条
        if ($re){
            return "<script>alert('删除导航成功');history.go(-1);</script>";
        }else{

            return "<script>alert('删除导航失败');history.go(-1);</script>";
        }
  }

}