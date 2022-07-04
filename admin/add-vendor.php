<?php include("includes/header.php")?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add Vendor</h4>
                </div>
                <div class="card-body">
                           <form action="code.php" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="">Name</label>
                                    <input type="text" required name="name" placholder="Enter category name" class="form-control">
                                </div>

                                <div class="col-md-12">
                                    <label for="">Address</label>
                                    <textarea class="form-control" rows="4" cols="80" placeholder="Enter address" name="address"></textarea>
                                </div>

                                <div class="col-md-12">
                                    <label for="">Phone</label>
                                    <input type="text" required name="phone" placholder="Enter phone number" class="form-control">
                                </div>

                                <div class="col-md-6">
                                    <label for="">Email</label>
                                    <input type="text" required name="email" placholder="Enter email address" class="form-control">
                                </div>

                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary" name="add_vendor_btn">Save</button>
                                </div>

                            </div>
                       </form>
                     </div>
                 </div>
            </div>
        </div>
    </div>
</div>

<?php include("includes/footer.php")?>