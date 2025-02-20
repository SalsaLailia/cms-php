<main>
    <div class="container-fluid px-4">

       <h1 class="text-center">Edit Portofolio</h1>
    <form action="?page=portofolio-update" method="POST" enctype="multipart/form-data">
       <div class="mb-3">
        <input type="hidden" name="id" value="<?= $portofolio['id'] ?>">
       <label for="nama" class="form-label">Judul</label>
       <input type="text" class="form-control" name="judul" value="<?= $portofolio['judul'] ?>">
       </div>
       <div class="mb-3">
       <label for="gambar" class="form-label">Gambar</label>
       <input type="file" class="form-control" name="gambar" value="<?= $portofolio['gambar'] ?>">
       </div>
       <div class="mb-3">
       <label for="deskripsi" class="form-label">deskripsi</label>
       <input type="text" class="form-control" name="deskripsi" value="<?= $portofolio['deskripsi'] ?>">
       </div>
       <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
    </form>
   </div>

</main>