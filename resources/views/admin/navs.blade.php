@extends('layouts.admin')
@section('leirong')
<div class="panel admin-panel">
  <div class="panel-head"><strong class="icon-reorder"> 栏目列表</strong></div>
  <div class="padding border-bottom">  
  <a class="button border-yellow" href="{{'nav/create'}}"><span class="icon-plus-square-o"></span> 添加内容</a>
  </div> 
  <table class="table table-hover text-center">
    <tr>
      <th width="5%">ID</th>     
      <th>栏目名称</th>  
      <th>英文名称</th>
      <th width="250">操作</th>
    </tr>
   @foreach( $lr as $a )
    <tr>
      <td>{{$a->nav_id}}</td>
      <td>{{$a->nav_name}}</td>
      <td>{{$a->nav_ename}}</td>
      <td>{{$a->nav_url}}</td>
    <td>
      <div class="button-group">
      <a type="button" class="button border-main" href="{{url('nav/'.$a->nav_id.'/edit')}}"><span class="icon-edit"></span>修改</a>
       <a class="button border-red" href="{{url('nav/'.$a->nav_id)}}"><span class="icon-trash-o"></span> 删除</a>
      </div>
      </td>
    </tr>
     @endforeach

  </table>
</div>

@endsection