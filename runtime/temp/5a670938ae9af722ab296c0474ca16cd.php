<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:85:"/opt/lampstack-7.1.15-0/apache2/htdocs/demo/application/index/view/index/welcome.html";i:1520940863;}*/ ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="/demo/public/static/css/bootstrap.min.css">
  <link rel="stylesheet" href="/demo/public/static/css/index.css">
  <link rel="stylesheet" href="/demo/public/static/css/bootstrap-table.css">
  <link href="/demo/public/static/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
  <script src="/demo/public/static/js/jquery.min.js"></script>
  <script src="/demo/public/static/js/bootstrap.min.js"></script>
  <script src="/demo/public/static/js/bootstrap-table.js"></script>
  <script src="/demo/public/static/js/bootstrap-table-zh-CN.js"></script>
  <script src="/demo/public/static/js/bootstrap-table-export.js"></script>
  <script src="/demo/public/static/js/tableExport.js"></script>
  <script type="text/javascript" src="/demo/public/static/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
  <script type="text/javascript" src="/demo/public/static/js/bootstrap-datetimepicker.zh-CN.js" charset="UTF-8"></script>
  <script src="/demo/public/static/js/echarts.min.js"></script>
</head>
<body>
    <div class="container">
        <!-- <h1>物料查询</h1> -->
        <div class="panel-body" style="padding-bottom:0px;padding-left:0px;padding-right:0px;" id="panelbody1">
            <div class="panel panel-default" id="test2">
                <div class="panel-heading" id="test3">查询条件</div>
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-xs-3">
                      <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1">物料编码</span>
                      <input type="text" class="form-control" placeholder="物料编码" id="FNumber" aria-describedby="basic-addon1">
                      </div>
                      </div>

                      <div class="col-xs-3">
                      <div class="input-group">
                        <span class="input-group-addon" id="basic-addon2">物料名称</span>
                        <input type="text" class="form-control" placeholder="物料名称" id="FName" aria-describedby="basic-addon2">
                      </div>
                      </div>

                      <div class="col-xs-3">
                        <div class="input-group">
                        <span class="input-group-addon" id="basic-addon3">物料规格</span>
                        <input type="text" class="form-control" placeholder="物料规格" id="FModel" aria-describedby="basic-addon3">
                        </div>
                      </div>

                    <div class="col-xs-2">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon4">单位</span>
                          <input type="text" class="form-control" placeholder="单位" id="FUnitID" aria-describedby="basic-addon4">
                    </div>
                    </div>
                    <div class="col-xs-1">
                     <button type="button"  id="search1" class="btn btn-primary">查询</button>


                    </div>
                  </div>
                    </div>
            </div>
    </div>

        <div id="toolbar">
          <div class="form-inline" role="form">
            <div class="form-group">
              <label for="dtp_input1" class="control-label">物料开始建立时间</label>
                <div class="input-group date form_date" data-date-format="yyyy-mm-dd" data-link-field="dtp_input1">
                  <input class="form-control" size="16" type="text" value="" id="FCreateDateStime">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                </div>
                <input type="hidden" id="dtp_input1" value="" />
            </div>
            <div class="form-group">
                <label for="dtp_input2" class="control-label">物料结束时间</label>
                <div class="input-group date form_date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                <input class="form-control" size="16" type="text" value="" id="FCreateDateEtime">
                <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
                <input type="hidden" id="dtp_input2" value="" />
            </div>
            <div class="form-group">
                <button id="btn_search1" type="button" class="btn btn-default" >
                  <!-- data-toggle="modal" data-target="#myModal" -->
                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>查看分类
                </button>
            </div>
            <div class="form-group">
                <button id="btn_search2" type="button" class="btn btn-default">
                <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>饼状分类
                </button>
            </div>
          </div>
        </div>
        <table id="table" data-show-export="true"> </table>
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        	<div class="modal-dialog modal-lg">
        		<div class="modal-content">
        			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
        					&times;
        				</button>
        				<h4 class="modal-title" id="myModalLabel">
        					查看分类
        				</h4>
        			</div>
        			<div class="modal-body" id="win15" style="padding:0px;">

                	<div id="win5" style="width:900px;height:650px;padding:0px;" > </div>

        			</div>
        			<div class="modal-footer">
        				<button type="button" class="btn btn-default" data-dismiss="modal">关闭
        				</button>
        			</div>
        		</div><!-- /.modal-content -->
        	</div><!-- /.modal -->
        </div><!-- modal -->

        <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                  &times;
                </button>
                <h4 class="modal-title" id="myModalLabel1">
                  查看分类
                </h4>
              </div>
              <div class="modal-body" id="win16" style="padding:0px;">

                  <div id="win6" style="width:900px;height:750px;padding:0px;" > </div>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭
                </button>
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal -->
        </div>
    </div>    <!-- cont-->

<script>
    var $table = $('#table'),
        $search1 = $('#search1'),
        $btn_search1=$('#btn_search1'),
        $btn_search2=$('#btn_search2');
    initTable();


    $btn_search1.click(function (){

      if( $('#FName').val()!=''||$('#FModel').val()!=''||$('#FCreateDateStime').val()!=''){

      $('#myModal').modal('toggle');
      classone();

                                  }else{alert("请填入物料名称、规格或起始时间");};
                              })
      $btn_search2.click(function (){

      if( $('#FName').val()!=''||$('#FModel').val()!=''||$('#FCreateDateStime').val()!=''){

      $('#myModal1').modal('toggle');
      pieclassone();

                                                            }else{alert("请填入物料名称、规格或起始时间");};
                                                        })



    $(function () {
        $search1.click(function (){
        var opt = {
          url: "/demo/index.php/index/Index/ab",
          silent: false,
          query:{
            FNumber: $('#FNumber').val(),
            FName: $('#FName').val(),
            FModel: $('#FModel').val(),
            FUnitID:$('#FUnitID').val(),
            FCreateDateStime:$('#FCreateDateStime').val(),
            FCreateDateEtime:$('#FCreateDateEtime').val()
                }
                  };

          $('#table').bootstrapTable('refresh',opt);

                                    })
                  });



  $('.form_date').datetimepicker({
    language:  'zh-CN',
    weekStart: 1,
    todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    minView: 2,
    forceParse: 0
    });



    function initTable() {
        $table.bootstrapTable({
            height: getHeight(),
            url:'/demo/index.php/index/Index/ab',
            queryParams: function (params) {
                return {

                  limit : params.limit,
                  offset : params.offset,
                  order : params.order,
                  ordername : params.sort,
                  FNumber: $('#FNumber').val(),
                  FName: $('#FName').val(),
                  FModel: $('#FModel').val(),
                  FUnitID:$('#FUnitID').val(),
                  FCreateDateStime:$('#FCreateDateStime').val(),
                  FCreateDateEtime:$('#FCreateDateEtime').val()
                };
            },
            showHeader : true,
            showColumns : true,
            // method      :'post',
            showRefresh : true,
            sortOrder : 'desc',
            toolbar: "#toolbar",
            pagination: true,//分页
            sidePagination : 'server',//服务器端分页
            pageNumber : 1,
            pageSize   : 10,
            pageList: [10, 20, 50],//分页步进值
            columns: [
                {
                    field: 'fnumber',//域值
                    title: '物料编码',//标题
                    visible: true,//false表示不显示
                    sortable: true,//启用排序
                    width : '5%',
                },
                {
                    field: 'fname',//域值
                    title: '物料名称',//标题
                    visible: true,//false表示不显示
                    sortable: true,//启用排序
                    width : '30%',

                },
                {
                    field: 'fmodel',//域值
                    title: '物料规格',//内容
                    visible: true,//false表示不显示
                    sortable: true,//启用排序
                    width : '35%',

                },
                {
                    field: 'funitid',//域值
                    title: '单位',//内容
                    visible: true,//false表示不显示
                    sortable: true,//启用排序
                    width : '10%',

                },
                {
                    field: 'ffullname',//域值
                    title: '物料分类',//内容
                    visible: true,//false表示不显示
                    sortable: true,//启用排序
                    width : '20%',

                },
                {
                    field: 'fcreatedate',//域值
                    title: '品号建立时间',//内容
                    visible: true,//false表示不显示
                    sortable: true,//启用排序
                    width : '10%',

                }
                  ]
        });

        $(window).resize(function () {
            $table.bootstrapTable('resetView', {
                height: getHeight()
            });
        });

    }



    function getHeight() {
        return $(window).height() -$('#panelbody1').outerHeight(true); //$('h1').outerHeight(true)
    }





    function classone()
  {
           var names = [], ages = [];
            if  ( $('#FCreateDateEtime').val()==''){
            var user = {
            FNumber: $('#FNumber').val(),
            FName: $('#FName').val(),
            FModel: $('#FModel').val(),
            FUnitID:$('#FUnitID').val(),
            FCreateDateStime: $('#FCreateDateStime').val(),
            FCreateDateEtime: '2029-12-11'
                       };
                                                 } else{
                                                   var user = {
            FNumber: $('#FNumber').val(),
            FName: $('#FName').val(),
            FModel: $('#FModel').val(),
            FUnitID:$('#FUnitID').val(),
            FCreateDateStime: $('#FCreateDateStime').val(),
            FCreateDateEtime: $('#FCreateDateEtime').val()
                                                            };
                                                 };

          if( $('#FName').val()!=''||$('#FModel').val()!=''||$('#FCreateDateStime').val()!=''){


          getusers();
          echartsbuild();
                                      }else{alert("请填入物料名称、规格或起始时间");};


      function getusers() {

          $.ajax({
              type: "post",
              async: false,
              url: "/demo/index.php/index/Index/a",
              data: user,
              dataType: "json",
              success: function(result){
                  if(result){
                      for(var i = 0 ; i < result.length; i++){
                          names.push(result[i].fname);
                          ages.push(result[i].count);
                      }
                  }
              },
              error: function(errmsg) {
                  alert("Ajax获取服务器数据出错了！"+ errmsg);
              }
          });
      return names, ages;
      }

      function echartsbuild() {
          var mychart = echarts.init(document.getElementById("win5"));

          var option = {
              title : {
                  text : '物料分类图'
              },
              tooltip : {
                  show : true
              },
              legend : {
                  data : [ '种类' ]
              },
              xAxis : [ {
                  data : names,
                  name :"种类",
                  axisLabel:{
                           interval:0,
                           rotate:0,
                          formatter:function(value){
                    var newParamsName = "";
                  var paramsNameNumber = value.length;
                  var provideNumber = 2;
                  var rowNumber = Math.ceil(paramsNameNumber / provideNumber);//
                  if (paramsNameNumber > provideNumber) {

                      for (var p = 0; p < rowNumber; p++) {
                          var tempStr = "";
                          var start = p * provideNumber;
                          var end = start + provideNumber;

                          if (p == rowNumber - 1) {

                              tempStr = value.substring(start, paramsNameNumber);
                          } else {

                              tempStr = value.substring(start, end) + "\n";
                          }
                          newParamsName += tempStr;
                      }


                  } else {

                      newParamsName = value;
                  }

                  return newParamsName;
            }
            }
              } ],
           grid: {
               x:  50,
               x2: 50,
               y2: 200
           },
              yAxis : [ {
                  type : 'value'

              } ],
              series : [ {
                  "name" : "种类",
                  "type" : "bar",
                  "data" : ages
              } ]
          };
          mychart.setOption(option);

                    }
    }

    function pieclassone()
    {
           var names = [], counts = [],store =[];
            if  ( $('#FCreateDateEtime').val()==''){
            var user = {
            FNumber: $('#FNumber').val(),
            FName: $('#FName').val(),
            FModel: $('#FModel').val(),
            FUnitID:$('#FUnitID').val(),
            FCreateDateStime: $('#FCreateDateStime').val(),
            FCreateDateEtime: '2029-12-11'
                       };
                                                 } else{
                                                   var user = {
            FNumber: $('#FNumber').val(),
            FName: $('#FName').val(),
            FModel: $('#FModel').val(),
            FUnitID:$('#FUnitID').val(),
            FCreateDateStime: $('#FCreateDateStime').val(),
            FCreateDateEtime: $('#FCreateDateEtime').val()
                                                            };
                                                 };

          if( $('#FName').val()!=''||$('#FModel').val()!=''||$('#FCreateDateStime').val()!=''){


          getusers1();
          echartsbuild1();
                                      }else{alert("请填入物料名称、规格或起始时间");};

      function getusers1() {

          $.ajax({
              type: "post",
              async: false,
              url: "/demo/index.php/index/Index/pie",
              data: user,
              dataType: "json",
              success: function(result){
                  if(result){
                      for(var i = 0 ; i < result.length; i++){
                          names.push(result[i].fname);
                          counts.push(result[i].count);
                          store.push({value: result[i].count,name:result[i].fname});
                      }
                  }
              },
              error: function(errmsg) {
                  alert("Ajax获取服务器数据出错了！"+ errmsg);
              }
          });
      return names, counts;
      }

      function echartsbuild1() {
          var mychart = echarts.init(document.getElementById("win6"));

          var option = {
      title : {
          text: '物料分类饼状图',
          subtext: '只显示查询前6大类',
          x:'center'
      },
      tooltip : {
          trigger: 'item',
          formatter: "{a} <br/>{b} : {c} ({d}%)"
      },
      legend: {
          orient: 'vertical',
          left: 'left',
          data: names
      },
      series : [
          {
              name: '物料分类名称',
              type: 'pie',
              radius : '55%',
              center: ['50%', '60%'],
              data:store,
              itemStyle: {
                  emphasis: {
                      shadowBlur: 10,
                      shadowOffsetX: 0,
                      shadowColor: 'rgba(0, 0, 0, 0.5)'
                  },

              normal:{
                          label:{
                              show: true,
                              formatter: '{b} : {c} ({d}%)'
                          },
                          labelLine :{show:true}
                      }
                        }
          }
      ]
    };

          mychart.setOption(option);

                    }
    }

</script>
</body>
</html>
