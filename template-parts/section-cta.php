<section id="sf-cta">
    <div class="container">
        
        <div class="row reverse">
            <div class="col-xs-12 col-md-5 last-xs">
                <div class="sf-card slideanim slide">
                    <?php echo do_shortcode( '[contact-form-7 id="6" title="CTA Form"]' ); ?>
                </div>    
            </div>
            <div class="col-xs-12 col-md-6 col-md-offset-1">
                <?php
                    if ( is_front_page() ) {
                        echo '<h2>Soluciones de eficiencia energética para empresas</h2>';

                    } else {
                        echo '<p class="text-h2">Soluciones de eficiencia energética para empresas</p>';
                    }
                ?>
                <p class="big">Solicita un <strong>estudio gratuito* para tu proyecto</strong> de instalación de autoconsumo fotovoltaico.</p>
                <ul class="cta-list">
                    <li>
                        <p class="text-h4">20 años de experiecia</p>
                        <p>Ingenieros industriales, eléctricos y técnicos con 20 años de experiencia en el sector de las energías renovables.</p>
                    </li>
                    <li>
                        <p class="text-h4">Llave en mano</p>
                        <p>Desarrollamos proyectos llave en mano, solicitamos tu licencia de obra y te ofrecemos líneas de financiación.</p>
                    </li>
                    <li>
                        <p class="text-h4">Retorno de la inversión</p>
                        <p>Tasa de retorno de la inversión entre el 10-20%. Coste de producción de kWh de origen solar &lt; 3 céntimos €/kWh.</p>
                    </li>
                </ul>
                <p class="mt-2">*Para clientes en Navarra, Aragón, País Vasco, La Rioja y Castilla y León con un consumo igual o mayor a 2.000€ mensuales.</p>
            </div>
        </div>

    </div>
</section>