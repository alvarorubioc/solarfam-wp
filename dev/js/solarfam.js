$ = jQuery, $("#btn-calcular").click(function() {
    $("html, body").animate({
        scrollTop: $("#calculator-form").offset().top - 32
    }, 500);
  });

jQuery(document).ready(function() {
    jQuery(".wp-block-gallery figure a").each(function() {
        jQuery(this).attr("data-lightbox", "lightbox");
    });
});