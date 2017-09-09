@extends('layouts.admin')
@section('leirong')
<div class="panel admin-panel">
  <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 网站信息</strong></div>
  <div class="body-content">
    @foreach($lr as $sj)
    <form method="post" class="form-x" action="{{url('config/'.$sj->config_id)}}">
      {{method_field('PUT')}}
      @endforeach

      {{--模拟表单提交因为传输方式要和路由方法一致--}}
      {{csrf_field()}}
@foreach($lr as $b)
      <div class="form-group">
        <div class="label">
          <label>网站标题：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="config_title" value="{{$b->config_title}}" />
          <div class="tips"></div>
        </div>
      </div>
@endforeach

  @foreach($lr as $g)
      <div class="form-group">
        <div class="label">
          <label>网站关键字：</label>
        </div>
        <div class="field">
          <input class="input"   name="config_keyname"  value = "{{$g->config_keyname}}"/>
          <div class="tips"></div>
        </div>
      </div>
  @endforeach
  @foreach($lr as $m)
      <div class="form-group">
        <div class="label">
          <label>网站描述：</label>
        </div>
        <div class="field">
          <input class="input" name="sdescription" value="{{$m->config_miaoshu}}"/>
        </div>
      </div>
  @endforeach
  @foreach($lr as $q)
      <div class="form-group">
        <div class="label">
          <label>QQ：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="config_qq" value="{{$q->config_qq}}" />
          <div class="tips"></div>
        </div>
      </div>
  @endforeach
  @foreach($lr as $e)
      <div class="form-group">
        <div class="label">
          <label>Email：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="config_email" value="{{$q->config_Email}}" />
          <div class="tips"></div>
        </div>
      </div>
  @endforeach
  @foreach($lr as $d)
      <div class="form-group">
        <div class="label">
          <label>底部信息：</label>
        </div>
        <div class="field">

          <textarea name="scopyright" class="input" style="height:120px;" placeholder="">{{$d->config_type}}</textarea>
          <div class="tips"></div>
        </div>
      </div>
  @endforeach
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