var Sliders = function () {

    // default sliders
    $("#default-slider").slider();

    // snap inc
    $("#snap-inc-slider").slider({
        value: 50,
        min: 0,
        max: 1000,
        step: 100,
        slide: function (event, ui) {
            $("#snap-inc-slider-amount").text(ui.value + "  تومان");
        }
    });

    $("#snap-inc-slider-amount").text($("#snap-inc-slider").slider("value") + "  تومان");

    // range slider
    $("#slider-range").slider({
        range: true,
        min: 0,
        max: 500,
        values: [75, 300],
        slide: function (event, ui) {
            $("#slider-range-amount").text(ui.values[0] + "  تومان  - " + ui.values[1] + "  تومان");
        }
    });

    $("#slider-range-amount").text($("#slider-range").slider("values", 0) + "  تومان  - " + $("#slider-range").slider("values", 1)+ "  تومان");

    //range max

    $("#slider-range-max").slider({
        range: "max",
        min: 1,
        max: 10,
        value: 2,
        slide: function (event, ui) {
            $("#slider-range-max-amount").text(ui.value);
        }
    });

    $("#slider-range-max-amount").text($("#slider-range-max").slider("value"));

    // range min
    $("#slider-range-min").slider({
        range: "min",
        value: 3700,
        min: 100,
        max: 70000,
        slide: function (event, ui) {
            $("#slider-range-min-amount").text(ui.value + "  تومان");
        }
    });

    $("#slider-range-min-amount").text($("#slider-range-min").slider("value") + "  تومان");

    //
    // setup graphic EQ
    $( "#eq > span" ).each(function() {
    // read initial values from markup and remove that
        var value = parseInt( $( this ).text(), 10 );
        $( this ).empty().slider({
            value: value,
            range: "min",
            animate: true,
            orientation: "vertical"
        });
    });

    // bound to select

    var select = $( "#minbeds" );
    var slider = $( "<div id='slider'></div>" ).insertAfter( select ).slider({
        min: 1,
        max: 6,
        range: "min",
        value: select[ 0 ].selectedIndex + 1,
        slide: function( event, ui ) {
            select[ 0 ].selectedIndex = ui.value - 1;
        }
    });
    $( "#minbeds" ).change(function() {
        slider.slider( "value", this.selectedIndex + 1 );
    });

    // vertical slider
    $("#slider-vertical").slider({
        orientation: "vertical",
        range: "min",
        min: 0,
        max: 100,
        value: 60,
        slide: function (event, ui) {
            $("#slider-vertical-amount").text(ui.value);
        }
    });
    $("#slider-vertical-amount").text($("#slider-vertical").slider("value"));

    // vertical range sliders
    $("#slider-range-vertical").slider({
        orientation: "vertical",
        range: true,
        max: 1000,
        min: 100,
        values: [140, 685],
        slide: function (event, ui) {
            $("#slider-range-vertical-amount").text(ui.values[0] + "  تومان  - " + ui.values[1] + "  تومان");
        }
    });

    $("#slider-range-vertical-amount").text($("#slider-range-vertical").slider("values", 0) + "  تومان  - " + $("#slider-range-vertical").slider("values", 1) + "  تومان");


}();