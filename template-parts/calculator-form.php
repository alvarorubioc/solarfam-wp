<div class="entry-content">
	<form>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
                    <h2>Calculadora de autoconsumo solar:<br> Rentabilidad del proyecto fotovoltaico</h2>
				</div>
			</div>

            <div class="row mt-4">
				<div class="col-xs-12">
                    <p class="text-h4">Superficie de la cubierta (m<sup>2</sup>)</p>
					<div class="mt-2">
    					<input type="text" class="js-range-slider" name="superficie" value="" />    
					</div>
				</div>
			</div>

            <div class="row mt-4">
				<div class="col-xs-12">
					<p class="text-h4">Tipo de cubierta</p>
					<div class="row mt-2">
						<div class="col-xs-12 col-md-3">
							<div class="sf-card calculator">
								<div>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/panel-sandwich.png" alt="Panel Sandwich">
								</div>
								<strong>Panel Sandwich</strong>
							</div>
						</div>
						<div class="col-xs-12 col-md-3">
							<div class="sf-card calculator active">
								<div>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/chapa-trapezoidal.png" alt="Chapa Trapezoidal">
								</div>
								<strong>Chapa Trapezoidal</strong>
							</div>
						</div>
						<div class="col-xs-12 col-md-3">
							<div class="sf-card calculator">
								<div>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/fibrocemento.png" alt="Fibrocemento">
								</div>
								<strong>Fibrocemento</strong>
							</div>
						</div>
						<div class="col-xs-12 col-md-3">
							<div class="sf-card calculator">
								<div>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/teja.png" alt="Teja">
								</div>
								<strong>Teja</strong>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row mt-4">
				<div class="col-xs-12">
                    <p class="text-h4">Gasto de energía actual (con IVA)</p>
					<div class="row bottom-xs">
						<div class="col-xs-12 col-md-4 mt-2">
							<label>Gasto en Euros*
								<input type="text" class="input-gasto" name="your-name" value="" aria-required="true" aria-invalid="false">
							</label>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-2 mt-2">
							<button class="btn btn--primary btn--md" id="button" name="button-upload" value="Upload">Adjutar factura</button>
						</div>
						<div class="col-xs-12 col-sm-3 col-md-2 mt-2">
							<span>Puede adjuntar su factura si lo desea</span>
						</div>
					</div>
				</div>
			</div>

			<div class="row mt-4">
				<div class="col-xs-12">
					<p class="text-h4">Empresa</p>
					<div class="row bottom-xs">
						<div class="col-xs-12 col-md-4 mt-2">
							<label>Nombre empresa
								<input type="text" class="input-gasto" name="your-name" value="" aria-required="true" aria-invalid="false">
							</label>
						</div>
						<div class="col-xs-12 col-md-4 mt-2">
							<label>CIF
								<input type="text" class="input-gasto" name="your-name" value="" aria-required="true" aria-invalid="false">
							</label>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row mt-4">
				<div class="col-xs-12 col-md-6">
					<button class="btn btn--accent btn--full btn--md" id="button" name="send" value="send">Calcular tu consumo</button>
				</div>
			</div>

		</div>
	</form>		
</div><!-- .entry-content -->

<div class="clearfix"></div>

<!--Plugin JavaScript file to slider-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/js/ion.rangeSlider.min.js"></script>

<script>
jQuery(function($){ 
$(".js-range-slider").ionRangeSlider({
        min: 600,
        max: 2000,
		from: 1000,
		postfix: " m2",
		max_prefix: "+",
		step: 100,
		skin: "round"
	});
});
</script>