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

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="<?= base_url("images/mac.jpg"); ?>" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="<?= base_url("images/pc.jpg"); ?>" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="<?= base_url("images/microphone.jpg"); ?>" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="row">
          <?php
              foreach($products as $product):
          ?>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="<?= base_url(["product",$product->id]); ?>"><img class="card-img-top" src="<?= base_url($product->image); ?>" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="<?= base_url(["product",$product->id]); ?>"> <?= $product->name; ?> </a>
                </h4>
                <h5>€<?= $product->price; ?></h5>
                <p class="card-text"> <?= $product->description; ?> </p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9733;</small>
              </div>
            </div>
          </div>
          <?php
              endforeach
          ?>
        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
	<!-- /.row -->
	
	<?= $this->endSection() ?>