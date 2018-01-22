<?php
$page = "application";
$application = "usp";
$title = "USP";
include 'sidebar.php';
include 'main.php';
include 'generate-graph.php';
include 'footer.php';
?>
<script type="text/javascript">
	function chart(){
		var title;
		var labels;
		var data;  
		var shape;
		var user;
		var file;
		this.setTitle = function(_a){
			this.title = _a;
		}
		this.getTitle = function(){
			return this.title;
		}
		this.setLabels = function(_a){
			this.labels = _a;
		}
		this.getLabels = function(){
			return this.labels;
		}
		this.setData = function(_a){
			this.data = _a;
		}
		this.getData = function(){
			return this.data;
		}
		this.setShape = function(_a){
			this.shape = _a;
		}
		this.getShape = function(){
			return this.shape;
		}
		this.setUser = function(_a){
			this.user =_a;
		}
		this.setFile = function(_a){
			this.file = _a;
		}
		this.getFile = function(){
			return this.file;
		}
		this.definir_parametros = function (){	
			var src = "../users/"+this.user+"/"+this.file+"";
			$.getJSON(src).done(function(resultado){
				console.log("read JSON");
				this.title   = resultado.title;
				this.labels  = resultado.labels;
				this.data    = resultado.data;
				this.shape    = resultado.shape;		
				var layout = {
					title:this.title,
					// var ret = "data-123".replace('data-','');
					xaxis: {
						title: this.labels[0].replace(/\\u00b2/g,'²')
					},
					yaxis: {
						title: this.labels[1].replace(/\\u00b2/g,'²')
					}
				}
				if(this.shape == 2){
					console.log("gerar_chart_2d");
					// var labels = [];
					var data = [{
						x: resultado.data[0][0],
						y: resultado.data[0][0],
						z:resultado.data[2],
						colorscale: 'Jet',
						type: 'heatmap'
					}];
				}
				else{
					console.log("gerar_chart_1d");
					var trace1 = {
						y: this.data[1],
						x: this.data[2],
						type: 'scatter'
					};

					var data = [trace1];
				}
				Plotly.newPlot('chart', data, layout);
			});
		}
		this.gerar_chart_2d = function(){
			
		}
	}

	$(".btn-PreviewGraph").on("click", function (e) {
		e.preventDefault();
		
		$(".list-graph").removeClass("active");
		$(this).children("li").addClass("active");
		var chart_create = new chart();
		chart_create.setUser("<?=$_SESSION["user"]["user"]?>");
		var src = $(this).attr("data-file");
		chart_create.setFile(src);
		chart_create.definir_parametros();
	});
	$(function () {
		$(".list-chart a:eq(0)").click();
	});
</script>
</html>
