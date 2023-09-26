<script src="resources/theme/vendor/global/global.min.js"></script>
<script src="resources/theme/vendor/chart-js/chart.bundle.min.js"></script>
<script src="resources/theme/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>

<script src="resources/theme/vendor/apexchart/apexchart.js"></script>
<script src="resources/theme/vendor/nouislider/nouislider.min.js"></script>
<script src="resources/theme/vendor/wnumb/wNumb.js"></script>

<script src="resources/theme/js/dashboard/dashboard-1.js"></script>
<script src="resources/theme/vendor/pickadate/picker.js"></script>
<script src="resources/theme/vendor/pickadate/picker.date.js"></script>

<script src="resources/theme/vendor/pickadate/picker.js"></script>
<script src="resources/theme/js/plugins-init/pickadate-init.js"></script>

<script src="resources/theme/vendor/jquery-asColor/jquery-asColor.min.js"></script>
<script src="resources/theme/vendor/jquery-asColorPicker/js/jquery-asColorPicker.min.js"></script>
<script src="resources/theme/js/plugins-init/jquery-asColorPicker.init.js"></script>

<script type="text/javascript">
    //Number formatting

    var sliderFormat = document.getElementById('slider-format');
    if (sliderFormat) {

        noUiSlider.create(sliderFormat, {
            start: [0],
            step: 1000,
            connect: [true, false],
            range: {
                'min': [0],
                'max': [100000]
            },
            ariaFormat: wNumb({
                decimals: 3
            }),
            format: wNumb({
                decimals: 3,
                thousand: '.',
                //suffix: ' (US $)'
            })
        });

        var inputFormat = document.getElementById('input-format');
        sliderFormat.noUiSlider.on('update', function(values, handle) {
            inputFormat.value = values[handle];
        });

        inputFormat.addEventListener('change', function() {
            sliderFormat.noUiSlider.set(this.value);
        });

    }
    //Number formatting ^
</script>

<script src="resources/theme/js/custom.js"></script>
<script src="resources/theme/js/dlabnav-init.js"></script>
<script src="resources/theme/js/demo.js"></script>
<script src="resources/theme/js/styleSwitcher.js"></script>

<script src="resources/theme/js/base.js"></script>