<?php 

include 'includes/header.php';
include 'function/myfunction.php';

?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Vendors</h4>
                </div>
                   <div class="card-body" id="vendors_table">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $vendors = getAll("vendors");

                                if(mysqli_num_rows($vendors) > 0 )
                                {
                                    foreach($vendors as $item)
                                    {
                                        ?>
                                            <tr>
                                            <td><?= $item['id']; ?></td>
                                            <td><?= $item['name']; ?></td>
                                            <td><?= $item['address']; ?></td>
                                            <td><?= $item['phone']; ?></td>
                                            <td><?= $item['email']; ?></td>

                                            <td>
                                            <a href="edit-vendor.php?id=<?= $item['id']; ?>" class="btn bg-gradient-primary w" class="btn-primary">Edit</a>
                                            <!-- <form action="code.php" method="POST">
                                                <input type="hidden" name="category_id" value="<?= $item['id']; ?>">
                                                <button type="submit" class="btn btn-danger" name="delete_category_btn">Delete</button>
                                            </form> -->
                                            <button type="button" class="btn btn-danger delete_vendor_btn " value="<?= $item['id']; ?>">Delete</button>
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