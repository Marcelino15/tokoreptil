<!-- jQuery 3 -->
<script src="{base_url(assets/adminlte2/bower_components/jquery/dist/jquery.min.js)}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{base_url(assets/adminlte2/bower_components/bootstrap/dist/js/bootstrap.min.js)}"></script>
<!-- FastClick -->
<script src="{base_url(assets/adminlte2/bower_components/fastclick/lib/fastclick.js)}"></script>
<!-- AdminLTE App -->
<script src="{base_url(assets/adminlte2/dist/js/adminlte.min.js)}"></script>
<!-- Sparkline -->
<script src="{base_url(assets/adminlte2/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js)}"></script>
<!-- jvectormap  -->
<script src="{base_url(assets/adminlte2/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js)}"></script>
<script src="{base_url(assets/adminlte2/plugins/jvectormap/jquery-jvectormap-world-mill-en.js)}"></script>
<!-- SlimScroll -->
<script src="{base_url(assets/adminlte2/bower_components/jquery-slimscroll/jquery.slimscroll.min.js)}"></script>
<!-- ChartJS -->
<script src="{base_url(assets/adminlte2/bower_components/chart.js/Chart.js)}"></script>
<!-- DataTables -->
<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<?php
if ($this->uri->segment(2)=='dashboard') {
	echo "
<script src=\"{base_url(assets/adminlte2/dist/js/pages/dashboard2.js)}\"></script>";
}
?>
<!-- AdminLTE for demo purposes -->
<script src="{base_url(assets/adminlte2/dist/js/demo.js)}"></script>
</body>
</html>