
@extends('layouts.admin')
@section('leirong')
<div class="panel admin-panel">
  <div class="panel-head"><strong class="icon-reorder"> 内容列表</strong></div>
  <div class="padding border-bottom">
    <button type="button" class="button border-yellow"   href="#"><span   class="icon-plus-square-o"></span> 添加分类</button>
  </div>
  <table class="table table-hover text-center">
    <tr>

      <th width="5%">ID</th>
      <th width="8%">一级分类</th>
      <th width="12%">介绍</th>
      <th width="5%">热度</th>
      <th width="10%">排序</th>
      <th width="10%">操作</th>
    </tr>
    @foreach($fl as $a)
    <tr>
      {{--<td class="tc"><input type="text"></td>--}}
      <td>{{$a->cate_id}}</td>
      <td>{{$a->cate_name}}</td>
      <td>{{$a->cate_jieshao}}</td>
      <td>{{$a->cate_view}}</td>
      <td>0</td>

      <td>
          <div class="button-group">

          <a class="button border-main" href="{{url('cate/'.$a->cate_id.'/edit')}}"><span class="icon-edit"></span> 修改</a>

          <a class="button border-red"  href="{{url('cate/'.$a->cate_id )}}"><span class="icon-trash-o"></span> 删除</a>
          </div>
      </td>
    </tr>
      @endforeach

  </table>
</div>
<script type="text/javascript">
    //删除分类
    function del(cate_id) {
        layer.confirm('您确定要删除这个分类吗？', {
            btn: ['确定','取消'] //按钮
        }, function(){
     $.get("{{url('cate/')}}/"+ cate_id,function (data) {

         if(data.status==0){
             location.href = location.href;
             layer.msg(data.msg, {icon: 6});
         }else{
             layer.msg(data.msg, {icon: 5});
         }
     });


        }, function(){

        });
    }

</script>



@endsection

