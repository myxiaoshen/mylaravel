@extends('layouts.admin')
@section('leirong')

<div class="panel admin-panel margin-top">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>修改栏目</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="{{url('nav/'.$date->nav_id)}}">
        {{--模拟表单提交--}}
        {{method_field('PUT')}}
      {{csrf_field()}}
      {{--<input type="hidden" name="id"  value="" />  --}}
      <div class="form-group">
        <div class="label">
          <label>栏目名称：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="nav_name" value="{{$date->nav_name}}" data-validate="required:请输入标题" />
          <div class="tips"></div>
        </div>
      </div> 

       <div class="form-group">
        <div class="label">
          <label>英文标题：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="nav_ename" value="{{$date->nav_ename}}" data-validate="required:标题不能为空" />
          <div class="tips"></div>
        </div>
      </div>       

      <div class="form-group">
        <div class="label">
          <label>url：</label>
        </div>
        <div class="field">
          <input  class="input" name="nav_url" value="{{$date->nav_url}}"  data-validate="required:URL不能为空"/>
        </div>
      </div>



      {{--<div class="form-group">--}}
        {{--<div class="label">--}}
          {{--<label>排序：</label>--}}
        {{--</div>--}}
        {{--<div class="field">--}}
          {{--<input type="text" class="input w50" name="sort" value="0"  data-validate="required:,number:排序必须为数字" />--}}
          {{--<div class="tips"></div>--}}
        {{--</div>--}}
      {{--</div>--}}
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