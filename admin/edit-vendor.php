<?php 

include 'includes/header.php';
include 'function/myfunction.php';

?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php
                if(isset($_GET['id']))
                {
                    $id = $_GET['id'];
                    $vendors = getByID("vendors", $id);

                    if(mysqli_num_rows($vendors) > 0)
                    {
                        $data = mysqli_fetch_array($vendors);
                        ?>
                            <div class="card">
                                <div class="card-header">
                                    <h4>Edit Vendor</h4>
                                    <a href="vendors.php" class="btn btn-primary float-end">Back</a>
                                </div>
                                <div class="card-body">
                                        <form action="code.php" method="POST" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input type="hidden" name="vendors_id" value="<?= $data['id'] ?>">
                                                    <label for="">Name</label>
                                                    <input type="text" name="name" value="<?= $data['name'] ?>" placholder="Enter vendor name" class="form-control">
                                                </div>
                                                
                                                <div class="col-md-12">
                                                    <label for="">Address</label>
                                                    <input type="text" name="address" value="<?= $data['address'] ?>" placholder="Enter address" class="form-control">
                                                </div>

                                                <div class="col-md-12">
                                                    <label for="">Phone</label>
                                                    <input type="text" name="phone" value="<?= $data['phone'] ?>" placholder="Enter phone number" class="form-control">
                                                </div>

                                                <div class="col-md-12">
                                                    <label for="">Email</label>
                                                    <input type="text" name="email" value="<?= $data['email'] ?>" placholder="Enter email address" class="form-control">
                                                </div>

                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-primary" name="update_vendor_btn">Update</button>
                                                </div>

                                            </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        <?php
                    }
                    else
                    {
                        echo "Vendor not found";
                    }
                }
                else 
                {
                    echo "Id missing from url";
                }
                    ?>
        </div>
    </div>
</div>

<?php include("includes/footer.php")?>