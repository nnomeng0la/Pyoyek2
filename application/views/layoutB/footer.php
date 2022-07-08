<?php
if ($this->session->userdata('ROLE') == 'administrator') {
?>
        <!-- Main Footer -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.1.0
            </div>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="<?php echo base_url('plugins/jquery/jquery.min.js')?>"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url('plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
    <!-- overlayScrollbars -->
    <script src="<?php echo base_url('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url('dist/js/adminlte.js')?>"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="<?php echo base_url('plugins/jquery-mousewheel/jquery.mousewheel.js')?>"></script>
    <script src="<?php echo base_url('plugins/raphael/raphael.min.js')?>"></script>
    <script src="<?php echo base_url('plugins/jquery-mapael/jquery.mapael.min.js')?>"></script>
    <script src="<?php echo base_url('plugins/jquery-mapael/maps/usa_states.min.js')?>"></script>
    <!-- ChartJS -->
    <script src="<?php echo base_url('plugins/chart.js/Chart.min.js')?>"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url('dist/js/demo.js')?>"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo base_url('dist/js/pages/dashboard2.js')?>"></script>
</body>


</html>
<?php

}
?>