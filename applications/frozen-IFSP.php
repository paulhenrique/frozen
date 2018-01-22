<?php
$page 	= "application";
$title 	= "IFSP";
$application = "ifsp";
include 'sidebar.php';
include 'main.php';
include 'generate-graph.php';
include 'footer.php';
?>
<script type="text/javascript">
	function gerarGrafico(file){

		var col1 = ['col1'],
		col2 = ['col2'];

		var user = "<?= $_SESSION["user"]["user"]; ?>";
		$.getJSON("../users/"+user+"/"+file+"", function (resultado) {

			$.each(resultado[0], function(index, value){
				$("#chart-dados").html(value);
			});
			$.each(resultado[1], function (index, value){
				// console.log(value);
				col2.push(value[0]);
				col1.push(value[1]);

			});
			var chart = c3.generate({
				data: {
					columns:[
					col1,
					col2
					]
				}
			});
		});
	};

	$(".btn-PreviewGraph").on("click", function (e) {
		e.preventDefault();
		$(".list-graph").removeClass("active");
		$(this).children("li").addClass("active");
		var file = $(this).attr("data-file");
		gerarGrafico(file);
	});
	$(function () {
		$(".list-chart a:eq(0)").click();
	});
</script>
</html>
