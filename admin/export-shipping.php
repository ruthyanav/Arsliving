<?php
include ('config/dbcon.php');
include 'function/myfunction.php';

?>
<html>
<head>
   
  <title>Arsliving Shipping Info</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
</head>

<body>
<div class="container">
	<h2 align-items-center>Arsliving.</h2>
	<h4 align-items-center>Shipping Info</h4>
		<div class="data-tables datatable-dark">
					
        <div class="card-body">
                <table class="table table-bordered" id="mauexport" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Tracking No.</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>City</th>
                                <th>Postal Code</th>
                                <th>Price</th>
                                <th>Payment Method</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $shipping = getAll("orders");

                                if(mysqli_num_rows($shipping) > 0 )
                                {
                                    foreach($shipping as $shipping_info)
                                    {
                                        ?>
                                            <tr>
                                            <td><?= $shipping_info['id']; ?></td>
                                            <td><?= $shipping_info['tracking_no']; ?></td>
                                            <td><?= $shipping_info['name']; ?></td>
                                            <td><?= $shipping_info['phone']; ?></td>
                                            <td><?= $shipping_info['address']; ?></td>
                                            <td><?= $shipping_info['city']; ?></td>
                                            <td><?= $shipping_info['postal_code']; ?></td>
                                            <td><?= $shipping_info['total_price']; ?></td>
                                            <td><?= $shipping_info['payment_method']; ?></td>
                                            </tr>
                                        <?php
                                    }
                                }
                                else
                                {
                                    echo "No records found";
                                }
                            ?>
                            
                        </tbody>

                    </table>
                    <a href="shipping-info.php" class="btn btn-primary float-end">Back</a>
                </div> 
					
		</div>
</div>
	
<script>
$(document).ready(function() {
    $('#mauexport').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'excel', 'pdf', 'print'
        ]
    } );
} );

</script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>

	

</body>

</html>