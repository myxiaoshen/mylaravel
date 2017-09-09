<?php
/**
 * Created by PhpStorm.
 * User: KingXL
 * Date: 2017/8/4
 * Time: 21:54
 */

namespace App\Http\Controllers\Admin;


use App\Cate;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class CateController extends Controller
{
    public function index()
    {
        $cate = (new Cate)->tree();
        return view('admin.cate')->with('fl', $cate);
    }

    //添加内容
    public function create()
    {
        $cate = Cate::where('cate_pid', 0)->get();
        return view('admin.newcate', compact('cate'));//传入参数
    }

    //提交方法

    public function store()
    {

        $input = Input::except('_token');//剔除ex
        $re = Cate::create($input);
        if ($re) {

            return redirect('cate');
        } else {
       return  "<script>alert('添加分类失败');history.go(-1);</script>";

        }
    }

//修改分类
    public function edit($cate_id)
    {
        $shuju = Cate::find($cate_id);//查到数据库是那条信息
        $data = Cate::where('cate_pid', 0)->get();//获取分类pid信息通过get方法发送到view
        return view('admin.cateedit', compact('shuju', 'data'));

    }

   //分类更新
    public function update($cate_id)
    {

        $input = Input::except('_token', '_method', 'sort');//提出传输数据
        $re = Cate::where('cate_id', $cate_id)->update($input);//告诉更新那一条where条件，等于；
        if ($re) {
            return redirect('cate');
        } else {
            return "<script>alert('修改分类失败');history.go(-1);</script>";
        }
    }


    //删除分类
    public function show($cate_id)
    {
        $re = Cate::where('cate_id',$cate_id)->delete(); //删除那一条
        if ($re){
            Cate::where('cate_pid',$cate_id)->update(['cate_pid'=>0]);//更新删除剩下的子集分类调整为顶级
            return "<script>alert('删除分类成功');history.go(-1);</script>";
        }else{

            return "<script>alert('修改分类失败');history.go(-1);</script>";
        }
    }
    public function destroy()
    {

    }


}
