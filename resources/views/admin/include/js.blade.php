<!-- jQuery -->
<script src="{{asset('assets/backend/admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('assets/backend/admin/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('assets/backend/admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('assets/backend/admin/plugins/chart.js/Chart.js')}}"></script>
<script src="{{asset('assets/backend/admin/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('assets/backend/admin/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('assets/backend/admin/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('assets/backend/admin/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('assets/backend/admin/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('assets/backend/admin/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('assets/backend/admin/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('assets/backend/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('assets/backend/admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('assets/backend/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/backend/admin/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('assets/backend/admin/dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('assets/backend/admin/dist/js/pages/dashboard3.js')}}"></script>

<!-- DataTables -->
<script src="{{ asset('assets/backend/admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/backend/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/backend/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/backend/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>

<script src="{{ url('assets/backend/admin/vendor/common.js') }}"></script>
{{-- <script src="{{ asset('assets/backend/admin/vendor/common.js') }}"></script> --}}
<script src="https://unpkg.com/sweetalert2@7.3.0/dist/sweetalert2.all.js"></script>
<script src="{{ asset('assets/backend/admin/ckeditor/ckeditor.js') }}"></script>

{{-- select2 cdn --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
//   $(document).ready(function() {
//     $('.select2').select2();
// });

$(document).ready(function() {
    $('#roles_assign').select2();
});
</script>

{{-- Js for create role with permission --}}
<script>
    $("#allPermissionCheck").click(function(){
      if($(this).is(':checked')){
        // check all the checkbox
        $('input[type=checkbox]').prop('checked', true);
      }else{
        // un check all the checkbox
        $('input[type=checkbox]').prop('checked', false);
      }
    });
</script>

<script>
    checked = false;
    function checkedAll() {
        if (checked == false){checked = true}else{checked = false}
        for (var i = 0; i < document.getElementById('form_check').elements.length; i++){
            document.getElementById('form_check').elements[i].checked = checked;
        }
    }
</script>

<script>
    function readURL(id,thisv,imgid) {
        if (thisv.files && thisv.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#'+imgid+id).attr('src', e.target.result);
            }
            reader.readAsDataURL(thisv.files[0]);
        }
    }

</script>
<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true,
            "autoWidth": false,
        });
    });
</script>

{{-- <script src="{{ asset('assets/backend/admin/js/vendor.min.js') }}"></script> --}}
{{-- <script src="{{ asset('assets/backend/admin/js/elephant.min.js') }}"></script> --}}
{{-- <script src="{{ asset('assets/backend/admin/js/application.min.js') }}"></script> --}}
