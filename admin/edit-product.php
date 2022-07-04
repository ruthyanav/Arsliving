<?php include("includes/header.php")?>
<?php include("function/myfunction.php")?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php
                if(isset($_GET['id']))
                {
                    $id = $_GET['id'];
                    $product = getByID("products", $id);

                    if(mysqli_num_rows($product) > 0)
                    {
                      $data = mysqli_fetch_array($product);

                      ?>
                        <div class="card">
                            <div class="card-header">
                                <h4>Edit Product</h4>
                                    <a href="products.php" class="btn btn-primary float-end">Back</a>
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
                                                            <option value="<?= $item['id']; ?>" <?= $data['category_id'] ==  $item['id']?'selected':'' ?> ><?= $item['name']; ?></option>
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
                                            
                                            <input type="hidden" name="product_id" value="<?= $data['id']; ?>">
                                            <div class="col-md-12">
                                                <label class="mb-0">Name</label>
                                                <input type="text" required name="name" value="<?= $data['name']; ?>" placholder="Enter product name" class="form-control mb-2">
                                            </div>
    
                                            <div class="col-md-12">
                                                <label class="mb-0">Vendor</label>
                                                <input type="text" required name="vendor" value="<?= $data['vendor']; ?>" placholder="Enter vendor name" class="form-control mb-2">
                                            </div>
                                            
                                            <div class="col-md-12">
                                                <label class="mb-0">Slug</label>
                                                <input type="text" required name="slug" value="<?= $data['slug']; ?>" placholder="Enter slug" class="form-control mb-2">
                                            </div>
    
                                            <div class="col-md-12">
                                                <label class="mb-0">Small Description</label>
                                                <textarea class="form-control mb-2" rows="4" cols="80" placeholder="Enter description" required name="small_description"><?= $data['small_description']; ?></textarea>
                                            </div>
    
                                            <div class="col-md-12">
                                                <label class="mb-0">Description</label>
                                                <textarea class="form-control mb-2" rows="4" cols="80" placeholder="Enter description" required name="description"><?= $data['small_description']; ?></textarea>
                                            </div>
    
                                            <div class="col-md-6">
                                                <label class="mb-0">Original Price</label>
                                                <input type="text" required name="original_price" value="<?= $data['original_price']; ?>" placholder="Enter original price" class="form-control mb-2">
                                            </div>
    
                                            <div class="col-md-6">
                                                <label class="mb-0">Selling Price</label>
                                                <input type="text" required name="selling_price" value="<?= $data['selling_price']; ?>" placholder="Enter selling price" class="form-control mb-2">
                                            </div>
    
                                            <div class="col-md-12">
                                                <label class="mb-0">Upload Image</label>
                                                <input type="file" name="image" class="form-control mb-2">
                                                <label class="mb-0">Current Image</label>
                                                <input type="hidden" name="old_image" value="<?= $data['image'] ?>">
                                                <img src="uploads/<?= $data['image'] ?>" height="50px" width="50px" alt="Product Image">
                                            </div>
    
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="mb-0">Quantity</label>
                                                    <input type="number" required name="qty" value="<?= $data['qty']; ?>" placholder="Enter quantity" class="form-control mb-2">
                                                </div>
    
                                                <div class="col-md-3">
                                                    <label class="mb-0">Status</label> <br>
                                                    <input type="checkbox" name="status" <?= $data['status'] == '0'?'':'checked' ?>>
                                                </div>
    
                                                <div class="col-md-3">
                                                    <label class="mb-0">Trending</label> <br>
                                                    <input type="checkbox" name="trending" <?= $data['trending'] == '0'?'':'checked' ?>>
                                                </div>
                                            </div>
    
                                            <div class="col-md-12">
                                                <label class="mb-0">Meta Title</label>
                                                <input type="text" required name="meta_title" value="<?= $data['meta_title']; ?>" placholder="Enter meta title" class="form-control mb-2">
                                            </div>
                                            
                                            <div class="col-md-12">
                                                <label class="mb-0">Meta Description</label>
                                                <textarea class="form-control mb-2" rows="4" cols="80" placeholder="Enter meta description" required name="meta_description"><?= $data['meta_description']; ?></textarea>
                                            </div>
    
                                            <div class="col-md-12">
                                                <label class="mb-0">Meta Keywords</label>
                                                <input type="text" required name="meta_keywords" value="<?= $data['meta_keywords']; ?>" placholder="Enter meta keywords" class="form-control mb-2">
                                            </div>
    
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary" name="update_product_btn">Update</button>
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
                        echo "Product not found for given id";
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