<?php include("includes/header.php")?>
<?php include("function/myfunction.php")?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add Product</h4>
                </div>
                <div class="card-body">
                           <form action="code.php" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="mb-0">Select Category</label>
                                    <select name="category_id" class="form-select mb-2">
                                    <option selected>Select Category</option>
                                    <?php 
                                        $category = getAll("category");

                                        if(mysqli_num_rows($category) > 0 )
                                        {
                                            foreach ($category as $item) {
                                                ?>
                                                <option value="<?= $item['id']; ?>"><?= $item['name']; ?></option>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            echo "No category available";
                                        }
                                    ?>
                                    </select>
                                </div>

                                <div class="col-md-12">
                                    <label class="mb-0">Name</label>
                                    <input type="text" required name="name" placholder="Enter product name" class="form-control mb-2">
                                </div>

                                <div class="col-md-12">
                                    <label class="mb-0">Vendor</label>
                                    <input type="text" required name="vendor" placholder="Enter vendor name" class="form-control mb-2">
                                </div>
                                
                                <div class="col-md-12">
                                    <label class="mb-0">Slug</label>
                                    <input type="text" required name="slug" placholder="Enter slug" class="form-control mb-2">
                                </div>

                                <div class="col-md-12">
                                    <label class="mb-0">Small Description</label>
                                    <textarea class="form-control mb-2" rows="4" cols="80" placeholder="Enter description" required name="small_description"></textarea>
                                </div>

                                <div class="col-md-12">
                                    <label class="mb-0">Description</label>
                                    <textarea class="form-control mb-2" rows="4" cols="80" placeholder="Enter description" required name="description"></textarea>
                                </div>

                                <div class="col-md-6">
                                    <label class="mb-0">Original Price</label>
                                    <input type="text" required name="original_price" placholder="Enter original price" class="form-control mb-2">
                                </div>

                                <div class="col-md-6">
                                    <label class="mb-0">Selling Price</label>
                                    <input type="text" required name="selling_price" placholder="Enter selling price" class="form-control mb-2">
                                </div>

                                <div class="col-md-12">
                                    <label class="mb-0">Upload Image</label>
                                    <input type="file" required name="image" class="form-control mb-2">
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="mb-0">Quantity</label>
                                        <input type="number" required name="qty" placholder="Enter quantity" class="form-control mb-2">
                                    </div>

                                    <div class="col-md-3">
                                        <label class="mb-0">Status</label> <br>
                                        <input type="checkbox" name="status">
                                    </div>

                                    <div class="col-md-3">
                                        <label class="mb-0">Trending</label> <br>
                                        <input type="checkbox" name="trending">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <label class="mb-0">Meta Title</label>
                                    <input type="text" required name="meta_title" placholder="Enter meta title" class="form-control mb-2">
                                </div>
                                
                                <div class="col-md-12">
                                    <label class="mb-0">Meta Description</label>
                                    <textarea class="form-control mb-2" rows="4" cols="80" placeholder="Enter meta description" required name="meta_description"></textarea>
                                </div>

                                <div class="col-md-12">
                                    <label class="mb-0">Meta Keywords</label>
                                    <input type="text" required name="meta_keywords" placholder="Enter meta keywords" class="form-control mb-2">
                                </div>

                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary" name="add_product_btn">Save</button>
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