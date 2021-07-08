<html>
<head>
	<title>Drag and Drop</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<style type="text/css" media="screen">
		div.base {
			position: absolute;
			overflow: hidden;
			font-family: Arial;
			font-size: 8pt;
		}
		div.base#graph {
			border-style: solid;
			border-color: #F2F2F2;
			border-width: 1px;
			background: url('images/grid.gif');
		}
	</style>
	<script type="text/javascript">
		mxBasePath = 'src';
		window.onbeforeunload = function() { return mxResources.get('changesLost'); };
	</script>
	<script type="text/javascript" src="js/mxClient.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
</head>
<body onload="createEditor('config/layouteditor.xml');">
	<div id="graph" class="base">
		<!-- Graph Here -->
	</div>
	<div id="status" class="base" align="right" style="white-space:nowrap;">
		<!-- Status Here -->Done
	</div>
</body>
</html>
