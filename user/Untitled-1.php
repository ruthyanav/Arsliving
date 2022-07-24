<section class="cart-item">
    <div class="row">
        <?php $items = getCartItems(); 
                foreach ($items as $citem) {
                ?>
                    <div class="column">
                        <img src="../admin/uploads/<?= $citem['image']; ?>" alt="Image">
                    </div>

                    <div class="column">
                        <h5><?= $citem['name']; ?></h5>
                    </div>

                    <div class="column">
                        <div class="input-group mb-3" style="width:130px">
                            <button class="input-group-text decrement-btn">-</button>
                            <input type="text" class="form-control text-center input-qty bg-white" value="<?= $citem['prod_qty']; ?>" disabled>
                            <button class="input-group-text increment-btn">+</button>
                        </div>
                    </div>

                    <div class="column">
                        <button class="btn btn-danger">Remove</button>
                    </div>

                <?php
                }
                ?>
    </div>



</section>
