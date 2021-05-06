 <!-- Main Footer -->
 <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script type="text/javascript">
                $(function () {
                    $('#datetimepicker1').datepicker({
                        format: "yyyy-mm-dd",
                        weekStart: 0,
                        calendarWeeks: true,
                        autoclose: true,
                        todayHighlight: true, 
                        orientation: "auto",
                        maxDate: moment(),
                    });
                });
            </script>
<script src="{{asset('js/app.js')}}"></script>
<script src="https://unpkg.com/bootstrap-datepicker@1.9.0/dist/js/bootstrap-datepicker.min.js"></script>
 

 
</body>
</html>
