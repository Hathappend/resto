

<!-- Bootstrap JS -->
<script src="/assets/js/bootstrap.bundle.min.js"></script>
<!--plugins-->
<script src="/assets/plugins/simplebar/js/simplebar.min.js"></script>
<script src="/assets/plugins/metismenu/js/metisMenu.min.js"></script>
<script src="/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<script src="/assets/plugins/chartjs/js/Chart.min.js"></script>
<script src="/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="/assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
<script src="/assets/plugins/sparkline-charts/jquery.sparkline.min.js"></script>
<script src="/assets/plugins/jquery-knob/excanvas.js"></script>
<script src="/assets/plugins/jquery-knob/jquery.knob.js"></script>
<script src="https://unpkg.com/feather-icons"></script>
<script src="/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="/assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
<script src="/assets/plugins/datetimepicker/js/legacy.js"></script>
<script src="/assets/plugins/datetimepicker/js/picker.js"></script>
<script src="/assets/plugins/datetimepicker/js/picker.time.js"></script>
<script src="/assets/plugins/datetimepicker/js/picker.date.js"></script>
<script src="/assets/plugins/Drag-And-Drop/dist/imageuploadify.min.js"></script>
<!-- highcharts js -->
<script src="/assets/plugins/highcharts/js/highcharts.js"></script>
<script src="/assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
<script src="/assets/js/dashboard-human-resources.js"></script>
<script src="assets/js/dashboard-analytics.js"></script>
<script>
		$(document).ready(function() {
			$('#example').DataTable({
			    ordering:  false
			});

		  } );
</script>>
<script>
		$('.datepicker').pickadate({
			selectMonths: false,
	        selectYears: true
		}),
		$('.timepicker').pickatime()
</script>
<script>
	feather.replace()
</script>
<script>
  $(function() {
      $(".knob").knob();
  });
</script>
<script src="/assets/js/index.js"></script>
<!--app JS-->
<script src="/assets/js/app.js"></script>
<script src="/assets/js/dashboard-eCommerce.js"></script>
<!-- Custom Script -->
<script src="/assets/js/script.js"></script>
<script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl)
    })
</script>
<script>

      if (document.querySelector(".product-list")) {
        new PerfectScrollbar(".product-list");
       }

       if (document.querySelector(".product-list2")) {
        new PerfectScrollbar(".product-list2");
       }

       if (document.querySelector(".product-list3")) {
        new PerfectScrollbar(".product-list3");
       }

       if (document.querySelector(".product-list4")) {
        new PerfectScrollbar(".product-list4");
       }

      if (document.querySelector(".customers-list")) {
        new PerfectScrollbar(".customers-list");
      }

      if (document.querySelector(".customers-list2")) {
        new PerfectScrollbar(".customers-list2");
      }

      if (document.querySelector(".customers-list3")) {
        new PerfectScrollbar(".customers-list3");
      }

      if (document.querySelector('.dashboard-top-countries')) {
        new PerfectScrollbar('.dashboard-top-countries');
      }

      if (document.querySelector('.dashboard-top-countries2')) {
        new PerfectScrollbar('.dashboard-top-countries2');
      }

      if (document.querySelector('.dashboard-top-countries4')) {
        new PerfectScrollbar('.dashboard-top-countries3');
      }

      if (document.querySelector('.dashboard-top-countries4')) {
        new PerfectScrollbar('.dashboard-top-countries4');
      }
</script>
</body>

</html>