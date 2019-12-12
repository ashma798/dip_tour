<div class="footer">
                    <div class="pull-right">
                        <ul class="list-inline">
                            <li><a title="" href="dash1.html">Dashboard</a></li>
                            <li><a title="" href="#"> Inbox </a></li>
                            <li><a title="" href="#">Blog</a></li>
                            <li><a title="" href="#">Contacts</a></li>
                        </ul>
                    </div>
                    <div> <strong>Copyright</strong> Diptour &copy; 2019 </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Go top -->
    <a href="#" class="scrollup"><i class="fa fa-chevron-up"></i></a>
    <!-- Go top -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url();?>js/jquery.min.js"></script>
    <!-- bootstrap js -->
    <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>js/DataTables/datatables.min.js"></script>
<!-- Flot -->
  <!--script src="<?php echo base_url();?>js/jquery.flot.js"></script>
  <script src="<?php echo base_url();?>js/jquery.flot.tooltip.min.js"></script>
  <script src="<?php echo base_url();?>js/jquery.flot.resize.js"></script-->


    <!-- icheck -->
    <script src="<?php echo base_url();?>js/icheck.js"></script>
    <!-- slimscroll js -->
    <script type="text/javascript" src="<?php echo base_url();?>js/jquery.slimscroll.js"></script>
    <!-- pace js -->
<script src="<?php echo base_url();?>js/pace.min.js"></script>
<!-- main js -->
    <script src="<?php echo base_url();?>js/main.js"></script>
    <script>
        $(document).ready(function(){
            var d1 = [[1262304000000, 6], [1264982400000, 3057], [1267401600000, 20434], [1270080000000, 31982], [1272672000000, 26602], [1275350400000, 27826], [1277942400000, 24302], [1280620800000, 24237], [1283299200000, 21004], [1285891200000, 12144], [1288569600000, 10577], [1291161600000, 10295]];
            var d2 = [[1262304000000, 5], [1264982400000, 200], [1267401600000, 1605], [1270080000000, 6129], [1272672000000, 11643], [1275350400000, 19055], [1277942400000, 30062], [1280620800000, 39197], [1283299200000, 37000], [1285891200000, 27000], [1288569600000, 21000], [1291161600000, 17000]];

            var data1 = [
                { label: "Data 1", data: d1, color: '#3391ad'},
                { label: "Data 2", data: d2, color: '#0e83a5' }
            ];
            /*$.plot($("#flot-chart1"), data1, {
                xaxis: {
                    tickDecimals: 0
                },
                series: {
                    lines: {
                        show: true,
                        fill: true,
                        fillColor: {
                            colors: [{
                                opacity: 1
                            }, {
                                opacity: 1
                            }]
                        }
                    },
                    points: {
                        width: 0.1,
                        show: false
                    }
                },
                grid: {
                    show: false,
                    borderWidth: 0
                },
                legend: {
                    show: false
                }
            });

            var data2 = [
                { label: "Data 1", data: d1, color: '#19a0a1'}
            ];
            $.plot($("#flot-chart2"), data2, {
                xaxis: {
                    tickDecimals: 0
                },
                series: {
                    lines: {
                        show: true,
                        fill: true,
                        fillColor: {
                            colors: [{
                                opacity: 1
                            }, {
                                opacity: 1
                            }]
                        }
                    },
                    points: {
                        width: 0.1,
                        show: false
                    }
                },
                grid: {
                    show: false,
                    borderWidth: 0
                },
                legend: {
                    show: false
                }
            });

            var data3 = [
                { label: "Data 1", data: d1, color: '#fbbe7b'},
                { label: "Data 2", data: d2, color: '#f8ac59' }
            ];
            $.plot($("#flot-chart3"), data3, {
                xaxis: {
                    tickDecimals: 0
                },
                series: {
                    lines: {
                        show: true,
                        fill: true,
                        fillColor: {
                            colors: [{
                                opacity: 1
                            }, {
                                opacity: 1
                            }]
                        }
                    },
                    points: {
                        width: 0.1,
                        show: false
                    }
                },
                grid: {
                    show: false,
                    borderWidth: 0
                },
                legend: {
                    show: false
                }
            });

            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue'
            });

*/

        });
    </script>

</body>

</html>