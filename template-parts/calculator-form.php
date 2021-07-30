<div class="mt-2" id="calculator-form">
	<form method="post" action="./">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<a name="a_cp"></a>
                    <p class="text-h4">Introduce tu código postal</p>
					<div class="row bottom-xs">
						<div class="col-xs-12 col-md-4 mt-2">
							<label for="cp">Código Postal*</label>
							
							<?php 
								if($_SESSION["errorcp"]!=""){
									echo "<input type=\"text\" id=\"cp\" class=\"input-gasto error\" name=\"cp\" maxlength=\"5\" value=\"".$_SESSION["cp"]."\" aria-required=\"true\" aria-invalid=\"false\">";
									echo "<span class=\"error\">".$_SESSION["errorcp"]."</span>";
									echo "<script>location.hash = '#a_cp';</script>";
								} 
								else{
									echo "<input type=\"text\" id=\"cp\" class=\"input-gasto\" name=\"cp\" maxlength=\"5\" value=\"".$_SESSION["cp"]."\" aria-required=\"true\" aria-invalid=\"false\">";
								}
							?>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row mt-4">
				<div class="col-xs-12">
					<p class="text-h4"><label for="superficie" style="font-size:100%;">Superficie de la cubierta (m<sup>2</sup>)</label></p>
					<div class="mt-2">
    					<input type="text" id="superficie" class="js-range-slider" name="superficie" value="<?php echo $_SESSION["superficie"]; ?>" />  
						<?php 
							if($_SESSION["errorsuperficie"]!=""){
								echo "<span class=\"error\">".$_SESSION["errorsuperficie"]."</span>";
							}
						?>
					</div>
				</div>
			</div>

            <div class="row mt-4" id="roof-type">
				<div class="col-xs-12">
					<p class="text-h4">Tipo de cubierta</p>
					<div class="row mt-2">
						<div class="col-xs-12 col-md-3">
							<input type="radio" name="roof" id="panel" value="panel-sandwich" <?php if($_SESSION["roof"]=="panel-sandwich"){ echo "checked";}  ?>/>
							<label for="panel" class="sf-card calculator">
			 
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/panel-sandwich.png" alt="Panel Sandwich">
			  
								<strong>Panel Sandwich</strong>
							</label>		
						</div>
						<div class="col-xs-12 col-md-3">
							<input type="radio" name="roof" id="chapa" value="chapa-trapezoidal" <?php if($_SESSION["roof"]=="chapa-trapezoidal"){ echo "checked";}  ?>>
							<label for="chapa" class="sf-card calculator">
			 
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/chapa-trapezoidal.png" alt="Chapa Trapezoidal">
			  
								<strong>Chapa Trapezoidal</strong>
							</label>
						</div>
						<div class="col-xs-12 col-md-3">
							<input type="radio" name="roof" id="fibrocemento" value="fibrocemento" <?php if($_SESSION["roof"]=="fibrocemento"){ echo "checked";}  ?>>
							<label for="fibrocemento" class="sf-card calculator">
			 
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/fibrocemento.png" alt="Fibrocemento">
			  
								<strong>Fibrocemento</strong>
							</label>
						</div>
						<div class="col-xs-12 col-md-3">
							<input type="radio" name="roof" id="teja" value="teja" <?php if($_SESSION["roof"]=="teja"){ echo "checked";}  ?>>
							<label for="teja" class="sf-card calculator">
			 
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/teja.png" alt="Teja">
			  
								<strong>Teja</strong>
							</label>
						</div>
					</div>
				</div>
			</div>

			<div class="row mt-4">
				<div class="col-xs-12">
					<a name="a_gasto"></a>
                    <p class="text-h4">Gasto mensual de energía actual (con IVA)</p>
					<div class="row middle-xs">
						<div class="col-xs-12 col-md-4 mt-2">
							<label for="gasto">Gasto mensual en Euros (con IVA)*</label>
						    
								<?php 
									if($_SESSION["errorgasto"]!=""){
										
										echo "<input type=\"text\" id=\"gasto\" class=\"input-gasto error\" name=\"gasto\" value=\"".$_POST["gasto"]."\" aria-required=\"true\" aria-invalid=\"false\" />";
										echo "<span class=\"error\">".$_SESSION["errorgasto"]."</span>";
										echo "<script>location.hash = '#a_gasto';</script>";
									} 
									else{
										echo "<input type=\"text\" id=\"gasto\" class=\"input-gasto\" name=\"gasto\" value=\"".$_POST["gasto"]."\" aria-required=\"true\" aria-invalid=\"false\" />";
									}
								?>
							
						</div>
						<div class="col-xs-12 col-md-6 mt-2">
							<input type="submit" class="btn btn--accent btn--full btn--md" id="btnCalcular"  name="btnCalcular" value="Calcular tu consumo"/>
						</div>
					</div>
				</div>
			</div>

		</div>
	</form>		
</div><!-- .entry-content -->
<hr class="mt-4">
<div class="clearfix"></div>

<!--Plugin JavaScript file to slider-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/js/ion.rangeSlider.min.js"></script>

<script>
jQuery(function($){ 
$(".js-range-slider").ionRangeSlider({
        min: 600,
        max: 6000,
		from: <?php echo $_SESSION["superficie"]; ?>,
		postfix: " m2",
		max_prefix: "+",
		step: 100,
		skin: "round"
	});
});
</script>