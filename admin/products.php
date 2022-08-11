<?php 

include 'includes/header.php';
include 'function/myfunction.php';

?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Products</h4>
                </div>
                   <div class="card-body" id="products_table">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Original Price</th>
                                <th>Selling Price</th>
                                <th>Quantity</th>
                                <th>Vendor ID</th>
                                <th>Status</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $products = getAll("products");

                                if(mysqli_num_rows($products) > 0 )
                                {
                                    foreach($products as $item)
                                    {
                                        ?>
                                            <tr>
                                            <td><?= $item['id']; ?></td>
                                            
                                            <td><?= $item['name']; ?></td>
                                            
                                            <td>
                                                <img src="../admin/uploads/<?= $item['image']; ?>" width="100px" height="100px" alt="<?= $item['name']; ?>">
                                            </td>

                                            <td> Rp <?= number_format($item['original_price']); ?></td>

                                            <td>Rp <?= number_format($item['selling_price']); ?></td>

                                            <td><?= $item['qty']; ?></td>

                                            <td><?= $item['vendor_id']; ?></td>
                                            
                                            <td>
                                                <?= $item['hidden'] ==  '0'? "Visible": "Hidden" ?>
                                            </td>

                                            <td>
                                                <a href="edit-product.php?id=<?= $item['id']; ?>" class="btn bg-gradient-primary w" class="btn-primary">Edit</a>    
                                            </td>

                                            <td>
                                                <button type="button" class="btn btn-danger delete_product_btn " value="<?= $item['id']; ?>">Delete</button>
                                            </td>
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
                </div> 
            </div>
        </div>
    </div>
</div>

<?php include("includes/footer.php")?>