<?= $this->extend('layout') ?>
<?= $this->section('main') ?>

    <div class="row">

        <div class="col-lg-3 ">

            <br>
            <br>
            <h1 class="my-4">Mas Vendidos</h1>
            <div class="list-group">
                <a href="<?= base_url("product/1"); ?>" class="list-group-item"> <img class="d-block img-fluid" src="<?= base_url("images/razer.jpg"); ?>" alt="First slide"> </a>
                <a href="<?= base_url("product/6"); ?>" class="list-group-item"> <img class="d-block img-fluid" src="<?= base_url("images/monitor.jpeg"); ?>" alt="First slide"> </a>
                <a href="<?= base_url("product/4"); ?>" class="list-group-item"> <img class="d-block img-fluid" src="<?= base_url("images/altavoces.jpg"); ?>" alt="First slide"> </a>
            </div>

        </div>
        <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div class="card mt-4">
          <img class="card-img-top img-fluid" src="<?= base_url($product->image); ?>" alt="">
          <div class="card-body">
            <h3 class="card-title"><?= $product->name; ?></h3>
            <h4>€<?= $product->price; ?></h4>
            <p class="card-text"><?= $product->description; ?></p>
            <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
            4.0 stars
          </div>
        </div>
        <!-- /.card -->

        <div class="card card-outline-secondary my-4">
          <div class="card-header">
            Product Reviews
          </div>
            <?php
                foreach($reviews as $review):
            ?>
            <div class="card-body">
                <p> <?= $review->comment; ?> </p>
                <hr>
            </div>
            <?php
              endforeach
            ?>       
        </div>
        <!-- /.card -->

      </div>
      <!-- /.col-lg-9 -->

    </div>

<?= $this->endSection() ?>