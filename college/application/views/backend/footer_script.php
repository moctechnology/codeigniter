    
    <!-- Bootstrap -->
    <script src="<?php echo URL; ?>/assets/backend/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo URL; ?>/assets/backend/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo URL; ?>/assets/backend/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <!--<script src="<?php echo URL; ?>/assets/backend/Chart.js/dist/Chart.min.js"></script>-->
    <!-- gauge.js -->
    <!--<script src="<?php echo URL; ?>/assets/backend/gauge.js/dist/gauge.min.js"></script>-->
    <!-- bootstrap-progressbar -->
    <script src="<?php echo URL; ?>/assets/backend/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo URL; ?>/assets/backend/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="<?php echo URL; ?>/assets/backend/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="<?php echo URL; ?>/assets/backend/Flot/jquery.flot.js"></script>
    <script src="<?php echo URL; ?>/assets/backend/Flot/jquery.flot.pie.js"></script>
    <script src="<?php echo URL; ?>/assets/backend/Flot/jquery.flot.time.js"></script>
    <script src="<?php echo URL; ?>/assets/backend/Flot/jquery.flot.stack.js"></script>
    <script src="<?php echo URL; ?>/assets/backend/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?php echo URL; ?>/assets/backend/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?php echo URL; ?>/assets/backend/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?php echo URL; ?>/assets/backend/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?php echo URL; ?>/assets/backend/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="<?php echo URL; ?>/assets/backend/jqvmap/dist/jquery.vmap.js"></script>
    <script src="<?php echo URL; ?>/assets/backend/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?php echo URL; ?>/assets/backend/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo URL; ?>/assets/backend/moment/min/moment.min.js"></script>

    
	
<link rel="stylesheet" href="<?php echo URL; ?>/assets/backend/pickadate/lib/themes/classic.css" id="theme_base">
<link rel="stylesheet" href="<?php echo URL; ?>/assets/backend/pickadate/lib/themes/classic.date.css" id="theme_date">
<link rel="stylesheet" href="<?php echo URL; ?>/assets/backend/pickadate/lib/themes/classic.time.css" id="theme_time">

<script src="<?php echo URL; ?>/assets/backend/pickadate/lib/picker.js"></script>
<script src="<?php echo URL; ?>/assets/backend/pickadate/lib/picker.date.js"></script>
<script src="<?php echo URL; ?>/assets/backend/pickadate/lib/picker.time.js"></script>
<script>
jQuery('.d').pickadate({
 
    formatSubmit: 'yyyy/mm/dd',
    hiddenName: true,
    min: true,
    max: +30,
});
</script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo URL; ?>/assets/backend/js/custom.min.js"></script>

    <!-- Flot -->
    <script>
      $(document).ready(function() {
        var data1 = [
          [gd(2012, 1, 1), 17],
          [gd(2012, 1, 2), 74],
          [gd(2012, 1, 3), 6],
          [gd(2012, 1, 4), 39],
          [gd(2012, 1, 5), 20],
          [gd(2012, 1, 6), 85],
          [gd(2012, 1, 7), 7]
        ];

        var data2 = [
          [gd(2012, 1, 1), 82],
          [gd(2012, 1, 2), 23],
          [gd(2012, 1, 3), 66],
          [gd(2012, 1, 4), 9],
          [gd(2012, 1, 5), 119],
          [gd(2012, 1, 6), 6],
          [gd(2012, 1, 7), 9]
        ];
        $("#canvas_dahs").length && $.plot($("#canvas_dahs"), [
          data1, data2
        ], {
          series: {
            lines: {
              show: false,
              fill: true
            },
            splines: {
              show: true,
              tension: 0.4,
              lineWidth: 1,
              fill: 0.4
            },
            points: {
              radius: 0,
              show: true
            },
            shadowSize: 2
          },
          grid: {
            verticalLines: true,
            hoverable: true,
            clickable: true,
            tickColor: "#d5d5d5",
            borderWidth: 1,
            color: '#fff'
          },
          colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],
          xaxis: {
            tickColor: "rgba(51, 51, 51, 0.06)",
            mode: "time",
            tickSize: [1, "day"],
            //tickLength: 10,
            axisLabel: "Date",
            axisLabelUseCanvas: true,
            axisLabelFontSizePixels: 12,
            axisLabelFontFamily: 'Verdana, Arial',
            axisLabelPadding: 10
          },
          yaxis: {
            ticks: 8,
            tickColor: "rgba(51, 51, 51, 0.06)",
          },
          tooltip: false
        });

        function gd(year, month, day) {
          return new Date(year, month - 1, day).getTime();
        }
      });
    </script>
    <!-- /Flot -->

    <!-- JQVMap -->
    <script>
      $(document).ready(function(){
        $('#world-map-gdp').vectorMap({
            map: 'world_en',
            backgroundColor: null,
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#666666',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: ['#E6F2F0', '#149B7E'],
            normalizeFunction: 'polynomial'
        });
      });
    </script>
    <!-- /JQVMap -->

    <!-- Skycons -->
    <script>
      $(document).ready(function() {
        var icons = new Skycons({
            "color": "#73879C"
          }),
          list = [
            "clear-day", "clear-night", "partly-cloudy-day",
            "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
            "fog"
          ],
          i;

        for (i = list.length; i--;)
          icons.set(list[i], list[i]);

        icons.play();
      });
    </script>
    <!-- /Skycons -->

    <!-- Doughnut Chart -->
    <script>
      /*$(document).ready(function(){
        var options = {
          legend: false,
          responsive: false
        };

        new Chart(document.getElementById("canvas1"), {
          type: 'doughnut',
          tooltipFillColor: "rgba(51, 51, 51, 0.55)",
          data: {
            labels: [
              "Symbian",
              "Blackberry",
              "Other",
              "Android",
              "IOS"
            ],
            datasets: [{
              data: [15, 20, 30, 10, 30],
              backgroundColor: [
                "#BDC3C7",
                "#9B59B6",
                "#E74C3C",
                "#26B99A",
                "#3498DB"
              ],
              hoverBackgroundColor: [
                "#CFD4D8",
                "#B370CF",
                "#E95E4F",
                "#36CAAB",
                "#49A9EA"
              ]
            }]
          },
          options: options
        });
      });
*/    </script>

    <!-- /Doughnut Chart -->
    
    <!-- bootstrap-daterangepicker -->
    
    <!-- /bootstrap-daterangepicker -->

    <!-- gauge.js -->
    
	

    <!-- /gauge.js -->