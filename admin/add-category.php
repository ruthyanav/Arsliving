<?php include("includes/header.php")?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add Category</h4>
                </div>
                <div class="card-body">
                           <form action="code.php" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="">Name</label>
                                    <input type="text" required name="name" placholder="Enter category name" class="form-control">
                                </div>
                                
                                <div class="col-md-12">
                                    <label for="">Slug</label>
                                    <input type="text" required name="slug" placholder="Enter slug" class="form-control">
                                </div>

                                <div class="col-md-12">
                                    <label for="">Description</label>
                                    <textarea class="form-control" rows="4" cols="80" placeholder="Enter description" name="description"></textarea>
                                </div>

                                <div class="col-md-12">
                                    <label for="">Upload Image</label>
                                    <input type="file" required name="image" class="form-control">
                                </div>

                                <div class="col-md-12">
                                    <label for="">Meta Title</label>
                                    <input type="text" required name="meta_title" placholder="Enter meta title" class="form-control">
                                </div>
                                
                                <div class="col-md-12">
                                    <label for="">Meta Description</label>
                                    <textarea class="form-control" rows="4" cols="80" placeholder="Enter meta keywords" name="meta_keywords"></textarea>
                                </div>

                                <div class="col-md-12">
                                    <label for="">Meta Keywords</label>
                                    <input type="text" required name="meta_description" placholder="Enter meta description" class="form-control">
                                </div>

                                <div class="col-md-6">
                                    <label for="">Status</label>
                                    <input type="checkbox" required name="status">
                                </div>

                                <div class="col-md-6">
                                    <label for="">Popular</label>
                                    <input type="checkbox" required name="popular">
                                </div>

                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary" name="add_category_btn">Save</button>
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