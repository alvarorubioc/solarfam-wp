<a name="a_resultados"></a>
	
<div class="container mt-2" id="calculator-success">

    <div class="row">
        <div class="col-xs-12 col-md-8">
            <p class="text-h2">El precio de producción de un kWh de origen solar para tu empresa es de:</p>
        </div>
    </div>

    <div class="row mt-2">
        
        <div class="col-xs-12 col-md-3">
            <div class="sf-card">
                <div class="sf-card-content">
                    <div class="icon-success">
                        <svg class="icon" width="64" height="64" viewBox="0 0 32 32">
							<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/sprite-icons.svg#euro" />
                        </svg>
                    </div>    
                    <div class="number-success"><p class="text-h2"><?php echo $_SESSION["PrecioProduccion"]; ?> €</p></div>
                    <span class="text-h4">Precio de producir tu propia energía (€/kWh)</span>
					<p><?php echo $_SESSION["Texto1"]; ?></p>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-md-3">
            <div class="sf-card">
                <div class="sf-card-content">
                    <div class="icon-success">
                        <svg class="icon" width="64" height="64" viewBox="0 0 32 32">
							<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/sprite-icons.svg#sun" />
                        </svg>
                    </div>  
                    <div class="number-success"><p class="text-h2"><?php echo $_SESSION["PotenciaaInstalar"] ?> <small>kWh</small></p></div>
                    <span class="text-h4">Potencia a instalar de origen solar (kW)</span>
                    <p><?php echo $_SESSION["Texto3"]; ?></p>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-md-3">
            <div class="sf-card">
                <div class="sf-card-content">
                    <div class="icon-success">
                        <svg class="icon" width="64" height="64" viewBox="0 0 32 32">
							<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/sprite-icons.svg#activity" />
                        </svg>
                    </div>  
                    <div class="number-success"><p class="text-h2"><?php echo $_SESSION["ProduccionEstimada"]  ?> <small>kWh</small></p></div>
                    <span class="text-h4">Producción estimada de la instalación (kWh/año)</span>
                    <p><?php echo $_SESSION["Texto2"]; ?></p>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-md-3">
            <div class="sf-card">
                <div class="sf-card-content">
                    <div class="icon-success">
                        <svg class="icon" width="64" height="64" viewBox="0 0 32 32">
							<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/sprite-icons.svg#tree" />
                        </svg>
                    </div>  
                    <div class="number-success"><p class="text-h2"><?php echo $_SESSION["ImpactoAmbiental"] ?></p></div>
                    <span class="text-h4">Impacto ambiental CO<sup>2</sup> (toneladas)</span>
                    <p><?php echo $_SESSION["Texto4"]; ?></p>
                </div>
            </div>
        </div>
        <div class="col-xs-12 center-xs">
            <p>Estos datos se han contrastado con el programa de cálculo PV GIS de la Comisión Europea
según el código postal donde se encuentra ubicada tu empresa. Todas las cifras son estimadas
y se encuentran sujetas a un estudio llave en mano.</p>
        </div>

    </div>

  <form method="post" action="./">
		<input type="hidden" id="resPrecioProduccion" name="resPrecioProduccion" value="<?php echo $_SESSION["PrecioProduccion"]; ?>" />
		<input type="hidden" id="Texto1" name="Texto1" value="<?php echo $_SESSION["Texto1"]; ?>" />
		<input type="hidden" id="resProduccionEstimada" name="resProduccionEstimada" value="<?php echo $_SESSION["ProduccionEstimada"]; ?>" />
		<input type="hidden" id="Texto2" name="Texto2" value="<?php echo $_SESSION["Texto2"]; ?>" />
		<input type="hidden" id="resPotenciaaInstalar" name="resPotenciaaInstalar" value="<?php echo $_SESSION["PotenciaaInstalar"]; ?>" />
		<input type="hidden" id="Texto3" name="Texto3" value="<?php echo $_SESSION["Texto3"]; ?>" />
		<input type="hidden" id="resImpactoAmbiental" name="resImpactoAmbiental" value="<?php echo $_SESSION["ImpactoAmbiental"]; ?>" />
		<input type="hidden" id="Texto4" name="Texto4" value="<?php echo $_SESSION["Texto4"]; ?>" />
		
		<input type="hidden" id="rescp" name="rescp" value="<?php echo $_SESSION["cp"]; ?>" />
		<input type="hidden" id="resgasto" name="resgasto" value="<?php echo $_SESSION["gasto"]; ?>" />
		<input type="hidden" id="ressuperficie" name="ressuperficie" value="<?php echo $_SESSION["superficie"]; ?>" />
		<input type="hidden" id="resroof" name="resroof" value="<?php echo $_SESSION["roof"]; ?>" />
		
		
        <div class="row mt-4">
            <div class="col-xs-12">
				<a name="a_datos"></a>
                <p class="text-h4">Rellene los datos si desea solicitar un estudio más detallado de su instalación:</p>
                <div class="row top-xs mt-2">
                    <div class="col-xs-12 col-md-4">
                       
						<?php 
								if($_SESSION["errorempresa"]!=""){
									echo " <label>Nombre empresa*<input type=\"text\" class=\"input-gasto error\" name=\"empresa\" aria-required=\"true\" aria-invalid=\"false\" value=\"".$_SESSION["empresa"]."\"></label>";
									echo "<span class=\"error\">".$_SESSION["errorempresa"]."</span>";
									echo "<script>location.hash = '#a_datos';</script>";
								} 
								else{
									echo " <label>Nombre empresa*<input type=\"text\" class=\"input-gasto\" name=\"empresa\" aria-required=\"true\" aria-invalid=\"false\" value=\"".$_SESSION["empresa"]."\"></label>";
								}
						?>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <label>CIF
                            <input type="text" class="input-gasto" id="cif" name="cif" aria-required="true" aria-invalid="false" value="<?php echo $_SESSION["cif"]; ?>">
                        </label>
						
                    </div>
                    <div class="col-xs-12 col-md-4">
                        
						<?php 
								if($_SESSION["erroremail"]!=""){
									echo "<label>Email*<input type=\"email\" class=\"input-gasto error\" name=\"email\" aria-required=\"true\" aria-invalid=\"false\" value=\"".$_SESSION["email"]."\"></label>";
									echo "<span class=\"error\">".$_SESSION["erroremail"]."</span>";
									echo "<script>location.hash = '#a_datos';</script>";
								} 
								else{
									echo "<label>Email*<input type=\"email\" class=\"input-gasto\" name=\"email\" aria-required=\"true\" aria-invalid=\"false\" value=\"".$_SESSION["email"]."\"></label>";
								}
						?>
                    </div>
					
                </div>
            </div>
        </div>

        <div class="row center-xs mt-4 mb-2">
            <div class="col-xs-12 col-md-6">
                <input type="submit" class="btn btn--primary btn--full btn--md" value="Solicitar estudio detallado" name="btnSolicitud" id="btnSolicitud" >
            </div>
        </div>
    </form>    

</div>
<hr>