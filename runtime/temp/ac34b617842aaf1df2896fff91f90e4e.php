<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:82:"/opt/lampstack-7.1.15-0/apache2/htdocs/demo/application/home/view/index/index.html";i:1522629447;}*/ ?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="keywords" content="jquery,ui,easy,easyui,web">
	<meta name="description" content="easyui help you build your web page easily!">
	<title>Load parent/child nodes into tree - jQuery EasyUI Demo</title>
	<link rel="stylesheet" type="text/css" href="/demo/public/static/css/tree.css">


	  <link rel="stylesheet" href="/demo/public/static/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="/demo/public/static/css/fontawesome-all.css"> -->
		<script src="/demo/public/static/js/bootstrap.min.js"></script>
		<!-- <link rel="stylesheet" href="/demo/public/static/css/index.css">  -->
	<script type="text/javascript" src="/demo/public/static/js/jquery.min.js"></script>
	<script type="text/javascript" src="/demo/public/static/js/jquery.easyui.min.js"></script>

	</style>
	<script type="text/javascript">
		function convert(rows){
			function exists(rows, parendid){
				for(var i=0; i<rows.length; i++){
					if (rows[i].id == parendid) return true;
				}
				return false;
			}

			var nodes = [];
			// get the top level nodes
			for(var i=0; i<rows.length; i++){
				var row = rows[i];
				if (!exists(rows, row.parendid)){
					nodes.push({
						id:row.id,
						text:row.name
					});
				}
			}

			var toDo = [];
			for(var i=0; i<nodes.length; i++){
				toDo.push(nodes[i]);
			}
			while(toDo.length){
				var node = toDo.shift();	// the parent node
				// get the children nodes
				for(var i=0; i<rows.length; i++){
					var row = rows[i];
					if (row.parendid == node.id){
						var child = {id:row.id,text:row.name};
						if (node.children){
							node.children.push(child);
						} else {
							node.children = [child];
						}
						toDo.push(child);
					}
				}
			}
			return nodes;
		}

		$(function(){
			$('#tt').tree({
				            url: '/demo/index.php/home/Index/ab',
				//url: '/demo/public/tree6_data.json',
				//url: '/demo/public/ab.json',
				            loadFilter: function(rows){return convert(rows);},
				            onLoadSuccess:function(node, data){
	                  if(data){
						          $(data).each(function (index,value){
					            if (this.state=='open'){
						              $('#tt').tree('collapseAll');}
															                           });
				                    }
													                            }
			});
		});
	</script>
</head>
<body>
	<div class="container" id="win">
	<h2 style="margin-bottom:0px;margin-top:5px" >ERP物料分类</h2>
	<ul id="tt"></ul>
</div>
</body>
</html>
