<?php include "header.php"; ?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card card-body">
                    <form action="action.php" method="post">
                        <div class="row">
                            <label for="" class="col-md-4">Your Number</label>
                            <div class="col-md-8">
                                <?php foreach ($randomNumbers as $randomNumber) { ?>
                                    <label for=""><input type="checkbox" name="number[]" value="<?php echo $randomNumber ?>"> <?php echo $randomNumber ?></label>
                                <?php } ?>

                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Result</label>
                            <div class="col-md-8">
                                <input type="text" value="<?php echo isset($result)? $result : '' ?>" class="form-control" />
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4"></label>
                            <div class="col-md-8">
                                <input type="submit" value="Get Result" name="random_btn" class="btn btn-success" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include "footer.php"; ?>
