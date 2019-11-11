
<!-- Start page content wrapper -->
        <div class="page-content-wrapper animated fadeInRight">
            <div class="page-content">
                <div class="row wrapper border-bottom page-heading">
                    <div class="col-lg-12">
                        <h2>Transfer</h2>
                        <ol class="breadcrumb">
                            <li> <a href="<?php echo base_url('Dashboard');?>">Home</a> </li>
                            <li class="active"> <a href="<?php echo base_url('Dashboard/transfer');?>"><strong>Transfer</strong></a> </li>
                        </ol>
                    </div>
                </div>
         

               <h2>Transfer Details</h2>

                    <div class="container-fluid" >

                        <div class="col-lg-12">
                            <table id="transfer" class="table table-striped table-bordered nowrap" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Pick-up</th>
                                        <th>Drop-off</th>
                                        <th>Pick-up Date Time</th>
                                        <th>Drop-off Date Time</th>
                                        <th>Vehicle Type</th>
                                        <th>Class</th>
                                        <th>Transmission Type</th>
                                        <th>Air Condition</th>
                                        <th>Mileage Charge Type</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($data as $k=>$v){ ?>
                                    <tr>
                                        <td><?php echo $v->pick_up_city ;?></td>
                                        <td><?php echo $v->drop_off_city ;?></td>
                                        <td><?php echo $v->pick_up_date." ".$v->pick_up_time ;?></td>
                                        <td><?php echo $v->drop_off_date." ".$v->drop_off_time ;?></td>
                                        <td><?php echo $v->vechical_type ;?></td>
                                        <td><?php echo $v->vehicle_class ;?></td>
                                        <td><?php echo $v->vehicle_transmission_type ;?></td>
                                        <td><?php echo $v->vehicle_air_conditioning ;?></td>
                                        <td><?php echo $v->vehicle_charge_type  ;?></td>
                                    </tr> 
                                    <?php }?>
                                </tbody>
                                
                            </table>
                        </div>
                    </div>

<script>
    $(document).ready(function() {
    $('#transfer').DataTable();
} );
</script>
