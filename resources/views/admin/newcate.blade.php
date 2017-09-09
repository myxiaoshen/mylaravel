@extends('layouts.admin')
@section('leirong')
    <div class="panel admin-panel margin-top">
        <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>添加内容</strong></div>
        <div class="body-content">
            <form action="{{url('cate')}}"  method="post" class="form-x"       >
                {{csrf_field()}}
                <div class="form-group">
                    <div class="label">
                        <label>上级分类：</label>
                    </div>
                    <div class="field">
                        <select name="cate_pid" class="input w50">
                            <option value="">##请选择##</option>
                            @foreach($cate as $b)
                            <option value="{{$b->cate_id}}">{{$b->cate_name}}</option>
                            @endforeach
                        </select>
                    不选择默认一级分类
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        <label>分类名称：</label>
                    </div>
                    <div class="field" >
                        <input name="cate_name" type="text" class="input w50"  data-validate="required:请填写名称"/>
                        <div class="tips"></div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="label">
                        <label>介绍：</label>
                    </div>
                    <div class="field">
                        <input name="cate_jieshao" type="text" class="input w50"  data-validate="required:请填写介绍"/>
                        <div class="tips"></div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="label">
                        <label></label>
                    </div>
                    <div class="field">
                        <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
                    </div>
                </div>
            </form>
        </div>


@endsection