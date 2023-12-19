 <!-- Main Footer -->
            <footer class="main-footer">
                <!-- To the right -->
                <div class="pull-right hidden-xs">
                   Ichapurti
                </div>
                <!-- Default to the left -->
                <strong>&copy; 2022 -Ichapurti</strong> All rights reserved
            </footer>

            </div>

            <!-- Required JS -->
            <script src="{{ asset('assets/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
            <script src="assets/bower_components/datatables.net-bs/js/jquery.dataTables.min.js"></script>
            <script src="assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

            <!-- Datatables Buttons -->
            <script src="assets/bower_components/datatables.net-bs/plugins/Buttons-1.5.6/js/dataTables.buttons.min.js"></script>
            <script src="assets/bower_components/datatables.net-bs/plugins/Buttons-1.5.6/js/buttons.bootstrap.min.js"></script>
            <script src="assets/bower_components/datatables.net-bs/plugins/JSZip-2.5.0/jszip.min.js"></script>
            <script src="assets/bower_components/datatables.net-bs/plugins/pdfmake-0.1.36/pdfmake.min.js"></script>
            <script src="assets/bower_components/datatables.net-bs/plugins/pdfmake-0.1.36/vfs_fonts.js"></script>
            <script src="assets/bower_components/datatables.net-bs/plugins/Buttons-1.5.6/js/buttons.html5.min.js"></script>
            <script src="assets/bower_components/datatables.net-bs/plugins/Buttons-1.5.6/js/buttons.print.min.js"></script>
            <script src="assets/bower_components/datatables.net-bs/plugins/Buttons-1.5.6/js/buttons.colVis.min.js"></script>

            <script src="assets/bower_components/pace/pace.min.js"></script>
            <script src="assets/dist/js/adminlte.min.js"></script>

            <!-- Textarea editor -->
            <script src="assets/bower_components/codemirror/lib/codemirror.min.js"></script>
            <script src="assets/bower_components/codemirror/mode/xml.min.js"></script>
            <script src="assets/bower_components/froala_editor/js/froala_editor.pkgd.min.js"></script>

            <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

            <!-- App JS -->
            <script src="assets/dist/js/app/dashboard.js"></script>

            <!-- Custom JS -->
            <script type="text/javascript">
                $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings) {
                    return {
                        "iStart": oSettings._iDisplayStart,
                        "iEnd": oSettings.fnDisplayEnd(),
                        "iLength": oSettings._iDisplayLength,
                        "iTotal": oSettings.fnRecordsTotal(),
                        "iFilteredTotal": oSettings.fnRecordsDisplay(),
                        "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
                        "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
                    };
                };

                function ajaxcsrf() {
                    var csrfname = 'csrf_test_name';
                    var csrfhash = '1d82d75768de43b98b46d4c1f13f96c2';
                    var csrf = {};
                    csrf[csrfname] = csrfhash;
                    $.ajaxSetup({
                        "data": csrf
                    });
                }

                function reload_ajax() {
                    table.ajax.reload(null, false);
                }

                $(document).ready(function() {
                    $('.summernote').summernote({
                        toolbar: [
                            // [groupName, [list of button]]
                            ['style', ['bold', 'italic', 'underline', 'clear']],
                            ['font', ['strikethrough', 'superscript', 'subscript']],
                            ['fontsize', ['fontsize']],
                            ['color', ['color']],
                            ['para', ['ul', 'ol', 'paragraph']],
                            ['height', ['height']]
                        ]
                    });
                });
            </script>

            </body>

            </html>
        </div>
    </body>
</html>
