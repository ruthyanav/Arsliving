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
                    $category = getByID("category", $id);

                    if(mysqli_num_rows($category) > 0)
                    {
                        $data = mysqli_fetch_array($category);
                        ?>
                            <div class="card">
                                <div class="card-header">
                                    <h4>Edit Category</h4>
                                    <a href="category.php" class="btn btn-primary float-end">Back</a>
                                </div>
                                <div class="card-body">
                                        <form action="code.php" method="POST" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="hidden" name="category_id" value="<?= $data['id'] ?>">
                                                    <label for="">Name</label>
                                                    <input type="text" name="name" value="<?= $data['name'] ?>" placholder="Enter category name" class="form-control">
                                                </div>
                                                
                                                <div class="col-md-6">
                                                    <label for="">Slug</label>
                                                    <input type="text" name="slug" value="<?= $data['slug'] ?>" placholder="Enter slug" class="form-control">
                                                </div>

                                                <div class="col-md-12">
                                                    <label for="">Description</label>
                                                    <textarea class="form-control" rows="4" cols="80" placeholder="Enter description" name="description"> <?= $data['description'] ?> </textarea>
                                                </div>

                                                <div class="col-md-12">
                                                    <label for="">Upload Image</label>
                                                    <input type="file" name="image" class="form-control">
                                                    <label for="">Current Image</label>
                                                    <input type="hidden" name="old_image" value="<?= $data['image'] ?>">
                                                    <img src="uploads/<?= $data['image'] ?>" height="50px" width="50px" alt="Category Image">
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="">Meta Title</label>
                                                    <input type="text" name="meta_title" value="<?= $data['meta_title'] ?>" placholder="Enter meta title" class="form-control">
                                                </div>
                                                
                                                <div class="col-md-12">
                                                    <label for="">Meta Description</label>
                                                    <textarea class="form-control" rows="4" cols="80" placeholder="Enter meta description" name="meta_description"> <?= $data['meta_description'] ?> </textarea>
                                                </div>

                                                <div class="col-md-12">
                                                        <label for="">Meta Keywords</label>
                                                        <textarea class="form-control" rows="4" cols="80" placeholder="Enter meta keywords" name="meta_keywords"><?= $data['meta_keywords'] ?></textarea>
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="">Hidden</label>
                                                    <input type="checkbox" <?= $data['hidden'] ?"checked":"" ?> name="hidden">
                                                </div>

                                                <div class="col-md-6">
                                                    <label for="">Visible</label>
                                                    <input type="checkbox" <?= $data['visible'] ?"checked":"" ?> name="visible">
                                                </div>

                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-primary" name="update_category_btn">Update</button>
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
                        echo "Category not found";
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