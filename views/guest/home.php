<section class="text-bg-primary p-5">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2">
                <div class="col-6 col-sm-12 p-5">
                  <h1>Halo, saya Salsalailia</h1>
                  <p class="fs-5">Saya berusia 18 tahun dan saat ini sedang bersekolah di SMK 2 Yogyakarta. Ayo mengenal saya lebih jauh, bisa klik disini yaa!</p>
                  <button type="button" class="btn btn-outline-light">About Us</button>
                </div>
                <div class="col-6 col-sm-12">
                  <img class="img-fluid" src="public/images/foto.web.png" alt="">
                </div>
            </div>
            <!-- grid sistem -->
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row text-center mt-3">
          <div class="col">
            <h1 class="display-1">Portofolio</h1>
            <p class="fs-5 border-bottom border-2 border-primary">Portofolio yang sudah pernah saya buat selama saya belajar di sekolah</p>
          </div>
        </div>
        <!-- <div class="row row-cols-1 row-cols-md-2 mt-5"> -->
          <!-- <div class="col-6 col-sm-12">
            <img class="img-fluid" src="public/images/apk porto.png" alt="">
          </div> -->
          <!-- <div class="col-sm-12"> -->
          <div class="row row-cols-1 row-cols-md-3 mt-5">
            <?php
            while($portofolio = mysqli_fetch_assoc($result)){
            ?>
            <!-- <div class="row mb-5">
              <h3><i class="fs-2 bi bi-badge-3d"></i> <?= $portofolio['judul']?></h3>
              <p><?= $portofolio['deskripsi']?></p>
            </div> -->

            
        <div class="col">
          <img src="public/images/<?= $portofolio['gambar']?>" alt class="img-fluid">
          <p class="mt-3">11 Febuari 2025</p>
          <h3 class="mt-4"><?= $portofolio['judul']?></h3>
        </div>
            <?php }?>
            </div>
          </div>
        <!-- </div> -->
      </div>