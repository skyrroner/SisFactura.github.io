<!-- jQuery -->
<script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('adminlte/plugins/jquery-ui/jquery-ui.min.js') }}"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->

<!-- Sparkline -->
<script src="{{ asset('adminlte/plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
{{-- <script src="{{ asset('adminlte/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/jqvmap/maps/jquery.vmap.world.js') }}"></script> --}}
<!-- jQuery Knob Chart -->
{{-- <script src="{{ asset('adminlte/plugins/jquery-knob/jquery.knob.min.js') }}"></script> --}}
<!-- daterangepicker -->
{{-- <script src="{{ asset('adminlte/plugins/moment/moment.min.js') }}"></script> --}}
{{-- <script src="{{ asset('adminlte/plugins/daterangepicker/daterangepicker.js') }}"></script> --}}
<!-- Tempusdominus Bootstrap 4 -->
{{-- <script src="{{ asset('adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script> --}}
<!-- Summernote -->
{{-- <script src="{{ asset('adminlte/plugins/summernote/summernote-bs4.min.js') }}"></script> --}}
<!-- overlayScrollbars -->
{{-- <script src="{{ asset('adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script> --}}
<!-- AdminLTE App -->
<script src="{{ asset('adminlte/dist/js/adminlte.js') }}"></script>
{{-- <script src="{{ asset('adminlte/plugins/chart.js/chart.js') }}"></script> --}}
{{-- <script src="{{ asset('adminlte/plugins/chart.js/Chart.min.js') }}"></script> --}}
<script src="{{ asset('adminlte/dist/js/demo.js') }}"></script>
{{-- <script src="{{ asset('adminlte/dist/js/pages/dashboard3.js') }}"></script> --}}
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
{{-- <script src="{{ asset('adminlte/dist/js/pages/dashboard.js') }}"></script> --}}
<!-- AdminLTE for demo purposes -->

<script src="{{ asset('adminlte/plugins/toastr/toastr.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/mask/jquery.mask.js') }}"></script>
<script src="{{ asset('adminlte/plugins/select2/js/select2.full.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/select2/js/i18n/es.js') }}"></script>
<script src="{{ asset('especiales/contarcaracteres.js') }}"></script>
<script src="{{ asset('especiales/fechas.js') }}"></script>
<script src="{{ asset('especiales/combos.js') }}"></script>
@include('layouts.mensaje')
@yield('scripts')