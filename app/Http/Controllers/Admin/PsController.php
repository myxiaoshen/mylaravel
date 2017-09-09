<?php
/**
 * Created by PhpStorm.
 * User: KingXL
 * Date: 2017/8/8
 * Time: 15:44
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class PsController extends Controller
{
    public function index()
    {
      return '1';
        $file = Input::file('Filedata');//获取零时文件的路径
//        上传的文件是否有效
        if ($file->isValid()) {
            $entension = $file->getClientOriginalExtension(); //上传文件的后缀.
            $newName = date('YmdHis') . mt_rand(100, 999) . '.' . $entension;//时间，随机生数字避免冲突，重组文件名。
            $path = $file->move(base_path() . '/tupian', $newName);//吧文件移动到指定文件夹并重命名
            $filepath = 'tupian/' . $newName;//我的图片在哪里
            return $filepath;

        }
    }
}