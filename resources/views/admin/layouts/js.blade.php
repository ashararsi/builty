<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('dist/js/bootstrap/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('dist/js/bootstrap/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('dist/admin/assets/bundles/libscripts.bundle.js') }}"></script>
<script type="text/javascript" src="{{ asset('dist/admin/assets/bundles/vendorscripts.bundle.js') }}"></script>
<script type="text/javascript" src="{{ asset('dist/admin/assets/bundles/jvectormap.bundle.js') }}"></script>
<script type="text/javascript" src="{{ asset('dist/admin/assets/bundles/sparkline.bundle.js') }}"></script>
<script type="text/javascript" src="{{ asset('dist/admin/assets/bundles/c3.bundle.js') }}"></script>
<script type="text/javascript" src="{{ asset('dist/admin/assets/bundles/mainscripts.bundle.js') }}"></script>
<script type="text/javascript" src="{{ asset('dist/admin/assets/js/pages/index.js') }}"></script>
<script type="text/javascript" src="{{ asset('dist/admin/assets/plugins/sweetalert/sweetalert.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('dist/admin/assets/js/pages/ui/sweetalert.js') }}"></script>
<script type="text/javascript" src="{{ asset('dist/admin/assets/js/pages/forms/editors.js') }}"></script>
<script type="text/javascript" src="{{ asset('dist/admin/assets/plugins/ckeditor/ckeditor.js') }}"></script>
<script type="text/javascript" src="{{ asset('dist/admin/assets/plugins/dropify/js/dropify.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('dist/admin/assets/js/pages/forms/dropify.js') }}"></script>


<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
<script>
    $(".event_button").click(function () {
        var type = $(this).data('type');
        if (type === 'basic') {
            showBasicMessage();
        } else if (type === 'with-title') {
            showWithTitleMessage();
        } else if (type === 'success') {
            showSuccessMessage();
        } else if (type === 'confirm') {
            showConfirmMessage();
        } else if (type === 'html-message') {
            showHtmlMessage();
        } else if (type === 'autoclose-timer') {
            showAutoCloseTimerMessage();
        } else if (type === 'we-set-buttons') {
            showWeSet3Buttons();
        } else if (type === 'AJAX-requests') {
            showAJAXrequests();
        } else if (type === 'DOM-content') {
            showDOMContent();
        } else if (type === 'logout') {
            logoutConfirmMessage();
        }
    });
</script>
@yield('js')
