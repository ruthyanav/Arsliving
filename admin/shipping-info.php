<?php 

include 'includes/header.php';
include 'function/myfunction.php';

?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Shipping Info</h4>
                </div>
                   <div class="card-body" id="category_table">
                    <table class="table table-bordered table-striped">
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
                    <a href="export-shipping.php" class="btn btn-primary">Export Data</a>
                </div> 
            </div>
        </div>
    </div>
</div>

<?php include("includes/footer.php")?>