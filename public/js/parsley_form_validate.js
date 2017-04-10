
// alert(asset_url);
altair_forms.parsley_validation_config();
$.getScript(asset_url + 'alt_air/bower_components/parsleyjs/dist/parsley.min.js');
$.getScript(asset_url + 'alt_air/assets/js/pages/forms_validation.min.js');
$(function() {
    if(isHighDensity()) {
        $.getScript( asset_url +"alt_air/bower_components/dense/src/dense.js", function() {
            altair_helpers.retina_images();
        })
    }
    if(Modernizr.touch) {
        // fastClick (touch devices)
        FastClick.attach(document.body);
    }
});
$window.load(function() {
    // ie fixes
    altair_helpers.ie_fix();
});
