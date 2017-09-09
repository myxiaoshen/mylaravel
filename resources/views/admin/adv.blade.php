@extends('layouts.admin')
@section('leirong')
  {{--文件上传插件--}}

  {{--end--}}

  <div class="panel admin-panel">
    <div class="panel-head" id="add"><strong><span class="i con-pencil-square-o"></span>修改内容</strong></div>
    <div class="body-content">
      <form method="post" class="form-x" action="">
        <div class="form-group">
          <div class="label">
            <label>标题：</label>
          </div>
          <div class="field">
            <input type="text" class="input w50" value="" name="title" data-validate="required:请输入标题" />
            <div class="tips"></div>
          </div>
        </div>

        <div class="form-group">
          <div class="label">
            <label>图片：</label>
          </div>
          <div class="field">
            <script src="http://127.0.0.1/XLblog/resources/org/uploadify/jquery.uploadify.min.js" type="text/javascript"></script>
            <link rel="stylesheet" type="text/css" href="http://127.0.0.1/XLblog/resources/org/uploadify/uploadify.css">
            <input type="text" size="50" name="art_img">
            <input id="file_upload" name="file_upload" type="file" multiple="true">
            <script type="text/javascript">
                <?php $timestamp = time();?>
                $(function() {
                    $('#file_upload').uploadify({
                        'buttonText' : '图片上传',
                        'formData'     : {
                            'timestamp' : '<?php echo $timestamp;?>',
                            '_token'     : '{{csrf_token()}}'
                        },
                        'swf'      : 'http://127.0.0.1/XLblog/resources/org/uploadify/uploadify.swf',
                        'uploader' : '{{url('admin/ps')}}',
                        'onUploadSuccess' : function(file, data, response) {
                            $('input[name=art_img]').val(data);
                            $('#art_thumb_img').attr('src','/'+'laravel/'+data);

                        }
                    });
                });
            </script>

            <style>
              .uploadify{display:inline-block;}
              .uploadify-button{border:none; border-radius:5px; margin-top:8px;}
              table.add_tab tr td span.uploadify-button-text{color: #FFF; margin:0;}
            </style>
            <tr>
              <th></th>
              <td>
                <img src="" alt="" id="art_thumb_img" style="max-width: 350px; max-height:100px;">
              </td>
            </tr>
          </div>
        </div>


        <div class="form-group">
          <div class="label">
            <label>分类标题：</label>
          </div>
          <div class="field">
            <select name="cid" class="input w50">
              <option value="">请选择分类</option>
              <option value="">产品分类</option>

            </select>
            <div class="tips"></div>
          </div>
        </div>


        <div class="form-group">
          <div class="label">
            <label>描述：</label>
          </div>
          <div class="field">
            <textarea class="input" name="note" style=" height:90px;"></textarea>
            <div class="tips"></div>
          </div>
        </div>
        <div class="form-group">
          <div class="label">
            <label>内容：</label>
          </div>
          <div class="field">
            {{--<textarea name="content" class="input" style="height:450px; border:1px solid #ddd;"></textarea>--}}
            {{--百度编辑器--}}
            <script type="text/javascript" charset="utf-8" src="http://127.0.0.1/XLblog/resources/org/ueditor/ueditor.config.js"></script>
            <script type="text/javascript" charset="utf-8" src="http://127.0.0.1/XLblog/resources/org/ueditor/ueditor.all.min.js"> </script>
            <script type="text/javascript" charset="utf-8" src="http://127.0.0.1/XLblog/resources/org/ueditor/lang/zh-cn/zh-cn.js"></script>
            <script id="editor" name="art_leirong" type="text/plain" style="width:860px;height:500px;" ></script>
            {{--实例化编辑器--}}
            <script type="text/javascript"> var ue = UE.getEditor('editor');</script>
            {{--方框适配代码--}}
            <style>
              .edui-default{line-height: 28px;}
              div.edui-combox-body,div.edui-button-body,div.edui-splitbutton-body
              {overflow: hidden; height:20px;}
              div.edui-box{overflow: hidden; height:22px;}
            </style>
            <div class="tips"></div>
          </div>
        </div>


        {{--<div class="form-group">--}}
        {{--<div class="label">--}}
        {{--<label>排序：</label>--}}
        {{--</div>--}}
        {{--<div class="field">--}}
        {{--<input type="text" class="input w50" name="sort" value="0"  data-validate="number:排序必须为数字" />--}}
        {{--<div class="tips"></div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="form-group">--}}
        {{--<div class="label">--}}
        {{--<label>发布时间：</label>--}}
        {{--</div>--}}
        {{--<div class="field"> --}}
        {{--<script src="js/laydate/laydate.js"></script>--}}
        {{--<input type="text" class="laydate-icon input w50" name="datetime" onclick="laydate({istime: true, format: 'YYYY-MM-DD hh:mm:ss'})" value=""  data-validate="required:日期不能为空" style="padding:10px!important; height:auto!important;border:1px solid #ddd!important;" />--}}
        {{--<div class="tips"></div>--}}
        {{--</div>--}}
        {{--</div>--}}
        <div class="form-group">
          <div class="label">
            <label>作者：</label>
          </div>
          <div class="field">
            <input type="text" class="input w50" name="authour" value=""  />
            <div class="tips"></div>
          </div>
        </div>
        <div class="form-group">
          <div class="label">
            <label>点击次数：</label>
          </div>
          <div class="field">
            <input type="text" class="input w50" name="views" value="" data-validate="member:只能为数字"  />
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