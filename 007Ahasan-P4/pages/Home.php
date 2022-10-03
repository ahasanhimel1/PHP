<?php include "header.php"; ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product) { ?>
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="assets/img/<?php echo $product['image']; ?>" alt="" class="card-img-top" style="height: 300px;">
                    <div class="card-body">
                        <h4><?php echo $product['name']; ?></h4>
                        <p><?php echo $product['price']; ?></p>
                    <hr/>
                        <a href="" class="btn btn-success">Detail</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>



<?php include "footer.php" ?>
