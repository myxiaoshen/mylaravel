<?php
/**
 * Created by PhpStorm.
 * User: 深信不疑
 * Date: 2017/7/29
 * Time: 21:24
 */

namespace App\Http\Controllers\Admin;


use App\Cate;
use App\Http\Controllers\Controller;
use App\Word;
use Illuminate\Support\Facades\Input;

class ListController extends Controller
{
public function index(){
    //用orderBy通过ID排倒叙，并用paginate向页面输入10条信息用 调用links方法显示分页信息
   $Word = Word::orderBy('art_id', 'desc')->paginate(10);
   //compact页面大范围使用
    return view('admin.list',compact('Word'));

}
//添加页面
public function create(){
    $shuju = Cate::all();

  return view('admin.add')->with('lr',$shuju);
}

//提交新增文章post
    public function store()
    {

        $Input =Input::except('_token','art_img');

        $Input['art_time'] = time();

        $re= Word::create($Input);
        if ($re){
            return redirect('list');
        } else{

            return "<script>alert('提交失败');history.go(-1);</script>";
        }

}


//添加更新
    public function update($art_id)
    {
        $input = Input::except('_token', '_method', 'sort');//提出传输数据
        $re = Word::where('art_id', $art_id)->update($input);//告诉更新那一条where条件，等于；
        if ($re) {
            return redirect('list');
        } else {
            return "<script>alert('修改分类失败');history.go(-1);</script>";
        }
    }


//删除文章
public function show($art_id){

    $re = Word::where('art_id',$art_id)->delete(); //删除那一条
    if ($re){
        return "<script>alert('删除文章成功');history.go(-1);</script>";
    }else{

        return "<script>alert('删除文章失败');history.go(-1);</script>";
    }
}

//修改页面
    public function edit($art_id)
    {
       $Word =Word::all();
     return view('admin.adv')->with('lr',$Word);
}

}