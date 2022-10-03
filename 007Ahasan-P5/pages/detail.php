<?php include 'header.php'; ?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-body">
                    <img src="assets/img/<?php echo $singleProduct['image']; ?>" alt=""/>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-body">
                    <h1><?php echo $singleProduct['name']; ?></h1>
                    <h4>Price: <?php echo $singleProduct['price']; ?></h4>
                    <hr/>
                    <h5>Category Name: <?php echo $singleProduct['category_name']; ?></h5>
                    <h5>rand Name : </h5>
                    <div>
                        <h4>Description</h4>
                        <p><?php echo $singleProduct['description']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php'; ?>
