<?php include 'header.php'; ?>

 <section class="py-5">
     <div class="container">
         <div class="row">
             <?php foreach ($categoryProducts as $categoryProduct) { ?>
             <div class="col-md-3">
                <div class="card">
                    <img src="assets/img/<?php echo $categoryProduct['image']; ?>" alt="" class="card-img-top mb-4" style="height: 300px;">
                    <div class="card-body">
                        <h5><?php echo $categoryProduct['name']; ?></h5>
                        <p><?php echo $categoryProduct['price']; ?></p>
                        <hr/>
                        <a href="" class="btn btn-success">Detail</a>
                    </div>
                </div>
             </div>
             <?php }  ?>
         </div>
     </div>
 </section>

<?php include 'footer.php'; ?>
