<?php 

include 'includes/header.php';
include 'function/myfunction.php';

?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Order Report</h4>
                </div>
                   <div class="card-body" id="order_report">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>User ID</th>
                                    <th>Product Name</th>
                                    <th>Quantity</th>
                                    <th>Total Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $orders = getAll("order_items");

                                    if(mysqli_num_rows($orders) > 0 )
                                    {
                                        foreach($orders as $order_items)
                                        {
                                            ?>
                                                <tr>
                                                <td><?= $order_items['order_id']; ?></td>
                                                <td><?= $order_items['user_id']; ?></td>
                                                <td><?= $order_items['prod_name']; ?></td>
                                                <td><?= $order_items['qty']; ?></td>
                                                <td><?= $order_items['price']; ?></td>
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
                        
                        <a href="export-order.php" class="btn btn-primary">Export Data</a>
                    </div> 
            </div>
        </div>
    </div>
</div>

<?php include("includes/footer.php")?>