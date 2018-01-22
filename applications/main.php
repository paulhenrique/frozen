<?php 
switch ($application) {
	case 'usp':
	?>
	<div class="main p-md-5">
		<div id="inicio" class="show tab-content">
			<div class="container mt-md-5 p-md-5 bg-white box-shadow border-radius">
				<div class="row justify-content-end pt-5">
					<div class="col-12 col-md-8 rounded">
						<div class="m-3 text-center" id="chart-dados"></div>
						<div id="chart" style="width:550px;height:550px;">
						</div>
					</div>
					<div class="col-12 col-md-4">
						<h4 class="thin">Chart List</h4>
						<ul class="list-group mt-3 list-chart">
							<?php
							$data = create_list_charts();
							foreach ($data as $entry):
								$item["src"] = $entry;
								$item["title"] = pathinfo($entry, PATHINFO_FILENAME);
								?>
								<a class='btn-PreviewGraph' data-file="<?= $item["src"] ?>">
									<li class='list-group-item list-graph'> <i class='fa fa-line-chart'></i><?= $item["title"] ?></li>
								</a>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<?php break; ?>
		<?php case 'ifsp': ?>
		<div class="main p-md-5">
			<div id="inicio" class="show tab-content">
				<div class="container mt-md-5 p-md-5 bg-white box-shadow border-radius">
					<div class="row justify-content-end pt-5">
						<div class="col-12 col-md-8 rounded">
							<div class="m-3 text-center" id="chart-dados"></div>
							<div id="chart">
							</div>
						</div>
						<div class="col-12 col-md-4">
							<h4 class="thin">Chart List</h4>
							<ul class="list-group mt-3 list-chart">
								<?php
								$data = create_list_charts();
								foreach ($data as $entry):
									$item["src"] = $entry;
									$item["title"] = pathinfo($entry, PATHINFO_FILENAME);
									?>
									<a class='btn-PreviewGraph' data-file="<?= $item["src"] ?>">
										<li class='list-group-item list-graph'> <i class='fa fa-line-chart'></i><?= $item["title"] ?></li>
									</a>
								<?php endforeach; ?>

							</ul>
						</div>
					</div>
				</div>
			</div>
			<?php
			break;
			default:
			?>
			<div class="main p-5">
				<!-- <h3 class="thin mt-5">Painel de Aplicações</h3> -->
				<div class="mt-5 row">
					<div class="col-3">
						<a href="frozen-IFSP.php">
							<img class="box-shadow card-img-top border-radius" src="../view/img/logo_frozen.png" alt="Card image cap">
						</a>
					</div>
					<div class="col-3">
						<a href="frozen-USP.php">
							<img class="box-shadow card-img-top border-radius" src="../view/img/logo_frozen.png" alt="Card image cap">
						</a>
					</div>
				</div>
			</div>
		</body>

		<?php
		break;
	}

	?>