<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-12 col-xs-12 left-section">
				
			</div>
			<div class="col-md-6 col-sm-12 col-xs-12">
				<div class="right-upper-section">
					<div id="my_dataviz"></div>
				</div>
				<div class="right-lower-section">
					
				</div>
			</div>
		</div>
	</div>
</body>
<script src="https://d3js.org/d3.v4.js"></script>
<script type="text/javascript">
	d3.csv("https://github.com/KaungMinKhant/Data4ChangeMTech/blob/master/html/data.csv", function(data){
		console.log(data);
	})
</script>