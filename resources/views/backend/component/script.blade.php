<script src="{{ asset('sb_Admin1') }}/vendor/jquery/jquery.min.js"></script>
<script src="{{ asset('sb_Admin1') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('sb_Admin1') }}/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('sb_Admin1') }}/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="{{ asset('sb_Admin1') }}/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="{{ asset('sb_Admin1') }}/js/demo/chart-area-demo.js"></script>
<script src="{{ asset('sb_Admin1') }}/js/demo/chart-pie-demo.js"></script>
<script src="{{ asset('sb_Admin1') }}/js/demo/chart-gender-demo.js"></script>

<!-- Page level plugins -->
<script src="{{ asset('sb_Admin1') }}/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('sb_Admin1') }}/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<script>
    // var table = new DataTable('table_pagination');

    // or from copy paste the template

    $(document).ready(function() {
        $('#table_pagination').DataTable({
            ordering: false
        });
    });
</script>
