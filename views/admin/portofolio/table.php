<main>
<div class="container-fluid px-4">
    <h3>Table Portofolio</h3>
    <a href="?page=portofolio-create" class="btn btn-primary">Tambah</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Gambar</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $no = 1;
    while($data = mysqli_fetch_assoc($result)){
    ?>
    <tr>
      <th scope="row"><?= $no?></th>
      <td><?= $data['judul']?></td>
      <td><img src="public/images/<?= $data['gambar']?>" alt="" style="width: 100px;"></td>
      <td>
        <div class="d-flex gap-2">
        <a href="?page=portofolio-edit&id=<?= $data['id']?>" class="btn btn-primary">Edit</a>
        <!-- <a href="" class="btn btn-danger">Hapus</a> -->
        <form action="?page=portofolio-destroy" method="post">
          <input type="hidden" value="<?= $data['id'] ?>" name="id">
          <button type="submit" name="submit" class="btn btn-danger">Hapus</button>
        </form>
        </div>
    </td>
    </tr>
    <?php
        $no++;
        }
    ?>
  </tbody>
</table>
    </div>
</main>