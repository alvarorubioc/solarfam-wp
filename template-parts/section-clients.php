<section id="sf-clients">
    <div class="container mt-4">
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <?php
                    if ( is_front_page() ) {
                        echo '<h2>Empresas que se han sumado a la energía solar fotovoltaica</h2>';

                    } else {
                        echo '<p class="text-h2">Empresas que se han sumado a la energía solar fotovoltaica</p>';
                    }
                ?>
                <p class="big">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit…</p>
            </div>
            <div class="col-xs-12 col-md-6">
                <div class="row">
                    <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Clients')) : ?>
                    <?php endif; ?>
                </div>   
            </div>
        </div>
    </div>
</section>