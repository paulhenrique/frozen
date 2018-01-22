<?php
switch ($application) {
	case 'usp':
		?>
	<div id="generate-chart" class="tab-content">
		<div class="container mt-md-5 bg-white box-shadow border-radius p-5">
			<h1 class="f300">New Chart</h1>
			<form method="post" action="executar.php">
				<div class="row mt-5 ">
					<div class="col-12 col-md-6">
						<div class="row">
							<div class="col-12 col-md-6">
								<div class="form-group">
									<label for="tipoFW">Frozen Wave Type</label>
									<select class="form-control" id="tipoFW" name="tipoFW">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
									</select>
								</div>
								<div class="form-group">
									<label for="ordemFeixes">Bessel Beam Order</label>
									<select class="form-control" id="ordemFeixes" name="ordemFeixes">
										<option value="0">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>
								</div>
							</div>
							<div class="col-12 col-md-6">
								<legend class="col-form-legend">Options </legend>
								<div class="form-check">
									<label class="form-check-label">
										<input class="form-check-input" type="radio" name="opt" value="1" checked>
										Bessel
									</label>
								</div>
								<div class=" row-check">
									<label class="form-check-label">
										<input class="form-check-input" type="radio" name="opt" value="2" >
										PSI
									</label>
								</div>
								<div class="form-check">
									<label class="form-check-label">
										<input class="form-check-input" type="radio" name="opt" value="10" >
										GNM-Magnético
									</label>
								</div>
								<div class="form-check">
									<label class="form-check-label">
										<input class="form-check-input" type="radio" name="opt" value="4" >
										Anbn
									</label>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6">
						<label for="rangeInicial">Range</label>
						<div class="row">
							<div class="col-12 col-md-6">
								<input type="number" class="form-control  mb-sm-0 mt-0 mt-sm-2 mb-2" id="rangeInicial" placeholder="Start" name="rangeInicial">
							</div>
							<div class="col-12 col-md-6">
								<input type="number" class="form-control  mb-sm-0 mt-0 mt-sm-2 mb-2" id="rangeFinal" placeholder="End" name="rangeFinal">
							</div>
						</div>
						<input type="number" class="col-12 col-md-3 form-control mt-0 mt-sm-2" id="passo" placeholder="Step" name="passo"  data-toggle="tooltip" data-placement="bottom" title="Passo maior que 100">
						<button type="submit"  class="btn btn-primary mt-2 mx-auto mx-sm-auto" >Process</button>
					</div>

				</div>
			</form>
		</div>
	</div>
</div>	<!-- container generate graph -->
</div>
</body>

	<?php
	break;
	case'ifsp':
	?>
	<div id="generate-chart" class="tab-content">
		<div class="container mt-md-5 bg-white box-shadow border-radius p-5">
			<h1 class="f300">New Chart</h1>
			<form method="post" action="executar.php">
				<div class="row mt-5 ">
					<div class="col-12 col-md-6">
						<div class="row">
							<div class="col-12 col-md-6">
								<div class="form-group">
									<label for="tipoFW">Frozen Wave Type</label>
									<select class="form-control" id="tipoFW" name="tipoFW">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
									</select>
								</div>
								<div class="form-group">
									<label for="ordemFeixes">Bessel Beam Order</label>
									<select class="form-control" id="ordemFeixes" name="ordemFeixes">
										<option value="0">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>
								</div>
							</div>
							<div class="col-12 col-md-6">
								<legend class="col-form-legend">Options </legend>
								<div class="form-check">
									<label class="form-check-label">
										<input class="form-check-input" type="radio" name="opt" value="1" checked>
										Bessel
									</label>
								</div>
								<div class=" row-check">
									<label class="form-check-label">
										<input class="form-check-input" type="radio" name="opt" value="2" >
										PSI
									</label>
								</div>
								<div class="form-check">
									<label class="form-check-label">
										<input class="form-check-input" type="radio" name="opt" value="10" >
										GNM-Magnético
									</label>
								</div>
								<div class="form-check">
									<label class="form-check-label">
										<input class="form-check-input" type="radio" name="opt" value="4" >
										Anbn
									</label>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6">
						<label for="rangeInicial">Range</label>
						<div class="row">
							<div class="col-12 col-md-6">
								<input type="number" class="form-control  mb-sm-0 mt-0 mt-sm-2 mb-2" id="rangeInicial" placeholder="Start" name="rangeInicial">
							</div>
							<div class="col-12 col-md-6">
								<input type="number" class="form-control  mb-sm-0 mt-0 mt-sm-2 mb-2" id="rangeFinal" placeholder="End" name="rangeFinal">
							</div>
						</div>
						<input type="number" class="col-12 col-md-3 form-control mt-0 mt-sm-2" id="passo" placeholder="Step" name="passo"  data-toggle="tooltip" data-placement="bottom" title="Passo maior que 100">
						<button type="submit"  class="btn btn-primary mt-2 mx-auto mx-sm-auto" >Process</button>
					</div>

				</div>
			</form>
		</div>
	</div>
</div>	<!-- container generate graph -->
</div>
</body>
<?php
break;
default:
				# code...
break;
}	
?>