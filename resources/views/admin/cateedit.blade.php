@extends('layouts.admin')
@section('leirong')
<div class="panel admin-panel margin-top">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>修改分类</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="{{url('cate/'.$shuju->cate_id)}}">
      <input type="hidden" name="_method" value="put">{{--模拟表单提交因为传输方式要和路由方法一致--}}
      {{csrf_field()}}
      <div class="form-group">
        <div class="label">
          <label>上级分类：</label>
        </div>
        <div class="field">
          <select name="cate_pid" class="input w50">
            <option value="">##请选择##</option>
            @foreach($data as $d)
              <option value="{{$d->cate_id}}"
                      @if($d->cate_id==$shuju->cate_pid) selected @endif
              >{{$d->cate_name}}</option>   {{--如果父级标题id等于当前子级标题id就默认选中--}}
            @endforeach
          </select>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>分类标题：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="cate_name" value="{{$shuju->cate_name}}" />
          <div class="tips"></div>
        </div>
      </div>        
      <div class="form-group">
        <div class="label">
          <label>介绍：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="cate_jieshao" value="{{$shuju->cate_jieshao}}"/>
        </div>
      </div>

      <div class="form-group">
        <div class="label">
          <label>排序：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="sort" value="1"  data-validate="number:排序必须为数字" />
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
</div>
@endsection