<?php include 'header.php'; ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card card-body">
                    <h4 class="text-center text-success my-3"><?php echo isset($message) ? $message : ''; ?></h4>
                    <form action="action.php" method="POST" enctype="multipart/form-data">
                        <div class="row mb-3">
                            <label class="col-md-3">Product Name</label>
                            <div class="col-md-9">
                                <input type="text" required class="form-control" name="name"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3">Product Price</label>
                            <div class="col-md-9">
                                <input type="number" required class="form-control" name="price"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3">Stock Amount</label>
                            <div class="col-md-9">
                                <input type="number" required class="form-control" name="stock"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3">Product Description</label>
                            <div class="col-md-9">
                                <textarea required class="form-control" name="description"></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3">Product Image</label>
                            <div class="col-md-9">
                                <input type="file" required accept="image/*" class="form-control" name="image"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-success" name="submit_btn" value="Create New Product"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
