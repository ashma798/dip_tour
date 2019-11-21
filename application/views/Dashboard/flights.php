
<!-- Start page content wrapper -->
        <div class="page-content-wrapper animated fadeInRight">
            <div class="page-content">
                <div class="row wrapper border-bottom page-heading">
                    <div class="col-lg-12">
                        <h2>Flights</h2>
                        <ol class="breadcrumb">
                            <li> <a href="<?php echo base_url('Dashboard');?>">Home</a> </li>
                            <li class="active"> <a href="<?php echo base_url('Dashboard/flights');?>"><strong>Flight</strong></a> </li>
                        </ol>
                    </div>
                </div>
         

              <h2>Flight Entries</h2>

<div class="container-fluid" >
   
  <div class="col-lg-12">
    <table id="flights" class="table table-striped table-bordered nowrap" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>S.No</th>
                <th>Flight Search Type</th>
                <th>Origin</th>
                <th>Destination</th>
                <th>Departure Date</th>
                <th>Return Date</th>
                <th>Adult</th>
                <th>Child</th>
                <th>Infant</th>
                <th>Class</th>
                <th>Non Stop</th>
                <th>Search Date</th>
                <th>Email</th>
                <th>User Id</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data as $k=>$v){ ?>
            <tr>
                <td><?php echo $k+1;?></td>
                <td><?php echo $v->flight_search_type;?></td>
                <td><?php echo $v->origin;?></td>
                <td><?php echo $v->destination;?></td>
                <td><?php echo $v->departure_date;?></td>
                <td><?php echo $v->return_date;?></td>
                <td><?php echo $v->adult_count;?></td>
                <td><?php echo $v->child_count;?></td>
                <td><?php echo $v->infant_count;?></td>
                <td><?php echo $v->class;?></td>
                <td><?php echo $v->non_stop_only ;?></td>
                <td><?php echo $v->search_time;?></td>
                <td><?php echo $v->user_email;?></td>
                <td><?php echo $v->user_id;?></td>
            </tr>
            <?php }?>
            
       
        </tbody>
    </table>
  </div>
</div>

<script>
    $(document).ready(function() {
    $('#flights').DataTable();
} );
</script>
